<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Services\UploadService;

class MediaController extends Controller
{
    //

    public function upload(Request $request) {
        $uploadService = new UploadService();
        
        $data = [
            'name' => $request->media->getClientOriginalName(),
            'realPath' => $request->media->getRealPath()
        ];
        $link = $uploadService->uploadFromFile($data);

        $res = [
            'status' => true,
            'link' => env('APP_URL') . $link
        ];

        return response()->json($res);
        
    }
}
