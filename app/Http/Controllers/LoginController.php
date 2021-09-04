<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;

class LoginController extends Controller
{
    public function checkLogin(Request $request){

        $user_data = array(
            'email'    => $request->email,
            'password' => $request->password
        );

        if(Auth::attempt($user_data)){
            return redirect('/home');
        }else{
            return back()->with('error', 'Erro de login e/ou senha!');
        }
    }
}
