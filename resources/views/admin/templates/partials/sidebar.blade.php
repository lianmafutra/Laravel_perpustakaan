<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="index3.html" class="brand-link">
      {{-- <img src="dist/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3"
           style="opacity: .8"> --}}
      <span class="brand-text font-weight-light">Perpus App</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="{{asset('assets/dist/img/avatar5.png')}}" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a href="#" class="d-block">{{auth()->user()->name}}</a>
          <a href="#" class="d-block">{{auth()->user()->email}}</a>
        </div>
      </div>

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
        
         
          <li class="nav-header">Menu Utama</li>
          <li class="nav-item">
          <a href="{{route('admin.author.index')}}" class="nav-link">
              <i class="nav-icon fas fa-user"></i>
              <p>Penulis</p>
            </a>
          </li>
          <li class="nav-item">
          <a href="{{route('admin.book.index')}}" class="nav-link">
              <i class="nav-icon fas fa-book"></i>
              <p>Buku</p>
            </a>
          </li>
          <li class="nav-item">
            <a href="{{route('admin.borrow.index')}}" class="nav-link">
                <i class="nav-icon fas fa-book"></i>
                <p>Buku dipinjam</p>
              </a>
            </li>
          <li class="nav-item">
            <a href="https://adminlte.io/docs/3.0" class="nav-link">
              <i class="nav-icon fas fa-user-friends"></i>
              <p>User</p>
            </a>
          </li>
        
         
          
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>