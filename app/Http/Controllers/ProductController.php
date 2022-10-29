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

    public function add_product(){
        return view('admin.add_product');
    }

    public function store(Request $request)
    {
        $attr = $request->toArray();
        Product::create($attr);

        $file = $request->hasFile('image');
        if($file){
            $newfile = $request->file('image');
            $path = $request->file('image')->storeAs(
                'product_images',
                $request->name.'.'.$newfile->getClientOriginalExtension(),
                'public'
            );
        }
        return back()->with([
            'type' => 'success',
            'message' => 'Product has been created',
        ]);
    }

    public function edit_product(Request $request)
    {
        $product = Product::find($request->id);
        return view('admin.edit_product', [
            'product' => $product,
        ]);
    }

    public function update(Request $request, Product $product)
    {
        $product = Product::find($request->id);
        $attr = $request->toArray();
        $product->update($attr);
        $file = $request->hasFile('image');
        if($file){
            $newfile = $request->file('image');
            $path = $request->file('image')->storeAs(
                'product_images',
                $request->name.'.'.$newfile->getClientOriginalExtension(),
                'public'
            );
        }

        return back();
    }

    public function destroy(Request $request)
    {
        $product = Product::find($request->id);
        $product->delete();

        return back()->with([
            'type' => 'success',
            'message' => 'product has been deleted',
        ]);
    }
}
