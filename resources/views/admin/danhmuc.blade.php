@extends('admin.master')
@section('title')
    Danh mục
@endsection
@section('content')
<h1 class="text-center">Danh mục</h1>
<a href="{{route('categories.create')}}" class="btn btn-success mb-2">Thêm</a>
<table class="table table-bordered">
    <tr>
        <th>ID</th>
        <th>TÊN</th>
        <th>HÀNH ĐỘNG</th>
    </tr>
    @foreach ($danhmucs as $dm)
    <tr>
        <td>{{$dm->id}}</td>
        <td>{{$dm->name}}</td>
        <td class="d-flex">
            <a href="{{route('categories.show',$dm->id)}}" class="btn btn-primary me-1">Sửa</a>
            <form action="{{route('categories.destroy',$dm->id)}}" method="POST">
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