@extends('admin.master')
@section('title')
    Tài khoản
@endsection
@section('content')
    <h1 class="text-center">Tài khoản</h1>
    <a href="{{ route('accounts.create') }}" class="btn btn-success mb-2">Thêm</a>
    <table class="table table-bordered">
        <tr>
            <th>ID</th>
            <th>TÊN</th>
            <th>EMAIL</th>
            <th>Vai trò</th>
            <th>HÀNH ĐỘNG</th>
        </tr>
        @foreach ($tk as $t)
            <tr>
                <td>{{ $t->id }}</td>
                <td>{{ $t->name }}</td>
                <td>{{ $t->email }}</td>
                <td>
                    @if($t->type == 'admin')
                        Admin
                    @else
                        Người dùng
                    @endif
                </td>
                <td class="d-flex">
                  
                    <form action="{{ route('accounts.destroy', $t->id) }}" method="POST">
                        @method('DELETE')
                        @csrf
                        <button type="submit" onclick="return confirm('Bạn có chắc chắn muốn xóa không?')"
                            class="btn btn-danger ">Xóa</button>
                    </form>
                </td>
            </tr>
        @endforeach


    </table>
@endsection
