<?php

namespace App\Http\Controllers;

use App\Models\customer1;
use Illuminate\Http\Request;

class CustomerController extends Controller
{
    public function index()
    {
        $cus = customer1::paginate(5);
        return view('admin.all_customer',['customer'=>$cus]);
    }

    public function add_customer()
    {
        return view('admin.add_customer');
    }
    public function edit_customer()
    {
        return view('admin.edit_customer');
    }
    public function geteditcustomer($id)
    {
        $cus = customer1::find($id);
        return view('admin.edit_customer',['customer'=> $cus]);
    }
    public function deletecustomer($id)
    {
        $cus = customer1::find($id);
        $cus -> delete();
        return redirect('all-customer')->with('delete-success','Xóa thành công!!!');
    }
    public function posteditcustomer(Request $request)
    {
        $cus = customer1::find($request->id);
        $cus -> Name = $request->Name;
        $cus -> Username = $request->Username;
        $cus -> Password = $request->Pass;
        $cus -> Email = $request->Email;
        if($request-> file('Avatar') != null)
        {
            $file = $request-> file('Avatar');
            $filename = $file -> getClientOriginalName('Avatar');
            $file->move('backend/images/customer',$filename);
            $cus -> Avatar = $filename;
        }
        $cus -> Phone = $request ->Phone;
        $cus->save();
        return redirect('all-customer')->with('edit-success','Sửa thành công!!!');
    }
    public function postaddcustomer(Request $request)
    {

        $cus = new customer1();
        $cus -> Name = $request->Name;
        $cus -> Username = $request->Username;
        $cus -> Password = $request->Password;
        $cus -> Email = $request->Email;
        $file = $request-> file('Avatar');
        $filename = $file -> getClientOriginalName('Avatar');
        $file->move('backend/images/customer',$filename);
        $cus -> Avatar = $filename;
        $cus -> Phone = $request ->Phone;
        if($request->status)
        {
            $cus -> Status = 1;
        }
        else
        {
            $cus-> Status = 0;
        }
        $cus ->save();
        return redirect()->back()->with('success','Thêm vào thành công!');
    }
    public function changeStatus($id,$status)
    {
        $cus = customer1::find($id);
        $cus -> Status = $status;
        $cus -> save();
        return response()->json(['status' => 'success', 'trangthai' => $cus -> Status]);
    }
}
