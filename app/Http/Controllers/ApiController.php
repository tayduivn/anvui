<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Model\News as NewsModel;
use Illuminate\Support\Facades\Log;
use App\Services\UploadService;

class ApiController extends Controller
{
    private $data = [];
    
    public function getNews(Request $request) {
        header('X-XSS-Protection: 0');
        header('Access-Control-Allow-Origin: *');
        header('Access-Control-Allow-Methods: POST, GET');
        header('Access-Control-Max-Age: 1000');

        $newsModel = new NewsModel();
        $page = $request->p ?? 1;
        $limit = $request->limit ?? 5;
		$start = ($page - 1)*$limit;
        
        $listNews = $newsModel->getNewses(['status' => 1])->orderBy('created_at', 'DESC')->offset($start)->limit($limit)->get();
        $res = [];

        foreach ($listNews as $key => $value) {
            $seo = json_decode($value['seo'], true);

            $res[$key]['img'] = asset($value['img']);
			$res[$key]['title'] = $value['title'];
			$res[$key]['meta_description'] = !empty($seo['meta_desc']) ? $seo['meta_desc'] : $value['desc'];
			$res[$key]['time'] = $value['created_at']->format('d/m/Y');
			$res[$key]['link'] = route('news.detail.old', [ 'slug' => str_slug($value['title'], "-"), 'id' => $value['id'] ]);
        }

        return response()->json($res);
    }

	public function uploadFromNhaxe(Request $request) {
        header('X-XSS-Protection: 0');
        header('Access-Control-Allow-Origin: *');
        header('Access-Control-Allow-Methods: POST, GET');
        header('Access-Control-Max-Age: 1000');

        $uploadService = new UploadService();

        $dataUpload = [
            'ext' => $request->ext,
            'img' => $request->image,
            'name' => $request->name,
            'type' => $request->type,
        ];

        $img = $uploadService->uploadBase64($dataUpload);

        //shit from old ver
        if($img) {
            return response()->json(['img' => $img, 'status' => true]);
        } else {
            return response()->json(['status' => false]);
        }
    }


}
