@extends('master')
@section('title')
    Trang chủ
@endsection
@section('content')
<div class="row">
    <div class="col-xs-12 col-sm-12 col-md-5 col-lg-4">
        @include('client.components.tinhangngay')
    </div>
    <div class="col-xs-12 col-sm-12 col-md-7 col-lg-8">
        <div class="tg-postbig">
            <div class="tg-borderheading">
                <h3> </h3>
            </div>
            <div class="tg-postmargin">                                             
                @include('client.components.tinmoi')
            </div>
        </div>
    </div>                                     
</div>
@endsection