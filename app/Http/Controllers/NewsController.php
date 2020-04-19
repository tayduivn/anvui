<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Model\News as NewsModel;
use App\Services\UploadService;

class NewsController extends Controller
{
    private $filter = [];

    function __construct() {

        $this->filter['pagination'] = 10;
    }


    public function index(Request $request) {
        $data = [];

        $newsModel = new NewsModel();

        $header = [
            'meta_title' => 'Tin tức',
        ];

        
        // $this->setFilter($request->only(['title', 'pagination', 'id_view']));

        $data = $newsModel->getNewses(['status' => 1])->orderBy('created_at', 'DESC')->paginate($this->filter['pagination']);
        
        foreach($data as $key => &$value) {
            $value = $newsModel->createContentFormatter($value, 'news.detail' ,'d/m/Y');
        }

        $this->setHeader($header);

        return view("news.index")->with(['data' => $data]);
    }


    public function detail(Request $request)
    {

        $data = [];
        $newsModel = new NewsModel();

        $filter = [
            'id' => $request->id,
        ];
        $data = $newsModel->getNewses($filter)->firstOrFail();
        
        $data = $newsModel->createContentFormatter($data, 'news.detail' ,'d/m/Y');
        $newsRelated = $newsModel->getNewses(['status' => 1])->limit(10)->get();

        foreach($newsRelated as $key => &$value) {
            $value = $newsModel->createContentFormatter($value, 'news.detail' ,'d/m/Y');
        }

        $header = [
            'meta_title' => empty($data['seo']['meta_title']) ? $data['title'] : $data['seo']['meta_title'],
            'meta_keyword' => $data['seo']['meta_keyword'],
            'meta_description' => $data['seo']['meta_desc'],
        ];
        
        $this->setHeader($header);

        return view("news.details")->with([
            'data' => $data,
            'newsRelated' => $newsRelated
        ]);
    } 

    public function get(Request $request) {
        $data = [];

        $newsModel = new NewsModel();
        
        $offset = $request->limit * ($request->page - 1);
        
        if($request->id) {
            $data = $newsModel->getNewses(['id' => $request->id])->first();
            $data = $newsModel->createContentFormatter($data, 'news.detail' ,'d/m/Y');
        } else {
            $data = $newsModel->getNewses()->offset($offset)->paginate($request->limit);
            foreach($data as $key => &$value) {
                $value = $newsModel->createContentFormatter($value, 'news.detail' ,'d/m/Y');
            }
        }

        return response()->json($data);
    }

    public function remove(Request $request) {
        $newsModel = new NewsModel();
        
        $remove = $newsModel->removeNews($request->id);

        $res = [
            'status' => $remove
        ];

        return response()->json($res);
    }


    public function store(Request $request) {
        $newsModel = new NewsModel();
        $params = $request->all();
        
        $uploadService = new UploadService();

        if($request->image) {
            list($ext, $params['image']) = explode(';', $params['image']);
            list(, $params['image'])      = explode(',', $params['image']);
            $ext = explode('/', $ext)[1];

            $dataUpload = [
                'ext' => $ext,
                'img' => $request->image,
                'name' => str_slug($params['title'], "-") . time(),
            ];

            $img = $uploadService->uploadBase64($dataUpload);
            $params['img'] = $img;
        }
        
        $res = [
            'status' => false,
        ];

        
        if(!$request->id) {
            if($newsModel->insertNews($params)) {
                $res = [
                    'status' => true,
                ];
            } 
        } else {
            if($newsModel->updateNews($request->id, $params)) {
                $res = [
                    'status' => true,
                ];
            }
        }
        
        return response()->json($res);
    }
}

