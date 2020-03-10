<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Model\News as NewsModel;

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
            'meta_keyword' => 'Tin tức',
            'meta_description' => 'Tin tức',
        ];

        // $this->setFilter($request->only(['title', 'pagination', 'id_view']));

        $data = $newsModel->getNewses()->orderBy('created_at', 'DESC')->paginate($this->filter['pagination']);
        
        foreach($data as $key => &$value) {
            $value = $newsModel->createContentFormatter($value, 'news.detail' ,'d/m/Y');
        }
        
        // $this->setHeader($header);

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
        $newsRelated = $newsModel->getNewses()->limit(10)->get();

        foreach($newsRelated as $key => &$value) {
            $value = $newsModel->createContentFormatter($value, 'news.detail' ,'d/m/Y');
        }
        // $header = [
        //     'meta_title' => empty($data->meta_title) ? $data->title : $data->meta_title,
        //     'meta_keyword' => $data->meta_keyword,
        //     'meta_description' => empty($data->short) ? $data->short : $data->meta_description,
        // ];

        // $this->setHeader($header);

        return view("news.details")->with([
            'data' => $data,
            'newsRelated' => $newsRelated
        ]);
    }

    // Define data for query.
    // NOTICE: JUST USE FOR MAIN OBJECT (NEWS)
    // public function setFilter($filter = []) {
    //     $title_filter = [];
    //     if (isset($filter['title'])) {
    //         $title = $filter['title'];
    //         $title_filter = [$this->lang . '_news.title', 'LIKE', "%{$title}%"];
    //     }

    //     $id_filter = [];

    //     if (isset($filter['id_view'])) {
    //         $id_filter = [$this->lang . '_news.id', $filter['id_view']];
    //     }

    //     $status_filter = [];
    //     if (isset($filter['status'])) {
    //         $status_filter = [$this->lang . '_news.status', $filter['status']];
    //     }

    //     $this->filter['where'] = [
    //         $status_filter,
    //         $title_filter,
    //         $id_filter,
    //     ];


    //     foreach ($this->filter['where'] as $key => $value) {
    //         if (count($value) == 0) {
    //             unset($this->filter['where'][$key]);
    //         }
    //     }


    //     $this->filter['set']['orderBy'] = ['created_at', 'DESC'];

    //     if (isset($filter['pagination'])) {
    //         $this->filter['pagination'] = $filter['pagination'];
    //     }
    // }

}

