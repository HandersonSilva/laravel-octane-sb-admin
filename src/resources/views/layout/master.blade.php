<!DOCTYPE html>
<html lang="{{ config('app.locale') }}">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{config('app.name')}} - @yield('page_title')</title>

    <!-- Custom fonts for this template-->
    <link href="{{asset("plugins/fontawesome-free/css/all.min.css")}}" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="{{asset("css/sb-admin-2.min.css")}}" rel="stylesheet">

    @stack('styles')

</head>

<body id="page-top">

<!-- Page Wrapper -->
<div id="wrapper">

    <!-- Sidebar -->
    <x-sidebar/>

    <!-- Content Wrapper -->
    <div id="content-wrapper" class="d-flex flex-column">

        <!-- Main Content -->
        <div id="content">

            <!-- Topbar -->
            <x-topbar/>

            <!-- Begin Page Content -->
            <div class="container-fluid">

            <!-- Content -->
            @yield('content')

            <!--modal-->
            @stack('modal')

            </div>
            <!-- /.container-fluid -->

        </div>
        <!-- End of Main Content -->

        <!-- Footer -->
        <x-footer/>

    </div>
    <!-- End of Content Wrapper -->

</div>
<!-- End of Page Wrapper -->

<!-- Scroll to Top Button-->
<a class="scroll-to-top rounded" href="#page-top">
    <i class="fas fa-angle-up"></i>
</a>

<!-- Logout Modal-->
<x-modal>
    Select "Logout" below if you are ready to end your current session.2
</x-modal>

<!-- Bootstrap core JavaScript-->
<script src="{{asset("plugins/jquery/jquery.min.js")}}"></script>
<script src="{{asset("plugins/bootstrap/js/bootstrap.bundle.min.js")}}"></script>

<!-- Core plugin JavaScript-->
<script src="{{asset("plugins/jquery-easing/jquery.easing.min.js")}}"></script>

<!-- Custom scripts for all pages-->
<script src="{{asset("js/sb-admin-2.min.js")}}"></script>


@yield('footer-js')
@stack('footer-js')

</body>

</html>
