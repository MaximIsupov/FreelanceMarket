<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Validation\Rules\Password;
use Illuminate\Validation\Rule;

use Illuminate\Support\Facades\Hash;

use App\Models\User;

class RegisterController extends Controller
{
    public function index()
    {
        $data['title'] = "Регистрация";
        $data['btnText'] = 'Зарегистрироваться';
        return view('register.register', $data);
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'email'     => ['required', 'email', 'max:50', Rule::unique('users', 'email'), 'string'],
            'name'     => ['required', 'max:50', 'string'],
            'password' => [
                'required',
                'confirmed',
                Password::min(7)         
                    ->letters()           
                    ->numbers()           
                    ->mixedCase()           
                    ->uncompromised() 
            ],
            'password_confirmation' => ['required', 'same:password'],
            'agreement'=> ['accepted'],
        ]);

        User::create([
            'name' => $validated['name'],
            'email' => $validated['email'],
            'password' => Hash::make($validated['password']),
        ]);

        return redirect()->route('login');
    }
}
