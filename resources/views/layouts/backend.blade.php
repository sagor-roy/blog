<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Panel</title>
    <!-- Bootstrap css -->
    <link rel="stylesheet" href="{{asset('assets/backend/css/bootstrap.min.css')}}">
    <!-- Fontawsome -->
    <link rel="stylesheet" href="{{asset('assets/backend/vendor/fontawesome/all.css')}}">
    <!-- Main css -->
    <link rel="stylesheet" href="{{asset('assets/backend/css/main.css')}}">
    <!-- Responsive css -->
    <link rel="stylesheet" href="{{asset('assets/backend/css/responsive.css')}}">
    <link rel="stylesheet" href="http://cdn.bootcss.com/toastr.js/latest/css/toastr.min.css">
</head>

<body>
    <!-- sideBar wrapper -->
    @include('backend.partials.sidebar')

    <!-- content wrapper-->
    <div class="content-wrapper sideBars_open">
        <!-- top head start -->
        @include('backend.partials.navbar')

        <!-- Main content start -->
        @yield('content')
    </div>

    <!-- footer section -->
    <div class="footer_section">
        Copyright @2021 all reserved by HR venture
    </div>


    <!--Start javascript -->
    <!-- jQuery.min.js -->
    <script type="text/javascript" src="{{asset('assets/backend/js/jquery.min.js')}}"></script>
    <!-- Bootstrap js -->
    <script type="text/javascript" src="{{asset('assets/backend/js/popper.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('assets/backend/js/bootstrap.min.js')}}"></script>
    <!-- Optional js  -->
    <script type="text/javascript" src="{{asset('assets/backend/js/main.js')}}"></script>
    <script src="http://cdn.bootcss.com/toastr.js/latest/js/toastr.min.js"></script>
    {!! Toastr::message() !!}
</body>

</html>
