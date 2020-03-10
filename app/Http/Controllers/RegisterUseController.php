<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Model\RegisterUse as RegisterUseModel;

class RegisterUseController extends Controller
{
    public function store(Request $request) {

        $registerUseModel = new RegisterUseModel();

        $params = [
            'user_name' => $request->user_name,
            'company_name' => $request->company_name,
            'phone' => $request->phone,
            'address' => $request->address,
        ];

        try {
            $registerUseModel->insert($params);

            $request->session()->flash('ACTION_STATUS', 'SUCCESS');
            $request->session()->flash('ACTION_MSG', 'Đăng ký thành công ! Chúng tôi sẽ liên hệ với bạn trong chốc lát.');
        } catch (\Exception $e) {

            $request->session()->flash('ACTION_STATUS', 'ERROR');
            $request->session()->flash('ACTION_MSG', 'Có lỗi xảy ra ! Xin lỗi bạn vì sự bất tiện.');
        }

        return redirect()->back();

    }
}
