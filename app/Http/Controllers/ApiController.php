<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ApiController extends Controller
{
    public function getNews(Request $request) {
        $page = $request->p ?? 1;

        dd($page);
    }
}
	// function apiNews(){
	// 	$p = $this->r->get_int('p');
	// 	$p = (empty($p))?1:$p;
	// 	$limit = 5;
	// 	$start = ($p-1)*$limit;

	// 	$this->data['pagenow'] = $p;
	// 	$this->data['pagenext'] = $p+1;

	// 	if($p > 1)
	// 		$this->data['pagepre'] = $p-1;

	// 	$newsM = $this->getModel('av_news');
	// 	$newsM->where('show_pm',1);
	// 	$newsM->orderBy('id','DESC');
	// 	$this->data['news'] = $newsM->get(null,array($start,$limit));


	// 	if( count($this->data['news']) < 5 ){
	// 		$this->data['pagenext'] = 0;
	// 	}

	// 	$results = array();
	// 	foreach ($this->data['news'] as $key => &$value) {
	// 		$results[$key]['img'] = 'https://anvui.vn/cdn/'.$value['img'];
	// 		$results[$key]['title'] = $value['title'];
	// 		$results[$key]['meta_description'] = $value['brief_content'];
	// 		$results[$key]['time'] = date("d/m/Y",$value['time']);
	// 		$results[$key]['link'] = 'http://anvui.vn/'.fixtitle($value['title']).'-'.$value['id'].'.html';
	// 	}

 	// 	header('Content-Type: application/json');
	// 	echo json_encode($results); 
	// 	die; 

	// } 
