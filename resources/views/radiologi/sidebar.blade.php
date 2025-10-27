<!-- Main Sidebar Container -->
<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="index3.html" class="brand-link">
        <img src="{{ asset('public/logo_rs.png') }}" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
        <span class="brand-text font-weight-light">SIRAMAH RADIOLOGI</span>
    </a>
    <!-- Sidebar -->
    <div class="sidebar">
        <!-- Sidebar user panel (optional) -->
        <div class="user-panel mt-3 pb-3 mb-3 d-flex">
            <div class="image">
                <img src="{{ asset('public/adminlte/dist/img/user2-160x160.jpg') }}" class="img-circle elevation-2" alt="User Image">
            </div>
            <div class="info">
                <a href="#" class="d-block">{{$user}}</a>
            </div>
        </div>

        <!-- Sidebar Menu -->
        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">


                <li class="nav-header">SIM-RS</li>
                <li class="nav-item">
                    <a href="{{ route('radiologi') }}" class="nav-link @if($menu == 'radiologi' ) active @endif">
                        <i class="nav-icon fas fa-cart-arrow-down"></i>
                        <p>
                            Billing
                        </p>
                    </a>
                </li>

                <li class="nav-item">
                    <a href="{{ route('riwayatorder') }}" class="nav-link @if($menu == 'riwayatorder' ) active @endif">
                        <i class="nav-icon fas fa-file-invoice"></i>
                        <p>
                            Riwayat Billing
                        </p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{ route('riwayatbridging') }}" class="nav-link @if($menu == 'riwayatbridging' ) active @endif">
                        <i class="nav-icon fas fa-file-invoice"></i>
                        <p>
                            MONITORING BRIDGING
                        </p>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" onclick="logout()">
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