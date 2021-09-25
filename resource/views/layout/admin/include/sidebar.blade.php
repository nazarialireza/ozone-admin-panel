<style>
    .sidebar-sticky .dropdown-toggle::after{
        float: right;
        margin-top: 8px;
    }
</style>
<div class="sidebar-sticky">
    <ul class="nav flex-column">
        <li class="nav-item">
            <a class="nav-link {{ isset($pathInfo) && $pathInfo == '/pages/dashboard' ? 'active' : ''}}"
               href="{{$baseURI}}pages/dashboard">
                <span data-feather="home"></span>
                Dashboard<span class="sr-only">(current)</span>
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link dropdown-toggle" href="#typoSubmenu" data-toggle="collapse" aria-expanded="false" >
                <span data-feather="align-left"></span>
                Typography
            </a>
            <ul class="navbar-nav collapse pl-3" id="typoSubmenu">
                <li class="nav-item">
                    <a class="nav-link" href="#"><span data-feather="hash"></span> Tags</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#"><span data-feather="box"></span> Elements</a>
                </li>

            </ul>
        </li>
        <li class="nav-item">
            <a class="nav-link dropdown-toggle" href="#pagesSubmenu" data-toggle="collapse" aria-expanded="false" >
                <span data-feather="folder"></span>
                Pages
            </a>
            <ul class="navbar-nav collapse pl-3" id="pagesSubmenu">
                <li class="nav-item">
                    <a class="nav-link  {{ isset($pathInfo) && $pathInfo == '/pages/orders' ? 'active' : ''}}"
                       href="{{$baseURI}}pages/orders">
                        <span data-feather="gift"></span> Orders</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#"><span data-feather="shopping-cart"></span> Products</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#"><span data-feather="bar-chart-2"></span> Reports</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#"><span data-feather="layers"></span> Integrations</a>
                </li>
                <li class="nav-item">
					<a class="nav-link  {{ isset($pathInfo) && $pathInfo == '/pages/login' ? 'active' : ''}}"
						href="{{$baseURI}}pages/login">
						 <span data-feather="log-in"></span> Login</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#"><span data-feather="edit"></span> Registration</a>
                </li>
            </ul>
        </li>
        <li class="nav-item">
            <a class="nav-link dropdown-toggle" href="#usersSubmenu" data-toggle="collapse" aria-expanded="false" >
                <span data-feather="users"></span>
                Customers
            </a>
            <ul class="navbar-nav collapse pl-3" id="usersSubmenu">
                <li class="nav-item">
                    <a class="nav-link" href="#"><span data-feather="circle"></span> User Profile</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#"><span data-feather="user-check"></span> Customers Area</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#"><span data-feather="compass"></span> Feedback</a>
                </li>
            </ul>
        </li>
        <li class="nav-item">
            <a class="nav-link dropdown-toggle" href="#homeSubmenu" data-toggle="collapse" aria-expanded="false" >
                <span data-feather="trending-up"></span>
                Reports
            </a>
            <ul class="navbar-nav collapse pl-3" id="homeSubmenu">
                <li class="nav-item">
                    <a class="nav-link" href="#"><span data-feather="filter"></span> Current month</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#"><span data-feather="filter"></span> Last quarter</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#"><span data-feather="filter"></span> Year-end sale</a>
                </li>
            </ul>
        </li>
    </ul>

    <h6 class="sidebar-heading d-flex justify-content-between align-items-center px-3 mt-4 mb-1 text-muted">
        <span>Saved reports</span>
        <a class="d-flex align-items-center text-muted" href="#">
            <span data-feather="plus-circle"></span>
        </a>
    </h6>
    <ul class="nav flex-column mb-2">
        <li class="nav-item">
            <a class="nav-link" href="#">
                <span data-feather="file-text"></span>
                Current month
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="#">
                <span data-feather="file-text"></span>
                Last quarter
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="#">
                <span data-feather="file-text"></span>
                Social engagement
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="#">
                <span data-feather="file-text"></span>
                Year-end sale
            </a>
        </li>
    </ul>
</div>
