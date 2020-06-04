 <!-- partial:partials/_sidebar.html -->
 <nav class="sidebar sidebar-offcanvas" id="sidebar">
        <ul class="nav">
          <li class="nav-item nav-profile">
            <div class="nav-link">
              <div class="user-wrapper">
                <div class="profile-image">
                  <img src="<?=base_url("assets/img/home-right.png") ;?>" alt="profile image">
                </div>
                <div class="text-wrapper">
                  <p class="profile-name"><?php echo $this->session->userdata('nama_user'); ?></p>
                  <div>
                    <small class="designation text-muted">Manager</small>
                    <span class="status-indicator online"></span>
                  </div>
                </div>
              </div>
            
            </div>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="<?=base_url("menu");?>">
              <i class="menu-icon mdi mdi-television"></i>
              <span class="menu-title">Dashboard</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" data-toggle="collapse" href="#ui-basic" aria-expanded="false" aria-controls="ui-basic">
              <i class="menu-icon mdi mdi-content-copy"></i>
              <span class="menu-title">Pesanan Laundry</span>
              <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="ui-basic">
            <ul class="nav flex-column sub-menu">
            <li class="nav-item">
                  <a class="nav-link" href="<?=base_url('');?>menu/produk">Produk</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="<?=base_url('');?>menu/proses">Pesanan Proses</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="<?=base_url('');?>menu/selesai">Pesanan Selesai</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="<?=base_url('');?>menu/complete">Pesanan Completed</a>
                </li>
              </ul>
            </div>
          </li>
         
          <li class="nav-item">
            <a class="nav-link" href="<?=base_url("menu/customer");?>">
              <i class="menu-icon mdi mdi-chart-line"></i>
              <span class="menu-title">Customer</span>
            </a>
          </li>
         
          <li class="nav-item">
            <a class="nav-link" href="<?=base_url("menu/informasi");?>">
              <i class="menu-icon mdi mdi-laptop"></i>
              <span class="menu-title">Informasi Paket</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="<?=base_url("map");?>">
              <i class="menu-icon mdi mdi-laptop"></i>
              <span class="menu-title">MAP</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="<?=base_url("menu/logout");?>">
              <i class="menu-icon mdi mdi-power"></i>
              <span class="menu-title">Keluar</span>
            </a>
          </li>
        </ul>
      </nav>