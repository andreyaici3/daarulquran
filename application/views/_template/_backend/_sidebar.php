 <?php 

  $a = $this->uri->segment(2);

  if ($a == NULL) { $dash = "class='nav-link active'"; } else { $dash = "class='nav-link'"; }
  if (@$menuAktif == 'content') { $cont = "class='nav-link active'"; } else { $cont = "class='nav-link'"; }

  ?>

 <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="<?= base_url('admin') ?>" class="brand-link">
      <img src="<?= base_url('assets/images/config/pp1.png')  ?>" class="brand-image img-circle elevation-3"
           style="opacity: .8">
      <span class="brand-text font-weight-bold">Daarul Qur'an</span>
    </a>
    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="<?= base_url('assets/images/config/person.png') ?>" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a href="" class="d-block"><?= $sess['user']->name ?></a>
        </div>
      </div>

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          <li class="nav-item has-treeview">
            <a href="<?= base_url('dashboard') ?>" <?= $dash ?> >
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>Dashboard</p>
            </a>
          </li>
          <li 
             <?php 
                  $url = $this->uri->segment(2);
                  if ($url == 'mapel' || $url == 'kelas' || $url == 'guru' || $url == 'siswa') {
                    echo "class='nav-item has-treeview menu-open'";
                  } else {
                    echo "class='nav-item has-treeview'";
                  }

               ?>


           >
            <a href="#"
              <?php 
                $u = $this->uri->segment(2);
                 if ($u == 'mapel' || $u == 'kelas' || $u == 'guru' || $u == 'siswa' ) {
                    echo "class='nav-link active'";
                  } else {
                    echo "class='nav-link'";
                  }
               ?> >

             <i class="nav-icon fas fa-digital-tachograph"></i>
              <p>
                Master Data
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="<?= base_url('admin/mapel') ?>" 

                  <?php 

                 if ($this->uri->segment(2) == 'mapel') {
                    echo "class='nav-link active'";
                  } else {
                    echo "class='nav-link'";
                  }

               ?>

                  >
                  <i class="far fa-circle nav-icon"></i>
                  <p>Mata Pelajaran</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="<?= base_url('admin/kelas') ?>" 

                  <?php 

                 if ($this->uri->segment(2) == 'kelas') {
                    echo "class='nav-link active'";
                  } else {
                    echo "class='nav-link'";
                  }

               ?>

                  >
                  <i class="far fa-circle nav-icon"></i>
                  <p>Data Kelas</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="<?= base_url('admin/guru') ?>" 

                  <?php 

                 if ($this->uri->segment(2) == 'guru') {
                    echo "class='nav-link active'";
                  } else {
                    echo "class='nav-link'";
                  }

               ?>

                  >
                  <i class="far fa-circle nav-icon"></i>
                  <p>Data Guru</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="<?= base_url('admin/siswa') ?>" 

                  <?php 

                 if ($this->uri->segment(2) == 'siswa') {
                    echo "class='nav-link active'";
                  } else {
                    echo "class='nav-link'";
                  }

               ?>

                  >
                  <i class="far fa-circle nav-icon"></i>
                  <p>Data Siswa</p>
                </a>
              </li>
        </ul>
        <li 

             <?php 
                  
                  if (@$menuAktif == 'content') {
                    echo "class='nav-item has-treeview menu-open'";
                  } else {
                    echo "class='nav-item has-treeview'";
                  }

               ?>


           >
            <a href="#" <?= $cont  ?>>
              <i class="nav-icon fas fa-file-signature"></i>
              <p>Content<i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="<?= base_url('admin/pengumuman') ?>" <?php if (@$subMenu == 'pengumuman'){ echo "class='nav-link active'";} else { echo "class='nav-link'";} ?>>
                  <i class="far fa-circle nav-icon"></i>
                  <p>Pengumuman</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="<?= base_url('admin/berita') ?>" <?php if (@$subMenu == 'berita'){ echo "class='nav-link active'";} else { echo "class='nav-link'";} ?>>
                  <i class="far fa-circle nav-icon"></i>
                  <p>Berita</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="<?= base_url('admin/album') ?>" <?php if (@$subMenu == 'galery'){ echo "class='nav-link active'";} else { echo "class='nav-link'";} ?>>
                  <i class="far fa-circle nav-icon"></i>
                  <p>Galery</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="<?= base_url('admin/doc') ?>" <?php if (@$subMenu == 'doc'){ echo "class='nav-link active'";} else { echo "class='nav-link'";} ?>>
                  <i class="far fa-circle nav-icon"></i>
                  <p>Upload File</p>
                </a>
              </li>
            </ul>
          </li>
          <li 

             <?php 
                  $url = $this->uri->segment(2);
                  if ($url == 'ppdb') {
                    echo "class='nav-item has-treeview menu-open'";
                  } else {
                    echo "class='nav-item has-treeview'";
                  }

               ?>


           >
            <a href="#"
              <?php 
                $u = $this->uri->segment(2);
                 if ($u == 'ppdb') {
                    echo "class='nav-link active'";
                  } else {
                    echo "class='nav-link'";
                  }
               ?> >
              <i class="nav-icon fas fa-user-plus"></i>
              <p>
                PPDB
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="<?= base_url('admin/ppdb') ?>" 

                  <?php 

                 if ($this->uri->segment(2) == 'ppdb') {
                    echo "class='nav-link active'";
                  } else {
                    echo "class='nav-link'";
                  }

               ?>

                  >
                  <i class="far fa-circle nav-icon"></i>
                  <p>List PPDB</p>
                </a>
              </li>
            </ul>
          <li class="nav-item has-treeview">
            <a href="<?= base_url('auth/logout') ?>" class="nav-link" >
              <i class="nav-icon fas fa-sign-out-alt"></i>
              <p>Logout</p>
            </a>
          </li>
              

      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>
