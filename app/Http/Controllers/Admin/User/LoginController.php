<?php

namespace App\Http\Controllers\Admin\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use MongoDB\Driver\Session;

class LoginController extends Controller
{
    public function index(){
        return view('admin.user.login', [
            'title' => 'Đăng nhập hệ thống'
        ]);
    }

    public function store(Request $request){

        $this->validate($request,[
           'email' => 'required|email',
            'password' => 'required'
        ]);

        if(Auth::attempt(['email'=>$request->input('email'),
            'password' =>$request->input('password')
            ], $request->input('remember'))){
            return redirect()-> route('admin');
        }
        \Illuminate\Support\Facades\Session::flash('error','Email or password SAI');
        return redirect()->back();
    }
}

