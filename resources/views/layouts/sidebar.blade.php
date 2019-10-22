{{--<aside class="main-sidebar" id="sidebar-wrapper">--}}

{{--    <!-- sidebar: style can be found in sidebar.less -->--}}
{{--    <section class="sidebar">--}}

{{--        <!-- Sidebar user panel (optional) -->--}}
{{--        <div class="user-panel">--}}
{{--            <div class="pull-left image">--}}
{{--                <img src="http://infyom.com/images/logo/blue_logo_150x150.jpg" class="img-circle"--}}
{{--                     alt="User Image"/>--}}
{{--            </div>--}}
{{--            <div class="pull-left info">--}}
{{--                @if (Auth::guest())--}}
{{--                <p>InfyOm</p>--}}
{{--                @else--}}
{{--                    <p>{{ Auth::user()->name}}</p>--}}
{{--                @endif--}}
{{--                <!-- Status -->--}}
{{--                <a href="#"><i class="fa fa-circle text-success"></i> Online</a>--}}
{{--            </div>--}}
{{--        </div>--}}

{{--        <!-- search form (Optional) -->--}}
{{--        <form action="#" method="get" class="sidebar-form">--}}
{{--            <div class="input-group">--}}
{{--                <input type="text" name="q" class="form-control" placeholder="Search..."/>--}}
{{--          <span class="input-group-btn">--}}
{{--            <button type='submit' name='search' id='search-btn' class="btn btn-flat"><i class="fa fa-search"></i>--}}
{{--            </button>--}}
{{--          </span>--}}
{{--            </div>--}}
{{--        </form>--}}
{{--        <!-- Sidebar Menu -->--}}

{{--        <ul class="sidebar-menu" data-widget="tree">--}}
{{--            @include('layouts.menu')--}}
{{--        </ul>--}}
{{--        <!-- /.sidebar-menu -->--}}
{{--    </section>--}}
{{--    <!-- /.sidebar -->--}}
{{--</aside>--}}


{{--<nav class="side-navbar">--}}
{{--    <!-- Sidebar Header-->--}}
{{--    <div class="sidebar-header d-flex align-items-center">--}}
{{--        <div class="title">--}}
{{--            <h1 class="h4">{!! Auth::user()->nome !!}</h1>--}}
{{--            <p>Admin</p>--}}
{{--        </div>--}}
{{--    </div>--}}
{{--    <!-- Sidebar Navidation Menus--><span class="heading">Menu</span>--}}
{{--    <ul class="list-unstyled">--}}
{{--        @include('layouts.menu')--}}
{{--    </ul>--}}
{{--</nav>--}}

<!-- Sidebar -->
<ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

    <!-- Sidebar - Brand -->
    <a class=" d-flex align-items-center justify-content-center" href="{{ url('/home') }}">
        <div class="mx-3"> <img src="/images/logo.png" class="img-fluid sidebar-brand-img"> </div>
    </a>

    <!-- Divider -->
    <hr class="sidebar-divider my-0">

    <!-- Nav Item - Dashboard -->
    <li class="nav-item active">
        <a class="nav-link" href="{{ url('/home') }}">
            <i class="fas fa-fw fa-tachometer-alt"></i>
            <span>Home</span></a>
    </li>
    <li class="nav-item active">
        <a class="nav-link" href="{{ url('resources\views\pets') }}">
            <i class="fas fa-fw fa-tachometer-alt"></i>
            <span>Pets</span></a>
    </li>

    <!-- Divider -->
    <hr class="sidebar-divider">

    <!-- Heading -->
    <div class="sidebar-heading">
        Interface
    </div>

    @include('layouts.menu')

{{--    <!-- Nav Item - Pages Collapse Menu -->--}}
{{--    <li class="nav-item">--}}
{{--        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="true" aria-controls="collapseTwo">--}}
{{--            <i class="fas fa-fw fa-cog"></i>--}}
{{--            <span>Components</span>--}}
{{--        </a>--}}
{{--        <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">--}}
{{--            <div class="bg-white py-2 collapse-inner rounded">--}}
{{--                <h6 class="collapse-header">Custom Components:</h6>--}}
{{--                <a class="collapse-item" href="buttons.html">Buttons</a>--}}
{{--                <a class="collapse-item" href="cards.html">Cards</a>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    </li>--}}

{{--    <!-- Nav Item - Utilities Collapse Menu -->--}}
{{--    <li class="nav-item">--}}
{{--        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseUtilities" aria-expanded="true" aria-controls="collapseUtilities">--}}
{{--            <i class="fas fa-fw fa-wrench"></i>--}}
{{--            <span>Utilities</span>--}}
{{--        </a>--}}
{{--        <div id="collapseUtilities" class="collapse" aria-labelledby="headingUtilities" data-parent="#accordionSidebar">--}}
{{--            <div class="bg-white py-2 collapse-inner rounded">--}}
{{--                <h6 class="collapse-header">Custom Utilities:</h6>--}}
{{--                <a class="collapse-item" href="utilities-color.html">Colors</a>--}}
{{--                <a class="collapse-item" href="utilities-border.html">Borders</a>--}}
{{--                <a class="collapse-item" href="utilities-animation.html">Animations</a>--}}
{{--                <a class="collapse-item" href="utilities-other.html">Other</a>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    </li>--}}

{{--    <!-- Divider -->--}}
{{--    <hr class="sidebar-divider">--}}

{{--    <!-- Heading -->--}}
{{--    <div class="sidebar-heading">--}}
{{--        Addons--}}
{{--    </div>--}}

{{--    <!-- Nav Item - Pages Collapse Menu -->--}}
{{--    <li class="nav-item">--}}
{{--        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapsePages" aria-expanded="true" aria-controls="collapsePages">--}}
{{--            <i class="fas fa-fw fa-folder"></i>--}}
{{--            <span>Pages</span>--}}
{{--        </a>--}}
{{--        <div id="collapsePages" class="collapse" aria-labelledby="headingPages" data-parent="#accordionSidebar">--}}
{{--            <div class="bg-white py-2 collapse-inner rounded">--}}
{{--                <h6 class="collapse-header">Login Screens:</h6>--}}
{{--                <a class="collapse-item" href="login.html">Login</a>--}}
{{--                <a class="collapse-item" href="register.html">Register</a>--}}
{{--                <a class="collapse-item" href="forgot-password.html">Forgot Password</a>--}}
{{--                <div class="collapse-divider"></div>--}}
{{--                <h6 class="collapse-header">Other Pages:</h6>--}}
{{--                <a class="collapse-item" href="404.html">404 Page</a>--}}
{{--                <a class="collapse-item" href="blank.html">Blank Page</a>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    </li>--}}

{{--    <!-- Nav Item - Charts -->--}}
{{--    <li class="nav-item">--}}
{{--        <a class="nav-link" href="charts.html">--}}
{{--            <i class="fas fa-fw fa-chart-area"></i>--}}
{{--            <span>Charts</span></a>--}}
{{--    </li>--}}

{{--    <!-- Nav Item - Tables -->--}}
{{--    <li class="nav-item">--}}
{{--        <a class="nav-link" href="tables.html">--}}
{{--            <i class="fas fa-fw fa-table"></i>--}}
{{--            <span>Tables</span></a>--}}
{{--    </li>--}}

{{--    <!-- Divider -->--}}
{{--    <hr class="sidebar-divider d-none d-md-block">--}}

{{--    <!-- Sidebar Toggler (Sidebar) -->--}}
{{--    <div class="text-center d-none d-md-inline">--}}
{{--        <button class="rounded-circle border-0" id="sidebarToggle"></button>--}}
{{--    </div>--}}

</ul>
<!-- End of Sidebar -->
