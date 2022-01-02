<nav class="navbar  navbar-expand-lg navbar-dark bg-dark sticky-top">
    <div class="container-fluid">
        <ul class="mainbar navbar-nav float-start flex-row">
            <li class="dropdown ">
                <a class="navbar-brand nav-item dropdown-toggle " href="#" style="background-color: transparent;"
                   href="#" id="navbarDropdownMenuLink" role="button"
                   data-bs-toggle="dropdown" aria-expanded="false">
                    <img class="logo-header ftm-sm ftm-md" src="{{url('assets/imgs/logoheader.png')}}">
                </a>
                <ul class="dropdown-menu dropdown-menu-start dropdown-menu-dark" aria-labelledby="navbarDropdownMenuLink">
                    <li><a class="dropdown-item" href="#"><i class="fa fa-suitcase me-1"></i> Dashboard</a></li>
                    <li><a class="dropdown-item" href="#"><i class="fa fa-folder me-1"></i> Files</a></li>
                    <li><a class="dropdown-item" href="#"><i class="fa fa-image me-1"></i> Photos</a></li>
                    <li><a class="dropdown-item" href="#"><i class="fa fa-bolt me-1"></i> Activities</a></li>
                    <li><a class="dropdown-item" href="#"><i class="fa fa-pencil me-1"></i> Note</a></li>
                    <li><a class="dropdown-item" href="#"><i class="fa fa-star me-1"></i> Bookmarks</a></li>
                    <li><a class="dropdown-item" href="#"><i class="fa fa-pager me-1"></i> Deck</a></li>
                    <li><a class="dropdown-item" href="#"><i class="fa fa-tasks me-1"></i> Tasks</a></li>
                </ul>
            </li>
            <li class="nav-item d-sm-none d-md-flex">
                <a class="nav-link active" href="#">
                    <i class="fa fa-suitcase"></i>
                    <span class="nav-title"> Dashboard</span>
                    <span class="nav-short"> dashboard</span>
                </a>
            </li>
            <li class="nav-item dropdown d-sm-none d-md-flex">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownLink" role="button"
                   data-bs-toggle="dropdown" aria-expanded="false">
                    <i class="fa fa-folder"></i> <!-- <span class="caret"></span>-->
                    <span class="nav-title"> Files</span>
                    <span class="nav-short"> files</span>
                </a>
                <ul class="dropdown-menu dropdown-menu-center dropdown-menu-dark" aria-labelledby="navbarDropdownLink">
                    <li><a class="dropdown-item" href="#">Action</a></li>
                    <li><a class="dropdown-item" href="#">Another action</a></li>
                    <li><a class="dropdown-item" href="#">Something else here</a></li>
                </ul>
            </li>
            <li class="nav-item d-sm-none d-md-flex">
                <a class="nav-link" href="#">
                    <i class="fa fa-image"></i>
                    <span class="nav-title"> Photos</span>
                    <span class="nav-short"> photos</span>
                </a></li>
            <li class="nav-item d-sm-none d-md-flex">
                <a class="nav-link" href="#">
                    <i class="fa fa-bolt"></i>
                    <span class="nav-title"> Activities</span>
                    <span class="nav-short"> activities</span>
                </a>
            </li>
            <li class="nav-item d-sm-none d-md-flex">
                <a class="nav-link" href="#">
                    <i class="fa fa-pencil"></i>
                    <span class="nav-title"> Notes</span>
                    <span class="nav-short"> notes</span>
                </a></li>
            <li class="nav-item d-sm-none d-md-flex">
                <a class="nav-link" href="#">
                    <i class="fa fa-star"></i>
                    <span class="nav-title"> Bookmarks</span>
                    <span class="nav-short"> bookmarks</span>
                </a>
            </li>
            <li class="nav-item d-sm-none d-md-flex">
                <a class="nav-link" href="#">
                    <i class="fa fa-pager"></i>
                    <span class="nav-title"> Deck</span>
                    <span class="nav-short"> deck</span>
                </a></li>
            <li class="nav-item d-sm-none d-md-flex">
                <a class="nav-link" href="#">
                    <i class="fa fa-tasks"></i>
                    <span class="nav-title"> Tasks</span>
                    <span class="nav-short"> tasks</span>
                </a>
            </li>
        </ul>
        <ul class="navbar-nav float-end flex-row ">
            <li class="nav-item dropdown d-sm-none d-md-flex">
                <a class="nav-link dropdown-toggle" href="#" id="navbarOther"
                   role="button" data-bs-toggle="dropdown" aria-expanded="false">
                    <i class="fa fa-ellipsis-h"></i>

                </a>
                <ul class="dropdown-menu dropdown-menu-end dropdown-menu-dark" aria-labelledby="navbarOther">
                    <li><a class="dropdown-item" href="#">Action</a></li>
                    <li><a class="dropdown-item" href="#">Another action</a></li>
                    <li><hr class="dropdown-divider"></li>
                    <li><a class="dropdown-item" href="#">Something else here</a></li>
                </ul>
            </li>
            <li class="nav-item d-sm-none d-md-flex">
                <a class="nav-link" href="#">
                    <i class="fa fa-search"></i>
                </a>
            </li>
            <li class="nav-item d-sm-none d-md-flex">
                <a class="nav-link" href="#">
                    <i class="fa fa-bell">
                        <span class="position-absolute start-10 pt-0 pb-0 py-1 px-1 translate-middle badge rounded-pill bg-danger">
                            <span class=""><small><small><small>99+</small></small></small></span>
                            <span class="visually-hidden">unread messages</span>
                        </span>
                    </i>
                </a>
            </li>
            <li class="nav-item d-sm-none d-md-flex">
                <a class="nav-link" href="#">
                    <i class="fa fa-user"></i>
                    <span class="position-absolute start-10 translate-middle p-1 bg-danger border border-light rounded-circle">
                        <span class="visually-hidden">New alerts</span>
                    </span>
                </a>
            </li>
            <li class="nav-avatar">
                <a class=" dropdown-toggle" href="#" id="navbarUserLinks"
                   role="button" data-bs-toggle="dropdown" aria-expanded="false">
                    <img src="{{url('uploads/users/a/avatar.128.jpg')}}">
                </a>
                <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarUserLinks">
                    <li><a class="dropdown-item" href="#">Action</a></li>
                    <li><a class="dropdown-item" href="#">Another action</a></li>
                    <li><hr class="dropdown-divider"></li>
                    <li><a class="dropdown-item" href="#">Something else here</a></li>
                </ul>
            </li>
        </ul>
    </div>
</nav>