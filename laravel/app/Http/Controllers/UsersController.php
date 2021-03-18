<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UsersController extends Controller
{
    public function register()
    {
        return view('register');
    }

    public function registpost()
    {
        $this->validate(request(),[
            'email'=> 'required | email',
            'password'=>'required'
        ]);

        $user= User::register(request([email,password]));
        auth()->login($user);
        return redirect()->to('/newuser');
    }
}
