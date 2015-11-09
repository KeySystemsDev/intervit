<!-- begin #header -->
    <div id="header" class="header navbar navbar-transparent navbar-fixed-top">
        <!-- begin container -->
        <div class="container">
            <!-- begin navbar-header -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#header-navbar">
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a href="index.html" class="navbar-brand">
                    <span class="brand-logo"></span>
                    <span class="brand-text">
                        <span class="text-theme">Intervit</span>
                    </span>
                </a>
            </div>
            <!-- end navbar-header -->
            <!-- begin navbar-collapse -->
            <div class="collapse navbar-collapse" id="header-navbar">
                <ul class="nav navbar-nav navbar-right">
                    <li><a href="{{ url('/productos') }}"><i class="fa fa-cubes"></i> Productos</a></li>
                    <li class="active dropdown">
                        <a href="#home" data-toggle="dropdown"><i class="fa fa-line-chart"></i> Finanzas <b class="caret"></b></a>
                        <ul class="dropdown-menu dropdown-menu-left animated fadeInDown">
                            <li><a href="{{url ('/cuentas-pendientes')}}">Cuentas Pendientes</a></li>
                        </ul>
                    </li>
                    <li class="active dropdown">
                        <a href="#home" data-toggle="dropdown"><i class="fa fa-user"></i> Correo@gmail.com<b class="caret"></b></a>
                        <ul class="dropdown-menu dropdown-menu-left animated fadeInDown">
                            <li>
                                <a href="#">
                                    <i class="fa fa-cogs"></i> Administrar
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <i class="fa fa-key"></i> Cambiar contraseña
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <i class="fa fa-sign-in"></i> Cerrar sesión
                                </a>
                            </li>
                        </ul>
                    </li>
                </ul>
            </div>
            <!-- end navbar-collapse -->
        </div>
        <!-- end container -->
    </div>
    <!-- end #header -->