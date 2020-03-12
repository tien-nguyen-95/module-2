@include('partials.head')

<body>
    @include('partials.nav')
    <div class="col-12 col-md-12">
        <div class="row">
            <div class="col-12">
                <h1>Chỉnh sửa </h1>
            </div>
            <div class="col-12">
                <form method="post" action="{{ action('CustomerController@update', $customer->id) }}">
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


                    <button type="submit" class="btn btn-primary">Chỉnh sửa</button>
                    <button class="btn btn-secondary" onclick="window.history.go(-1); return false;">Hủy</button>
                </form>
            </div>
        </div>
    </div>
</body>
</html>
