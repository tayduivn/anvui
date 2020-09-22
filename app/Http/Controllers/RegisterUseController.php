<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
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
            'created_at' => time(),
        ];

        $paramsCRM = [
            'presenter' => $params['user_name'],
            'companyName' => $params['company_name'],
            'phoneNumber' => $params['phone'],
            'address' => $params['address']
        ];
	
        $curl = curl_init('https://crm-anvui.el.r.appspot.com/customer/create');
        curl_setopt($curl, CURLOPT_POST,1);
        curl_setopt($curl, CURLOPT_HTTPHEADER, array(
                'Content-type: application/json'
        ));
		curl_setopt($curl, CURLOPT_POSTFIELDS, json_encode($paramsCRM));
		curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);
		$res = curl_exec($curl);
		curl_close($curl);
        $body = json_decode($res, true);
        
        //Log::info( json_encode($body) );

	if( $body['code'] >= 200 && $body['code'] < 300 ) {
            $request->session()->flash('ACTION_STATUS', 'SUCCESS');
            $request->session()->flash('ACTION_MSG', 'Đăng ký thành công ! Chúng tôi sẽ liên hệ với bạn trong thời gian sớm nhất.');
	} else {
		Log::error('call api fail !');
        // if($body['results']['error']['message'] == 'COMPANY_PHONE_NUMBER_EXISTED') {
        //     $request->session()->flash('ACTION_STATUS', 'WARNING');
        //     $request->session()->flash('ACTION_MSG', 'Số điện thoại này đã được đăng ký ! Vui lòng thử lại.');
        // } elseif ($body['results']['error']['message'] == 'COMPANY_NAME_EXISTED') {
        //     $request->session()->flash('ACTION_STATUS', 'WARNING');
        //     $request->session()->flash('ACTION_MSG', 'Tên nhà xe này đã được đăng ký ! Vui lòng thử lại.');
        // } else {
        //     $request->session()->flash('ACTION_STATUS', 'ERROR');
        //     $request->session()->flash('ACTION_MSG', 'Có lỗi xảy ra ! Xin lỗi bạn vì sự bất tiện.');
        // }
    }

        $request->session()->flash('ACTION_STATUS', 'SUCCESS');
        $request->session()->flash('ACTION_MSG', 'Đăng ký thành công ! Chúng tôi sẽ liên hệ với bạn trong thời gian sớm nhất.');

        try {
            $registerUseModel->insert($params);

            // $request->session()->flash('ACTION_STATUS', 'SUCCESS');
            // $request->session()->flash('ACTION_MSG', 'Đăng ký thành công ! Chúng tôi sẽ liên hệ với bạn trong thời gian sớm nhất.');
        } catch (\Exception $e) {

            // $request->session()->flash('ACTION_STATUS', 'ERROR');
            // $request->session()->flash('ACTION_MSG', 'Có lỗi xảy ra ! Xin lỗi bạn vì sự bất tiện.');
        }

        return redirect()->back();

    }
}
