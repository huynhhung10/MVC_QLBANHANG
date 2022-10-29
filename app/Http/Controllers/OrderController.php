<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class OrderController extends Controller
{
    public function index()
    {
        return view('admin.all_order');
    }

    // public function show_order()
    // {
    //     return view('admin.view_order');
    // }
    public function add_order()
    {
        return view('admin.add_order');
    }
    public function edit_order()
    {
        return view('admin.edit_order');
    }
}
