<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DangkyController extends Controller
{
    public function register_page()
    {
        return view('admin_register');
    }
}
