<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Model\RecruitForm as RecruitFormModel;
use App\Model\RegisterUse as RegisterUseModel;


class DashBoardController extends Controller
{
    public function index() {
        $recruitFormModel = new RecruitFormModel();
        $registerUsemModel = new RegisterUseModel();
        $data['forms'] = $recruitFormModel->getRecruitsForm()->get();

        $data['companies'] = $registerUsemModel->orderBy('id', 'desc')->get();

        return view('admin.dashboard.index', ['data' => $data]); 
    }
}
