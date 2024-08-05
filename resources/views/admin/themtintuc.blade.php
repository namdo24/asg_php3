@extends('admin.master')
@section('title')
    Thêm bài viết
@endsection
@section('content')
    <h1 class="text-center">Thêm bài viết</h1>
    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
    <form action="{{ route('posts.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <label for="">Tên</label>
        <input type="text" name="name" class="form-control">
        <label for="" class=" mt-2">Danh mục</label>
        
        <select name="id_dm" id="">
            @foreach ($danhmucs as $dm )
            <option value="{{$dm->id}}">{{$dm->name}}</option>
            @endforeach
        </select><br>
        
     
        <label for="" class=" mt-2">Ảnh</label>
        <input type="file" name="anh" class="form-control">
        <label for="" class=" mt-2">Mô tả ngắn</label><br>
       <textarea name="motangan" id="" cols="100" rows="10"></textarea><br>
        <label for="" class=" mt-2">Nội dung</label><br>
        <textarea name="noidung" id="" cols="100" rows="10"></textarea><br>
        
        <button type="submit" class="btn btn-primary mt-2">Thêm</button>
    </form>
@endsection
