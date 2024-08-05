@extends('admin.master')
@section('title')
    @foreach ($category as $cate)
        Sửa danh mục:{{ $cate->name }}
    @endforeach
@endsection

@section('content')
    <h1 class="text-center">Sửa danh mục:{{ $cate->name }}</h1>
    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
    @foreach ($category as $cate)
        <form action="{{ route('categories.update', $cate->id) }}" method="POST">
            @csrf
            @method('PUT')
            <label for="">Tên</label>
            <input type="text" name="name" class="form-control" value="{{ $cate->name }}">
            <button type="submit" class="btn btn-primary mt-2" >Sửa</button>
            <a href="{{route('categories.index')}}" class="btn btn-dark mt-2">Quay lại</a>
        </form>
    @endforeach
@endsection
