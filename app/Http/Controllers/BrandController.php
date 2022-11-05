<?php

namespace App\Http\Controllers;

use Session;
use App\Models\Brand;
use Illuminate\Http\Request;
use function Ramsey\Uuid\Lazy\equals;

class BrandController extends Controller
{
    public function index()
    {
        $brand = Brand::paginate(5);
        return view('admin.all_brand', ['brand' => $brand]);
    }

    public function add_brand()
    {
        return view('admin.add_brand');
    }
    public function geteditbrand($id)
    {
        $brand = Brand::find($id);
        return view('admin.edit_brand', ['brand' => $brand]);
    }
    public function deletebrand(Request $request)
    {
        $brand = Brand::find($request->id);
        $brand->delete();

        return redirect('all-brand')->with('delete-success', 'Xóa thành công!!!');
    }
    public function  posteditbrand(Request $request)
    {
        $brand = Brand::find($request->id);
        $brand->Brand_Name = $request->brandname;
        if ($request->file('logo') != null) {
            $file = $request->file('logo');
            $filename = $file->getClientOriginalName('logo');
            $file->move('backend/images', $filename);
            $brand->Brand_Logo = $filename;
        }
        $brand->Brand_Desc = $request->brand_desc;
        if ($request->status) {
            $brand->Status = 1;
        } else {
            $brand->Status = 0;
        }
        $brand->save();
        return redirect('all-brand')->with('edit-success', 'Sửa thành công!!!');
    }
    public function postaddbrand(Request $request)
    {

        $brand = new Brand();
        $brand->Brand_Name = $request->brandname;
        $file = $request->file('logo');
        $filename = $file->getClientOriginalName('logo');
        $file->move('backend/images/brand', $filename);
        $brand->Brand_Logo = $filename;
        $brand->Brand_Desc = $request->brand_desc;
        if ($request->status) {
            $brand->Status = 1;
        } else {
            $brand->Status = 0;
        }
        $brand->save();
        return redirect()->back()->with('success', 'Thêm vào thành công!');
    }
    public function edit_brand()
    {
        return view('admin.edit_brand');
    }

    public function changeStatus($id, $status)
    {
        $brand = Brand::find($id);
        $brand->Status = $status;
        $brand->save();
        return response()->json(['status' => 'success', 'trangthai' => $brand->Status]);
    }
}
