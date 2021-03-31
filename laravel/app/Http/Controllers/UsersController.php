<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\Hash;

class UsersController extends Controller
{
    public function register()
    {
        $failed= false;
        $request = request();
        $request->password = Hash::make($request->password);

        if ($request->isMethod('post')) {
            if($request->password||!$request->first_name ||!$request->last_name||!$request->email||!$request->street||!$request->zip||!$request->city||!$request->phone){
            $user =new \App\Models\Users;
            $user->password=$request->password;
            $user->first_name=$request->first_name; 
            $user->last_name=$request->last_name;
            $user->street=$request->street;
            $user->zip=$request->zip;
            $user->city=$request->city;
            $user->phone=$request->phone;
            $user->email=$request->email;
            $user->save();
            return redirect('/products');
            } else {
                $failed = true;
            }
            
        }
        return view('register', ['failed' => $failed]);
    }

    public function login()
    {
        $request=request();
        $user->email=$request->email;
        $user->password=$request->password;


    }


}
