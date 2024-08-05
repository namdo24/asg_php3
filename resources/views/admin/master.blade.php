<!doctype html>
<html lang="en" data-layout="vertical" data-topbar="light" data-sidebar="dark" data-sidebar-size="lg"
    data-sidebar-image="none" data-preloader="disable">

@include('admin.components.head')

<body>
    <!-- Begin page -->
    <div id="layout-wrapper">
       
        @include('admin.components.header')
        <!-- removeNotificationModal -->

        <!-- ========== App Menu ========== -->
        
        <div class="main-content">
            <div class="page-content">
              @yield('content')
            </div>
        </div>
    </div>
    <button onclick="topFunction()" class="btn btn-danger btn-icon" id="back-to-top">
        <i class="ri-arrow-up-line"></i>
    </button>
    <div id="preloader">
        <div id="status">
            <div class="spinner-border text-primary avatar-sm" role="status">
                <span class="visually-hidden">Loading...</span>
            </div>
        </div>
    </div>
    @include('admin.components.footer')
</body>

</html>
