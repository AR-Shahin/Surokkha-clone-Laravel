<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="index3.html" class="brand-link">
        <img src="{{ asset('Backend') }}/dist/img/AdminLTELogo.png" alt="AdminLTE Logo"
            class="brand-image img-circle elevation-3" style="opacity: .8">
        <span class="brand-text font-weight-light">AdminLTE 3</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
        <!-- Sidebar user panel (optional) -->
        <div class="user-panel mt-3 pb-3 mb-3 d-flex">
            <div class="image">
                <img src="{{ asset('Backend') }}/dist/img/user2-160x160.jpg" class="img-circle elevation-2"
                    alt="User Image">
            </div>
            <div class="info">
                <a href="#" class="d-block">Alexander Pierce</a>
            </div>
        </div>

        <!-- Sidebar Menu -->
        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                @auth('admin')
                    <li class="nav-item">
                        <a target="_blank" class="nav-link" href="/">
                            <i class="nav-icon fa fa-globe text-warning"></i>
                            <p>Website</p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('admin.dashboard') }}">
                            <i class="nav-icon fa fa-home text-warning"></i>
                            <p>Dashboard</p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('admin.crud.index') }}">
                            <i class="nav-icon far fa-circle text-warning"></i>
                            <p>Crud</p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('admin.vaccine.index') }}">
                            <i class="nav-icon far fa-circle text-warning"></i>
                            <p>Vaccine</p>
                        </a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('admin.division.index') }}">
                            <i class="nav-icon far fa-circle text-warning"></i>
                            <p>Division</p>
                        </a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('admin.district.index') }}">
                            <i class="nav-icon far fa-circle text-warning"></i>
                            <p>District</p>
                        </a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('admin.hospital.index') }}">
                            <i class="nav-icon far fa-circle text-warning"></i>
                            <p>Hospital</p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('admin.user.index') }}">
                            <i class="nav-icon fa fa-user text-warning"></i>
                            <p>Users</p>
                        </a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('admin.doctor.index') }}">
                            <i class="nav-icon fa fa-user text-warning"></i>
                            <p>Doctors</p>
                        </a>
                    </li>
                @endauth
                @auth('admin')
                    <li class="nav-item">
                        <form action="{{ route('admin.logout') }}" method="POST">
                            @csrf
                            <button class="btn btn-success btn-block">Logout</button>
                        </form>
                    </li>
                @endauth


                @auth('doctor')
                    <li class="nav-item">
                        <form action="{{ route('doctor.logout') }}" method="POST">
                            @csrf
                            <button class="btn btn-success btn-block">Logout</button>
                        </form>
                    </li>
                @endauth
            </ul>
        </nav>
        <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
</aside>
