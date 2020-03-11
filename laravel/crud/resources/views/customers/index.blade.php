@include('partials.head')

<body>
    @include('partials.nav')
    <div class="container">
        <div class="col-12">
            <h1>Danh Sách Khách Hàng</h1>
            @include('partials.messeger')
            <a class="btn btn-info" href="{{ route('customers.create') }}">Thêm mới</a>
            <br><br>
            <div class="row">
                <table class="table table-dark">
                    <thead>
                        <tr>
                            <th >STT</th>
                            <th >Tên </th>
                            <th >Ngày Sinh</th>
                            <th >Email</th>
                            <th colspan="3">Thao tác</th>
                        </tr>
                    </thead>
                    <tbody>
                        @if(count($customers) == 0)
                        <td colspan="5">Không có dữ liệu</td>
                        @else
                        @foreach ($customers as $key => $customer)
                        <tr>
                            <th >{{ ++$key }}</th>
                            <td>{{ $customer['name'] }}</td>
                            <td>{{ $customer['dob'] }}</td>
                            <td>{{ $customer['email'] }}</td>
                            </td>
                            <td><a href="{{ route('customers.show', $customer->id) }}">Show</a></td>
                            <td><a href="{{ route('customers.edit', $customer->id) }}">sửa</a></td>
                            <td>
                                <form method="post" action="{{ route('customers.destroy', $customer->id) }}">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" onclick="return confirm('Bạn chắc chắn muốn xóa?')">Xóa</button>
                                </form>
                            </td>
                        </tr>
                        @endforeach
                        @endif
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    </body>
</html>
