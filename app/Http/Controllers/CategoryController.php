<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function index()
    {
        return view('admin.all_category');
    }

    public function add_category()
    {
        return view('admin.add_category');
    }
    public function edit_category()
    {
        return view('admin.edit_category');
    }
}
