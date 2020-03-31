<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Model\News as NewsModel;

class ApiController extends Controller
{
    public function getNews(Request $request) {
        $newsModel = new NewsModel();
        $page = $request->p ?? 1;
        $limit = $request->limit ?? 5;
		$start = ($page - 1)*$limit;
        
        $listNews = $newsModel->getNewses()->orderBy('created_at', 'DESC')->offset($start)->limit($limit)->get();

        $res = [];

        foreach ($listNews as $key => $value) {
            $res[$key]['img'] = asset($value['img']);
			$res[$key]['title'] = $value['title'];
			$res[$key]['meta_description'] = $value['desc'];
			$res[$key]['time'] = date('d/m/Y', $value['created_at']);
			$res[$key]['link'] = route('news.detail.old', [ 'slug' => str_slug($value['title'], "-"), 'id' => $value['id'] ]);
        }

        return response()->json($res);
    }
}