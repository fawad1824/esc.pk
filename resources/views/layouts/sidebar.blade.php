<aside class="main-sidebar sidebar-dark-primary elevation-4">

    <a href="/home" class="brand-link">
        {{-- <img src="{{ asset('assets/dist/img/AdminLTELogo.png') }}" alt="AdminLTE Logo"
            class="brand-image img-circle elevation-3" style="opacity: .8"> --}}
        <span class="brand-text font-weight-light">ESC.PK</span>
    </a>

    <div class="sidebar">

        <div class="user-panel mt-3 pb-3 mb-3 d-flex">
            <div class="image">
                <img src="/images/{{ Auth::user()->profile }}" class="img-circle elevation-2" alt="User Image">
            </div>
            <div class="info">
                <a href="/home" class="d-block">{{ Auth::user()->name }}</a>
            </div>
        </div>


        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu"
                data-accordion="false">

                {{-- <li class="nav-item">
                    <a href="#" class="nav-link ">
                        <i class="nav-icon fas fa-tachometer-alt"></i>
                        <p>
                            Starter Pages
                            <i class="right fas fa-angle-left"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="#" class="nav-link ">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Active Page</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="#" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Inactive Page</p>
                            </a>
                        </li>
                    </ul>
                </li> --}}

                {{-- R AND C --}}

                @if (Auth::user()->role == 2 || Auth::user()->is_admin == 1)
                    @if (Auth::user()->is_admin == 1)
                        <li class="nav-item">
                            <a href="/servicess" class="nav-link">
                                <i class="nav-icon fas fa-user"></i>
                                <p>
                                    Services
                                </p>
                            </a>
                        </li>
                    @endif
                    <li class="nav-item">
                        <a href="#" class="nav-link ">
                            <i class="nav-icon fas fa-tachometer-alt"></i>
                            <p>
                                Construction
                                <i class="right fas fa-angle-left"></i>
                            </p>
                        </a>
                        <ul class="nav nav-treeview">
                            <li class="nav-item">
                                <a href="/residential" class="nav-link ">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>Residential</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="/commerical" class="nav-link">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>Commerical</p>
                                </a>
                            </li>
                        </ul>
                    </li>

                    <li class="nav-item">
                        <a href="/maintaning" class="nav-link">
                            <i class="nav-icon fas fa-user"></i>
                            <p>
                                Maintenance
                            </p>
                        </a>
                    </li>

                    <li class="nav-item">
                        <a href="/Retrofitting" class="nav-link">
                            <i class="nav-icon fas fa-user"></i>
                            <p>
                                Retrofitting
                            </p>
                        </a>
                    </li>

                    <li class="nav-item">
                        <a href="/plumbing" class="nav-link">
                            <i class="nav-icon fas fa-user"></i>
                            <p>
                                Plumbing
                            </p>
                        </a>
                    </li>
                @endif

                @if (Auth::user()->is_admin != 0)
                    <li class="nav-item">
                        <a href="/project-bidding" class="nav-link">
                            <i class="nav-icon fas fa-cog"></i>
                            <p>
                                Project Biding
                            </p>
                        </a>
                    </li>
                @endif
                @if (Auth::user()->role == 2 || Auth::user()->is_admin != 1)
                    <li class="nav-item">
                        <a href="/my-project-bidding" class="nav-link">
                            <i class="nav-icon fas fa-cog"></i>
                            <p>
                                My Project Biding
                            </p>
                        </a>
                    </li>
                @endif

                <li class="nav-item">
                    <a href="/profile" class="nav-link">
                        <i class="nav-icon fas fa-user"></i>
                        <p>
                            Profile
                        </p>
                    </a>
                </li>


                <li class="nav-item">
                    <a href="{{ route('logout') }}"
                        onclick="event.preventDefault();
                              document.getElementById('logout-form').submit();"
                        class="nav-link">
                        <i class="nav-icon fas fa-power-off"></i>
                        <p>
                            Logout
                        </p>
                        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                            @csrf
                        </form>
                    </a>
                </li>
            </ul>
        </nav>

    </div>

</aside>
