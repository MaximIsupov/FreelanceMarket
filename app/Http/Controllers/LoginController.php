<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LoginController extends Controller
{
    public function index(){
        $data['title'] = "Вход";
        $data['btnText'] = 'Войти';
        return view('login.login', $data);
    }
}
