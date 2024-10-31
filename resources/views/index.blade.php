<!doctype html>
<html lang="en" data-layout="vertical" data-topbar="light" data-sidebar="dark" data-sidebar-size="sm-hover"
    data-sidebar-image="none" data-preloader="disable">


<!-- Mirrored from themesbrand.com/velzon/html/modern/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 09 Aug 2024 01:46:43 GMT -->

<head>

    <meta charset="utf-8" />
    <title>Dashboard | Velzon - Admin & Dashboard Template</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta content="Premium Multipurpose Admin & Dashboard Template" name="description" />
    <meta content="Themesbrand" name="author" />
    <!-- App favicon -->
    <link rel="shortcut icon" href="assets/images/favicon.ico">

    <!-- jsvectormap css -->
    <link href="assets/libs/jsvectormap/css/jsvectormap.min.css" rel="stylesheet" type="text/css" />

    <!--Swiper slider css-->
    <link href="assets/libs/swiper/swiper-bundle.min.css" rel="stylesheet" type="text/css" />

    <!-- Layout config Js -->
    <script src="assets/js/layout.js"></script>
    <!-- Bootstrap Css -->
    <link href="assets/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
    <!-- Icons Css -->
    <link href="assets/css/icons.min.css" rel="stylesheet" type="text/css" />
    <!-- App Css-->
    <link href="assets/css/app.min.css" rel="stylesheet" type="text/css" />
    <!-- custom Css-->
    <link href="assets/css/custom.min.css" rel="stylesheet" type="text/css" />
    <!-- Bootstrap Css -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">

    

</head>

<body>

    <!-- Begin page -->
    <div id="layout-wrapper">

        <header id="page-topbar">
            <div class="layout-width">
                <div class="navbar-header">
                    <div class="d-flex">
                        <!-- LOGO -->
                        <div class="navbar-brand-box horizontal-logo">
                            <a href="index.html" class="logo logo-dark">
                                <span class="logo-sm">
                                    <img src="assets/images/logo-sm.png" alt="" height="22">
                                </span>
                                <span class="logo-lg">
                                    <img src="assets/images/logo-dark.png" alt="" height="17">
                                </span>
                            </a>

                            <a href="index.html" class="logo logo-light">
                                <span class="logo-sm">
                                    <img src="assets/images/logo-sm.png" alt="" height="22">
                                </span>
                                <span class="logo-lg">
                                    <img src="assets/images/logo-light.png" alt="" height="17">
                                </span>
                            </a>
                        </div>

                        <button type="button"
                            class="px-3 btn btn-sm fs-16 header-item vertical-menu-btn topnav-hamburger"
                            id="topnav-hamburger-icon">
                            <span class="hamburger-icon">
                                <span></span>
                                <span></span>
                                <span></span>
                            </span>
                        </button>

                        <!-- App Search-->
                        <form class="app-search d-none d-md-block">
                            <div class="position-relative">
                                <input type="text" class="form-control" placeholder="Search..." autocomplete="off"
                                    id="search-options" value="">
                                <span class="mdi mdi-magnify search-widget-icon"></span>
                                <span class="mdi mdi-close-circle search-widget-icon search-widget-icon-close d-none"
                                    id="search-close-options"></span>
                            </div>
                            <div class="dropdown-menu dropdown-menu-lg" id="search-dropdown">
                                <div data-simplebar style="max-height: 320px;">
                                    <!-- item-->
                                    <div class="dropdown-header">
                                        <h6 class="mb-0 text-overflow text-muted text-uppercase">Recent Searches</h6>
                                    </div>

                                    <div class="bg-transparent dropdown-item text-wrap">
                                        <a href="index.html" class="btn btn-soft-secondary btn-sm rounded-pill">how to
                                            setup <i class="mdi mdi-magnify ms-1"></i></a>
                                        <a href="index.html" class="btn btn-soft-secondary btn-sm rounded-pill">buttons
                                            <i class="mdi mdi-magnify ms-1"></i></a>
                                    </div>
                                    <!-- item-->
                                    {{-- <div class="mt-2 dropdown-header">
                                        <h6 class="mb-1 text-overflow text-muted text-uppercase">Pages</h6>
                                    </div> --}}

                                    <!-- item-->
                                    <a href="javascript:void(0);" class="dropdown-item notify-item">
                                        <i class="align-middle ri-bubble-chart-line fs-18 text-muted me-2"></i>
                                        <span>Analytics Dashboard</span>
                                    </a>

                                    <!-- item-->
                                    <a href="javascript:void(0);" class="dropdown-item notify-item">
                                        <i class="align-middle ri-lifebuoy-line fs-18 text-muted me-2"></i>
                                        <span>Help Center</span>
                                    </a>

                                    <!-- item-->
                                    <a href="javascript:void(0);" class="dropdown-item notify-item">
                                        <i class="align-middle ri-user-settings-line fs-18 text-muted me-2"></i>
                                        <span>My account settings</span>
                                    </a>

                                    <!-- item-->
                                    <div class="mt-2 dropdown-header">
                                        <h6 class="mb-2 text-overflow text-muted text-uppercase">Members</h6>
                                    </div>

                                    <div class="notification-list">
                                        <!-- item -->
                                        <a href="javascript:void(0);" class="py-2 dropdown-item notify-item">
                                            <div class="d-flex">
                                                <img src="assets/images/users/avatar-2.jpg"
                                                    class="me-3 rounded-circle avatar-xs" alt="user-pic">
                                                <div class="flex-grow-1">
                                                    <h6 class="m-0">Angela Bernier</h6>
                                                    <span class="mb-0 fs-11 text-muted">Manager</span>
                                                </div>
                                            </div>
                                        </a>
                                        <!-- item -->
                                        <a href="javascript:void(0);" class="py-2 dropdown-item notify-item">
                                            <div class="d-flex">
                                                <img src="assets/images/users/avatar-3.jpg"
                                                    class="me-3 rounded-circle avatar-xs" alt="user-pic">
                                                <div class="flex-grow-1">
                                                    <h6 class="m-0">David Grasso</h6>
                                                    <span class="mb-0 fs-11 text-muted">Web Designer</span>
                                                </div>
                                            </div>
                                        </a>
                                        <!-- item -->
                                        <a href="javascript:void(0);" class="py-2 dropdown-item notify-item">
                                            <div class="d-flex">
                                                <img src="assets/images/users/avatar-5.jpg"
                                                    class="me-3 rounded-circle avatar-xs" alt="user-pic">
                                                <div class="flex-grow-1">
                                                    <h6 class="m-0">Mike Bunch</h6>
                                                    <span class="mb-0 fs-11 text-muted">React Developer</span>
                                                </div>
                                            </div>
                                        </a>
                                    </div>
                                </div>

                                <div class="pt-3 pb-1 text-center">
                                    <a href="pages-search-results.html" class="btn btn-primary btn-sm">View All
                                        Results <i class="ri-arrow-right-line ms-1"></i></a>
                                </div>
                            </div>
                        </form>
                    </div>

                    <div class="d-flex align-items-center">

                        <div class="dropdown d-md-none topbar-head-dropdown header-item">
                            <button type="button" class="btn btn-icon btn-topbar btn-ghost-secondary rounded-circle"
                                id="page-header-search-dropdown" data-bs-toggle="dropdown" aria-haspopup="true"
                                aria-expanded="false">
                                <i class="bx bx-search fs-22"></i>
                            </button>
                            <div class="p-0 dropdown-menu dropdown-menu-lg dropdown-menu-end"
                                aria-labelledby="page-header-search-dropdown">
                                <form class="p-3">
                                    <div class="m-0 form-group">
                                        <div class="input-group">
                                            <input type="text" class="form-control" placeholder="Search ..."
                                                aria-label="Recipient's username">
                                            <button class="btn btn-primary" type="submit"><i
                                                    class="mdi mdi-magnify"></i></button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>

                        <div class="dropdown ms-1 topbar-head-dropdown header-item">
                            <button type="button" class="btn btn-icon btn-topbar btn-ghost-secondary rounded-circle"
                                data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <img id="header-lang-img" src="assets/images/flags/us.svg" alt="Header Language"
                                    height="20" class="rounded">
                            </button>
                            <div class="dropdown-menu dropdown-menu-end">

                                <!-- item-->
                                <a href="javascript:void(0);" class="py-2 dropdown-item notify-item language"
                                    data-lang="en" title="English">
                                    <img src="assets/images/flags/us.svg" alt="user-image" class="rounded me-2"
                                        height="18">
                                    <span class="align-middle">English</span>
                                </a>

                                <!-- item-->
                                <a href="javascript:void(0);" class="dropdown-item notify-item language"
                                    data-lang="sp" title="Spanish">
                                    <img src="assets/images/flags/spain.svg" alt="user-image" class="rounded me-2"
                                        height="18">
                                    <span class="align-middle">Española</span>
                                </a>

                                <!-- item-->
                                <a href="javascript:void(0);" class="dropdown-item notify-item language"
                                    data-lang="gr" title="German">
                                    <img src="assets/images/flags/germany.svg" alt="user-image" class="rounded me-2"
                                        height="18"> <span class="align-middle">Deutsche</span>
                                </a>

                                <!-- item-->
                                <a href="javascript:void(0);" class="dropdown-item notify-item language"
                                    data-lang="it" title="Italian">
                                    <img src="assets/images/flags/italy.svg" alt="user-image" class="rounded me-2"
                                        height="18">
                                    <span class="align-middle">Italiana</span>
                                </a>

                                <!-- item-->
                                <a href="javascript:void(0);" class="dropdown-item notify-item language"
                                    data-lang="ru" title="Russian">
                                    <img src="assets/images/flags/russia.svg" alt="user-image" class="rounded me-2"
                                        height="18">
                                    <span class="align-middle">русский</span>
                                </a>

                                <!-- item-->
                                <a href="javascript:void(0);" class="dropdown-item notify-item language"
                                    data-lang="ch" title="Chinese">
                                    <img src="assets/images/flags/china.svg" alt="user-image" class="rounded me-2"
                                        height="18">
                                    <span class="align-middle">中国人</span>
                                </a>

                                <!-- item-->
                                <a href="javascript:void(0);" class="dropdown-item notify-item language"
                                    data-lang="fr" title="French">
                                    <img src="assets/images/flags/french.svg" alt="user-image" class="rounded me-2"
                                        height="18">
                                    <span class="align-middle">français</span>
                                </a>

                                <!-- item-->
                                <a href="javascript:void(0);" class="dropdown-item notify-item language"
                                    data-lang="ar" title="Arabic">
                                    <img src="assets/images/flags/ae.svg" alt="user-image" class="rounded me-2"
                                        height="18">
                                    <span class="align-middle">Arabic</span>
                                </a>
                            </div>
                        </div>

                        <div class="dropdown topbar-head-dropdown ms-1 header-item">
                            <button type="button" class="btn btn-icon btn-topbar btn-ghost-secondary rounded-circle"
                                data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class='bx bx-category-alt fs-22'></i>
                            </button>
                            <div class="p-0 dropdown-menu dropdown-menu-lg dropdown-menu-end">
                                <div class="p-3 border border-dashed border-top-0 border-start-0 border-end-0">
                                    <div class="row align-items-center">
                                        <div class="col">
                                            <h6 class="m-0 fw-semibold fs-15"> Web Apps </h6>
                                        </div>
                                        <div class="col-auto">
                                            <a href="#!" class="btn btn-sm btn-soft-info"> View All Apps
                                                <i class="align-middle ri-arrow-right-s-line"></i></a>
                                        </div>
                                    </div>
                                </div>

                                <div class="p-2">
                                    <div class="row g-0">
                                        <div class="col">
                                            <a class="dropdown-icon-item" href="#!">
                                                <img src="assets/images/brands/github.png" alt="Github">
                                                <span>GitHub</span>
                                            </a>
                                        </div>
                                        <div class="col">
                                            <a class="dropdown-icon-item" href="#!">
                                                <img src="assets/images/brands/bitbucket.png" alt="bitbucket">
                                                <span>Bitbucket</span>
                                            </a>
                                        </div>
                                        <div class="col">
                                            <a class="dropdown-icon-item" href="#!">
                                                <img src="assets/images/brands/dribbble.png" alt="dribbble">
                                                <span>Dribbble</span>
                                            </a>
                                        </div>
                                    </div>

                                    <div class="row g-0">
                                        <div class="col">
                                            <a class="dropdown-icon-item" href="#!">
                                                <img src="assets/images/brands/dropbox.png" alt="dropbox">
                                                <span>Dropbox</span>
                                            </a>
                                        </div>
                                        <div class="col">
                                            <a class="dropdown-icon-item" href="#!">
                                                <img src="assets/images/brands/mail_chimp.png" alt="mail_chimp">
                                                <span>Mail Chimp</span>
                                            </a>
                                        </div>
                                        <div class="col">
                                            <a class="dropdown-icon-item" href="#!">
                                                <img src="assets/images/brands/slack.png" alt="slack">
                                                <span>Slack</span>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="dropdown topbar-head-dropdown ms-1 header-item">
                            <button type="button" class="btn btn-icon btn-topbar btn-ghost-secondary rounded-circle"
                                id="page-header-cart-dropdown" data-bs-toggle="dropdown" data-bs-auto-close="outside"
                                aria-haspopup="true" aria-expanded="false">
                                <i class='bx bx-shopping-bag fs-22'></i>
                                <span
                                    class="position-absolute topbar-badge cartitem-badge fs-10 translate-middle badge rounded-pill bg-info">5</span>
                            </button>
                            <div class="p-0 dropdown-menu dropdown-menu-xl dropdown-menu-end dropdown-menu-cart"
                                aria-labelledby="page-header-cart-dropdown">
                                <div class="p-3 border border-dashed border-top-0 border-start-0 border-end-0">
                                    <div class="row align-items-center">
                                        <div class="col">
                                            <h6 class="m-0 fs-16 fw-semibold"> My Cart</h6>
                                        </div>
                                        <div class="col-auto">
                                            <span class="badge bg-warning-subtle text-warning fs-13"><span
                                                    class="cartitem-badge">7</span>
                                                items</span>
                                        </div>
                                    </div>
                                </div>
                                <div data-simplebar style="max-height: 300px;">
                                    <div class="p-2">
                                        <div class="text-center empty-cart" id="empty-cart">
                                            <div class="mx-auto my-3 avatar-md">
                                                <div
                                                    class="avatar-title bg-info-subtle text-info fs-36 rounded-circle">
                                                    <i class='bx bx-cart'></i>
                                                </div>
                                            </div>
                                            <h5 class="mb-3">Your Cart is Empty!</h5>
                                            <a href="apps-ecommerce-products.html"
                                                class="mb-3 btn btn-success w-md">Shop Now</a>
                                        </div>
                                        <div class="px-3 py-2 d-block dropdown-item dropdown-item-cart text-wrap">
                                            <div class="d-flex align-items-center">
                                                <img src="assets/images/products/img-1.png"
                                                    class="p-2 me-3 rounded-circle avatar-sm bg-light" alt="user-pic">
                                                <div class="flex-grow-1">
                                                    <h6 class="mt-0 mb-1 fs-14">
                                                        <a href="apps-ecommerce-product-details.html"
                                                            class="text-reset">Branded
                                                            T-Shirts</a>
                                                    </h6>
                                                    <p class="mb-0 fs-12 text-muted">
                                                        Quantity: <span>10 x $32</span>
                                                    </p>
                                                </div>
                                                <div class="px-2">
                                                    <h5 class="m-0 fw-normal">$<span
                                                            class="cart-item-price">320</span></h5>
                                                </div>
                                                <div class="ps-2">
                                                    <button type="button"
                                                        class="btn btn-icon btn-sm btn-ghost-secondary remove-item-btn"><i
                                                            class="ri-close-fill fs-16"></i></button>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="px-3 py-2 d-block dropdown-item dropdown-item-cart text-wrap">
                                            <div class="d-flex align-items-center">
                                                <img src="assets/images/products/img-2.png"
                                                    class="p-2 me-3 rounded-circle avatar-sm bg-light" alt="user-pic">
                                                <div class="flex-grow-1">
                                                    <h6 class="mt-0 mb-1 fs-14">
                                                        <a href="apps-ecommerce-product-details.html"
                                                            class="text-reset">Bentwood Chair</a>
                                                    </h6>
                                                    <p class="mb-0 fs-12 text-muted">
                                                        Quantity: <span>5 x $18</span>
                                                    </p>
                                                </div>
                                                <div class="px-2">
                                                    <h5 class="m-0 fw-normal">$<span class="cart-item-price">89</span>
                                                    </h5>
                                                </div>
                                                <div class="ps-2">
                                                    <button type="button"
                                                        class="btn btn-icon btn-sm btn-ghost-secondary remove-item-btn"><i
                                                            class="ri-close-fill fs-16"></i></button>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="px-3 py-2 d-block dropdown-item dropdown-item-cart text-wrap">
                                            <div class="d-flex align-items-center">
                                                <img src="assets/images/products/img-3.png"
                                                    class="p-2 me-3 rounded-circle avatar-sm bg-light" alt="user-pic">
                                                <div class="flex-grow-1">
                                                    <h6 class="mt-0 mb-1 fs-14">
                                                        <a href="apps-ecommerce-product-details.html"
                                                            class="text-reset">
                                                            Borosil Paper Cup</a>
                                                    </h6>
                                                    <p class="mb-0 fs-12 text-muted">
                                                        Quantity: <span>3 x $250</span>
                                                    </p>
                                                </div>
                                                <div class="px-2">
                                                    <h5 class="m-0 fw-normal">$<span
                                                            class="cart-item-price">750</span></h5>
                                                </div>
                                                <div class="ps-2">
                                                    <button type="button"
                                                        class="btn btn-icon btn-sm btn-ghost-secondary remove-item-btn"><i
                                                            class="ri-close-fill fs-16"></i></button>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="px-3 py-2 d-block dropdown-item dropdown-item-cart text-wrap">
                                            <div class="d-flex align-items-center">
                                                <img src="assets/images/products/img-6.png"
                                                    class="p-2 me-3 rounded-circle avatar-sm bg-light" alt="user-pic">
                                                <div class="flex-grow-1">
                                                    <h6 class="mt-0 mb-1 fs-14">
                                                        <a href="apps-ecommerce-product-details.html"
                                                            class="text-reset">Gray
                                                            Styled T-Shirt</a>
                                                    </h6>
                                                    <p class="mb-0 fs-12 text-muted">
                                                        Quantity: <span>1 x $1250</span>
                                                    </p>
                                                </div>
                                                <div class="px-2">
                                                    <h5 class="m-0 fw-normal">$ <span
                                                            class="cart-item-price">1250</span></h5>
                                                </div>
                                                <div class="ps-2">
                                                    <button type="button"
                                                        class="btn btn-icon btn-sm btn-ghost-secondary remove-item-btn"><i
                                                            class="ri-close-fill fs-16"></i></button>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="px-3 py-2 d-block dropdown-item dropdown-item-cart text-wrap">
                                            <div class="d-flex align-items-center">
                                                <img src="assets/images/products/img-5.png"
                                                    class="p-2 me-3 rounded-circle avatar-sm bg-light" alt="user-pic">
                                                <div class="flex-grow-1">
                                                    <h6 class="mt-0 mb-1 fs-14">
                                                        <a href="apps-ecommerce-product-details.html"
                                                            class="text-reset">Stillbird Helmet</a>
                                                    </h6>
                                                    <p class="mb-0 fs-12 text-muted">
                                                        Quantity: <span>2 x $495</span>
                                                    </p>
                                                </div>
                                                <div class="px-2">
                                                    <h5 class="m-0 fw-normal">$<span
                                                            class="cart-item-price">990</span></h5>
                                                </div>
                                                <div class="ps-2">
                                                    <button type="button"
                                                        class="btn btn-icon btn-sm btn-ghost-secondary remove-item-btn"><i
                                                            class="ri-close-fill fs-16"></i></button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="p-3 border border-dashed border-bottom-0 border-start-0 border-end-0"
                                    id="checkout-elem">
                                    <div class="pb-3 d-flex justify-content-between align-items-center">
                                        <h5 class="m-0 text-muted">Total:</h5>
                                        <div class="px-2">
                                            <h5 class="m-0" id="cart-item-total">$1258.58</h5>
                                        </div>
                                    </div>

                                    <a href="apps-ecommerce-checkout.html" class="text-center btn btn-success w-100">
                                        Checkout
                                    </a>
                                </div>
                            </div>
                        </div>

                        <div class="ms-1 header-item d-none d-sm-flex">
                            <button type="button" class="btn btn-icon btn-topbar btn-ghost-secondary rounded-circle"
                                data-toggle="fullscreen">
                                <i class='bx bx-fullscreen fs-22'></i>
                            </button>
                        </div>

                        <div class="ms-1 header-item d-none d-sm-flex">
                            <button type="button"
                                class="btn btn-icon btn-topbar btn-ghost-secondary rounded-circle light-dark-mode">
                                <i class='bx bx-moon fs-22'></i>
                            </button>
                        </div>

                        <div class="dropdown topbar-head-dropdown ms-1 header-item" id="notificationDropdown">
                            <button type="button" class="btn btn-icon btn-topbar btn-ghost-secondary rounded-circle"
                                id="page-header-notifications-dropdown" data-bs-toggle="dropdown"
                                data-bs-auto-close="outside" aria-haspopup="true" aria-expanded="false">
                                <i class='bx bx-bell fs-22'></i>
                                <span
                                    class="position-absolute topbar-badge fs-10 translate-middle badge rounded-pill bg-danger">3<span
                                        class="visually-hidden">unread messages</span></span>
                            </button>
                            <div class="p-0 dropdown-menu dropdown-menu-lg dropdown-menu-end"
                                aria-labelledby="page-header-notifications-dropdown">

                                <div class="dropdown-head bg-primary bg-pattern rounded-top">
                                    <div class="p-3">
                                        <div class="row align-items-center">
                                            <div class="col">
                                                <h6 class="m-0 text-white fs-16 fw-semibold"> Notifications </h6>
                                            </div>
                                            <div class="col-auto dropdown-tabs">
                                                <span class="badge bg-light-subtle text-body fs-13"> 4 New</span>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="px-2 pt-2">
                                        <ul class="nav nav-tabs dropdown-tabs nav-tabs-custom"
                                            data-dropdown-tabs="true" id="notificationItemsTab" role="tablist">
                                            <li class="nav-item waves-effect waves-light">
                                                <a class="nav-link active" data-bs-toggle="tab" href="#all-noti-tab"
                                                    role="tab" aria-selected="true">
                                                    All (4)
                                                </a>
                                            </li>
                                            <li class="nav-item waves-effect waves-light">
                                                <a class="nav-link" data-bs-toggle="tab" href="#messages-tab"
                                                    role="tab" aria-selected="false">
                                                    Messages
                                                </a>
                                            </li>
                                            <li class="nav-item waves-effect waves-light">
                                                <a class="nav-link" data-bs-toggle="tab" href="#alerts-tab"
                                                    role="tab" aria-selected="false">
                                                    Alerts
                                                </a>
                                            </li>
                                        </ul>
                                    </div>

                                </div>

                                <div class="tab-content position-relative" id="notificationItemsTabContent">
                                    <div class="py-2 tab-pane fade show active ps-2" id="all-noti-tab"
                                        role="tabpanel">
                                        <div data-simplebar style="max-height: 300px;" class="pe-2">
                                            <div
                                                class="text-reset notification-item d-block dropdown-item position-relative">
                                                <div class="d-flex">
                                                    <div class="flex-shrink-0 avatar-xs me-3">
                                                        <span
                                                            class="avatar-title bg-info-subtle text-info rounded-circle fs-16">
                                                            <i class="bx bx-badge-check"></i>
                                                        </span>
                                                    </div>
                                                    <div class="flex-grow-1">
                                                        <a href="#!" class="stretched-link">
                                                            <h6 class="mt-0 mb-2 lh-base">Your <b>Elite</b> author
                                                                Graphic
                                                                Optimization <span class="text-secondary">reward</span>
                                                                is
                                                                ready!
                                                            </h6>
                                                        </a>
                                                        <p class="mb-0 fs-11 fw-medium text-uppercase text-muted">
                                                            <span><i class="mdi mdi-clock-outline"></i> Just 30 sec
                                                                ago</span>
                                                        </p>
                                                    </div>
                                                    <div class="px-2 fs-15">
                                                        <div class="form-check notification-check">
                                                            <input class="form-check-input" type="checkbox"
                                                                value="" id="all-notification-check01">
                                                            <label class="form-check-label"
                                                                for="all-notification-check01"></label>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                            <div
                                                class="text-reset notification-item d-block dropdown-item position-relative">
                                                <div class="d-flex">
                                                    <img src="assets/images/users/avatar-2.jpg"
                                                        class="flex-shrink-0 me-3 rounded-circle avatar-xs"
                                                        alt="user-pic">
                                                    <div class="flex-grow-1">
                                                        <a href="#!" class="stretched-link">
                                                            <h6 class="mt-0 mb-1 fs-13 fw-semibold">Angela Bernier</h6>
                                                        </a>
                                                        <div class="fs-13 text-muted">
                                                            <p class="mb-1">Answered to your comment on the cash flow
                                                                forecast's
                                                                graph 🔔.</p>
                                                        </div>
                                                        <p class="mb-0 fs-11 fw-medium text-uppercase text-muted">
                                                            <span><i class="mdi mdi-clock-outline"></i> 48 min
                                                                ago</span>
                                                        </p>
                                                    </div>
                                                    <div class="px-2 fs-15">
                                                        <div class="form-check notification-check">
                                                            <input class="form-check-input" type="checkbox"
                                                                value="" id="all-notification-check02">
                                                            <label class="form-check-label"
                                                                for="all-notification-check02"></label>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                            <div
                                                class="text-reset notification-item d-block dropdown-item position-relative">
                                                <div class="d-flex">
                                                    <div class="flex-shrink-0 avatar-xs me-3">
                                                        <span
                                                            class="avatar-title bg-danger-subtle text-danger rounded-circle fs-16">
                                                            <i class='bx bx-message-square-dots'></i>
                                                        </span>
                                                    </div>
                                                    <div class="flex-grow-1">
                                                        <a href="#!" class="stretched-link">
                                                            <h6 class="mt-0 mb-2 fs-13 lh-base">You have received <b
                                                                    class="text-success">20</b> new messages in the
                                                                conversation
                                                            </h6>
                                                        </a>
                                                        <p class="mb-0 fs-11 fw-medium text-uppercase text-muted">
                                                            <span><i class="mdi mdi-clock-outline"></i> 2 hrs
                                                                ago</span>
                                                        </p>
                                                    </div>
                                                    <div class="px-2 fs-15">
                                                        <div class="form-check notification-check">
                                                            <input class="form-check-input" type="checkbox"
                                                                value="" id="all-notification-check03">
                                                            <label class="form-check-label"
                                                                for="all-notification-check03"></label>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                            <div
                                                class="text-reset notification-item d-block dropdown-item position-relative">
                                                <div class="d-flex">
                                                    <img src="assets/images/users/avatar-8.jpg"
                                                        class="flex-shrink-0 me-3 rounded-circle avatar-xs"
                                                        alt="user-pic">
                                                    <div class="flex-grow-1">
                                                        <a href="#!" class="stretched-link">
                                                            <h6 class="mt-0 mb-1 fs-13 fw-semibold">Maureen Gibson</h6>
                                                        </a>
                                                        <div class="fs-13 text-muted">
                                                            <p class="mb-1">We talked about a project on linkedin.
                                                            </p>
                                                        </div>
                                                        <p class="mb-0 fs-11 fw-medium text-uppercase text-muted">
                                                            <span><i class="mdi mdi-clock-outline"></i> 4 hrs
                                                                ago</span>
                                                        </p>
                                                    </div>
                                                    <div class="px-2 fs-15">
                                                        <div class="form-check notification-check">
                                                            <input class="form-check-input" type="checkbox"
                                                                value="" id="all-notification-check04">
                                                            <label class="form-check-label"
                                                                for="all-notification-check04"></label>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="my-3 text-center view-all">
                                                <button type="button"
                                                    class="btn btn-soft-success waves-effect waves-light">View
                                                    All Notifications <i
                                                        class="align-middle ri-arrow-right-line"></i></button>
                                            </div>
                                        </div>

                                    </div>

                                    <div class="py-2 tab-pane fade ps-2" id="messages-tab" role="tabpanel"
                                        aria-labelledby="messages-tab">
                                        <div data-simplebar style="max-height: 300px;" class="pe-2">
                                            <div class="text-reset notification-item d-block dropdown-item">
                                                <div class="d-flex">
                                                    <img src="assets/images/users/avatar-3.jpg"
                                                        class="me-3 rounded-circle avatar-xs" alt="user-pic">
                                                    <div class="flex-grow-1">
                                                        <a href="#!" class="stretched-link">
                                                            <h6 class="mt-0 mb-1 fs-13 fw-semibold">James Lemire</h6>
                                                        </a>
                                                        <div class="fs-13 text-muted">
                                                            <p class="mb-1">We talked about a project on linkedin.
                                                            </p>
                                                        </div>
                                                        <p class="mb-0 fs-11 fw-medium text-uppercase text-muted">
                                                            <span><i class="mdi mdi-clock-outline"></i> 30 min
                                                                ago</span>
                                                        </p>
                                                    </div>
                                                    <div class="px-2 fs-15">
                                                        <div class="form-check notification-check">
                                                            <input class="form-check-input" type="checkbox"
                                                                value="" id="messages-notification-check01">
                                                            <label class="form-check-label"
                                                                for="messages-notification-check01"></label>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="text-reset notification-item d-block dropdown-item">
                                                <div class="d-flex">
                                                    <img src="assets/images/users/avatar-2.jpg"
                                                        class="me-3 rounded-circle avatar-xs" alt="user-pic">
                                                    <div class="flex-grow-1">
                                                        <a href="#!" class="stretched-link">
                                                            <h6 class="mt-0 mb-1 fs-13 fw-semibold">Angela Bernier</h6>
                                                        </a>
                                                        <div class="fs-13 text-muted">
                                                            <p class="mb-1">Answered to your comment on the cash flow
                                                                forecast's
                                                                graph 🔔.</p>
                                                        </div>
                                                        <p class="mb-0 fs-11 fw-medium text-uppercase text-muted">
                                                            <span><i class="mdi mdi-clock-outline"></i> 2 hrs
                                                                ago</span>
                                                        </p>
                                                    </div>
                                                    <div class="px-2 fs-15">
                                                        <div class="form-check notification-check">
                                                            <input class="form-check-input" type="checkbox"
                                                                value="" id="messages-notification-check02">
                                                            <label class="form-check-label"
                                                                for="messages-notification-check02"></label>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="text-reset notification-item d-block dropdown-item">
                                                <div class="d-flex">
                                                    <img src="assets/images/users/avatar-6.jpg"
                                                        class="me-3 rounded-circle avatar-xs" alt="user-pic">
                                                    <div class="flex-grow-1">
                                                        <a href="#!" class="stretched-link">
                                                            <h6 class="mt-0 mb-1 fs-13 fw-semibold">Kenneth Brown</h6>
                                                        </a>
                                                        <div class="fs-13 text-muted">
                                                            <p class="mb-1">Mentionned you in his comment on 📃
                                                                invoice #12501.
                                                            </p>
                                                        </div>
                                                        <p class="mb-0 fs-11 fw-medium text-uppercase text-muted">
                                                            <span><i class="mdi mdi-clock-outline"></i> 10 hrs
                                                                ago</span>
                                                        </p>
                                                    </div>
                                                    <div class="px-2 fs-15">
                                                        <div class="form-check notification-check">
                                                            <input class="form-check-input" type="checkbox"
                                                                value="" id="messages-notification-check03">
                                                            <label class="form-check-label"
                                                                for="messages-notification-check03"></label>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="text-reset notification-item d-block dropdown-item">
                                                <div class="d-flex">
                                                    <img src="assets/images/users/avatar-8.jpg"
                                                        class="me-3 rounded-circle avatar-xs" alt="user-pic">
                                                    <div class="flex-grow-1">
                                                        <a href="#!" class="stretched-link">
                                                            <h6 class="mt-0 mb-1 fs-13 fw-semibold">Maureen Gibson</h6>
                                                        </a>
                                                        <div class="fs-13 text-muted">
                                                            <p class="mb-1">We talked about a project on linkedin.
                                                            </p>
                                                        </div>
                                                        <p class="mb-0 fs-11 fw-medium text-uppercase text-muted">
                                                            <span><i class="mdi mdi-clock-outline"></i> 3 days
                                                                ago</span>
                                                        </p>
                                                    </div>
                                                    <div class="px-2 fs-15">
                                                        <div class="form-check notification-check">
                                                            <input class="form-check-input" type="checkbox"
                                                                value="" id="messages-notification-check04">
                                                            <label class="form-check-label"
                                                                for="messages-notification-check04"></label>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="my-3 text-center view-all">
                                                <button type="button"
                                                    class="btn btn-soft-success waves-effect waves-light">View
                                                    All Messages <i
                                                        class="align-middle ri-arrow-right-line"></i></button>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="p-4 tab-pane fade" id="alerts-tab" role="tabpanel"
                                        aria-labelledby="alerts-tab"></div>

                                    <div class="notification-actions" id="notification-actions">
                                        <div class="d-flex text-muted justify-content-center">
                                            Select <div id="select-content" class="px-1 text-body fw-semibold">0</div>
                                            Result <button type="button" class="p-0 btn btn-link link-danger ms-3"
                                                data-bs-toggle="modal"
                                                data-bs-target="#removeNotificationModal">Remove</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="dropdown ms-sm-3 header-item topbar-user">
                            <button type="button" class="btn" id="page-header-user-dropdown"
                                data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <span class="d-flex align-items-center">
                                    <img class="rounded-circle header-profile-user"
                                        src="assets/images/users/avatar-1.jpg" alt="Header Avatar">
                                    <span class="text-start ms-xl-2">
                                        <span class="d-none d-xl-inline-block ms-1 fw-medium user-name-text">Anna
                                            Adame</span>
                                        <span class="d-none d-xl-block ms-1 fs-12 user-name-sub-text">Founder</span>
                                    </span>
                                </span>
                            </button>
                            <div class="dropdown-menu dropdown-menu-end">
                                <!-- item-->
                                <h6 class="dropdown-header">Welcome Anna!</h6>
                                <a class="dropdown-item" href="pages-profile.html"><i
                                        class="align-middle mdi mdi-account-circle text-muted fs-16 me-1"></i> <span
                                        class="align-middle">Profile</span></a>
                                <a class="dropdown-item" href="apps-chat.html"><i
                                        class="align-middle mdi mdi-message-text-outline text-muted fs-16 me-1"></i>
                                    <span class="align-middle">Messages</span></a>
                                <a class="dropdown-item" href="apps-tasks-kanban.html"><i
                                        class="align-middle mdi mdi-calendar-check-outline text-muted fs-16 me-1"></i>
                                    <span class="align-middle">Taskboard</span></a>
                                <a class="dropdown-item" href="pages-faqs.html"><i
                                        class="align-middle mdi mdi-lifebuoy text-muted fs-16 me-1"></i> <span
                                        class="align-middle">Help</span></a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="pages-profile.html"><i
                                        class="align-middle mdi mdi-wallet text-muted fs-16 me-1"></i> <span
                                        class="align-middle">Balance : <b>$5971.67</b></span></a>
                                <a class="dropdown-item" href="pages-profile-settings.html"><span
                                        class="mt-1 badge bg-success-subtle text-success float-end">New</span><i
                                        class="align-middle mdi mdi-cog-outline text-muted fs-16 me-1"></i> <span
                                        class="align-middle">Settings</span></a>
                                <a class="dropdown-item" href="auth-lockscreen-basic.html"><i
                                        class="align-middle mdi mdi-lock text-muted fs-16 me-1"></i> <span
                                        class="align-middle">Lock screen</span></a>
                                <a class="dropdown-item" href="auth-logout-basic.html"><i
                                        class="align-middle mdi mdi-logout text-muted fs-16 me-1"></i> <span
                                        class="align-middle" data-key="t-logout">Logout</span></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </header>

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
                                colors="primary:#f7b84b,secondary:#f06548"
                                style="width:100px;height:100px"></lord-icon>
                            <div class="pt-2 mx-4 mt-4 fs-15 mx-sm-5">
                                <h4>Are you sure ?</h4>
                                <p class="mx-4 mb-0 text-muted">Are you sure you want to remove this Notification ?</p>
                            </div>
                        </div>
                        <div class="gap-2 mt-4 mb-2 d-flex justify-content-center">
                            <button type="button" class="btn w-sm btn-light" data-bs-dismiss="modal">Close</button>
                            <button type="button" class="btn w-sm btn-danger" id="delete-notification">Yes, Delete
                                It!</button>
                        </div>
                    </div>

                </div><!-- /.modal-content -->
            </div><!-- /.modal-dialog -->
        </div><!-- /.modal -->
        <!-- ========== App Menu ========== -->
        <div class="app-menu navbar-menu">
            <!-- LOGO -->
            <div class="navbar-brand-box">
                <!-- Dark Logo-->
                <a href="index.html" class="logo logo-dark">
                    <span class="logo-sm">
                        <img src="assets/images/logo-sm.png" alt="" height="22">
                    </span>
                    <span class="logo-lg">
                        <img src="assets/images/logo-dark.png" alt="" height="17">
                    </span>
                </a>
                <!-- Light Logo-->
                <a href="index.html" class="logo logo-light">
                    <span class="logo-sm">
                        <img src="assets/images/logo-sm.png" alt="" height="22">
                    </span>
                    <span class="logo-lg">
                        <img src="assets/images/logo-light.png" alt="" height="17">
                    </span>
                </a>
                <button type="button" class="p-0 btn btn-sm fs-20 header-item float-end btn-vertical-sm-hover"
                    id="vertical-hover">
                    <i class="ri-record-circle-line"></i>
                </button>
            </div>

            <div id="scrollbar">
                <div class="container-fluid">

                    <div id="two-column-menu">
                    </div>
                    <ul class="navbar-nav" id="navbar-nav">
                        <li class="menu-title"><span data-key="t-menu">Menu</span></li>
                        <li class="nav-item">
                            <a class="nav-link menu-link" href="#sidebarDashboards" data-bs-toggle="collapse"
                                role="button" aria-expanded="false" aria-controls="sidebarDashboards">
                                <i class="las la-tachometer-alt"></i> <span data-key="t-dashboards">Dashboards</span>
                            </a>
                            <div class="collapse menu-dropdown" id="sidebarDashboards">
                 
                </div>
                </li>

                <li class="nav-item">
                    <a class="nav-link menu-link" href="#sidebarLayouts" data-bs-toggle="collapse"
                        role="button" aria-expanded="false" aria-controls="sidebarLayouts">
                        <i class="las la-columns"></i> <span data-key="t-layouts">Layouts</span> <span
                            class="badge badge-pill bg-danger" data-key="t-hot">Hot</span>
                    </a>
                    <div class="collapse menu-dropdown" id="sidebarLayouts">
                        <ul class="nav nav-sm flex-column">
                            <li class="nav-item">
                                <a href="layouts-horizontal.html" target="_blank" class="nav-link"
                                    data-key="t-horizontal">Horizontal</a>
                            </li>
                            <li class="nav-item">
                                <a href="layouts-detached.html" target="_blank" class="nav-link"
                                    data-key="t-detached">Detached</a>
                            </li>
                            <li class="nav-item">
                                <a href="layouts-two-column.html" target="_blank" class="nav-link"
                                    data-key="t-two-column">Two Column</a>
                            </li>
                            <li class="nav-item">
                                <a href="layouts-vertical-hovered.html" target="_blank" class="nav-link"
                                    data-key="t-hovered">Hovered</a>
                            </li>
                        </ul>
                    </div>
                </li> <!-- end Dashboard Menu -->


                <li class="nav-item">
                    <a class="nav-link menu-link" href="#sidebarPages" data-bs-toggle="collapse" role="button"
                        aria-expanded="false" aria-controls="sidebarPages">
                        <i class="las la-pager"></i> <span data-key="t-pages">Pages</span>
                    </a>
                    <div class="collapse menu-dropdown" id="sidebarPages">
                        <ul class="nav nav-sm flex-column">


                        </ul>
                    </div>
                </li>

                <li class="nav-item">
                    <a class="nav-link menu-link" href="#sidebarLanding" data-bs-toggle="collapse"
                        role="button" aria-expanded="false" aria-controls="sidebarLanding">
                        <i class="ri-rocket-line"></i> <span data-key="t-landing">Landing</span>
                    </a>
                    <div class="collapse menu-dropdown" id="sidebarLanding">
                        <ul class="nav nav-sm flex-column">
                            <li class="nav-item">
                                <a href="landing.html" class="nav-link" data-key="t-one-page"> One Page
                                </a>
                            </li>
                            <!-- <li class="nav-item">
                                        <a href="nft-landing.html" class="nav-link" data-key="t-nft-landing"> NFT Landing </a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="job-landing.html" class="nav-link" data-key="t-job">Job</a>
                                    </li> -->
                        </ul>
                    </div>
                </li>









                </ul>
            </div>
            <!-- Sidebar -->
        </div>

        <div class="sidebar-background"></div>
    </div>
  

    <!-- ============================================================== -->
    <!-- Start right Content here -->
    <!-- ============================================================== -->
    <div class="main-content">

        <div class="page-content">
            <div class="container-fluid">

                <div class="row">
                    <div class="col">

                        <div class="h-100">
                            <div class="pb-1 mb-3 row">
                                <div class="col-12">
                                    <div class="d-flex align-items-lg-center flex-lg-row flex-column">
                                        <div class="flex-grow-1">
                                            <h4 class="mb-1 fs-16">Good Morning, Anna!</h4>
                                            <p class="mb-0 text-muted">Here's what's happening with your store
                                                today.</p>
                                        </div>
                                        <div class="mt-3 mt-lg-0">
                                            <form action="javascript:void(0);">
                                                <div class="mb-0 row g-3 align-items-center">
                                                    <div class="col-sm-auto">
                                                        <div class="input-group">
                                                            <input type="text"
                                                                class="border-0 shadow form-control fs-13 dash-filter-picker"
                                                                data-provider="flatpickr" data-range-date="true"
                                                                data-date-format="d M, Y"
                                                                data-deafult-date="01 Jan 2022 to 31 Jan 2022">
                                                            <div
                                                                class="text-white input-group-text bg-secondary border-secondary">
                                                                <i class="ri-calendar-2-line"></i>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <!--end col-->
                                                    <div class="col-auto">
                                                        <button type="button" class="btn btn-soft-success"><i
                                                                class="align-middle ri-add-circle-line me-1"></i>
                                                            Add Product</button>
                                                    </div>
                                                    <!--end col-->
                                                    <div class="col-auto">
                                                        <button type="button"
                                                            class="btn btn-soft-info btn-icon waves-effect waves-light layout-rightside-btn"><i
                                                                class="ri-pulse-line"></i></button>
                                                    </div>
                                                    <!--end col-->
                                                </div>
                                                <!--end row-->
                                            </form>
                                        </div>
                                    </div><!-- end card header -->
                                </div>
                                <!--end col-->
                            </div>
                            <!--end row-->

                            <div class="row">
                                <div class="col-xl-3 col-md-6">
                                    <!-- card -->
                                    <div class="card card-animate">
                                        <div class="card-body">
                                            <div class="d-flex align-items-center">
                                                <div class="overflow-hidden flex-grow-1">
                                                    <p class="mb-0 text-uppercase fw-medium text-muted text-truncate">
                                                        Total Earnings</p>
                                                </div>
                                                <div class="flex-shrink-0">
                                                    <h5 class="mb-0 text-success fs-14">
                                                        <i class="align-middle ri-arrow-right-up-line fs-13"></i>
                                                        +16.24 %
                                                    </h5>
                                                </div>
                                            </div>
                                            <div class="mt-4 d-flex align-items-end justify-content-between">
                                                <div>
                                                    <h4 class="mb-4 fs-22 fw-semibold ff-secondary">$<span
                                                            class="counter-value" data-target="559.25">0</span>k
                                                    </h4>
                                                    <a href="#"
                                                        class="text-decoration-underline text-muted">View net
                                                        earnings</a>
                                                </div>
                                                <div class="flex-shrink-0 avatar-sm">
                                                    <span class="rounded avatar-title bg-success-subtle fs-3">
                                                        <i class="bx bx-dollar-circle text-success"></i>
                                                    </span>
                                                </div>
                                            </div>
                                        </div><!-- end card body -->
                                    </div><!-- end card -->
                                </div><!-- end col -->

                                <div class="col-xl-3 col-md-6">
                                    <!-- card -->
                                    <div class="card card-animate">
                                        <div class="card-body">
                                            <div class="d-flex align-items-center">
                                                <div class="overflow-hidden flex-grow-1">
                                                    <p class="mb-0 text-uppercase fw-medium text-muted text-truncate">
                                                        Orders</p>
                                                </div>
                                                <div class="flex-shrink-0">
                                                    <h5 class="mb-0 text-danger fs-14">
                                                        <i class="align-middle ri-arrow-right-down-line fs-13"></i>
                                                        -3.57 %
                                                    </h5>
                                                </div>
                                            </div>
                                            <div class="mt-4 d-flex align-items-end justify-content-between">
                                                <div>
                                                    <h4 class="mb-4 fs-22 fw-semibold ff-secondary"><span
                                                            class="counter-value" data-target="36894">0</span>
                                                    </h4>
                                                    <a href="#"
                                                        class="text-decoration-underline text-muted">View all
                                                        orders</a>
                                                </div>
                                                <div class="flex-shrink-0 avatar-sm">
                                                    <span class="rounded avatar-title bg-info-subtle fs-3">
                                                        <i class="bx bx-shopping-bag text-info"></i>
                                                    </span>
                                                </div>
                                            </div>
                                        </div><!-- end card body -->
                                    </div><!-- end card -->
                                </div><!-- end col -->

                                <div class="col-xl-3 col-md-6">
                                    <!-- card -->
                                    <div class="card card-animate">
                                        <div class="card-body">
                                            <div class="d-flex align-items-center">
                                                <div class="overflow-hidden flex-grow-1">
                                                    <p class="mb-0 text-uppercase fw-medium text-muted text-truncate">
                                                        Customers</p>
                                                </div>
                                                <div class="flex-shrink-0">
                                                    <h5 class="mb-0 text-success fs-14">
                                                        <i class="align-middle ri-arrow-right-up-line fs-13"></i>
                                                        +29.08 %
                                                    </h5>
                                                </div>
                                            </div>
                                            <div class="mt-4 d-flex align-items-end justify-content-between">
                                                <div>
                                                    <h4 class="mb-4 fs-22 fw-semibold ff-secondary"><span
                                                            class="counter-value" data-target="183.35">0</span>M
                                                    </h4>
                                                    <a href="#"
                                                        class="text-decoration-underline text-muted">See
                                                        details</a>
                                                </div>
                                                <div class="flex-shrink-0 avatar-sm">
                                                    <span class="rounded avatar-title bg-warning-subtle fs-3">
                                                        <i class="bx bx-user-circle text-warning"></i>
                                                    </span>
                                                </div>
                                            </div>
                                        </div><!-- end card body -->
                                    </div><!-- end card -->
                                </div><!-- end col -->

                                <div class="col-xl-3 col-md-6">
                                    <!-- card -->
                                    <div class="card card-animate">
                                        <div class="card-body">
                                            <div class="d-flex align-items-center">
                                                <div class="overflow-hidden flex-grow-1">
                                                    <p class="mb-0 text-uppercase fw-medium text-muted text-truncate">
                                                        My Balance</p>
                                                </div>
                                                <div class="flex-shrink-0">
                                                    <h5 class="mb-0 text-muted fs-14">
                                                        +0.00 %
                                                    </h5>
                                                </div>
                                            </div>
                                            <div class="mt-4 d-flex align-items-end justify-content-between">
                                                <div>
                                                    <h4 class="mb-4 fs-22 fw-semibold ff-secondary">$<span
                                                            class="counter-value" data-target="165.89">0</span>k
                                                    </h4>
                                                    <a href="#"
                                                        class="text-decoration-underline text-muted">Withdraw
                                                        money</a>
                                                </div>
                                                <div class="flex-shrink-0 avatar-sm">
                                                    <span class="rounded avatar-title bg-primary-subtle fs-3">
                                                        <i class="bx bx-wallet text-primary"></i>
                                                    </span>
                                                </div>
                                            </div>
                                        </div><!-- end card body -->
                                    </div><!-- end card -->
                                </div><!-- end col -->
                            </div> <!-- end row-->

                            <div class="row">
                                <div class="col-xl-8">
                                    <div class="card">
                                        <div class="border-0 card-header align-items-center d-flex">
                                            <h4 class="mb-0 card-title flex-grow-1">Revenue</h4>
                                            <div>
                                                <button type="button" class="btn btn-soft-secondary btn-sm">
                                                    ALL
                                                </button>
                                                <button type="button" class="btn btn-soft-secondary btn-sm">
                                                    1M
                                                </button>
                                                <button type="button" class="btn btn-soft-secondary btn-sm">
                                                    6M
                                                </button>
                                                <button type="button" class="btn btn-soft-primary btn-sm">
                                                    1Y
                                                </button>
                                            </div>
                                        </div><!-- end card header -->

                                        <div class="p-0 border-0 card-header bg-light-subtle">
                                            <div class="text-center row g-0">
                                                <div class="col-6 col-sm-3">
                                                    <div class="p-3 border border-dashed border-start-0">
                                                        <h5 class="mb-1"><span class="counter-value"
                                                                data-target="7585">0</span></h5>
                                                        <p class="mb-0 text-muted">Orders</p>
                                                    </div>
                                                </div>
                                                <!--end col-->
                                                <div class="col-6 col-sm-3">
                                                    <div class="p-3 border border-dashed border-start-0">
                                                        <h5 class="mb-1">$<span class="counter-value"
                                                                data-target="22.89">0</span>k</h5>
                                                        <p class="mb-0 text-muted">Earnings</p>
                                                    </div>
                                                </div>
                                                <!--end col-->
                                                <div class="col-6 col-sm-3">
                                                    <div class="p-3 border border-dashed border-start-0">
                                                        <h5 class="mb-1"><span class="counter-value"
                                                                data-target="367">0</span></h5>
                                                        <p class="mb-0 text-muted">Refunds</p>
                                                    </div>
                                                </div>
                                                <!--end col-->
                                                <div class="col-6 col-sm-3">
                                                    <div class="p-3 border border-dashed border-start-0 border-end-0">
                                                        <h5 class="mb-1 text-success"><span class="counter-value"
                                                                data-target="18.92">0</span>%</h5>
                                                        <p class="mb-0 text-muted">Conversation Ratio</p>
                                                    </div>
                                                </div>
                                                <!--end col-->
                                            </div>
                                        </div><!-- end card header -->

                                        <div class="p-0 pb-2 card-body">
                                            <div class="w-100">
                                                <div id="customer_impression_charts"
                                                    data-colors='["--vz-warning", "--vz-primary", "--vz-success"]'
                                                    class="apex-charts" dir="ltr"></div>
                                            </div>
                                        </div><!-- end card body -->
                                    </div><!-- end card -->
                                </div><!-- end col -->

                                <div class="col-xl-4">
                                    <!-- card -->
                                    <div class="card card-height-100">
                                        <div class="card-header align-items-center d-flex">
                                            <h4 class="mb-0 card-title flex-grow-1">Sales by Locations</h4>
                                            <div class="flex-shrink-0">
                                                <button type="button" class="btn btn-soft-primary btn-sm">
                                                    Export Report
                                                </button>
                                            </div>
                                        </div><!-- end card header -->

                                        <!-- card body -->
                                        <div class="card-body">

                                            <div id="sales-by-locations"
                                                data-colors='["--vz-light", "--vz-warning", "--vz-primary"]'
                                                style="height: 269px" dir="ltr"></div>

                                            <div class="px-2 py-2 mt-1">
                                                <p class="mb-1">Canada <span class="float-end">75%</span></p>
                                                <div class="mt-2 progress" style="height: 6px;">
                                                    <div class="progress-bar progress-bar-striped bg-primary"
                                                        role="progressbar" style="width: 75%" aria-valuenow="75"
                                                        aria-valuemin="0" aria-valuemax="75">
                                                    </div>
                                                </div>

                                                <p class="mt-3 mb-1">Greenland <span class="float-end">47%</span>
                                                </p>
                                                <div class="mt-2 progress" style="height: 6px;">
                                                    <div class="progress-bar progress-bar-striped bg-primary"
                                                        role="progressbar" style="width: 47%" aria-valuenow="47"
                                                        aria-valuemin="0" aria-valuemax="47">
                                                    </div>
                                                </div>

                                                <p class="mt-3 mb-1">Russia <span class="float-end">82%</span>
                                                </p>
                                                <div class="mt-2 progress" style="height: 6px;">
                                                    <div class="progress-bar progress-bar-striped bg-primary"
                                                        role="progressbar" style="width: 82%" aria-valuenow="82"
                                                        aria-valuemin="0" aria-valuemax="82">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- end card body -->
                                    </div>
                                    <!-- end card -->
                                </div>
                                <!-- end col -->
                            </div>

                            <div class="row">
                                <div class="col-xl-6">
                                    <div class="card">
                                        <div class="card-header align-items-center d-flex">
                                            <h4 class="mb-0 card-title flex-grow-1">Best Selling Products</h4>
                                            <div class="flex-shrink-0">
                                                <div class="dropdown card-header-dropdown">
                                                    <a class="text-reset dropdown-btn" href="#"
                                                        data-bs-toggle="dropdown" aria-haspopup="true"
                                                        aria-expanded="false">
                                                        <span class="fw-semibold text-uppercase fs-13">Sort by:
                                                        </span><span class="text-muted">Today<i
                                                                class="mdi mdi-chevron-down ms-1"></i></span>
                                                    </a>
                                                    <div class="dropdown-menu dropdown-menu-end">
                                                        <a class="dropdown-item" href="#">Today</a>
                                                        <a class="dropdown-item" href="#">Yesterday</a>
                                                        <a class="dropdown-item" href="#">Last 7 Days</a>
                                                        <a class="dropdown-item" href="#">Last 30 Days</a>
                                                        <a class="dropdown-item" href="#">This Month</a>
                                                        <a class="dropdown-item" href="#">Last Month</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div><!-- end card header -->

                                        <div class="card-body">
                                            <div class="table-responsive table-card">
                                                <table
                                                    class="table mb-0 align-middle table-hover table-centered table-nowrap">
                                                    <tbody>
                                                        <tr>
                                                            <td>
                                                                <div class="d-flex align-items-center">
                                                                    <div class="p-1 rounded avatar-sm bg-light me-2">
                                                                        <img src="assets/images/products/img-1.png"
                                                                            alt=""
                                                                            class="img-fluid d-block" />
                                                                    </div>
                                                                    <div>
                                                                        <h5 class="my-1 fs-14"><a
                                                                                href="apps-ecommerce-product-details.html"
                                                                                class="text-reset">Branded
                                                                                T-Shirts</a></h5>
                                                                        <span class="text-muted">24 Apr
                                                                            2021</span>
                                                                    </div>
                                                                </div>
                                                            </td>
                                                            <td>
                                                                <h5 class="my-1 fs-14 fw-normal">$29.00</h5>
                                                                <span class="text-muted">Price</span>
                                                            </td>
                                                            <td>
                                                                <h5 class="my-1 fs-14 fw-normal">62</h5>
                                                                <span class="text-muted">Orders</span>
                                                            </td>
                                                            <td>
                                                                <h5 class="my-1 fs-14 fw-normal">510</h5>
                                                                <span class="text-muted">Stock</span>
                                                            </td>
                                                            <td>
                                                                <h5 class="my-1 fs-14 fw-normal">$1,798</h5>
                                                                <span class="text-muted">Amount</span>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>
                                                                <div class="d-flex align-items-center">
                                                                    <div class="p-1 rounded avatar-sm bg-light me-2">
                                                                        <img src="assets/images/products/img-2.png"
                                                                            alt=""
                                                                            class="img-fluid d-block" />
                                                                    </div>
                                                                    <div>
                                                                        <h5 class="my-1 fs-14"><a
                                                                                href="apps-ecommerce-product-details.html"
                                                                                class="text-reset">Bentwood
                                                                                Chair</a></h5>
                                                                        <span class="text-muted">19 Mar
                                                                            2021</span>
                                                                    </div>
                                                                </div>
                                                            </td>
                                                            <td>
                                                                <h5 class="my-1 fs-14 fw-normal">$85.20</h5>
                                                                <span class="text-muted">Price</span>
                                                            </td>
                                                            <td>
                                                                <h5 class="my-1 fs-14 fw-normal">35</h5>
                                                                <span class="text-muted">Orders</span>
                                                            </td>
                                                            <td>
                                                                <h5 class="my-1 fs-14 fw-normal"><span
                                                                        class="badge bg-danger-subtle text-danger">Out
                                                                        of
                                                                        stock</span> </h5>
                                                                <span class="text-muted">Stock</span>
                                                            </td>
                                                            <td>
                                                                <h5 class="my-1 fs-14 fw-normal">$2982</h5>
                                                                <span class="text-muted">Amount</span>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>
                                                                <div class="d-flex align-items-center">
                                                                    <div class="p-1 rounded avatar-sm bg-light me-2">
                                                                        <img src="assets/images/products/img-3.png"
                                                                            alt=""
                                                                            class="img-fluid d-block" />
                                                                    </div>
                                                                    <div>
                                                                        <h5 class="my-1 fs-14"><a
                                                                                href="apps-ecommerce-product-details.html"
                                                                                class="text-reset">Borosil Paper
                                                                                Cup</a></h5>
                                                                        <span class="text-muted">01 Mar
                                                                            2021</span>
                                                                    </div>
                                                                </div>
                                                            </td>
                                                            <td>
                                                                <h5 class="my-1 fs-14 fw-normal">$14.00</h5>
                                                                <span class="text-muted">Price</span>
                                                            </td>
                                                            <td>
                                                                <h5 class="my-1 fs-14 fw-normal">80</h5>
                                                                <span class="text-muted">Orders</span>
                                                            </td>
                                                            <td>
                                                                <h5 class="my-1 fs-14 fw-normal">749</h5>
                                                                <span class="text-muted">Stock</span>
                                                            </td>
                                                            <td>
                                                                <h5 class="my-1 fs-14 fw-normal">$1120</h5>
                                                                <span class="text-muted">Amount</span>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>
                                                                <div class="d-flex align-items-center">
                                                                    <div class="p-1 rounded avatar-sm bg-light me-2">
                                                                        <img src="assets/images/products/img-4.png"
                                                                            alt=""
                                                                            class="img-fluid d-block" />
                                                                    </div>
                                                                    <div>
                                                                        <h5 class="my-1 fs-14"><a
                                                                                href="apps-ecommerce-product-details.html"
                                                                                class="text-reset">One Seater
                                                                                Sofa</a></h5>
                                                                        <span class="text-muted">11 Feb
                                                                            2021</span>
                                                                    </div>
                                                                </div>
                                                            </td>
                                                            <td>
                                                                <h5 class="my-1 fs-14 fw-normal">$127.50</h5>
                                                                <span class="text-muted">Price</span>
                                                            </td>
                                                            <td>
                                                                <h5 class="my-1 fs-14 fw-normal">56</h5>
                                                                <span class="text-muted">Orders</span>
                                                            </td>
                                                            <td>
                                                                <h5 class="my-1 fs-14 fw-normal"><span
                                                                        class="badge bg-danger-subtle text-danger">Out
                                                                        of
                                                                        stock</span></h5>
                                                                <span class="text-muted">Stock</span>
                                                            </td>
                                                            <td>
                                                                <h5 class="my-1 fs-14 fw-normal">$7140</h5>
                                                                <span class="text-muted">Amount</span>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>
                                                                <div class="d-flex align-items-center">
                                                                    <div class="p-1 rounded avatar-sm bg-light me-2">
                                                                        <img src="assets/images/products/img-5.png"
                                                                            alt=""
                                                                            class="img-fluid d-block" />
                                                                    </div>
                                                                    <div>
                                                                        <h5 class="my-1 fs-14"><a
                                                                                href="apps-ecommerce-product-details.html"
                                                                                class="text-reset">Stillbird
                                                                                Helmet</a></h5>
                                                                        <span class="text-muted">17 Jan
                                                                            2021</span>
                                                                    </div>
                                                                </div>
                                                            </td>
                                                            <td>
                                                                <h5 class="my-1 fs-14 fw-normal">$54</h5>
                                                                <span class="text-muted">Price</span>
                                                            </td>
                                                            <td>
                                                                <h5 class="my-1 fs-14 fw-normal">74</h5>
                                                                <span class="text-muted">Orders</span>
                                                            </td>
                                                            <td>
                                                                <h5 class="my-1 fs-14 fw-normal">805</h5>
                                                                <span class="text-muted">Stock</span>
                                                            </td>
                                                            <td>
                                                                <h5 class="my-1 fs-14 fw-normal">$3996</h5>
                                                                <span class="text-muted">Amount</span>
                                                            </td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </div>

                                            <div
                                                class="pt-2 mt-4 text-center align-items-center justify-content-between row text-sm-start">
                                                <div class="col-sm">
                                                    <div class="text-muted">
                                                        Showing <span class="fw-semibold">5</span> of <span
                                                            class="fw-semibold">25</span> Results
                                                    </div>
                                                </div>
                                                <div class="mt-3 col-sm-auto mt-sm-0">
                                                    <ul
                                                        class="mb-0 pagination pagination-separated pagination-sm justify-content-center">
                                                        <li class="page-item disabled">
                                                            <a href="#" class="page-link">←</a>
                                                        </li>
                                                        <li class="page-item">
                                                            <a href="#" class="page-link">1</a>
                                                        </li>
                                                        <li class="page-item active">
                                                            <a href="#" class="page-link">2</a>
                                                        </li>
                                                        <li class="page-item">
                                                            <a href="#" class="page-link">3</a>
                                                        </li>
                                                        <li class="page-item">
                                                            <a href="#" class="page-link">→</a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>

                                        </div>
                                    </div>
                                </div>

                                <div class="col-xl-6">
                                    <div class="card card-height-100">
                                        <div class="card-header align-items-center d-flex">
                                            <h4 class="mb-0 card-title flex-grow-1">Top Sellers</h4>
                                            <div class="flex-shrink-0">
                                                <div class="dropdown card-header-dropdown">
                                                    <a class="text-reset dropdown-btn" href="#"
                                                        data-bs-toggle="dropdown" aria-haspopup="true"
                                                        aria-expanded="false">
                                                        <span class="text-muted">Report<i
                                                                class="mdi mdi-chevron-down ms-1"></i></span>
                                                    </a>
                                                    <div class="dropdown-menu dropdown-menu-end">
                                                        <a class="dropdown-item" href="#">Download
                                                            Report</a>
                                                        <a class="dropdown-item" href="#">Export</a>
                                                        <a class="dropdown-item" href="#">Import</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div><!-- end card header -->

                                        <div class="card-body">
                                            <div class="table-responsive table-card">
                                                <table
                                                    class="table mb-0 align-middle table-centered table-hover table-nowrap">
                                                    <tbody>
                                                        <tr>
                                                            <td>
                                                                <div class="d-flex align-items-center">
                                                                    <div class="flex-shrink-0 me-2">
                                                                        <img src="assets/images/companies/img-1.png"
                                                                            alt="" class="p-2 avatar-sm" />
                                                                    </div>
                                                                    <div>
                                                                        <h5 class="my-1 fs-14 fw-medium"><a
                                                                                href="apps-ecommerce-seller-details.html"
                                                                                class="text-reset">iTest
                                                                                Factory</a>
                                                                        </h5>
                                                                        <span class="text-muted">Oliver
                                                                            Tyler</span>
                                                                    </div>
                                                                </div>
                                                            </td>
                                                            <td>
                                                                <span class="text-muted">Bags and Wallets</span>
                                                            </td>
                                                            <td>
                                                                <p class="mb-0">8547</p>
                                                                <span class="text-muted">Stock</span>
                                                            </td>
                                                            <td>
                                                                <span class="text-muted">$541200</span>
                                                            </td>
                                                            <td>
                                                                <h5 class="mb-0 fs-14">32%<i
                                                                        class="align-middle ri-bar-chart-fill text-success fs-16 ms-2"></i>
                                                                </h5>
                                                            </td>
                                                        </tr><!-- end -->
                                                        <tr>
                                                            <td>
                                                                <div class="d-flex align-items-center">
                                                                    <div class="flex-shrink-0 me-2">
                                                                        <img src="assets/images/companies/img-2.png"
                                                                            alt="" class="p-2 avatar-sm" />
                                                                    </div>
                                                                    <div class="flex-grow-1">
                                                                        <h5 class="my-1 fs-14 fw-medium"><a
                                                                                href="apps-ecommerce-seller-details.html"
                                                                                class="text-reset">Digitech
                                                                                Galaxy</a></h5>
                                                                        <span class="text-muted">John
                                                                            Roberts</span>
                                                                    </div>
                                                                </div>
                                                            </td>
                                                            <td>
                                                                <span class="text-muted">Watches</span>
                                                            </td>
                                                            <td>
                                                                <p class="mb-0">895</p>
                                                                <span class="text-muted">Stock</span>
                                                            </td>
                                                            <td>
                                                                <span class="text-muted">$75030</span>
                                                            </td>
                                                            <td>
                                                                <h5 class="mb-0 fs-14">79%<i
                                                                        class="align-middle ri-bar-chart-fill text-success fs-16 ms-2"></i>
                                                                </h5>
                                                            </td>
                                                        </tr><!-- end -->
                                                        <tr>
                                                            <td>
                                                                <div class="d-flex align-items-center">
                                                                    <div class="flex-shrink-0 me-2">
                                                                        <img src="assets/images/companies/img-3.png"
                                                                            alt="" class="p-2 avatar-sm" />
                                                                    </div>
                                                                    <div class="flex-gow-1">
                                                                        <h5 class="my-1 fs-14 fw-medium"><a
                                                                                href="apps-ecommerce-seller-details.html"
                                                                                class="text-reset">Nesta
                                                                                Technologies</a></h5>
                                                                        <span class="text-muted">Harley
                                                                            Fuller</span>
                                                                    </div>
                                                                </div>
                                                            </td>
                                                            <td>
                                                                <span class="text-muted">Bike Accessories</span>
                                                            </td>
                                                            <td>
                                                                <p class="mb-0">3470</p>
                                                                <span class="text-muted">Stock</span>
                                                            </td>
                                                            <td>
                                                                <span class="text-muted">$45600</span>
                                                            </td>
                                                            <td>
                                                                <h5 class="mb-0 fs-14">90%<i
                                                                        class="align-middle ri-bar-chart-fill text-success fs-16 ms-2"></i>
                                                                </h5>
                                                            </td>
                                                        </tr><!-- end -->
                                                        <tr>
                                                            <td>
                                                                <div class="d-flex align-items-center">
                                                                    <div class="flex-shrink-0 me-2">
                                                                        <img src="assets/images/companies/img-8.png"
                                                                            alt="" class="p-2 avatar-sm" />
                                                                    </div>
                                                                    <div class="flex-grow-1">
                                                                        <h5 class="my-1 fs-14 fw-medium"><a
                                                                                href="apps-ecommerce-seller-details.html"
                                                                                class="text-reset">Zoetic
                                                                                Fashion</a></h5>
                                                                        <span class="text-muted">James
                                                                            Bowen</span>
                                                                    </div>
                                                                </div>
                                                            </td>
                                                            <td>
                                                                <span class="text-muted">Clothes</span>
                                                            </td>
                                                            <td>
                                                                <p class="mb-0">5488</p>
                                                                <span class="text-muted">Stock</span>
                                                            </td>
                                                            <td>
                                                                <span class="text-muted">$29456</span>
                                                            </td>
                                                            <td>
                                                                <h5 class="mb-0 fs-14">40%<i
                                                                        class="align-middle ri-bar-chart-fill text-success fs-16 ms-2"></i>
                                                                </h5>
                                                            </td>
                                                        </tr><!-- end -->
                                                        <tr>
                                                            <td>
                                                                <div class="d-flex align-items-center">
                                                                    <div class="flex-shrink-0 me-2">
                                                                        <img src="assets/images/companies/img-5.png"
                                                                            alt="" class="p-2 avatar-sm" />
                                                                    </div>
                                                                    <div class="flex-grow-1">
                                                                        <h5 class="my-1 fs-14 fw-medium"><a
                                                                                href="apps-ecommerce-seller-details.html"
                                                                                class="text-reset">Meta4Systems</a>
                                                                        </h5>
                                                                        <span class="text-muted">Zoe Dennis</span>
                                                                    </div>
                                                                </div>
                                                            </td>
                                                            <td>
                                                                <span class="text-muted">Furniture</span>
                                                            </td>
                                                            <td>
                                                                <p class="mb-0">4100</p>
                                                                <span class="text-muted">Stock</span>
                                                            </td>
                                                            <td>
                                                                <span class="text-muted">$11260</span>
                                                            </td>
                                                            <td>
                                                                <h5 class="mb-0 fs-14">57%<i
                                                                        class="align-middle ri-bar-chart-fill text-success fs-16 ms-2"></i>
                                                                </h5>
                                                            </td>
                                                        </tr><!-- end -->
                                                    </tbody>
                                                </table><!-- end table -->
                                            </div>

                                            <div
                                                class="pt-2 mt-4 text-center align-items-center justify-content-between row text-sm-start">
                                                <div class="col-sm">
                                                    <div class="text-muted">
                                                        Showing <span class="fw-semibold">5</span> of <span
                                                            class="fw-semibold">25</span> Results
                                                    </div>
                                                </div>
                                                <div class="mt-3 col-sm-auto mt-sm-0">
                                                    <ul
                                                        class="mb-0 pagination pagination-separated pagination-sm justify-content-center">
                                                        <li class="page-item disabled">
                                                            <a href="#" class="page-link">←</a>
                                                        </li>
                                                        <li class="page-item">
                                                            <a href="#" class="page-link">1</a>
                                                        </li>
                                                        <li class="page-item active">
                                                            <a href="#" class="page-link">2</a>
                                                        </li>
                                                        <li class="page-item">
                                                            <a href="#" class="page-link">3</a>
                                                        </li>
                                                        <li class="page-item">
                                                            <a href="#" class="page-link">→</a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>

                                        </div> <!-- .card-body-->
                                    </div> <!-- .card-->
                                </div> <!-- .col-->
                            </div> <!-- end row-->

                            <div class="row">
                                <div class="col-xl-4">
                                    <div class="card card-height-100">
                                        <div class="card-header align-items-center d-flex">
                                            <h4 class="mb-0 card-title flex-grow-1">Store Visits by Source</h4>
                                            <div class="flex-shrink-0">
                                                <div class="dropdown card-header-dropdown">
                                                    <a class="text-reset dropdown-btn" href="#"
                                                        data-bs-toggle="dropdown" aria-haspopup="true"
                                                        aria-expanded="false">
                                                        <span class="text-muted">Report<i
                                                                class="mdi mdi-chevron-down ms-1"></i></span>
                                                    </a>
                                                    <div class="dropdown-menu dropdown-menu-end">
                                                        <a class="dropdown-item" href="#">Download
                                                            Report</a>
                                                        <a class="dropdown-item" href="#">Export</a>
                                                        <a class="dropdown-item" href="#">Import</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div><!-- end card header -->

                                        <div class="card-body">
                                            <div id="store-visits-source"
                                                data-colors='["--vz-primary", "--vz-success", "--vz-warning", "--vz-danger", "--vz-info"]'
                                                class="apex-charts" dir="ltr"></div>
                                        </div>
                                    </div> <!-- .card-->
                                </div> <!-- .col-->

                                <div class="col-xl-8">
                                    <div class="card">
                                        <div class="card-header align-items-center d-flex">
                                            <h4 class="mb-0 card-title flex-grow-1">Recent Orders</h4>
                                            <div class="flex-shrink-0">
                                                <button type="button" class="btn btn-soft-info btn-sm">
                                                    <i class="align-middle ri-file-list-3-line"></i> Generate
                                                    Report
                                                </button>
                                            </div>
                                        </div><!-- end card header -->

                                        <div class="card-body">
                                            <div class="table-responsive table-card">
                                                <table
                                                    class="table mb-0 align-middle table-borderless table-centered table-nowrap">
                                                    <thead class="text-muted table-light">
                                                        <tr>
                                                            <th scope="col">Order ID</th>
                                                            <th scope="col">Customer</th>
                                                            <th scope="col">Product</th>
                                                            <th scope="col">Amount</th>
                                                            <th scope="col">Vendor</th>
                                                            <th scope="col">Status</th>
                                                            <th scope="col">Rating</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <tr>
                                                            <td>
                                                                <a href="apps-ecommerce-order-details.html"
                                                                    class="fw-medium link-primary">#VZ2112</a>
                                                            </td>
                                                            <td>
                                                                <div class="d-flex align-items-center">
                                                                    <div class="flex-shrink-0 me-2">
                                                                        <img src="assets/images/users/avatar-1.jpg"
                                                                            alt=""
                                                                            class="avatar-xs rounded-circle" />
                                                                    </div>
                                                                    <div class="flex-grow-1">Alex Smith</div>
                                                                </div>
                                                            </td>
                                                            <td>Clothes</td>
                                                            <td>
                                                                <span class="text-success">$109.00</span>
                                                            </td>
                                                            <td>Zoetic Fashion</td>
                                                            <td>
                                                                <span
                                                                    class="badge bg-success-subtle text-success">Paid</span>
                                                            </td>
                                                            <td>
                                                                <h5 class="mb-0 fs-14 fw-medium">5.0<span
                                                                        class="text-muted fs-11 ms-1">(61
                                                                        votes)</span></h5>
                                                            </td>
                                                        </tr><!-- end tr -->
                                                        <tr>
                                                            <td>
                                                                <a href="apps-ecommerce-order-details.html"
                                                                    class="fw-medium link-primary">#VZ2111</a>
                                                            </td>
                                                            <td>
                                                                <div class="d-flex align-items-center">
                                                                    <div class="flex-shrink-0 me-2">
                                                                        <img src="assets/images/users/avatar-2.jpg"
                                                                            alt=""
                                                                            class="avatar-xs rounded-circle" />
                                                                    </div>
                                                                    <div class="flex-grow-1">Jansh Brown</div>
                                                                </div>
                                                            </td>
                                                            <td>Kitchen Storage</td>
                                                            <td>
                                                                <span class="text-success">$149.00</span>
                                                            </td>
                                                            <td>Micro Design</td>
                                                            <td>
                                                                <span
                                                                    class="badge bg-warning-subtle text-warning">Pending</span>
                                                            </td>
                                                            <td>
                                                                <h5 class="mb-0 fs-14 fw-medium">4.5<span
                                                                        class="text-muted fs-11 ms-1">(61
                                                                        votes)</span></h5>
                                                            </td>
                                                        </tr><!-- end tr -->
                                                        <tr>
                                                            <td>
                                                                <a href="apps-ecommerce-order-details.html"
                                                                    class="fw-medium link-primary">#VZ2109</a>
                                                            </td>
                                                            <td>
                                                                <div class="d-flex align-items-center">
                                                                    <div class="flex-shrink-0 me-2">
                                                                        <img src="assets/images/users/avatar-3.jpg"
                                                                            alt=""
                                                                            class="avatar-xs rounded-circle" />
                                                                    </div>
                                                                    <div class="flex-grow-1">Ayaan Bowen</div>
                                                                </div>
                                                            </td>
                                                            <td>Bike Accessories</td>
                                                            <td>
                                                                <span class="text-success">$215.00</span>
                                                            </td>
                                                            <td>Nesta Technologies</td>
                                                            <td>
                                                                <span
                                                                    class="badge bg-success-subtle text-success">Paid</span>
                                                            </td>
                                                            <td>
                                                                <h5 class="mb-0 fs-14 fw-medium">4.9<span
                                                                        class="text-muted fs-11 ms-1">(89
                                                                        votes)</span></h5>
                                                            </td>
                                                        </tr><!-- end tr -->
                                                        <tr>
                                                            <td>
                                                                <a href="apps-ecommerce-order-details.html"
                                                                    class="fw-medium link-primary">#VZ2108</a>
                                                            </td>
                                                            <td>
                                                                <div class="d-flex align-items-center">
                                                                    <div class="flex-shrink-0 me-2">
                                                                        <img src="assets/images/users/avatar-4.jpg"
                                                                            alt=""
                                                                            class="avatar-xs rounded-circle" />
                                                                    </div>
                                                                    <div class="flex-grow-1">Prezy Mark</div>
                                                                </div>
                                                            </td>
                                                            <td>Furniture</td>
                                                            <td>
                                                                <span class="text-success">$199.00</span>
                                                            </td>
                                                            <td>Syntyce Solutions</td>
                                                            <td>
                                                                <span
                                                                    class="badge bg-danger-subtle text-danger">Unpaid</span>
                                                            </td>
                                                            <td>
                                                                <h5 class="mb-0 fs-14 fw-medium">4.3<span
                                                                        class="text-muted fs-11 ms-1">(47
                                                                        votes)</span></h5>
                                                            </td>
                                                        </tr><!-- end tr -->
                                                        <tr>
                                                            <td>
                                                                <a href="apps-ecommerce-order-details.html"
                                                                    class="fw-medium link-primary">#VZ2107</a>
                                                            </td>
                                                            <td>
                                                                <div class="d-flex align-items-center">
                                                                    <div class="flex-shrink-0 me-2">
                                                                        <img src="assets/images/users/avatar-6.jpg"
                                                                            alt=""
                                                                            class="avatar-xs rounded-circle" />
                                                                    </div>
                                                                    <div class="flex-grow-1">Vihan Hudda</div>
                                                                </div>
                                                            </td>
                                                            <td>Bags and Wallets</td>
                                                            <td>
                                                                <span class="text-success">$330.00</span>
                                                            </td>
                                                            <td>iTest Factory</td>
                                                            <td>
                                                                <span
                                                                    class="badge bg-success-subtle text-success">Paid</span>
                                                            </td>
                                                            <td>
                                                                <h5 class="mb-0 fs-14 fw-medium">4.7<span
                                                                        class="text-muted fs-11 ms-1">(161
                                                                        votes)</span></h5>
                                                            </td>
                                                        </tr><!-- end tr -->
                                                    </tbody><!-- end tbody -->
                                                </table><!-- end table -->
                                            </div>
                                        </div>
                                    </div> <!-- .card-->
                                </div> <!-- .col-->
                            </div> <!-- end row-->

                        </div> <!-- end .h-100-->

                    </div> <!-- end col -->

                    {{-- <div class="col-auto layout-rightside-col">
                        <div class="overlay"></div>
                        <div class="layout-rightside">
                            <div class="card h-100 rounded-0">
                                <div class="p-0 card-body">
                                    <div class="p-3">
                                        <h6 class="mb-0 text-muted text-uppercase fw-semibold fs-13">Recent
                                            Activity
                                        </h6>
                                    </div>
                                    <div data-simplebar style="max-height: 410px;" class="p-3 pt-0">
                                        <div class="acitivity-timeline acitivity-main">
                                            <div class="acitivity-item d-flex">
                                                <div class="flex-shrink-0 avatar-xs acitivity-avatar">
                                                    <div
                                                        class="avatar-title bg-success-subtle text-success rounded-circle">
                                                        <i class="ri-shopping-cart-2-line"></i>
                                                    </div>
                                                </div>
                                                <div class="flex-grow-1 ms-3">
                                                    <h6 class="mb-1 lh-base">Purchase by James Price</h6>
                                                    <p class="mb-1 text-muted">Product noise evolve smartwatch
                                                    </p>
                                                    <small class="mb-0 text-muted">02:14 PM Today</small>
                                                </div>
                                            </div>
                                            <div class="py-3 acitivity-item d-flex">
                                                <div class="flex-shrink-0 avatar-xs acitivity-avatar">
                                                    <div
                                                        class="avatar-title bg-danger-subtle text-danger rounded-circle">
                                                        <i class="ri-stack-fill"></i>
                                                    </div>
                                                </div>
                                                <div class="flex-grow-1 ms-3">
                                                    <h6 class="mb-1 lh-base">Added new <span
                                                            class="fw-semibold">style collection</span></h6>
                                                    <p class="mb-1 text-muted">By Nesta Technologies</p>
                                                    <div class="gap-2 p-2 mb-2 border border-dashed d-inline-flex">
                                                        <a href="apps-ecommerce-product-details.html"
                                                            class="p-1 rounded bg-light">
                                                            <img src="assets/images/products/img-8.png"
                                                                alt="" class="img-fluid d-block" />
                                                        </a>
                                                        <a href="apps-ecommerce-product-details.html"
                                                            class="p-1 rounded bg-light">
                                                            <img src="assets/images/products/img-2.png"
                                                                alt="" class="img-fluid d-block" />
                                                        </a>
                                                        <a href="apps-ecommerce-product-details.html"
                                                            class="p-1 rounded bg-light">
                                                            <img src="assets/images/products/img-10.png"
                                                                alt="" class="img-fluid d-block" />
                                                        </a>
                                                    </div>
                                                    <p class="mb-0 text-muted"><small>9:47 PM Yesterday</small>
                                                    </p>
                                                </div>
                                            </div>
                                            <div class="py-3 acitivity-item d-flex">
                                                <div class="flex-shrink-0">
                                                    <img src="assets/images/users/avatar-2.jpg" alt=""
                                                        class="avatar-xs rounded-circle acitivity-avatar">
                                                </div>
                                                <div class="flex-grow-1 ms-3">
                                                    <h6 class="mb-1 lh-base">Natasha Carey have liked the products
                                                    </h6>
                                                    <p class="mb-1 text-muted">Allow users to like products in
                                                        your
                                                        WooCommerce store.</p>
                                                    <small class="mb-0 text-muted">25 Dec, 2021</small>
                                                </div>
                                            </div>
                                            <div class="py-3 acitivity-item d-flex">
                                                <div class="flex-shrink-0">
                                                    <div class="avatar-xs acitivity-avatar">
                                                        <div class="avatar-title rounded-circle bg-secondary">
                                                            <i class="mdi mdi-sale fs-14"></i>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="flex-grow-1 ms-3">
                                                    <h6 class="mb-1 lh-base">Today offers by <a
                                                            href="apps-ecommerce-seller-details.html"
                                                            class="link-secondary">Digitech Galaxy</a></h6>
                                                    <p class="mb-2 text-muted">Offer is valid on orders of Rs.500
                                                        Or
                                                        above for selected products only.</p>
                                                    <small class="mb-0 text-muted">12 Dec, 2021</small>
                                                </div>
                                            </div>
                                            <div class="py-3 acitivity-item d-flex">
                                                <div class="flex-shrink-0">
                                                    <div class="avatar-xs acitivity-avatar">
                                                        <div
                                                            class="avatar-title rounded-circle bg-danger-subtle text-danger">
                                                            <i class="ri-bookmark-fill"></i>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="flex-grow-1 ms-3">
                                                    <h6 class="mb-1 lh-base">Favorite Product</h6>
                                                    <p class="mb-2 text-muted">Esther James have favorited
                                                        product.
                                                    </p>
                                                    <small class="mb-0 text-muted">25 Nov, 2021</small>
                                                </div>
                                            </div>
                                            <div class="py-3 acitivity-item d-flex">
                                                <div class="flex-shrink-0">
                                                    <div class="avatar-xs acitivity-avatar">
                                                        <div class="avatar-title rounded-circle bg-secondary">
                                                            <i class="mdi mdi-sale fs-14"></i>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="flex-grow-1 ms-3">
                                                    <h6 class="mb-1 lh-base">Flash sale starting <span
                                                            class="text-primary">Tomorrow.</span></h6>
                                                    <p class="mb-0 text-muted">Flash sale by <a
                                                            href="javascript:void(0);"
                                                            class="link-secondary fw-medium">Zoetic Fashion</a>
                                                    </p>
                                                    <small class="mb-0 text-muted">22 Oct, 2021</small>
                                                </div>
                                            </div>
                                            <div class="py-3 acitivity-item d-flex">
                                                <div class="flex-shrink-0">
                                                    <div class="avatar-xs acitivity-avatar">
                                                        <div
                                                            class="avatar-title rounded-circle bg-info-subtle text-info">
                                                            <i class="ri-line-chart-line"></i>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="flex-grow-1 ms-3">
                                                    <h6 class="mb-1 lh-base">Monthly sales report</h6>
                                                    <p class="mb-2 text-muted"><span class="text-danger">2 days
                                                            left</span> notification to submit the monthly sales
                                                        report. <a href="javascript:void(0);"
                                                            class="link-warning text-decoration-underline">Reports
                                                            Builder</a></p>
                                                    <small class="mb-0 text-muted">15 Oct</small>
                                                </div>
                                            </div>
                                            <div class="acitivity-item d-flex">
                                                <div class="flex-shrink-0">
                                                    <img src="assets/images/users/avatar-3.jpg" alt=""
                                                        class="avatar-xs rounded-circle acitivity-avatar" />
                                                </div>
                                                <div class="flex-grow-1 ms-3">
                                                    <h6 class="mb-1 lh-base">Frank Hook Commented</h6>
                                                    <p class="mb-2 text-muted fst-italic">" A product that has
                                                        reviews is more likable to be sold than a product. "</p>
                                                    <small class="mb-0 text-muted">26 Aug, 2021</small>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="p-3 mt-2">
                                        <h6 class="mb-3 text-muted text-uppercase fw-semibold fs-13">Top 10
                                            Categories</h6>

                                        <ol class="ps-3 text-muted">
                                            <li class="py-1">
                                                <a href="#" class="text-muted">Mobile & Accessories <span
                                                        class="float-end">(10,294)</span></a>
                                            </li>
                                            <li class="py-1">
                                                <a href="#" class="text-muted">Desktop <span
                                                        class="float-end">(6,256)</span></a>
                                            </li>
                                            <li class="py-1">
                                                <a href="#" class="text-muted">Electronics <span
                                                        class="float-end">(3,479)</span></a>
                                            </li>
                                            <li class="py-1">
                                                <a href="#" class="text-muted">Home & Furniture <span
                                                        class="float-end">(2,275)</span></a>
                                            </li>
                                            <li class="py-1">
                                                <a href="#" class="text-muted">Grocery <span
                                                        class="float-end">(1,950)</span></a>
                                            </li>
                                            <li class="py-1">
                                                <a href="#" class="text-muted">Fashion <span
                                                        class="float-end">(1,582)</span></a>
                                            </li>
                                            <li class="py-1">
                                                <a href="#" class="text-muted">Appliances <span
                                                        class="float-end">(1,037)</span></a>
                                            </li>
                                            <li class="py-1">
                                                <a href="#" class="text-muted">Beauty, Toys & More <span
                                                        class="float-end">(924)</span></a>
                                            </li>
                                            <li class="py-1">
                                                <a href="#" class="text-muted">Food & Drinks <span
                                                        class="float-end">(701)</span></a>
                                            </li>
                                            <li class="py-1">
                                                <a href="#" class="text-muted">Toys & Games <span
                                                        class="float-end">(239)</span></a>
                                            </li>
                                        </ol>
                                        <div class="mt-3 text-center">
                                            <a href="javascript:void(0);"
                                                class="text-muted text-decoration-underline">View all
                                                Categories</a>
                                        </div>
                                    </div>
                                    <div class="p-3">
                                        <h6 class="mb-3 text-muted text-uppercase fw-semibold fs-13">Products
                                            Reviews</h6>
                                        <!-- Swiper -->
                                        <div class="swiper vertical-swiper" style="height: 250px;">
                                            <div class="swiper-wrapper">
                                                <div class="swiper-slide">
                                                    <div class="border border-dashed shadow-none card">
                                                        <div class="card-body">
                                                            <div class="d-flex">
                                                                <div class="flex-shrink-0 avatar-sm">
                                                                    <div class="rounded avatar-title bg-light">
                                                                        <img src="assets/images/companies/img-1.png"
                                                                            alt="" height="30">
                                                                    </div>
                                                                </div>
                                                                <div class="flex-grow-1 ms-3">
                                                                    <div>
                                                                        <p
                                                                            class="mb-1 text-muted fst-italic text-truncate-two-lines">
                                                                            " Great product and looks great, lots of
                                                                            features. "</p>
                                                                        <div class="align-middle fs-11 text-warning">
                                                                            <i class="ri-star-fill"></i>
                                                                            <i class="ri-star-fill"></i>
                                                                            <i class="ri-star-fill"></i>
                                                                            <i class="ri-star-fill"></i>
                                                                            <i class="ri-star-fill"></i>
                                                                        </div>
                                                                    </div>
                                                                    <div class="mb-0 text-end text-muted">
                                                                        - by <cite title="Source Title">Force
                                                                            Medicines</cite>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="swiper-slide">
                                                    <div class="border border-dashed shadow-none card">
                                                        <div class="card-body">
                                                            <div class="d-flex">
                                                                <div class="flex-shrink-0">
                                                                    <img src="assets/images/users/avatar-3.jpg"
                                                                        alt="" class="rounded avatar-sm">
                                                                </div>
                                                                <div class="flex-grow-1 ms-3">
                                                                    <div>
                                                                        <p
                                                                            class="mb-1 text-muted fst-italic text-truncate-two-lines">
                                                                            " Amazing template, very easy to
                                                                            understand and manipulate. "</p>
                                                                        <div class="align-middle fs-11 text-warning">
                                                                            <i class="ri-star-fill"></i>
                                                                            <i class="ri-star-fill"></i>
                                                                            <i class="ri-star-fill"></i>
                                                                            <i class="ri-star-fill"></i>
                                                                            <i class="ri-star-half-fill"></i>
                                                                        </div>
                                                                    </div>
                                                                    <div class="mb-0 text-end text-muted">
                                                                        - by <cite title="Source Title">Henry
                                                                            Baird</cite>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="swiper-slide">
                                                    <div class="border border-dashed shadow-none card">
                                                        <div class="card-body">
                                                            <div class="d-flex">
                                                                <div class="flex-shrink-0 avatar-sm">
                                                                    <div class="rounded avatar-title bg-light">
                                                                        <img src="assets/images/companies/img-8.png"
                                                                            alt="" height="30">
                                                                    </div>
                                                                </div>
                                                                <div class="flex-grow-1 ms-3">
                                                                    <div>
                                                                        <p
                                                                            class="mb-1 text-muted fst-italic text-truncate-two-lines">
                                                                            "Very beautiful product and Very helpful
                                                                            customer service."</p>
                                                                        <div class="align-middle fs-11 text-warning">
                                                                            <i class="ri-star-fill"></i>
                                                                            <i class="ri-star-fill"></i>
                                                                            <i class="ri-star-fill"></i>
                                                                            <i class="ri-star-line"></i>
                                                                            <i class="ri-star-line"></i>
                                                                        </div>
                                                                    </div>
                                                                    <div class="mb-0 text-end text-muted">
                                                                        - by <cite title="Source Title">Zoetic
                                                                            Fashion</cite>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="swiper-slide">
                                                    <div class="border border-dashed shadow-none card">
                                                        <div class="card-body">
                                                            <div class="d-flex">
                                                                <div class="flex-shrink-0">
                                                                    <img src="assets/images/users/avatar-2.jpg"
                                                                        alt="" class="rounded avatar-sm">
                                                                </div>
                                                                <div class="flex-grow-1 ms-3">
                                                                    <div>
                                                                        <p
                                                                            class="mb-1 text-muted fst-italic text-truncate-two-lines">
                                                                            " The product is very beautiful. I like
                                                                            it. "</p>
                                                                        <div class="align-middle fs-11 text-warning">
                                                                            <i class="ri-star-fill"></i>
                                                                            <i class="ri-star-fill"></i>
                                                                            <i class="ri-star-fill"></i>
                                                                            <i class="ri-star-half-fill"></i>
                                                                            <i class="ri-star-line"></i>
                                                                        </div>
                                                                    </div>
                                                                    <div class="mb-0 text-end text-muted">
                                                                        - by <cite title="Source Title">Nancy
                                                                            Martino</cite>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="p-3">
                                        <h6 class="mb-3 text-muted text-uppercase fw-semibold fs-13">Customer
                                            Reviews</h6>
                                        <div class="px-3 py-2 mb-2 bg-light rounded-2">
                                            <div class="d-flex align-items-center">
                                                <div class="flex-grow-1">
                                                    <div class="align-middle fs-16 text-warning">
                                                        <i class="ri-star-fill"></i>
                                                        <i class="ri-star-fill"></i>
                                                        <i class="ri-star-fill"></i>
                                                        <i class="ri-star-fill"></i>
                                                        <i class="ri-star-half-fill"></i>
                                                    </div>
                                                </div>
                                                <div class="flex-shrink-0">
                                                    <h6 class="mb-0">4.5 out of 5</h6>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="text-center">
                                            <div class="text-muted">Total <span class="fw-medium">5.50k</span>
                                                reviews</div>
                                        </div>

                                        <div class="mt-3">
                                            <div class="row align-items-center g-2">
                                                <div class="col-auto">
                                                    <div class="p-1">
                                                        <h6 class="mb-0">5 star</h6>
                                                    </div>
                                                </div>
                                                <div class="col">
                                                    <div class="p-1">
                                                        <div class="progress animated-progress progress-sm">
                                                            <div class="progress-bar bg-success" role="progressbar"
                                                                style="width: 50.16%" aria-valuenow="50.16"
                                                                aria-valuemin="0" aria-valuemax="100"></div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-auto">
                                                    <div class="p-1">
                                                        <h6 class="mb-0 text-muted">2758</h6>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- end row -->

                                            <div class="row align-items-center g-2">
                                                <div class="col-auto">
                                                    <div class="p-1">
                                                        <h6 class="mb-0">4 star</h6>
                                                    </div>
                                                </div>
                                                <div class="col">
                                                    <div class="p-1">
                                                        <div class="progress animated-progress progress-sm">
                                                            <div class="progress-bar bg-success" role="progressbar"
                                                                style="width: 29.32%" aria-valuenow="29.32"
                                                                aria-valuemin="0" aria-valuemax="100"></div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-auto">
                                                    <div class="p-1">
                                                        <h6 class="mb-0 text-muted">1063</h6>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- end row -->

                                            <div class="row align-items-center g-2">
                                                <div class="col-auto">
                                                    <div class="p-1">
                                                        <h6 class="mb-0">3 star</h6>
                                                    </div>
                                                </div>
                                                <div class="col">
                                                    <div class="p-1">
                                                        <div class="progress animated-progress progress-sm">
                                                            <div class="progress-bar bg-warning" role="progressbar"
                                                                style="width: 18.12%" aria-valuenow="18.12"
                                                                aria-valuemin="0" aria-valuemax="100"></div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-auto">
                                                    <div class="p-1">
                                                        <h6 class="mb-0 text-muted">997</h6>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- end row -->

                                            <div class="row align-items-center g-2">
                                                <div class="col-auto">
                                                    <div class="p-1">
                                                        <h6 class="mb-0">2 star</h6>
                                                    </div>
                                                </div>
                                                <div class="col">
                                                    <div class="p-1">
                                                        <div class="progress animated-progress progress-sm">
                                                            <div class="progress-bar bg-success" role="progressbar"
                                                                style="width: 4.98%" aria-valuenow="4.98"
                                                                aria-valuemin="0" aria-valuemax="100"></div>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="col-auto">
                                                    <div class="p-1">
                                                        <h6 class="mb-0 text-muted">227</h6>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- end row -->

                                            <div class="row align-items-center g-2">
                                                <div class="col-auto">
                                                    <div class="p-1">
                                                        <h6 class="mb-0">1 star</h6>
                                                    </div>
                                                </div>
                                                <div class="col">
                                                    <div class="p-1">
                                                        <div class="progress animated-progress progress-sm">
                                                            <div class="progress-bar bg-danger" role="progressbar"
                                                                style="width: 7.42%" aria-valuenow="7.42"
                                                                aria-valuemin="0" aria-valuemax="100"></div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-auto">
                                                    <div class="p-1">
                                                        <h6 class="mb-0 text-muted">408</h6>
                                                    </div>
                                                </div>
                                            </div><!-- end row -->
                                        </div>
                                    </div>

                                    <div class="mx-4 mt-3 mb-0 text-center border-0 card sidebar-alert bg-light">
                                        <div class="card-body">
                                            <img src="assets/images/giftbox.png" alt="">
                                            <div class="mt-4">
                                                <h5>Invite New Seller</h5>
                                                <p class="text-muted lh-base">Refer a new seller to us and earn
                                                    $100
                                                    per refer.</p>
                                                <button type="button"
                                                    class="btn btn-primary btn-label rounded-pill"><i
                                                        class="align-middle ri-mail-fill label-icon rounded-pill fs-16 me-2"></i>
                                                    Invite Now</button>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                            </div> <!-- end card-->
                        </div> <!-- end .rightbar-->

                    </div> <!-- end col --> --}}
                </div>

            </div>
            <!-- container-fluid -->
        </div>
        <!-- End Page-content -->

        <footer class="footer">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-sm-6">
                        <script>
                            document.write(new Date().getFullYear())
                        </script> © Velzon.
                    </div>
                    <div class="col-sm-6">
                        <div class="text-sm-end d-none d-sm-block">
                            Design & Develop by Themesbrand
                        </div>
                    </div>
                </div>
            </div>
        </footer>
    </div>
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
        <div class="p-2 shadow-lg btn-info rounded-pill btn btn-icon btn-lg" data-bs-toggle="offcanvas"
            data-bs-target="#theme-settings-offcanvas" aria-controls="theme-settings-offcanvas">
            <i class='mdi mdi-spin mdi-cog-outline fs-22'></i>
        </div>
    </div>

    <!-- Theme Settings -->
    <div class="border-0 offcanvas offcanvas-end" tabindex="-1" id="theme-settings-offcanvas">
        <div class="p-3 d-flex align-items-center bg-primary bg-gradient offcanvas-header">
            <h5 class="m-0 text-white me-2">Theme Customizer</h5>

            <button type="button" class="btn-close btn-close-white ms-auto" id="customizerclose-btn"
                data-bs-dismiss="offcanvas" aria-label="Close"></button>
        </div>
        <div class="p-0 offcanvas-body">
            <div data-simplebar class="h-100">
                <div class="p-4">
                    <h6 class="mb-0 fw-bold text-uppercase">Layout</h6>
                    <p class="text-muted">Choose your layout</p>

                    <div class="row gy-3">
                        <div class="col-4">
                            <div class="form-check card-radio">
                                <input id="customizer-layout01" name="data-layout" type="radio"
                                    value="vertical" class="form-check-input">
                                <label class="p-0 form-check-label avatar-md w-100" for="customizer-layout01">
                                    <span class="gap-1 d-flex h-100">
                                        <span class="flex-shrink-0">
                                            <span class="gap-1 p-1 bg-light d-flex h-100 flex-column">
                                                <span class="p-1 px-2 mb-2 rounded d-block bg-primary-subtle"></span>
                                                <span class="p-1 px-2 pb-0 d-block bg-primary-subtle"></span>
                                                <span class="p-1 px-2 pb-0 d-block bg-primary-subtle"></span>
                                                <span class="p-1 px-2 pb-0 d-block bg-primary-subtle"></span>
                                            </span>
                                        </span>
                                        <span class="flex-grow-1">
                                            <span class="d-flex h-100 flex-column">
                                                <span class="p-1 bg-light d-block"></span>
                                                <span class="p-1 mt-auto bg-light d-block"></span>
                                            </span>
                                        </span>
                                    </span>
                                </label>
                            </div>
                            <h5 class="mt-2 text-center fs-13">Vertical</h5>
                        </div>
                        <div class="col-4">
                            <div class="form-check card-radio">
                                <input id="customizer-layout02" name="data-layout" type="radio"
                                    value="horizontal" class="form-check-input">
                                <label class="p-0 form-check-label avatar-md w-100" for="customizer-layout02">
                                    <span class="gap-1 d-flex h-100 flex-column">
                                        <span class="gap-1 p-1 bg-light d-flex align-items-center">
                                            <span class="p-1 rounded d-block bg-primary-subtle me-1"></span>
                                            <span class="p-1 px-2 pb-0 d-block bg-primary-subtle ms-auto"></span>
                                            <span class="p-1 px-2 pb-0 d-block bg-primary-subtle"></span>
                                        </span>
                                        <span class="p-1 bg-light d-block"></span>
                                        <span class="p-1 mt-auto bg-light d-block"></span>
                                    </span>
                                </label>
                            </div>
                            <h5 class="mt-2 text-center fs-13">Horizontal</h5>
                        </div>
                        <div class="col-4">
                            <div class="form-check card-radio">
                                <input id="customizer-layout03" name="data-layout" type="radio"
                                    value="twocolumn" class="form-check-input">
                                <label class="p-0 form-check-label avatar-md w-100" for="customizer-layout03">
                                    <span class="gap-1 d-flex h-100">
                                        <span class="flex-shrink-0">
                                            <span class="gap-1 bg-light d-flex h-100 flex-column">
                                                <span class="p-1 mb-2 d-block bg-primary-subtle"></span>
                                                <span class="p-1 pb-0 d-block bg-primary-subtle"></span>
                                                <span class="p-1 pb-0 d-block bg-primary-subtle"></span>
                                                <span class="p-1 pb-0 d-block bg-primary-subtle"></span>
                                            </span>
                                        </span>
                                        <span class="flex-shrink-0">
                                            <span class="gap-1 p-1 bg-light d-flex h-100 flex-column">
                                                <span class="p-1 px-2 pb-0 d-block bg-primary-subtle"></span>
                                                <span class="p-1 px-2 pb-0 d-block bg-primary-subtle"></span>
                                                <span class="p-1 px-2 pb-0 d-block bg-primary-subtle"></span>
                                                <span class="p-1 px-2 pb-0 d-block bg-primary-subtle"></span>
                                            </span>
                                        </span>
                                        <span class="flex-grow-1">
                                            <span class="d-flex h-100 flex-column">
                                                <span class="p-1 bg-light d-block"></span>
                                                <span class="p-1 mt-auto bg-light d-block"></span>
                                            </span>
                                        </span>
                                    </span>
                                </label>
                            </div>
                            <h5 class="mt-2 text-center fs-13">Two Column</h5>
                        </div>
                        <!-- end col -->

                        <div class="col-4">
                            <div class="form-check card-radio">
                                <input id="customizer-layout04" name="data-layout" type="radio"
                                    value="semibox" class="form-check-input">
                                <label class="p-0 form-check-label avatar-md w-100" for="customizer-layout04">
                                    <span class="gap-1 d-flex h-100">
                                        <span class="flex-shrink-0 p-1">
                                            <span class="gap-1 p-1 bg-light d-flex h-100 flex-column">
                                                <span class="p-1 px-2 mb-2 rounded d-block bg-primary-subtle"></span>
                                                <span class="p-1 px-2 pb-0 d-block bg-primary-subtle"></span>
                                                <span class="p-1 px-2 pb-0 d-block bg-primary-subtle"></span>
                                                <span class="p-1 px-2 pb-0 d-block bg-primary-subtle"></span>
                                            </span>
                                        </span>
                                        <span class="flex-grow-1">
                                            <span class="pt-1 d-flex h-100 flex-column pe-2">
                                                <span class="p-1 bg-light d-block"></span>
                                                <span class="p-1 mt-auto bg-light d-block"></span>
                                            </span>
                                        </span>
                                    </span>
                                </label>
                            </div>
                            <h5 class="mt-2 text-center fs-13">Semi Box</h5>
                        </div>
                        <!-- end col -->
                    </div>

                    <h6 class="mt-4 mb-0 fw-bold text-uppercase">Color Scheme</h6>
                    <p class="text-muted">Choose Light or Dark Scheme.</p>

                    <div class="colorscheme-cardradio">
                        <div class="row">
                            <div class="col-4">
                                <div class="form-check card-radio">
                                    <input class="form-check-input" type="radio" name="data-bs-theme"
                                        id="layout-mode-light" value="light">
                                    <label class="p-0 form-check-label avatar-md w-100" for="layout-mode-light">
                                        <span class="gap-1 d-flex h-100">
                                            <span class="flex-shrink-0">
                                                <span class="gap-1 p-1 bg-light d-flex h-100 flex-column">
                                                    <span
                                                        class="p-1 px-2 mb-2 rounded d-block bg-primary-subtle"></span>
                                                    <span class="p-1 px-2 pb-0 d-block bg-primary-subtle"></span>
                                                    <span class="p-1 px-2 pb-0 d-block bg-primary-subtle"></span>
                                                    <span class="p-1 px-2 pb-0 d-block bg-primary-subtle"></span>
                                                </span>
                                            </span>
                                            <span class="flex-grow-1">
                                                <span class="d-flex h-100 flex-column">
                                                    <span class="p-1 bg-light d-block"></span>
                                                    <span class="p-1 mt-auto bg-light d-block"></span>
                                                </span>
                                            </span>
                                        </span>
                                    </label>
                                </div>
                                <h5 class="mt-2 text-center fs-13">Light</h5>
                            </div>

                            <div class="col-4">
                                <div class="form-check card-radio dark">
                                    <input class="form-check-input" type="radio" name="data-bs-theme"
                                        id="layout-mode-dark" value="dark">
                                    <label class="p-0 form-check-label avatar-md w-100 bg-dark"
                                        for="layout-mode-dark">
                                        <span class="gap-1 d-flex h-100">
                                            <span class="flex-shrink-0">
                                                <span
                                                    class="gap-1 p-1 bg-white bg-opacity-10 d-flex h-100 flex-column">
                                                    <span
                                                        class="p-1 px-2 mb-2 bg-white rounded d-block bg-opacity-10"></span>
                                                    <span class="p-1 px-2 pb-0 bg-white d-block bg-opacity-10"></span>
                                                    <span class="p-1 px-2 pb-0 bg-white d-block bg-opacity-10"></span>
                                                    <span class="p-1 px-2 pb-0 bg-white d-block bg-opacity-10"></span>
                                                </span>
                                            </span>
                                            <span class="flex-grow-1">
                                                <span class="d-flex h-100 flex-column">
                                                    <span class="p-1 bg-white bg-opacity-10 d-block"></span>
                                                    <span class="p-1 mt-auto bg-white bg-opacity-10 d-block"></span>
                                                </span>
                                            </span>
                                        </span>
                                    </label>
                                </div>
                                <h5 class="mt-2 text-center fs-13">Dark</h5>
                            </div>
                        </div>
                    </div>

                    <div id="sidebar-visibility">
                        <h6 class="mt-4 mb-0 fw-bold text-uppercase">Sidebar Visibility</h6>
                        <p class="text-muted">Choose show or Hidden sidebar.</p>

                        <div class="row">
                            <div class="col-4">
                                <div class="form-check card-radio">
                                    <input class="form-check-input" type="radio" name="data-sidebar-visibility"
                                        id="sidebar-visibility-show" value="show">
                                    <label class="p-0 form-check-label avatar-md w-100"
                                        for="sidebar-visibility-show">
                                        <span class="gap-1 d-flex h-100">
                                            <span class="flex-shrink-0 p-1">
                                                <span class="gap-1 p-1 bg-light d-flex h-100 flex-column">
                                                    <span
                                                        class="p-1 px-2 mb-2 rounded d-block bg-primary-subtle"></span>
                                                    <span class="p-1 px-2 pb-0 d-block bg-primary-subtle"></span>
                                                    <span class="p-1 px-2 pb-0 d-block bg-primary-subtle"></span>
                                                    <span class="p-1 px-2 pb-0 d-block bg-primary-subtle"></span>
                                                </span>
                                            </span>
                                            <span class="flex-grow-1">
                                                <span class="pt-1 d-flex h-100 flex-column pe-2">
                                                    <span class="p-1 bg-light d-block"></span>
                                                    <span class="p-1 mt-auto bg-light d-block"></span>
                                                </span>
                                            </span>
                                        </span>
                                    </label>
                                </div>
                                <h5 class="mt-2 text-center fs-13">Show</h5>
                            </div>
                            <div class="col-4">
                                <div class="form-check card-radio">
                                    <input class="form-check-input" type="radio" name="data-sidebar-visibility"
                                        id="sidebar-visibility-hidden" value="hidden">
                                    <label class="p-0 px-2 form-check-label avatar-md w-100"
                                        for="sidebar-visibility-hidden">
                                        <span class="gap-1 d-flex h-100">
                                            <span class="flex-grow-1">
                                                <span class="px-2 pt-1 d-flex h-100 flex-column">
                                                    <span class="p-1 bg-light d-block"></span>
                                                    <span class="p-1 mt-auto bg-light d-block"></span>
                                                </span>
                                            </span>
                                        </span>
                                    </label>
                                </div>
                                <h5 class="mt-2 text-center fs-13">Hidden</h5>
                            </div>
                        </div>
                    </div>

                    <div id="layout-width">
                        <h6 class="mt-4 mb-0 fw-bold text-uppercase">Layout Width</h6>
                        <p class="text-muted">Choose Fluid or Boxed layout.</p>

                        <div class="row">
                            <div class="col-4">
                                <div class="form-check card-radio">
                                    <input class="form-check-input" type="radio" name="data-layout-width"
                                        id="layout-width-fluid" value="fluid">
                                    <label class="p-0 form-check-label avatar-md w-100" for="layout-width-fluid">
                                        <span class="gap-1 d-flex h-100">
                                            <span class="flex-shrink-0">
                                                <span class="gap-1 p-1 bg-light d-flex h-100 flex-column">
                                                    <span
                                                        class="p-1 px-2 mb-2 rounded d-block bg-primary-subtle"></span>
                                                    <span class="p-1 px-2 pb-0 d-block bg-primary-subtle"></span>
                                                    <span class="p-1 px-2 pb-0 d-block bg-primary-subtle"></span>
                                                    <span class="p-1 px-2 pb-0 d-block bg-primary-subtle"></span>
                                                </span>
                                            </span>
                                            <span class="flex-grow-1">
                                                <span class="d-flex h-100 flex-column">
                                                    <span class="p-1 bg-light d-block"></span>
                                                    <span class="p-1 mt-auto bg-light d-block"></span>
                                                </span>
                                            </span>
                                        </span>
                                    </label>
                                </div>
                                <h5 class="mt-2 text-center fs-13">Fluid</h5>
                            </div>
                            <div class="col-4">
                                <div class="form-check card-radio">
                                    <input class="form-check-input" type="radio" name="data-layout-width"
                                        id="layout-width-boxed" value="boxed">
                                    <label class="p-0 px-2 form-check-label avatar-md w-100"
                                        for="layout-width-boxed">
                                        <span class="gap-1 d-flex h-100 border-start border-end">
                                            <span class="flex-shrink-0">
                                                <span class="gap-1 p-1 bg-light d-flex h-100 flex-column">
                                                    <span
                                                        class="p-1 px-2 mb-2 rounded d-block bg-primary-subtle"></span>
                                                    <span class="p-1 px-2 pb-0 d-block bg-primary-subtle"></span>
                                                    <span class="p-1 px-2 pb-0 d-block bg-primary-subtle"></span>
                                                    <span class="p-1 px-2 pb-0 d-block bg-primary-subtle"></span>
                                                </span>
                                            </span>
                                            <span class="flex-grow-1">
                                                <span class="d-flex h-100 flex-column">
                                                    <span class="p-1 bg-light d-block"></span>
                                                    <span class="p-1 mt-auto bg-light d-block"></span>
                                                </span>
                                            </span>
                                        </span>
                                    </label>
                                </div>
                                <h5 class="mt-2 text-center fs-13">Boxed</h5>
                            </div>
                        </div>
                    </div>

                    <div id="layout-position">
                        <h6 class="mt-4 mb-0 fw-bold text-uppercase">Layout Position</h6>
                        <p class="text-muted">Choose Fixed or Scrollable Layout Position.</p>

                        <div class="btn-group radio" role="group">
                            <input type="radio" class="btn-check" name="data-layout-position"
                                id="layout-position-fixed" value="fixed">
                            <label class="btn btn-light w-sm" for="layout-position-fixed">Fixed</label>

                            <input type="radio" class="btn-check" name="data-layout-position"
                                id="layout-position-scrollable" value="scrollable">
                            <label class="btn btn-light w-sm ms-0"
                                for="layout-position-scrollable">Scrollable</label>
                        </div>
                    </div>
                    <h6 class="mt-4 mb-0 fw-bold text-uppercase">Topbar Color</h6>
                    <p class="text-muted">Choose Light or Dark Topbar Color.</p>

                    <div class="row">
                        <div class="col-4">
                            <div class="form-check card-radio">
                                <input class="form-check-input" type="radio" name="data-topbar"
                                    id="topbar-color-light" value="light">
                                <label class="p-0 form-check-label avatar-md w-100" for="topbar-color-light">
                                    <span class="gap-1 d-flex h-100">
                                        <span class="flex-shrink-0">
                                            <span class="gap-1 p-1 bg-light d-flex h-100 flex-column">
                                                <span class="p-1 px-2 mb-2 rounded d-block bg-primary-subtle"></span>
                                                <span class="p-1 px-2 pb-0 d-block bg-primary-subtle"></span>
                                                <span class="p-1 px-2 pb-0 d-block bg-primary-subtle"></span>
                                                <span class="p-1 px-2 pb-0 d-block bg-primary-subtle"></span>
                                            </span>
                                        </span>
                                        <span class="flex-grow-1">
                                            <span class="d-flex h-100 flex-column">
                                                <span class="p-1 bg-light d-block"></span>
                                                <span class="p-1 mt-auto bg-light d-block"></span>
                                            </span>
                                        </span>
                                    </span>
                                </label>
                            </div>
                            <h5 class="mt-2 text-center fs-13">Light</h5>
                        </div>
                        <div class="col-4">
                            <div class="form-check card-radio">
                                <input class="form-check-input" type="radio" name="data-topbar"
                                    id="topbar-color-dark" value="dark">
                                <label class="p-0 form-check-label avatar-md w-100" for="topbar-color-dark">
                                    <span class="gap-1 d-flex h-100">
                                        <span class="flex-shrink-0">
                                            <span class="gap-1 p-1 bg-light d-flex h-100 flex-column">
                                                <span class="p-1 px-2 mb-2 rounded d-block bg-primary-subtle"></span>
                                                <span class="p-1 px-2 pb-0 d-block bg-primary-subtle"></span>
                                                <span class="p-1 px-2 pb-0 d-block bg-primary-subtle"></span>
                                                <span class="p-1 px-2 pb-0 d-block bg-primary-subtle"></span>
                                            </span>
                                        </span>
                                        <span class="flex-grow-1">
                                            <span class="d-flex h-100 flex-column">
                                                <span class="p-1 bg-primary d-block"></span>
                                                <span class="p-1 mt-auto bg-light d-block"></span>
                                            </span>
                                        </span>
                                    </span>
                                </label>
                            </div>
                            <h5 class="mt-2 text-center fs-13">Dark</h5>
                        </div>
                    </div>

                    <div id="sidebar-size">
                        <h6 class="mt-4 mb-0 fw-bold text-uppercase">Sidebar Size</h6>
                        <p class="text-muted">Choose a size of Sidebar.</p>

                        <div class="row">
                            <div class="col-4">
                                <div class="form-check sidebar-setting card-radio">
                                    <input class="form-check-input" type="radio" name="data-sidebar-size"
                                        id="sidebar-size-default" value="lg">
                                    <label class="p-0 form-check-label avatar-md w-100" for="sidebar-size-default">
                                        <span class="gap-1 d-flex h-100">
                                            <span class="flex-shrink-0">
                                                <span class="gap-1 p-1 bg-light d-flex h-100 flex-column">
                                                    <span
                                                        class="p-1 px-2 mb-2 rounded d-block bg-primary-subtle"></span>
                                                    <span class="p-1 px-2 pb-0 d-block bg-primary-subtle"></span>
                                                    <span class="p-1 px-2 pb-0 d-block bg-primary-subtle"></span>
                                                    <span class="p-1 px-2 pb-0 d-block bg-primary-subtle"></span>
                                                </span>
                                            </span>
                                            <span class="flex-grow-1">
                                                <span class="d-flex h-100 flex-column">
                                                    <span class="p-1 bg-light d-block"></span>
                                                    <span class="p-1 mt-auto bg-light d-block"></span>
                                                </span>
                                            </span>
                                        </span>
                                    </label>
                                </div>
                                <h5 class="mt-2 text-center fs-13">Default</h5>
                            </div>

                            <div class="col-4">
                                <div class="form-check sidebar-setting card-radio">
                                    <input class="form-check-input" type="radio" name="data-sidebar-size"
                                        id="sidebar-size-compact" value="md">
                                    <label class="p-0 form-check-label avatar-md w-100" for="sidebar-size-compact">
                                        <span class="gap-1 d-flex h-100">
                                            <span class="flex-shrink-0">
                                                <span class="gap-1 p-1 bg-light d-flex h-100 flex-column">
                                                    <span class="p-1 mb-2 rounded d-block bg-primary-subtle"></span>
                                                    <span class="p-1 pb-0 d-block bg-primary-subtle"></span>
                                                    <span class="p-1 pb-0 d-block bg-primary-subtle"></span>
                                                    <span class="p-1 pb-0 d-block bg-primary-subtle"></span>
                                                </span>
                                            </span>
                                            <span class="flex-grow-1">
                                                <span class="d-flex h-100 flex-column">
                                                    <span class="p-1 bg-light d-block"></span>
                                                    <span class="p-1 mt-auto bg-light d-block"></span>
                                                </span>
                                            </span>
                                        </span>
                                    </label>
                                </div>
                                <h5 class="mt-2 text-center fs-13">Compact</h5>
                            </div>

                            <div class="col-4">
                                <div class="form-check sidebar-setting card-radio">
                                    <input class="form-check-input" type="radio" name="data-sidebar-size"
                                        id="sidebar-size-small" value="sm">
                                    <label class="p-0 form-check-label avatar-md w-100" for="sidebar-size-small">
                                        <span class="gap-1 d-flex h-100">
                                            <span class="flex-shrink-0">
                                                <span class="gap-1 bg-light d-flex h-100 flex-column">
                                                    <span class="p-1 mb-2 d-block bg-primary-subtle"></span>
                                                    <span class="p-1 pb-0 d-block bg-primary-subtle"></span>
                                                    <span class="p-1 pb-0 d-block bg-primary-subtle"></span>
                                                    <span class="p-1 pb-0 d-block bg-primary-subtle"></span>
                                                </span>
                                            </span>
                                            <span class="flex-grow-1">
                                                <span class="d-flex h-100 flex-column">
                                                    <span class="p-1 bg-light d-block"></span>
                                                    <span class="p-1 mt-auto bg-light d-block"></span>
                                                </span>
                                            </span>
                                        </span>
                                    </label>
                                </div>
                                <h5 class="mt-2 text-center fs-13">Small (Icon View)</h5>
                            </div>

                            <div class="col-4">
                                <div class="form-check sidebar-setting card-radio">
                                    <input class="form-check-input" type="radio" name="data-sidebar-size"
                                        id="sidebar-size-small-hover" value="sm-hover">
                                    <label class="p-0 form-check-label avatar-md w-100"
                                        for="sidebar-size-small-hover">
                                        <span class="gap-1 d-flex h-100">
                                            <span class="flex-shrink-0">
                                                <span class="gap-1 bg-light d-flex h-100 flex-column">
                                                    <span class="p-1 mb-2 d-block bg-primary-subtle"></span>
                                                    <span class="p-1 pb-0 d-block bg-primary-subtle"></span>
                                                    <span class="p-1 pb-0 d-block bg-primary-subtle"></span>
                                                    <span class="p-1 pb-0 d-block bg-primary-subtle"></span>
                                                </span>
                                            </span>
                                            <span class="flex-grow-1">
                                                <span class="d-flex h-100 flex-column">
                                                    <span class="p-1 bg-light d-block"></span>
                                                    <span class="p-1 mt-auto bg-light d-block"></span>
                                                </span>
                                            </span>
                                        </span>
                                    </label>
                                </div>
                                <h5 class="mt-2 text-center fs-13">Small Hover View</h5>
                            </div>
                        </div>
                    </div>

                    <div id="sidebar-view">
                        <h6 class="mt-4 mb-0 fw-bold text-uppercase">Sidebar View</h6>
                        <p class="text-muted">Choose Default or Detached Sidebar view.</p>

                        <div class="row">
                            <div class="col-4">
                                <div class="form-check sidebar-setting card-radio">
                                    <input class="form-check-input" type="radio" name="data-layout-style"
                                        id="sidebar-view-default" value="default">
                                    <label class="p-0 form-check-label avatar-md w-100" for="sidebar-view-default">
                                        <span class="gap-1 d-flex h-100">
                                            <span class="flex-shrink-0">
                                                <span class="gap-1 p-1 bg-light d-flex h-100 flex-column">
                                                    <span
                                                        class="p-1 px-2 mb-2 rounded d-block bg-primary-subtle"></span>
                                                    <span class="p-1 px-2 pb-0 d-block bg-primary-subtle"></span>
                                                    <span class="p-1 px-2 pb-0 d-block bg-primary-subtle"></span>
                                                    <span class="p-1 px-2 pb-0 d-block bg-primary-subtle"></span>
                                                </span>
                                            </span>
                                            <span class="flex-grow-1">
                                                <span class="d-flex h-100 flex-column">
                                                    <span class="p-1 bg-light d-block"></span>
                                                    <span class="p-1 mt-auto bg-light d-block"></span>
                                                </span>
                                            </span>
                                        </span>
                                    </label>
                                </div>
                                <h5 class="mt-2 text-center fs-13">Default</h5>
                            </div>
                            <div class="col-4">
                                <div class="form-check sidebar-setting card-radio">
                                    <input class="form-check-input" type="radio" name="data-layout-style"
                                        id="sidebar-view-detached" value="detached">
                                    <label class="p-0 form-check-label avatar-md w-100" for="sidebar-view-detached">
                                        <span class="d-flex h-100 flex-column">
                                            <span class="gap-1 p-1 px-2 bg-light d-flex align-items-center">
                                                <span class="p-1 rounded d-block bg-primary-subtle me-1"></span>
                                                <span class="p-1 px-2 pb-0 d-block bg-primary-subtle ms-auto"></span>
                                                <span class="p-1 px-2 pb-0 d-block bg-primary-subtle"></span>
                                            </span>
                                            <span class="gap-1 p-1 px-2 d-flex h-100">
                                                <span class="flex-shrink-0">
                                                    <span class="gap-1 p-1 bg-light d-flex h-100 flex-column">
                                                        <span class="p-1 px-2 pb-0 d-block bg-primary-subtle"></span>
                                                        <span class="p-1 px-2 pb-0 d-block bg-primary-subtle"></span>
                                                        <span class="p-1 px-2 pb-0 d-block bg-primary-subtle"></span>
                                                    </span>
                                                </span>
                                            </span>
                                            <span class="p-1 px-2 mt-auto bg-light d-block"></span>
                                        </span>
                                    </label>
                                </div>
                                <h5 class="mt-2 text-center fs-13">Detached</h5>
                            </div>
                        </div>
                    </div>
                    <div id="sidebar-color">
                        <h6 class="mt-4 mb-0 fw-bold text-uppercase">Sidebar Color</h6>
                        <p class="text-muted">Choose a color of Sidebar.</p>

                        <div class="row">
                            <div class="col-4">
                                <div class="form-check sidebar-setting card-radio" data-bs-toggle="collapse"
                                    data-bs-target="#collapseBgGradient.show">
                                    <input class="form-check-input" type="radio" name="data-sidebar"
                                        id="sidebar-color-light" value="light">
                                    <label class="p-0 form-check-label avatar-md w-100" for="sidebar-color-light">
                                        <span class="gap-1 d-flex h-100">
                                            <span class="flex-shrink-0">
                                                <span class="gap-1 p-1 bg-white border-end d-flex h-100 flex-column">
                                                    <span
                                                        class="p-1 px-2 mb-2 rounded d-block bg-primary-subtle"></span>
                                                    <span class="p-1 px-2 pb-0 d-block bg-primary-subtle"></span>
                                                    <span class="p-1 px-2 pb-0 d-block bg-primary-subtle"></span>
                                                    <span class="p-1 px-2 pb-0 d-block bg-primary-subtle"></span>
                                                </span>
                                            </span>
                                            <span class="flex-grow-1">
                                                <span class="d-flex h-100 flex-column">
                                                    <span class="p-1 bg-light d-block"></span>
                                                    <span class="p-1 mt-auto bg-light d-block"></span>
                                                </span>
                                            </span>
                                        </span>
                                    </label>
                                </div>
                                <h5 class="mt-2 text-center fs-13">Light</h5>
                            </div>
                            <div class="col-4">
                                <div class="form-check sidebar-setting card-radio" data-bs-toggle="collapse"
                                    data-bs-target="#collapseBgGradient.show">
                                    <input class="form-check-input" type="radio" name="data-sidebar"
                                        id="sidebar-color-dark" value="dark">
                                    <label class="p-0 form-check-label avatar-md w-100" for="sidebar-color-dark">
                                        <span class="gap-1 d-flex h-100">
                                            <span class="flex-shrink-0">
                                                <span class="gap-1 p-1 bg-primary d-flex h-100 flex-column">
                                                    <span
                                                        class="p-1 px-2 mb-2 bg-white rounded d-block bg-opacity-10"></span>
                                                    <span class="p-1 px-2 pb-0 bg-white d-block bg-opacity-10"></span>
                                                    <span class="p-1 px-2 pb-0 bg-white d-block bg-opacity-10"></span>
                                                    <span class="p-1 px-2 pb-0 bg-white d-block bg-opacity-10"></span>
                                                </span>
                                            </span>
                                            <span class="flex-grow-1">
                                                <span class="d-flex h-100 flex-column">
                                                    <span class="p-1 bg-light d-block"></span>
                                                    <span class="p-1 mt-auto bg-light d-block"></span>
                                                </span>
                                            </span>
                                        </span>
                                    </label>
                                </div>
                                <h5 class="mt-2 text-center fs-13">Dark</h5>
                            </div>
                            <div class="col-4">
                                <button class="p-0 overflow-hidden border btn btn-link avatar-md w-100 collapsed"
                                    type="button" data-bs-toggle="collapse" data-bs-target="#collapseBgGradient"
                                    aria-expanded="false" aria-controls="collapseBgGradient">
                                    <span class="gap-1 d-flex h-100">
                                        <span class="flex-shrink-0">
                                            <span class="gap-1 p-1 bg-vertical-gradient d-flex h-100 flex-column">
                                                <span
                                                    class="p-1 px-2 mb-2 bg-white rounded d-block bg-opacity-10"></span>
                                                <span class="p-1 px-2 pb-0 bg-white d-block bg-opacity-10"></span>
                                                <span class="p-1 px-2 pb-0 bg-white d-block bg-opacity-10"></span>
                                                <span class="p-1 px-2 pb-0 bg-white d-block bg-opacity-10"></span>
                                            </span>
                                        </span>
                                        <span class="flex-grow-1">
                                            <span class="d-flex h-100 flex-column">
                                                <span class="p-1 bg-light d-block"></span>
                                                <span class="p-1 mt-auto bg-light d-block"></span>
                                            </span>
                                        </span>
                                    </span>
                                </button>
                                <h5 class="mt-2 text-center fs-13">Gradient</h5>
                            </div>
                        </div>
                        <!-- end row -->

                        <div class="collapse" id="collapseBgGradient">
                            <div class="flex-wrap gap-2 p-2 px-3 rounded d-flex img-switch bg-light">

                                <div class="form-check sidebar-setting card-radio">
                                    <input class="form-check-input" type="radio" name="data-sidebar"
                                        id="sidebar-color-gradient" value="gradient">
                                    <label class="p-0 form-check-label avatar-xs rounded-circle"
                                        for="sidebar-color-gradient">
                                        <span class="avatar-title rounded-circle bg-vertical-gradient"></span>
                                    </label>
                                </div>
                                <div class="form-check sidebar-setting card-radio">
                                    <input class="form-check-input" type="radio" name="data-sidebar"
                                        id="sidebar-color-gradient-2" value="gradient-2">
                                    <label class="p-0 form-check-label avatar-xs rounded-circle"
                                        for="sidebar-color-gradient-2">
                                        <span class="avatar-title rounded-circle bg-vertical-gradient-2"></span>
                                    </label>
                                </div>
                                <div class="form-check sidebar-setting card-radio">
                                    <input class="form-check-input" type="radio" name="data-sidebar"
                                        id="sidebar-color-gradient-3" value="gradient-3">
                                    <label class="p-0 form-check-label avatar-xs rounded-circle"
                                        for="sidebar-color-gradient-3">
                                        <span class="avatar-title rounded-circle bg-vertical-gradient-3"></span>
                                    </label>
                                </div>
                                <div class="form-check sidebar-setting card-radio">
                                    <input class="form-check-input" type="radio" name="data-sidebar"
                                        id="sidebar-color-gradient-4" value="gradient-4">
                                    <label class="p-0 form-check-label avatar-xs rounded-circle"
                                        for="sidebar-color-gradient-4">
                                        <span class="avatar-title rounded-circle bg-vertical-gradient-4"></span>
                                    </label>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div id="sidebar-img">
                        <h6 class="mt-4 mb-0 fw-bold text-uppercase">Sidebar Images</h6>
                        <p class="text-muted">Choose a image of Sidebar.</p>

                        <div class="flex-wrap gap-2 d-flex img-switch">
                            <div class="form-check sidebar-setting card-radio">
                                <input class="form-check-input" type="radio" name="data-sidebar-image"
                                    id="sidebarimg-none" value="none">
                                <label class="h-auto p-0 form-check-label avatar-sm" for="sidebarimg-none">
                                    <span
                                        class="w-auto avatar-md bg-light d-flex align-items-center justify-content-center">
                                        <i class="ri-close-fill fs-20"></i>
                                    </span>
                                </label>
                            </div>

                            <div class="form-check sidebar-setting card-radio">
                                <input class="form-check-input" type="radio" name="data-sidebar-image"
                                    id="sidebarimg-01" value="img-1">
                                <label class="h-auto p-0 form-check-label avatar-sm" for="sidebarimg-01">
                                    <img src="assets/images/sidebar/img-1.jpg" alt=""
                                        class="w-auto avatar-md object-fit-cover">
                                </label>
                            </div>

                            <div class="form-check sidebar-setting card-radio">
                                <input class="form-check-input" type="radio" name="data-sidebar-image"
                                    id="sidebarimg-02" value="img-2">
                                <label class="h-auto p-0 form-check-label avatar-sm" for="sidebarimg-02">
                                    <img src="assets/images/sidebar/img-2.jpg" alt=""
                                        class="w-auto avatar-md object-fit-cover">
                                </label>
                            </div>
                            <div class="form-check sidebar-setting card-radio">
                                <input class="form-check-input" type="radio" name="data-sidebar-image"
                                    id="sidebarimg-03" value="img-3">
                                <label class="h-auto p-0 form-check-label avatar-sm" for="sidebarimg-03">
                                    <img src="assets/images/sidebar/img-3.jpg" alt=""
                                        class="w-auto avatar-md object-fit-cover">
                                </label>
                            </div>
                            <div class="form-check sidebar-setting card-radio">
                                <input class="form-check-input" type="radio" name="data-sidebar-image"
                                    id="sidebarimg-04" value="img-4">
                                <label class="h-auto p-0 form-check-label avatar-sm" for="sidebarimg-04">
                                    <img src="assets/images/sidebar/img-4.jpg" alt=""
                                        class="w-auto avatar-md object-fit-cover">
                                </label>
                            </div>
                        </div>
                    </div>

                    <div id="preloader-menu">
                        <h6 class="mt-4 mb-0 fw-bold text-uppercase">Preloader</h6>
                        <p class="text-muted">Choose a preloader.</p>

                        <div class="row">
                            <div class="col-4">
                                <div class="form-check sidebar-setting card-radio">
                                    <input class="form-check-input" type="radio" name="data-preloader"
                                        id="preloader-view-custom" value="enable">
                                    <label class="p-0 form-check-label avatar-md w-100" for="preloader-view-custom">
                                        <span class="gap-1 d-flex h-100">
                                            <span class="flex-shrink-0">
                                                <span class="gap-1 p-1 bg-light d-flex h-100 flex-column">
                                                    <span
                                                        class="p-1 px-2 mb-2 rounded d-block bg-primary-subtle"></span>
                                                    <span class="p-1 px-2 pb-0 d-block bg-primary-subtle"></span>
                                                    <span class="p-1 px-2 pb-0 d-block bg-primary-subtle"></span>
                                                    <span class="p-1 px-2 pb-0 d-block bg-primary-subtle"></span>
                                                </span>
                                            </span>
                                            <span class="flex-grow-1">
                                                <span class="d-flex h-100 flex-column">
                                                    <span class="p-1 bg-light d-block"></span>
                                                    <span class="p-1 mt-auto bg-light d-block"></span>
                                                </span>
                                            </span>
                                        </span>
                                        <!-- <div id="preloader"> -->
                                        <div id="status"
                                            class="d-flex align-items-center justify-content-center">
                                            <div class="m-auto spinner-border text-primary avatar-xxs"
                                                role="status">
                                                <span class="visually-hidden">Loading...</span>
                                            </div>
                                        </div>
                                        <!-- </div> -->
                                    </label>
                                </div>
                                <h5 class="mt-2 text-center fs-13">Enable</h5>
                            </div>
                            <div class="col-4">
                                <div class="form-check sidebar-setting card-radio">
                                    <input class="form-check-input" type="radio" name="data-preloader"
                                        id="preloader-view-none" value="disable">
                                    <label class="p-0 form-check-label avatar-md w-100" for="preloader-view-none">
                                        <span class="gap-1 d-flex h-100">
                                            <span class="flex-shrink-0">
                                                <span class="gap-1 p-1 bg-light d-flex h-100 flex-column">
                                                    <span
                                                        class="p-1 px-2 mb-2 rounded d-block bg-primary-subtle"></span>
                                                    <span class="p-1 px-2 pb-0 d-block bg-primary-subtle"></span>
                                                    <span class="p-1 px-2 pb-0 d-block bg-primary-subtle"></span>
                                                    <span class="p-1 px-2 pb-0 d-block bg-primary-subtle"></span>
                                                </span>
                                            </span>
                                            <span class="flex-grow-1">
                                                <span class="d-flex h-100 flex-column">
                                                    <span class="p-1 bg-light d-block"></span>
                                                    <span class="p-1 mt-auto bg-light d-block"></span>
                                                </span>
                                            </span>
                                        </span>
                                    </label>
                                </div>
                                <h5 class="mt-2 text-center fs-13">Disable</h5>
                            </div>
                        </div>

                    </div>
                    <!-- end preloader-menu -->

                </div>
            </div>

        </div>
        <div class="p-3 text-center offcanvas-footer border-top">
            <div class="row">
                <div class="col-6">
                    <button type="button" class="btn btn-primary w-100" id="reset-layout">Reset</button>
                </div>

            </div>
        </div>
    </div>

    <!-- JAVASCRIPT -->
    <script src="assets/libs/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="assets/libs/simplebar/simplebar.min.js"></script>
    <script src="assets/libs/node-waves/waves.min.js"></script>
    <script src="assets/libs/feather-icons/feather.min.js"></script>
    <script src="assets/js/pages/plugins/lord-icon-2.1.0.js"></script>
    <script src="assets/js/plugins.js"></script>

    <!-- apexcharts -->
    <script src="assets/libs/apexcharts/apexcharts.min.js"></script>

    <!-- Vector map-->
    <script src="assets/libs/jsvectormap/js/jsvectormap.min.js"></script>
    <script src="assets/libs/jsvectormap/maps/world-merc.js"></script>

    <!--Swiper slider js-->
    <script src="assets/libs/swiper/swiper-bundle.min.js"></script>

    <!-- Dashboard init -->
    <script src="assets/js/pages/dashboard-ecommerce.init.js"></script>

    <!-- App js -->
    <script src="assets/js/app.js"></script>
</body>


<!-- Mirrored from themesbrand.com/velzon/html/modern/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 09 Aug 2024 01:51:15 GMT -->

</html>
