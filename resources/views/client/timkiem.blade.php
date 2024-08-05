@section('title')
    Tìm kiếm:{{$_GET['keyword']}}
@endsection
@include('client.components.head')
@include('client.components.header')
<div class="container mt-5">
    <div class="row">
        @if ($a==1)
        <div class="container mt-5">
            <div class="row">
                @foreach ($tintuc as $t)
                    <div class="col-md-3 mt-4">
                        <div class="card">
                            <div class="image-container">
                                <a href="{{ url('chitiet', $t->id) }}"><img src="{{ \Storage::url($t->anh) }}"
                                        alt="Image 1"></a>
                            </div>
                            <div class="card-body">
                                <a style="text-decoration: none;color:black" href="{{ url('chitiet', $t->id) }}">
                                    <h4 class="card-text">T{{ $t->name }}</h4>
                                </a>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
        @else
         <h1 class="text-center ">{{$thongbao}}</h1>  
        @endif
        
    </div>
</div>
<footer id="tg-footer" class="tg-footer tg-haslayout">
    <div class="tg-footerbar">
        <div class="container">
            <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                    <strong class="tg-logo"><a href="#"><img src="/layout/images/logo2.png"
                                alt="image description"></a></strong>
                    <div class="tg-copyrightbox">
                        <span>&copy; 2017 - The Article. All Rights Reserved</span>
                        <ul>
                            <li><a href="#">Disclaimer</a></li>
                            <li><a href="#">Privacy</a></li>
                            <li><a href="#">Advertisement</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>
<!--************************************
Footer End
*************************************-->

<!--************************************
Wrapper End
*************************************-->
<script src="js/vendor/jquery-library.js"></script>
<script src="js/vendor/bootstrap.min.js"></script>
<script src="https://maps.google.com/maps/api/js?key=AIzaSyCR-KEWAVCn52mSdeVeTqZjtqbmVJyfSus&amp;language=en"></script>
<script src="js/owl.carousel.min.js"></script>
<script src="js/prettyPhoto.js"></script>
<script src="js/flipclock.js"></script>
<script src="js/slick.min.js"></script>
<script src="js/jquery-ui.js"></script>
<script src="js/gmap3.js"></script>
<script src="js/main.js"></script>
</body>

<!-- Mirrored from exprostudio.com/html/article/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 08 Jul 2024 02:23:14 GMT -->

</html>
