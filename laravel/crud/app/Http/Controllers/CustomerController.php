<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Customer;
class CustomerController extends Controller
{

    public function index()
    {
        $customers = Customer::all();
        return view('customers.index', compact('customers'));
    }


    public function create()
    {
        return view('customers.create');
    }


    public function store(Request $request)
    {
        $customer = new Customer;
        $customer->name = request('name');
        $customer->email = request('email');
        $customer->dob = request('dob');
        $customer->save();
        return redirect()->route('customers.index')->with('success', "Tạo thành công");
    }

    public function show($id)
    {
        $customer = Customer::findOrFail($id);
        return view('customers.show', compact('customer'));
    }

    public function edit($id)
    {
        $customer = Customer::findOrFail($id);
        return view('customers.edit', compact('customer'));
    }

    public function update(Request $request, $id)
    {
        $customer = Customer::findOrFail($id);
        $customer->name = request('name');
        $customer->email = request('email');
        $customer->dob = request('dob');
        $customer->save();
        return redirect()->route('customers.index')->with('success', "Cập nhật thành công");
    }

    public function destroy($id)
    {
        $customer = Customer::findOrFail($id);
        $customer->delete();
        //xoa xong quay ve trang danh sach khach hang
        return redirect()->route('customers.index')->with('success', "Xóa khách hàng $customer->name thành công");
    }
}
