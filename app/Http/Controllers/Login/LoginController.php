<?php

namespace App\Http\Controllers\Login;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function login(Request $request)
    {
        $dadosLogin = $request->all();

        if(Auth::attempt(['name' => $dadosLogin['user'], 'password' => $dadosLogin['password']])){
            return redirect()->route('admin.exibir');
        }
        else{
            return redirect()->route('home', 'false');
        }
    }
    public function logout()
    {
        Auth::logout();
        return redirect()->route('home');
    }
}
