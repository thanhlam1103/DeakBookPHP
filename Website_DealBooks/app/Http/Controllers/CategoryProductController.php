<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CategoryProductController extends Controller
{
    public function add_category_product()
    {
            return view('admin.add_category_product');
    }
    public function view_category_product()
    {
        return view('home_admin');
       

    }
    public function all_category_product()
    {
            return view('admin.all_category_product');
    }
    
}
