@extends('master')
@section('title')
    @foreach ($chitiet as $t)
        {{ $t->name }}
    @endforeach
@endsection
@section('content')
    @foreach ($chitiet as $ct)
        <div class="tg-post tg-postdetailpage">
            <div class="tg-posttitle">
                <h1>{{ $ct->name }}</h1>
                <h3>{{ $ct->motangan }}</h3>
            </div>
            <figure class="tg-postimg">
                <span class="tg-postfeatured"><i class="fa fa-bolt"></i></span>
                <img src="{{ \Storage::url($ct->anh) }}" alt="image description">
            </figure>

            <div class="tg-description">
                <h3>{{ $ct->noidung }}</h3>
            </div>
        </div>
    @endforeach
@endsection
