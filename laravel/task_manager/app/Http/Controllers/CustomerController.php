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
        $this->validate($request, [
            'name' => 'required',
            'dob' => 'required',
            'email' => 'required',
            'image' => 'required|image|mimes:jpeg,jpg,png'
        ]);

        $path = $request->file('image')->getRealPath();
        $image = file_get_contents($path);
        $base64 = \base64_encode($image);

        $customer = new Customer;
        $customer->name = request('name');
        $customer->dob = date('Y-m-d',strtotime(request('dob')));
        $customer->email = request('email');
        $customer->image = $base64;
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
        $this->validate($request, [
            'name' => 'required',
            'dob' => 'required',
            'email' => 'required',
            'image' => 'required|image|mimes:jpeg,jpg,png'
        ]);
        $path = $request->file('image')->getRealPath();
        $image = file_get_contents($path);
        $base64 = \base64_encode($image);

        $customer = Customer::findOrFail($id);
        $customer->name = request('name');
        $customer->dob = date('Y-m-d',strtotime(request('dob')));
        $customer->email = request('email');
        $customer->image = $base64;

        $customer->save();
        return redirect()->route('customers.index')->with('success', "Cập nhật thành công");
    }

    public function destroy($id)
    {
        $customer = Customer::findOrFail($id);
        $customer->delete();
        return redirect()->route('customers.index')->with('success', "Xóa khách hàng $customer->name thành công");
    }
}
