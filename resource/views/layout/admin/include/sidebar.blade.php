


<div class="_dark d-flex flex-column align-items-center align-items-sm-start px-3 pt-2 text-white">
{{--                <a href="/" class="d-flex align-items-center pb-3 mb-md-0 me-md-auto text-white text-decoration-none">--}}
{{--                    <span class="fs-5 d-none d-sm-inline">Menu</span>--}}
{{--                </a>--}}
    <ul class="nav nav-pills flex-column mb-sm-auto mb-0 align-items-center align-items-sm-start" id="menu">
        <li class="nav-item">
            <a href="#" class="nav-link align-middle px-0 ">
                <i class="fa fa-fw fa-home"></i>
                <span class="ms-1 d-none d-sm-inline">Home</span>
            </a>
        </li>
        <li>
            <a href="#submenu1" data-bs-toggle="collapse" class="nav-link px-0 align-middle">
                <i class="fa fa-tachometer"></i>
                <span class="ms-1 d-none d-sm-inline">Dashboard</span>
            </a>
            <ul class="collapse nav flex-column ms-1" id="submenu1" data-bs-parent="#menu">
                <li class="w-100">
                    <a href="#" class="nav-link px-0"> <span class="d-none d-sm-inline">Item</span> 1 </a>
                </li>
                <li>
                    <a href="#" class="nav-link px-0"> <span class="d-none d-sm-inline">Item</span> 2 </a>
                </li>
            </ul>
        </li>
        <li>
            <a href="#" class="nav-link px-0 align-middle">
                <i class="fa fa-fw fa-folder"></i>
                <span class="ms-1 d-none d-sm-inline">Orders</span></a>
        </li>
        <li>
            <a href="#submenu2" data-bs-toggle="collapse" class="nav-link px-0 align-middle ">
                <i class="fa fa-star"></i>
                <span class="ms-1 d-none d-sm-inline">Bootstrap</span>
            </a>
            <ul class="collapse nav flex-column ms-1" id="submenu2" data-bs-parent="#menu">
                <li class="w-100">
                    <a href="#" class="nav-link px-0"> <span class="d-none d-sm-inline">Item</span> 1</a>
                </li>
                <li>
                    <a href="#" class="nav-link px-0"> <span class="d-none d-sm-inline">Item</span> 2</a>
                </li>
            </ul>
        </li>
        <li>
            <a href="#submenu3" data-bs-toggle="collapse" class="nav-link px-0 align-middle">
                <i class="fa fa-fw fa-gear"></i> <span class="ms-1 d-none d-sm-inline">Products</span> </a>
            <ul class="collapse nav flex-column ms-1" id="submenu3" data-bs-parent="#menu">
                <li class="w-100">
                    <a href="#" class="nav-link px-0"> <span class="d-none d-sm-inline">Product</span> 1</a>
                </li>
                <li>
                    <a href="#" class="nav-link px-0"> <span class="d-none d-sm-inline">Product</span> 2</a>
                </li>
                <li>
                    <a href="#" class="nav-link px-0"> <span class="d-none d-sm-inline">Product</span> 3</a>
                </li>
                <li>
                    <a href="#" class="nav-link px-0"> <span class="d-none d-sm-inline">Product</span> 4</a>
                </li>
            </ul>
        </li>
        <li>
            <a href="#" class="nav-link px-0 align-middle">
                <i class="fa fa-fw fa-user"></i> <span class="ms-1 d-none d-sm-inline">Customers</span> </a>
        </li>
    </ul>
    <hr>
    <div class="dropup pb-4">
        <a href="#" class="d-flex align-items-center text-white text-decoration-none dropdown-toggle" id="dropdownUser1" data-bs-toggle="dropdown" aria-expanded="false">
            <img src="https://github.com/mdo.png" alt="hugenerd" width="30" height="30" class="rounded-circle">
            <span class="d-none d-sm-inline mx-1 ps-1">John Doe</span>
        </a>
        <ul class="dropdown-menu dropdown-menu-dark text-small shadow" aria-labelledby="dropdownUser1">
            <li><a class="dropdown-item" href="#">New project...</a></li>
            <li><a class="dropdown-item" href="#">Settings</a></li>
            <li><a class="dropdown-item" href="#">Profile</a></li>
            <li>
                <hr class="dropdown-divider">
            </li>
            <li><a class="dropdown-item" href="#">Sign out</a></li>
        </ul>
    </div>
</div>




{{--<nav class="col-md-2 d-none d-md-block bg-light sidebar bg-dark">--}}
{{--<div class="sidebar-sticky _dark">--}}
{{--    <ul class="nav flex-column">--}}
{{--        <li class="nav-item">--}}
{{--            <a class="nav-link {{active('/pages/dashboard')}}"--}}
{{--               href="{{url('pages/dashboard')}}">--}}
{{--                <span data-feather="home"></span>--}}
{{--                <i class="fa fa-fw fa-tachometer"></i>--}}
{{--                Dashboard<span class="sr-only">(current)</span>--}}
{{--            </a>--}}
{{--        </li>--}}
{{--        <li class="nav-item">--}}
{{--            <a class="nav-link dropdown-toggle" href="#typoSubmenu" data-toggle="collapse" aria-expanded="false" >--}}
{{--                <span data-feather="align-left"></span>--}}
{{--                <i class="fa fa-fw fa-gear"></i>--}}
{{--                Typography--}}
{{--            </a>--}}
{{--            <ul class="navbar-nav collapse pl-3" id="typoSubmenu">--}}
{{--                <li class="nav-item">--}}
{{--                    <a class="nav-link" href="#"><span data-feather="hash"></span> Tags</a>--}}
{{--                </li>--}}
{{--                <li class="nav-item">--}}
{{--                    <a class="nav-link" href="#"><span data-feather="box"></span> Elements</a>--}}
{{--                </li>--}}

{{--            </ul>--}}
{{--        </li>--}}
{{--        <li class="nav-item">--}}
{{--            <a class="nav-link dropdown-toggle" href="#pagesSubmenu" data-toggle="collapse" aria-expanded="false" >--}}
{{--                <span data-feather="folder"></span>--}}
{{--                <i class="fa fa-fw fa-folder"></i>--}}
{{--                Pages--}}
{{--            </a>--}}
{{--            <ul class="navbar-nav collapse pl-3" id="pagesSubmenu">--}}
{{--                <li class="nav-item">--}}
{{--                    <a class="nav-link  {{active('pages/orders')}}"--}}
{{--                       href="{{url('pages/orders')}}">--}}
{{--                        <span data-feather="gift"></span> Orders</a>--}}
{{--                </li>--}}
{{--                <li class="nav-item">--}}
{{--                    <a class="nav-link" href="#"><span data-feather="shopping-cart"></span> Products</a>--}}
{{--                </li>--}}
{{--                <li class="nav-item">--}}
{{--                    <a class="nav-link" href="#"><span data-feather="bar-chart-2"></span> Reports</a>--}}
{{--                </li>--}}
{{--                <li class="nav-item">--}}
{{--                    <a class="nav-link" href="#"><span data-feather="layers"></span> Integrations</a>--}}
{{--                </li>--}}
{{--                <li class="nav-item">--}}
{{--					<a class="nav-link  {{active('pages/login')}}"--}}
{{--						href="{{url('pages/login')}}">--}}
{{--						 <span data-feather="log-in"></span> Login</a>--}}
{{--                </li>--}}
{{--                <li class="nav-item">--}}
{{--                    <a class="nav-link" href="#"><span data-feather="edit"></span> Registration</a>--}}
{{--                </li>--}}
{{--            </ul>--}}
{{--        </li>--}}

{{--    </ul>--}}

{{--    <h6 class="sidebar-heading d-flex justify-content-between align-items-center px-3 mt-4 mb-1 text-muted">--}}
{{--        <span>Saved reports</span>--}}
{{--        <a class="d-flex align-items-center text-muted" href="#">--}}
{{--            <span data-feather="plus-circle"></span>--}}
{{--        </a>--}}
{{--    </h6>--}}
{{--    <ul class="nav flex-column mb-2">--}}
{{--        <li class="nav-item">--}}
{{--            <a class="nav-link" href="#">--}}
{{--                <span data-feather="file-text"></span>--}}
{{--                <i class="fa fa-fw fa-chart-area"></i>--}}
{{--                Current month--}}
{{--            </a>--}}
{{--        </li>--}}
{{--    </ul>--}}

{{--    <div class="p-2 bottom-0 position-fixed">--}}
{{--        <button type="button" id="sidebarCollapse" class="btn">--}}
{{--            <i class="fa fa-arrow-left"></i>--}}
{{--        </button>--}}
{{--    </div>--}}
{{--</div>--}}
{{--</nav>--}}
