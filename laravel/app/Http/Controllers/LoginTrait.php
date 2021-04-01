<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Hash;

trait LoginTrait
{
    public function checkLogin()
    {
        if (session()->get('userId')) {
            return true;
        } 
        else {
            return false;
        }
    }
}
