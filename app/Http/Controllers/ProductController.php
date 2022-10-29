<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Http\Resources\ProductResource;

class ProductController extends Controller
{
    public function index(){
        $products = ProductResource::collection(Product::latest()->paginate(10));
        return view('admin.all_product', [
            'products' => $products,
        ]);
    }

    public function add_product(Request $request){
        return view('admin.add_product');
    }
    public function edit_product(Request $request, Product $product){
        return view('admin.add_product');
    }
}
