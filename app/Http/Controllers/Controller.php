<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

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
