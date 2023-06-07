<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class GioithieuController extends Controller
{
    public function gioithieu_page()
    {
        return view('admin_gioithieu');
    }
}
