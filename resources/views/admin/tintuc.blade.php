@extends('admin.master')
@section('title')
    Bài viết
@endsection
@section('content')
    <h1 class="text-center">Bài viết</h1>
    <a href="{{ route('posts.create') }}" class="btn btn-success mb-2">Thêm</a>
    <table class="table table-bordered">
        <tr>
            <th>ID</th>
            <th>TÊN</th>
            <th>ẢNH</th>
            <th>MÔ TẢ NGẮN</th>
            <th>DANH MỤC</th>
            <th>LƯỢT XEM</th>
            <th>HÀNH ĐỘNG</th>
        </tr>
        @foreach ($tintucs as $tt)
            <tr>
                <td>{{ $tt->idtintuc }}</td>
                <td>{{ $tt->nametintuc }}</td>
                <td>
                    <img width="100px" src="{{ \Storage::url($tt->anh) }}" alt="k">
                </td>
                <td>{{ $tt->motangan }}</td>
                <td>{{ $tt->namedm }}</td>
                <td>{{ $tt->luotxem }}</td>
                <td class="d-flex">
                    <a href="{{ route('posts.show', $tt->idtintuc) }}" class="btn btn-primary me-1">Sửa</a>
                    <form action="{{ route('posts.destroy', $tt->idtintuc) }}" method="POST">
                        @method('DELETE')
                        @csrf
                        <button type="submit" onclick="return confirm('Bạn có chắc chắn muốn xóa không?')"
                            class="btn btn-danger ">Xóa</button>
                    </form>
                </td>

            </tr>
    
   
    @endforeach
  <!-- Hiển thị phân trang -->
{{ $tintucs->links() }}

</table>
@endsection
