<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PersonalController extends Controller
{
    public function index(Request $request)
    {
        $user = Auth::user();
        $data['userName'] = $user->name;
        $data['pageTitle'] = 'Добро пожаловать, ' . $user->name;
        return view('personal.index', $data);
    }
}
