<!-- Main Sidebar Container -->
<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="index3.html" class="brand-link">
        <img src="{{ asset('public/logo_rs.png') }}" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">

        <span class="brand-text font-weight-light">RSUD WALED</span>

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
            <li class="nav-header">RSUD WALED</li>

                <li class="nav-item">
                    <a href="{{ route('keuangan') }}" class="nav-link @if($menu == 'KEUANGAN' ) active @endif">
                        <i class="nav-icon fas fa-home"></i>
                        <p>
                            DASHBOARD
                            
                        </p>
                    </a>
                </li>
                <li class="nav-header">KEUANGAN</li>
                <li class="nav-item">
                    <a href="{{ route('rab') }}" class="nav-link @if($menu == 'RAB' ) active @endif">
                        <i class="nav-icon fas fa-book"></i>
                        <p>
                            RAB
                        </p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{ route('bukukas') }}" class="nav-link @if($menu == 'BUKU KAS' ) active @endif">
                        <i class="nav-icon fas fa-book"></i>
                        <p>
                            BUKU KAS
                        </p>
                    </a>
                </li>
           <!--
               
                <li class="nav-header">KPO</li>
                <li class="nav-item">
                    <a href="{{ route('kpo') }}" class="nav-link @if($menu == 'kpo' ) active @endif">
                        <i class="nav-icon fas fa-archive"></i>
                        <p>
                            KPO Elektronik
                        </p>
                    </a>
                </li> -->


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