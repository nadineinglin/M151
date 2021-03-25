<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UsersController extends Controller
{
    public function register()
    {
        $request = request();
        $user =new \App\Models\Users;


        $user->email=$request->email;
        $user->password=$request->password;
        $user->first_name=$request->name;

        $user->save();

       
    
        return view('register');

  
    }

    /*public function registpost()
    {
        $this->validate(request(),[
            'email'=> 'required | email',
            'password'=>'required'
        ]);

        $users= User::register(request([email,password]));
        auth()->login($user);
        return redirect()->to('/newuser');
    }
    */

    public function login(){}

    public function getlogin()
    {
        return view('login');
    }

public function allowuser()
    {
        return view('register');
    }
}
