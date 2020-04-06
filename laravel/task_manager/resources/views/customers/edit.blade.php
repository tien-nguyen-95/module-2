@extends('customers.layout')

@section('title', 'Sửa')


<div class="container">
    <h3>Edit </h3>
    <form method="post" action="{{ action('CustomerController@update', $customer->id) }}" enctype="multipart/form-data">
        @csrf
        @method('PUT')
        <div class="form-group">
            <label>Tên </label>
            <input type="text" class="form-control" name="name" value="{{ $customer->name }}" required>
        </div>
        <div class="form-group">
            <label>Email</label>
            <input type="email" class="form-control" name="email" value="{{ $customer->email }}" required></div>
        <div class="form-group">
            <label>Ngày sinh</label>
            <input type="date" class="form-control" name="dob" value="{{ $customer->dob }}" required>
        </div>
        <div class="form-group">
            <label for="title">Image</label>
            <input type="file" class="form-control" name="image" >
        </div>

        <button type="submit" class="btn btn-primary">Chỉnh sửa</button>
        <button class="btn btn-secondary" onclick="window.history.go(-1); return false;">Hủy</button>
    </form>
</div>
@endsection
