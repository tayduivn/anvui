<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Support\Facades\View;
use Illuminate\Support\Facades\Config;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    public function setHeader($data) {
        
        $header['metaTitle'] = !empty($data['meta_title']) ? $data['meta_title']  : config('HEADER')['metaTitle'];
        $header['metaDesc'] = !empty($data['meta_desc']) ? $data['meta_desc']  : config('HEADER')['metaDesc'];
        $header['metaKeyword'] = !empty($data['meta_keyword']) ? $data['meta_keyword']  : config('HEADER')['metaKeyword'];
        $header['img'] = !empty($data['img']) ? $data['img']  : config('HEADER')['metaKeyword'];
        
        Config::set('HEADER', $header);
        View::share('HEADER', $header );
    }

    public function createSeoArrayFromRequest($request) {
        $seo = [
            'meta_title' => $request->meta_title,
            'meta_desc' => $request->meta_desc,
            'meta_keyword' => $request->meta_keyword,
            'raw' => array_filter($request->seo_raw),
            'tag' => $request->meta_tag,
        ];

        $tagAsArray = array_filter( explode(",", $request->meta_tag) );
        $tagAsString = ',' . implode(",", $tagAsArray) . ',';

        return [
            'seo' => $seo,
            'tagAsString' => $tagAsString, 
            'tagAsArray' => $tagAsArray, 
        ];
    }


    // public function setHeader($header)
    // {
    //     $webHeaderDTO = new WebHeaderDTO($header);

    //     Config::set('HEADER', $webHeaderDTO->toArray());
    //     View::share('HEADER', $webHeaderDTO->toArray());

    //     return $webHeaderDTO->toArray();
    // }


    public function createSeoData($request) {
        return [
            'meta_title' => $request->meta_title,
            'meta_desc' => $request->meta_desc,
            'meta_keyword' => $request->meta_keyword,
            'raw' => array_filter($request->seo_raw),
        ];
    }
}
