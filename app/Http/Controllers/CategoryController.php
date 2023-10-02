<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function form_category(){
        return view('admin.form_category');

    }
}
