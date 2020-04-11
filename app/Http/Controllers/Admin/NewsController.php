<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Model\News as NewsModel;
use Illuminate\Http\Request;

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


    public function create() {
        $data = [];

        return view('admin.news.create', ['data' => $data]); 
    }

    public function store() {
        $data = [];   
    }
}
