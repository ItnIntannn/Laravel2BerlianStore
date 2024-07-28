<!-- Main Sidebar Container -->
<aside class="main-sidebar sidebar-dark-primary elevation-4" style="background-color: #C24C65;">
    <!-- Brand Logo -->
    <a href="index3.html" class="brand-link" style="background-color: #C24C65;">
      <img src="/admin/dist/img/BerlianPink.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
      <span class="brand-text font-weight-light" style="color: #610014;">BerlianStore</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
        <!-- Sidebar user panel (optional) -->
        <div class="user-panel mt-3 pb-3 mb-3 d-flex">
            <div class="image">
                <img src="/admin/dist/img/intan.jpg" class="img-circle elevation-2" alt="User Image" style="width: 40px; height: 40px;">
            </div>
            <div class="info" >
                <a href="#" class="d-block" style="color: #610014;">IntanNur</a>
            </div>
        </div>

        <!-- SidebarSearch Form -->
        <div class="form-inline">
            <div class="input-group" data-widget="sidebar-search" >
                <input class="form-control form-control-sidebar" type="search" placeholder="Search" aria-label="Search" style="background-color: lightpink">
                <div class="input-group-append" >
                    <button class="btn btn-sidebar" style="background-color: lightpink">
                        <i class="fas fa-search fa-fw"></i>
                    </button>
                </div>
            </div>
        </div>

        <!-- Sidebar Menu -->
        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                <!-- Add icons to the links using the .nav-icon class
                    with font-awesome or any other icon font library -->
                <li class="nav-item" >
                    <a href="/" class="nav-link" style="color: #610014;">
                        <i class="nav-icon fas fa-th"></i>
                        <p>
                            Beranda
                            {{-- <span class="right badge badge-danger">New</span> --}}
                        </p>
                    </a>
                </li>

                <li class="nav-item">
                    <a href="#" class="nav-link" style="color: #610014;">
                        <i class="nav-icon fas fa-money-bill-alt"></i>
                        <p>
                            Transaksi
                            <i class="fas fa-angle-left right"></i>
                            {{-- <span class="badge badge-info right">6</span> --}}
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="/transactions/create" class="nav-link" style="color: #610014;">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Tambah</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="/transactions" class="nav-link" style="color: #610014;" >
                                <i class="far fa-circle nav-icon"></i>
                                <p>Lihat</p>
                            </a>
                        </li>
                    </ul>
                </li>
 
                <li class="nav-item">
                    <a href="#" class="nav-link" style="color: #610014;">
                        <i class="nav-icon fas fa-users fa-fw"></i>
                        <p>
                            Customer
                            <i class="fas fa-angle-left right"></i>
                            {{-- <span class="badge badge-info right">6</span> --}}
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="/customers/create" class="nav-link" style="color: #610014;">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Tambah</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="/customers" class="nav-link" style="color: #610014;">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Lihat</p>
                            </a>
                        </li>
                    </ul>
                </li>
   
                <li class="nav-item">
                    <a href="#" class="nav-link" style="color: #610014;">
                        <i class="nav-icon fas fa-cubes fa-fw" ></i>
                        <p>
                            Barang
                            <i class="fas fa-angle-left right"></i>
                            {{-- <span class="badge badge-info right">6</span> --}}
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="/stuffs/create" class="nav-link" style="color: #610014;">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Tambah</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="/stuffs" class="nav-link" style="color: #610014;">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Lihat</p>
                            </a>
                        </li>
                    </ul>
                </li>
                
                <li class="nav-item">
                    <a href="#" class="nav-link" style="color: #610014;">
                        <i class="nav-icon fas fa-list-alt fa-fw" ></i>
                        <p>
                            Kategori
                            <i class="fas fa-angle-left right"></i>
                            {{-- <span class="badge badge-info right">6</span> --}}
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="/categories/create" class="nav-link" style="color: #610014;">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Tambah</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="/categories" class="nav-link" style="color: #610014;">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Lihat</p>
                            </a>
                        </li>
                    </ul>
                </li>
        
                <li class="nav-item">
                    <a href="#" class="nav-link" style="color: #610014;">
                        <i class="nav-icon fas fa-user-tie fa-fw"></i>
                        <p>
                            User
                            <i class="fas fa-angle-left right"></i>
                            {{-- <span class="badge badge-info right">6</span> --}}
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="/users/create" class="nav-link" style="color: #610014;">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Tambah</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="/users" class="nav-link" style="color: #610014;">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Lihat</p>
                            </a>
                        </li>
                    </ul>
                </li>
            </ul>
        </nav>
        <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
</aside>
          

        
            