<div class="navbar-default sidebar" role="navigation">
        <div class="sidebar-nav navbar-collapse">
            <ul class="nav" id="side-menu">
                <li class="sidebar-search">
                    <div class="input-group custom-search-form">
                        <input type="text" class="form-control" placeholder="Search...">
                        <span class="input-group-btn">
                            <button class="btn btn-primary" type="button">
                                <i class="fa fa-search"></i>
                            </button>
                        </span>
                    </div>
                    <!-- /input-group -->
                </li>
                <li>
                    <a href="<?= base_url('admin'); ?>"><i class="fa fa-dashboard fa-fw"></i> Dashboard</a>
                </li>
                 <li>
                    <a href="#"><i class="fa fa-database fa-fw"></i> Master Data<span class="fa arrow"></span></a>
                    <ul class="nav nav-second-level">
                        <li>
                            <a href="<?= base_url('mapel'); ?>"><i class="fa fa-table fa-fw"></i> Mata Pelajaran</a>
                        </li>
                        <li>
                            <a href="<?= base_url('kelas'); ?>"><i class="fa fa-institution fa-fw"></i> Data Kelas</a>
                        </li>
                        <li>
                            <a href="<?= base_url('guru'); ?>"><i class="fa fa-users fa-fw"></i> Data Guru</a>
                        </li>
                        <li>
                            <a href="<?= base_url('siswa'); ?>"><i class="fa fa-mortar-board fa-fw"></i> Data Siswa</a>
                        </li>
                    </ul>
                </li>
                 <li>
                    <a href="#"><i class="fa fa-indent fa-fw"></i> Content<span class="fa arrow"></span></a>
                    <ul class="nav nav-second-level">
                        <li>
                            <a href="<?= base_url('pengumuman'); ?>"><i class="fa fa-file fa-fw"></i> Pengumuman</a>
                        </li>
                        <li>
                            <a href="<?= base_url('berita'); ?>"><i class="fa fa-newspaper-o fa-fw"></i> Berita</a>
                        </li>
                        <li>
                            <a href="<?= base_url('galery'); ?>"><i class="fa fa-image fa-fw"></i> Galery</a>
                        </li>
                        <li>
                            <a href="<?= base_url('upload'); ?>"><i class="fa fa-file fa-fw"></i> Upload Document</a>
                        </li>
                    </ul>
                </li>

                <li>
                    <a href="#"><i class="fa fa-indent fa-fw"></i> PPDB<span class="fa arrow"></span></a>
                    <ul class="nav nav-second-level">
                         <li>
                            <a href="<?= base_url('ppdb/view'); ?>"><i class="fa fa-file fa-fw"></i> Lihat Data</a>
                        </li>
                        <li>
                            <a href="<?= base_url('ppdb/status'); ?>"><i class="fa fa-file fa-fw"></i> Status Penerimaan</a>
                        </li>
                    </ul>
                </li>

                
                <li>
                    <a href="#"><i class="fa fa-cog fa-fw"></i> Settings<span class="fa arrow"></span></a>
                    <ul class="nav nav-second-level">
                        <li>
                            <a href="<?= base_url('setting/slider'); ?>"><i class="fa fa-image fa-fw"></i> Images</a>
                        </li>
                        <li>
                            <a href="<?= base_url('setting/headerC'); ?>"><i class="fa fa-list fa-fw"></i> Header Home</a>
                        </li>
                    </ul>
                </li>
                
                
                <li>
                    <a href="<?= base_url('auth/logout'); ?>"><i class="fa fa-sign-out fa-fw"></i> Logout</a>
                </li>
            </ul>
        </div>
        <!-- /.sidebar-collapse -->
    </div>
    <!-- /.navbar-static-side -->
</nav>

<!-- Page Content -->
<div id="page-wrapper">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">