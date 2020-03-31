<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Model\Recruit as RecruitModel;

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

        $header = [
            'meta_title' => 'Tin tức',
            'meta_keyword' => 'Tin tức',
            'meta_description' => 'Tin tức',
        ];

        // $this->setFilter($request->only(['title', 'pagination', 'id_view']));

        $data = $recruitModel->getRecruits()->paginate($this->filter['pagination']);
        
        foreach($data as $key => &$value) {
            $value = $recruitModel->createContentFormatter($value, 'recruit.detail' ,'d/m/Y');
        }
        
        // $this->setHeader($header);

        return view("recruit.index")->with(['data' => $data]);
    }


    public function detail(Request $request) {
        $data = [];
        $recruitModel = new RecruitModel();

        $filter = [
            'id' => $request->id,
        ];
        $data = $recruitModel->getRecruits($filter)->firstOrFail();
        
        $data = $recruitModel->createContentFormatter($data, 'recruit.detail' ,'d/m/Y');
        // $header = [
        //     'meta_title' => empty($data->meta_title) ? $data->title : $data->meta_title,
        //     'meta_keyword' => $data->meta_keyword,
        //     'meta_description' => empty($data->short) ? $data->short : $data->meta_description,
        // ];

        // $this->setHeader($header);

        return view("recruit.details")->with([
            'data' => $data,
        ]);
    }
}
