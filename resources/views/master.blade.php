<!doctype html>
<html class="no-js" lang="zxx"> <!--<![endif]-->

<head>
    @include('client.components.head')
</head>

<body class="tg-home">

    

    <div id="tg-wrapper" class="tg-wrapper tg-haslayout">
        <!--************************************
    Header Start
  *************************************-->
        @include('client.components.header')

        <main id="tg-main" class="tg-main tg-haslayout">
            <div class="container">
                <div class="row">
                    <div class="tg-main-section tg-haslayout">
                        <div id="tg-twocolumns" class="tg-twocolumns">
                            <div class="col-xs-12 col-sm-7 col-md-9 col-lg-9">
                                <div id="tg-content" class="tg-content">
                                    @yield('content')
                                </div>
                            </div>
                            <div class="col-xs-12 col-sm-5 col-md-3 col-lg-3">
                                <aside id="tg-sidebar" class="tg-sidebar">

                                    <div class="tg-widget tg-widgettrendingposts">
                                        <div class="tg-widgettitle">
                                            <h3>Tin nóng</h3>
                                        </div>
                                        <div class="tg-widgetcontent">
                                            <ul>
                                               @include('client.components.tinnong')
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="tg-widget tg-widgettrendingposts">
                                        <div class="tg-widgettitle">
                                            <h3>Tin phổ biến</h3>
                                        </div>
                                        <div class="tg-widgetcontent">
                                            <ul>
                                               @include('client.components.tinphobien')
                                            </ul>
                                        </div>
                                    </div>
                                </aside>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </main>
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
    </div>
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
