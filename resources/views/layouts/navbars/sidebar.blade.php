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
        <button type="button" class="btn btn-sm p-0 fs-20 header-item float-end btn-vertical-sm-hover"
            id="vertical-hover">
            <i class="ri-record-circle-line"></i>
        </button>
    </div>

    <div id="scrollbar">
        <div class="container-fluid">

            
            <ul class="navbar-nav" id="navbar-nav" data-simplebar="init">
                <div class="simplebar-wrapper" style="margin:0px;">
                    <div class="simplebar-height-auto-observer-wrapper">
                        
                    </div>
                </div>
               
                <li class="menu-title"><span data-key="t-menu">Menu</span></li>
                
                <li class="nav-item"><a href="{{ route('auth.dashboard') }}" class="nav-link"> <i
                    class="mdi mdi-view-dashboard-outline"></i><span data-key="t-dashboards">Dashboard</span>
            </a> </li>
                <li class="nav-item">
                    <a href="#clientes" class="nav-link" data-bs-toggle="collapse"
                        role="button" aria-expanded="false" aria-controls="clientes"
                        data-key="t-ecommerce"><i class="mdi mdi-account-group"></i>
                       Clientes
                    </a>
                    <div class="collapse menu-dropdown" id="clientes">
                        <ul class="nav nav-sm flex-column">
                            <li class="nav-item">
                                <a href="apps-ecommerce-products.html" class="nav-link"
                                    data-key="t-products"></i> Novo </a>
                            </li>
                            <li class="nav-item">
                                <a href="apps-ecommerce-product-details.html" class="nav-link"
                                    data-key="t-product-Details">Lista Clientes </a>
                            </li>
                            <li class="nav-item">
                                <a href="apps-ecommerce-add-product.html" class="nav-link"
                                    data-key="t-create-product"> Create Product </a>
                            </li>
                            <li class="nav-item">
                                <a href="apps-ecommerce-orders.html" class="nav-link"
                                    data-key="t-orders">
                                    Orders </a>
                            </li>
                           
                        </ul>
                    </div>
                </li>
                <li class="nav-item">
                    <a href="#usuarios" class="nav-link" data-bs-toggle="collapse"
                        role="button" aria-expanded="false" aria-controls="usuarios"
                        data-key="t-ecommerce"><i class="mdi mdi-account"></i>
                       Usuarios
                    </a>
                    <div class="collapse menu-dropdown" id="usuarios">
                        <ul class="nav nav-sm flex-column">
                            <li class="nav-item">
                                <a href="{{ route('user.add') }}" class="nav-link"
                                    data-key="t-products"></i> Novo </a>
                            </li>
                            <li class="nav-item">
                                <a href="{{ route('user.index') }}" class="nav-link"
                                    data-key="t-product-Details">Lista Usuários</a>
                            </li>
                            
                        </ul>
                    </div>
                </li>
             
                <li class="nav-item">
                    <a class="nav-link menu-link" href="#sidebarDashboards" data-bs-toggle="collapse" role="button"
                        aria-expanded="false" aria-controls="sidebarDashboards"
                        <i class="las la-tachometer-alt"></i> <span data-key="t-dashboards">Cliente</span>
                    </a>
                    <div class="collapse menu-dropdown" id="sidebarClient">
                        <ul class="nav nav-sm flex-column">
                            <li class="nav-item">
                                <a href="{{ route('user.add') }}" class="nav-link">Novo
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="{{ route('user.index') }}" class="nav-link">Clientes
                                </a>
                            </li>

                        </ul>

                </li>
                <li class="nav-item">
                    <a class="nav-link menu-link" href="#sidebarProduct" data-bs-toggle="collapse" role="button"
                        aria-expanded="false" aria-controls="sidebarProduct">
                        <i class="las la-tachometer-alt"></i> <span data-key="t-dashboards">Produto</span>
                    </a>
                    <div class="collapse menu-dropdown" id="sidebarProduct">
                        <ul class="nav nav-sm flex-column">
                            <li class="nav-item">
                                <a href="{{ route('user.add') }}" class="nav-link">Novo
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="{{ route('user.index') }}" class="nav-link">Lista
                                </a>
                            </li>

                        </ul>

                </li>
                {{-- @if (auth()->check() && auth()->user()->role === 'admin')
                <!-- Conteúdo para administradores -->
                <p>Bem-vindo, Administrador!</p> --}}
                @auth
                    @if (auth()->check() && auth()->user()->role==='admin')
                        {{-- Exibe o link de cadastro de usuários --}}
                        <li class="nav-item">
                            <a class="nav-link menu-link" href="#user" data-bs-toggle="collapse" role="button"
                                aria-expanded="false" aria-controls="user">
                                <i class="las la-tachometer-alt"></i> <span data-key="t-dashboards">Usuários</span>
                            </a>
                            <div class="collapse menu-dropdown" id="user">
                                <ul class="nav nav-sm flex-column">
                                    <li class="nav-item">
                                        <a href="{{ route('user.add') }}" class="nav-link">Novo
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="{{ route('user.index') }}" class="nav-link">Lista
                                        </a>
                                    </li>

                                </ul>

                        </li>
                    @endif
                @endauth



             

                
            </ul>
        </div>
        <!-- Sidebar -->
    </div>

    <div class="sidebar-background"></div>
</div>
<!-- Left Sidebar End -->
<!-- Vertical Overlay-->
<div class="vertical-overlay"></div>
