<div class="app-menu navbar-menu">
    <!-- LOGO -->
    <div class="navbar-brand-box">
        <!-- Dark Logo-->
        {{-- <a href="index.html" class="logo logo-dark">
                <span class="logo-sm">
                    <img src="../assets/images/logo-sm.png" alt="" height="22">
                </span>
                <span class="logo-lg">
                    <img src="../assets/images/logo-dark.png" alt="" height="17">
                </span>
            </a> --}}
        <!-- Light Logo-->
        {{-- <a href="index.html" class="logo logo-light">
                <span class="logo-sm">
                    <img src="../assets/images/logo-sm.png" alt="" height="22">
                </span>
                <span class="logo-lg">
                    <img src="../assets/images/logo-light.png" alt="" height="17">
                </span>
            </a> --}}
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
                    <a href="{{ route('auth.dashboard') }}" class="nav-link">
                        <i class="las la-home"></i>
                        <span data-key="t-dashboards">Home</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link menu-link" href="#registration-section" data-bs-toggle="collapse" role="button" aria-expanded="false" aria-controls="user">
                        <i class="las la-user-circle"></i>
                        <span data-key="t-dashboards">Cadastros</span>
                    </a>
                    <div class="collapse menu-dropdown" id="registration-section">
                        <ul class="nav nav-sm flex-column">
                            <li class="nav-item">
                                <a href="{{ route('clientes.index') }}" class="nav-link">Clientes</a>
                            </li>
                            <li class="nav-item">
                                <a href="{{ route('funcionarios.index') }}" class="nav-link">Funcionários</a>
                            </li>
                            <li class="nav-item">
                                <a href="{{ route('veiculos.index') }}" class="nav-link">Veiculos</a>
                            </li>
                            <li class="nav-item">
                                <a href="{{ route('servicos.index') }}" class="nav-link">Serviços</a>
                            </li>
                        </ul>
                    </div>
                </li>

                <li class="nav-item">
                    <a class="nav-link menu-link" href="{{ route('warehouse.index') }}">
                        <i class="bx bx-cabinet"></i> <span data-key="t-dashboards">Almoxarifado</span>
                    </a>
                </li>

                {{-- @if (auth()->check() && auth()->user()->role === 'admin')
                <!-- Conteúdo para administradores -->
                <p>Bem-vindo, Administrador!</p> --}}
                @auth
                    @if (auth()->check() && auth()->user()->role === 'admin')
                        {{-- Exibe o link de cadastro de usuários  --}}
                        <li class="nav-item">
                            <a class="nav-link menu-link" href="#user" data-bs-toggle="collapse" role="button"
                                aria-expanded="false" aria-controls="user">
                                <i class="las la-user-circle"></i> <span data-key="t-dashboards">Usuários</span>
                            </a>
                            <div class="collapse menu-dropdown" id="user">
                                <ul class="nav nav-sm flex-column">
                                    <li class="nav-item">
                                        <a href="{{ route('user.add') }}" class="nav-link">Novo
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link menu-link" href="{{ route('user.add') }}">
                                <i class="ri-account-circle-line"></i> <span data-key="t-dashboards">Usuários</span>
                            </a>
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
