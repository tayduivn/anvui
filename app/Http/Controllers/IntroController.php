<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class IntroController extends Controller
{
    public function index() {
        $header = [
            'meta_title' => "Về chúng tôi",
        ];

        $this->setHeader($header);

        return view('intro.index');
    }
}
