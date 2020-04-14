<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Model\Recruit as RecruitModel;
use App\Services\UploadService;


class RecruitController extends Controller
{
    //
    private $filter = [];

    function __construct() {
        $this->filter['pagination'] = 10;
    }

    public function index(Request $request) {
        $data = [];

        $recruitModel = new RecruitModel();

        $data = $recruitModel->getRecruits()->paginate($this->filter['pagination']);
        
        foreach($data as $key => &$value) {
            $value = $recruitModel->createContentFormatter($value, 'recruit.detail' ,'d/m/Y');
        }

        return view("admin.recruit.index")->with(['data' => $data]);
    }


    public function ajaxUpdateStatus(Request $request) {
        $recruitModel = new RecruitModel();

		$id 	= $request->id;
		$field 	= $request->field;
		$value  = $request->value;

		if( !in_array($field, ['status', 'title']) ) {
			exit();
		}

		$status = $recruitModel->where('id', $id)->update([$field => $value]);

		$res['status'] = $status;

		if($status) {
			$res['msg'] = "";
		} else {
			$res['msg'] = "Có lỗi xảy ra vui lòng thử lại sau";
		}

		return response()->json($res);
    }


    public function create(Request $request) {
        $data = [];
        $recruitModel = new RecruitModel();

        if($request->id) {
            $data = $recruitModel->getRecruits(['id' => $request->id])->firstOrFail();
            $data = $recruitModel->createContentFormatter($data, 'recruit.detail' ,'d/m/Y');
        }

        return view('admin.recruit.create', ['data' => $data]); 
    }

    
    public function store(Request $request) {
        $recruitModel = new RecruitModel();
        $params = [
            'title' => $request->title,
            'content' => $request->content,
            'time_type' => $request->time_type,
            'place' => $request->place,
            'status' => $request->status == 1 ? 1 : 0,
            'author' => 1,
            'from' => strtotime($request->from) ?? "",
            'to' => strtotime($request->to) ?? "",
            'salary_from' => $request->salary_from ?? 0,
            'salary_to' => $request->salary_to ?? 0,
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
            if($recruitModel->insertRecruit($params)) {
                $request->session()->flash('GLOBAL_STATUS', 'SUCCESS');
                $request->session()->flash('GLOBAL_MSG', 'Đăng tin thành công !');
                return redirect()->back();
            } 
        } else {
            if($recruitModel->updateRecruit($request->id, $params)) {
                $request->session()->flash('GLOBAL_STATUS', 'SUCCESS');
                $request->session()->flash('GLOBAL_MSG', 'Cập nhật tin thành công !');
                return redirect()->back();
            }
        }

        $request->session()->flash('GLOBAL_STATUS', 'ERROR');
        $request->session()->flash('GLOBAL_MSG', 'Có lỗi xảy ra vui lòng thử  lại sau !');
        return redirect()->back();
    }


    public function remove(Request $request) {
        $recuitModel = new RecruitModel();
        
        $remove = $recuitModel->removeNews($request->id);

        if($remove){
            $request->session()->flash('GLOBAL_STATUS', 'SUCCESS');
            $request->session()->flash('GLOBAL_MSG', 'Xóa tin thành công !');
            return redirect()->back();
        } else {
            $request->session()->flash('GLOBAL_STATUS', 'ERROR');
            $request->session()->flash('GLOBAL_MSG', 'Có lỗi xảy ra! Vùi lòng thử lại sau.');
            return redirect()->back();
        }
    }
}