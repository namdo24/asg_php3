@extends('admin.master')
@section('title')
    Thêm danh mục
@endsection
@section('content')
    <h1 class="text-center">Thêm danh mục</h1>
    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
    <form action="{{ route('categories.store') }}" method="POST">
        @csrf
        <label for="">Tên</label>
        <input type="text" name="name" class="form-control">
        <button type="submit" class="btn btn-primary mt-2">Thêm</button>
    </form>
@endsection
