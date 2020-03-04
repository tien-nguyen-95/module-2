<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CustomerController extends Controller
{
    //
    public function index()
    {
        return view('modules.customer.index');
    }

    /**
     * Hiển thị Form tạo khách hàng.
     */
    public function create()
    {
        echo "Hiển thị Form tạo khách hàng";
    }

    /**
     * Xử lý lưu dữ liệu tạo khách hàng thong qua phương thức POST từ form.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Hiển thị thông tin chi tiết khách hàng có mã định danh id.
     *
     * @param  int $id
     */
    public function show($id)
    {
        //
    }

    /**
     * Hiển thị Form chỉnh sửa thông tin khách hàng.
     *
     * @param  int $id
     */
    public function edit($id)
    {
        //
    }

    /**
     * xử lý lưu dữ liệu thông tin khách hàng được chỉnh sửa thông qua PATCH từ form.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  int $id
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Xóa thông tin dữ liệu khách hàng.
     *
     * @param  int $id
     */
    public function destroy($id)
    {
        //
    }
}
