<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Model\News as NewsModel;
use Illuminate\Http\Request;
use App\Services\UploadService;

class NewsController extends Controller
{
    private $filter = [];

    function __construct() {

        $this->filter['pagination'] = 10;
    }

    public function index() {
        $newsModel = new NewsModel();
        
        $data = $newsModel->getNewses()->orderBy('created_at', 'DESC')->paginate($this->filter['pagination']);

        foreach($data as $key => &$value) {
            $value = $newsModel->createContentFormatter($value, 'news.detail' ,'d/m/Y');
        }
        return view('admin.news.index', ['data' => $data]); 
    }


    public function create(Request $request) {
        $data = [];
        $newsModel = new NewsModel();

        if($request->id) {
            $data = $newsModel->getNewses(['id' => $request->id])->firstOrFail();
            $data = $newsModel->createContentFormatter($data, 'news.detail' ,'d/m/Y');
        }

        return view('admin.news.create', ['data' => $data]); 
    }

    public function ajaxUpdateStatus(Request $request) {
        $newsModel = new NewsModel();

		$id 	= $request->id;
		$field 	= $request->field;
		$value  = $request->value;

		if( !in_array($field, ['status', 'title']) ) {
			exit();
		}

		$status = $newsModel->where('id', $id)->update([$field => $value]);

		$res['status'] = $status;

		if($status) {
			$res['msg'] = "";
		} else {
			$res['msg'] = "Có lỗi xảy ra vui lòng thử lại sau";
		}

		return response()->json($res);
    }


    public function store(Request $request) {
        
        $newsModel = new NewsModel();
        $params = [
            'title' => $request->title,
            'content' => $request->content,
            'status' => $request->status == 1 ? 1 : 0,
            'author' => 1,
            'meta_title' => $request->meta_title, 
            'meta_desc' => $request->meta_desc, 
            'meta_keyword' => $request->meta_keyword,
            'lang' => 'vi',
        ];
        if($request->img) {
            $uploadService = new UploadService();
            $data = [
                'name' => str_slug($params['title'], "-"),
                'realPath' => $request->img->getRealPath()
            ];
            $img = $uploadService->uploadFromFile($data);
            $params['img'] = $img;
        }

        if(!$request->id) {
            if($newsModel->insertNews($params)) {
                $request->session()->flash('GLOBAL_STATUS', 'SUCCESS');
                $request->session()->flash('GLOBAL_MSG', 'Đăng bài viết thành công !');
                return redirect()->back();
            } 
        } else {
            if($newsModel->updateNews($request->id, $params)) {
                $request->session()->flash('GLOBAL_STATUS', 'SUCCESS');
                $request->session()->flash('GLOBAL_MSG', 'Cập nhật bài viết thành công !');
                return redirect()->back();
            }
        }

        $request->session()->flash('GLOBAL_STATUS', 'ERROR');
        $request->session()->flash('GLOBAL_MSG', 'Có lỗi xảy ra vui lòng thử  lại sau !');
        return redirect()->back();
    }

    public function remove(Request $request) {
        $newsModel = new NewsModel();
        
        $remove = $newsModel->removeNews($request->id);

        if($remove){
            $request->session()->flash('GLOBAL_STATUS', 'SUCCESS');
            $request->session()->flash('GLOBAL_MSG', 'Xóa bài viết thành công !');
            return redirect()->back();
        } else {
            $request->session()->flash('GLOBAL_STATUS', 'ERROR');
            $request->session()->flash('GLOBAL_MSG', 'Có lỗi xảy ra! Vùi lòng thử lại sau.');
            return redirect()->back();
        }
    }
}
