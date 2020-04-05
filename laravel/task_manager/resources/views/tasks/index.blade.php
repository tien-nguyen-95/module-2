@include('partials.header')
<div class="flex-center position-ref full-height">
    <div class="content">
        <div class="title m-b-md">
            Tasks List
        </div>

        @if(Session::has('create-success'))
            <h5 class="text-primary">{{ Session::get('create-success')}}</h5>
        @endif

        @if(isset($message))
            <h5 class="text-primary">{{ $message }}</h5>
        @endif

        @if(!isset($tasks))
            <h5 class="text-primary">Dữ liệu không tồn tại!</h5>
        @else
            <table class="table table-bordered">
                <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Task title</th>
                    <th scope="col">Content</th>
                    <th scope="col">Created</th>
                    <th scope="col">Due Date</th>
                    <th scope="col">Image</th>
                </tr>
                </thead>
                <tbody>

                <!-- Kiểm tra, nếu biến tasks có số lượng bằng 0 (Không có task nào) thì trả về thông báo -->
                @if(count($tasks) == 0)
                    <h5 class="text-primary">Hiện tại chưa có task nào được tạo!</h5>
                @else

                    <!-- Duyệt mảng $tasks, lấy ra từng trường của từng task để hiển thị ra bảng -->
                    @foreach($tasks as $key => $task)
                        <tr>
                            <th scope="row">{{ ++$key }}</th>
                            <td>{{ $task->title }}</td>
                            <td>{{ $task->content }}</td>
                            <td>{{ $task->created_at }}</td>
                            <td>{{ $task->due_date }}</td>
                            <td>
                                <img src="{{ asset('storage/images/' . $task->image) }}" alt="" style="width: 150px">
                            </td>
                        </tr>
                    @endforeach
                @endif
                </tbody>
            </table>
        @endif
        <a href="{{ route('welcome') }}">< Back</a>

    </div>
</div>
