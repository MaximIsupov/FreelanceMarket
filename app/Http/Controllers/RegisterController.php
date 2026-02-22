<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RegisterController extends Controller
{
    public function index(){
        $data['title'] = "Регистрация";
        $data['btnText'] = 'Зарегистрироваться';
        return view('register.register', $data);
    }
}
