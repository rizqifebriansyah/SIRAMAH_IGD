<!-- Main Sidebar Container -->
<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="index3.html" class="brand-link">
        <img src="{{ asset('public/logo_rs.png') }}" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
        <span class="brand-text font-weight-light">SIRAMAH GIZI</span>
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
                    <a href="{{ route('gizi') }}" class="nav-link @if($menu == 'asseesmengizi' ) active @endif">
                        <i class="nav-icon fas fa-pen"></i>

                        <p>
                            Assesmen Gizi
                        </p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{ route('gizi') }}" class="nav-link @if($menu == 'gizi' ) active @endif">
                        <i class="nav-icon fas fa-cart-arrow-down"></i>

                        <p>
                            ORDER MAKAN
                        </p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{ route('riwayatordermakan') }}" class="nav-link @if($menu == 'riwayatordermakan' ) active @endif">
                        <i class="nav-icon fas fa-cart-arrow-down"></i>

                        <p>
                            RIWAYAT ORDER MAKAN
                        </p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{ route('gizibilling') }}" class="nav-link @if($menu == 'gizibilling' ) active @endif">
                        <i class="nav-icon fas fa-file-invoice"></i>
                        <p>
                            Riwayat Billing
                        </p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{ route('monitoringmakan') }}" class="nav-link @if($menu == 'monitoringmakan' ) active @endif">
                        <i class="nav-icon fas fa-file-invoice"></i>
                        <p>
                            MONITORING MAKANAN
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