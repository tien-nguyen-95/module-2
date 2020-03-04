<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('test', function () {
    $student = [
        '1'=>'Nam',
        '2'=>'Sang',
        '3'=>'Linh'
    ];
    return view('test',['student' => $student]);
});

// [Thực hành] Tạo ứng dụng Laravel Greeting

Route::get('greeting', function () {
    return view('greet');
});

Route::get('/greeting/{name?}', function ($name = null) {

    if ($name) {

        echo 'Hello ' . $name . '!';

    } else {

        echo 'Hello World!';

    }

});

//[Thực hành] Tạo một trang đăng nhập và hiển thị lời chào

Route::get('/login', function() {
    return view('login');
});

Route::post('/login', function (Illuminate\Http\Request $request) {
    if ($request->username == 'admin'&& $request->password == 'admin'){
        return view("welcome_admin");
    }
    return view("login_error");
});

// [Bài tập] Ứng dụng Product Discount Calculator

Route::get('/inputproduct', function () {
    return view('inputproduct');
});

Route::post('/calculator', function (Illuminate\Http\Request $request) {
    $productDescription = $request->productDescription;
    $price = $request->price;
    $discountPercent = $request->discountPercent;
    $discountAmount = $price * $discountPercent * 0.01;
    $discountPrice = $price - $discountAmount;
    return view('show_discount', compact(['discountPrice', 'discountAmount', 'productDescription', 'price', 'discountPercent']));
});

//[Bài tập] Ứng dụng Từ điển đơn giản

Route::get('/dictionary', function () {
    return view('input_word');
});

Route::post('/dictionary', function (Illuminate\Http\Request $request) {
    $dictionary =[
        'hello'=>'Xin chào',
        'hi'=>'Chao xìn'
    ];
    $key = $request->input;
    if(!array_key_exists($key,$dictionary)){
        return 'Không có dữ liệu';
    }
    $result = $dictionary[$key];
    return view('output_word',compact(['result']));
});
