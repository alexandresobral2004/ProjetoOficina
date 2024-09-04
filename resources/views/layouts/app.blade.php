<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" data-layout="vertical" data-topbar="light" data-sidebar="dark"
    data-sidebar-size="lg" data-sidebar-image="none" data-preloader="disable">


<!-- Mirrored from themesbrand.com/velzon/html/modern/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 09 Aug 2024 01:46:43 GMT -->

<head>

    <meta charset="utf-8" />
    <title>Dashboard | Velzon - Admin & Dashboard Template</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta content="Premium Multipurpose Admin & Dashboard Template" name="description" />
    <meta content="Themesbrand" name="author" />
    <!-- App favicon -->
    <link rel="shortcut icon" href="../../assets/images/favicon.ico">

    <!-- jsvectormap css -->
    <link href="../../assets/libs/jsvectormap/css/jsvectormap.min.css" rel="stylesheet" type="text/css" />

    <!--Swiper slider css-->
    <link href="../../assets/libs/swiper/swiper-bundle.min.css" rel="stylesheet" type="text/css" />

    <!-- Layout config Js -->
    <script src="../../assets/js/layout.js"></script>
    <!-- Bootstrap Css -->
    <link href="../../assets/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
    <!-- Icons Css -->
    <link href="../../assets/css/icons.min.css" rel="stylesheet" type="text/css" />
    <!-- App Css-->
    <link href="../../assets/css/app.min.css" rel="stylesheet" type="text/css" />
    <!-- custom Css-->
    <link href="../../assets/css/custom.min.css" rel="stylesheet" type="text/css" />
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>



</head>

<body>
    <!-- Begin page -->
    <div id="layout-wrapper">
        <!-- Begin page header-->

        @include('layouts.navbars.header')
        @include('layouts.navbars.sidebar')
        {{-- @include('layouts.navbars.breadcrumbs') --}}
        <!-- removeNotificationModal -->
        <div id="removeNotificationModal" class="modal fade zoomIn" tabindex="-1" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"
                            id="NotificationModalbtn-close"></button>
                    </div>
                    <div class="modal-body">
                        <div class="mt-2 text-center">
                            <lord-icon src="../../../../cdn.lordicon.com/gsqxdxog.json" trigger="loop"
                                colors="primary:#f7b84b,secondary:#f06548" style="width:100px;height:100px"></lord-icon>
                            <div class="mt-4 pt-2 fs-15 mx-4 mx-sm-5">
                                <h4>Are you sure ?</h4>
                                <p class="text-muted mx-4 mb-0">Are you sure you want to remove this Notification ?</p>
                            </div>
                        </div>
                        <div class="d-flex gap-2 justify-content-center mt-4 mb-2">
                            <button type="button" class="btn w-sm btn-light" data-bs-dismiss="modal">Close</button>
                            <button type="button" class="btn w-sm btn-danger" id="delete-notification">Yes, Delete
                                It!</button>
                        </div>
                    </div>

                </div><!-- /.modal-content -->
            </div><!-- /.modal-dialog -->
        </div><!-- /.modal -->
        <!-- ========== App Menu ========== -->

        <!-- Left Sidebar End -->
        <!-- Vertical Overlay-->
        <div class="vertical-overlay"></div>

        <!-- ============================================================== -->
        <!-- Start right Content here -->
        <!-- ============================================================== -->
        <div class="main-content">


            <div class="page-content">

                <div class="container-fluid">
                    @include('sweetalert::sweetalert')
                    @yield('content')
                </div>

            </div>
            <!-- container-fluid -->
        </div>


        <!-- End Page-content -->

        @include('layouts.navbars.footer')

        <!-- end main content-->

    </div>
    <!-- END layout-wrapper -->



    <!--start back-to-top-->
    <button onclick="topFunction()" class="btn btn-danger btn-icon" id="back-to-top">
        <i class="ri-arrow-up-line"></i>
    </button>
    <!--end back-to-top-->

    <!--preloader-->
    <div id="preloader">
        <div id="status">
            <div class="spinner-border text-primary avatar-sm" role="status">
                <span class="visually-hidden">Loading...</span>
            </div>
        </div>
    </div>

    <div class="customizer-setting d-none d-md-block">
        <div class="btn-info rounded-pill shadow-lg btn btn-icon btn-lg p-2" data-bs-toggle="offcanvas"
            data-bs-target="#theme-settings-offcanvas" aria-controls="theme-settings-offcanvas">
            <i class='mdi mdi-spin mdi-cog-outline fs-22'></i>
        </div>
    </div>

    <!-- Theme Settings -->
    @include('layouts.navbars.settings')

    <!-- JAVASCRIPT -->
    <script src="../../assets/libs/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="../../assets/libs/simplebar/simplebar.min.js"></script>
    <script src="../../assets/libs/node-waves/waves.min.js"></script>
    <script src="../../assets/libs/feather-icons/feather.min.js"></script>
    <script src="../../assets/js/pages/plugins/lord-icon-2.1.0.js"></script>
    <script src="../../assets/js/plugins.js"></script>

    <!-- apexcharts -->
    <script src="../../assets/libs/apexcharts/apexcharts.min.js"></script>

    <!-- Vector map-->
    <script src="../../assets/libs/jsvectormap/js/jsvectormap.min.js"></script>
    <script src="../../assets/libs/jsvectormap/maps/world-merc.js"></script>

    <!--Swiper slider js-->
    <script src="../assets/libs/swiper/swiper-bundle.min.js"></script>

    <!-- Dashboard init -->
    <script src="../../assets/js/pages/dashboard-ecommerce.init.js"></script>

    <!-- App js -->
    <script src="../../assets/js/app.js"></script>
</body>


<!-- Mirrored from themesbrand.com/velzon/html/modern/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 09 Aug 2024 01:51:15 GMT -->

</html>
