<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Hash;
trait LoginTrait {
    public function checkLogin() {
      if (session()->get("userid")) {
          return true;
      }
      else{
        return false;
      }
    }
}