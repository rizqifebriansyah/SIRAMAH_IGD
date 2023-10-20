<!-- Main Sidebar Container -->
<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="index3.html" class="brand-link">
        <img src="{{ asset('public/logo_rs.png') }}" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
        <span class="brand-text font-weight-light">SIRAMAH IGD</span>
    </a>
    <!-- Sidebar -->
    <div class="sidebar">
        <!-- Sidebar user panel (optional) -->
        <div class="user-panel mt-3 pb-3 mb-3 d-flex">
            <div class="image">
                <img src="{{ asset('public/adminlte/dist/img/user2-160x160.jpg') }}" class="img-circle elevation-2" alt="User Image">
            </div>
            <div class="info">
                <a href="#" class="d-block">Alexander Pierce</a>
            </div>
        </div>

        <!-- Sidebar Menu -->
        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                <li class="nav-item">
                    <a href="{{ route('dokter') }}" class="nav-link @if($menu == 'dokter' ) active @endif">
                        <i class="nav-icon fas fa-th"></i>
                        <p>
                            Dashboard
                            {{-- <span class="right badge badge-danger">New</span> --}}
                        </p>
                    </a>
                </li>
                <li class="nav-header">TRIASE DOKTER</li>
                <li class="nav-item">
                    <a href="{{ route('triase') }}" class="nav-link @if($menu == 'triase' ) active @endif">
                        <i class="nav-icon fas fa-book-medical"></i>
                        <p>
                            TRIASE
                        </p>
                    </a>
                </li>
                <li class="nav-header">ASSESMEN</li>
                <li class="nav-item">
                    <a href="{{ route('asses') }}" class="nav-link @if($menu == 'asses' ) active @endif">
                        <i class="nav-icon fas fa-archive"></i>
                        <p>
                            Assesment Dokter
                        </p>
                    </a>
                </li>
                
                
                <li class="nav-item">
                    <a class="nav-link">
                        <i class="nav-icon far fa-circle text-warning"></i>
                        <p>Logout</p>
                    </a>
                </li>
            </ul>
        </nav>
        <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
</aside>