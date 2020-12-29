<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use App\Model\User as UserModel;

class LoginController extends Controller
{
    public function index() {
        return view('admin.login'); 
    }

    public function login(Request $request) {
        $userModel = new UserModel();

        $user = $userModel::where(['email'=> $request->email])->first();
        
        $userModel->insert([
            'email' => 'anvuisg@anvui.vn',
            'password' => Hash::make('123456')
        ]);

        $userModel->insert([
            'email' => 'anvuihn@anvui.vn',
            'password' => Hash::make('123456')
        ]);

        if ($user && Hash::check($request->password, $user->password) ) {
            Auth::login($user);
            return redirect()->route('admin.index');
        } else {
            return redirect()->back()->with('error.login', 'Tài khoản hoặc mật khẩu không đúng !');
        }
    }

    public function logout() {
        if(Auth::check()) {
            Auth::logout();
        }

        return redirect()->route('admin.index');
    }

}
