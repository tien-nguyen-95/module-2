@extends('customers.layout')

@section('title', 'Thông tin')

@section('content')

<div class="container">
    <h3>Thông tin chi tiết</h3>
    Tên: {{ $customer->name }}<br>
    Ngày sinh: {{ $customer->dob }}<br>
    mail: {{ $customer->email }}<br>
    image: <img src="data:image/jpg;base64,{{ $customer['image'] }}" alt="" height="60px" width="60px"><br>
    <a href="/customers">Back</a>
</div>
@endsection
