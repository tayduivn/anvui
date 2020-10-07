<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    //
    public function pageSofwareIntro() {
        $header = [
            'meta_title' => "Phần mềm nhà xe An Vui",
        ];

        $this->setHeader($header);

        return view('pages.software');
    }

    public function hddt(Request $request,$u = null) {
        // $id = $request->all();
        $data = [];

        if($u) {
            $data['id'] = $u;
        }

        return view('pages.le-cong-bo-hop-dong-dien-tu')->with([
            'data' => $data,
        ]);;
    }
}
