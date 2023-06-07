<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminControlle extends Controller
{
   public function giohang_page()
   {
       return view('home_giohang');
   }
  
}
