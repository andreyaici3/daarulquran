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
                    <a href="<?= base_url('ppdb/dashboard'); ?>"><i class="fa fa-dashboard fa-fw"></i> Dashboard</a>
                </li>
                 <li>
                    <a href="#"><i class="fa fa-database fa-fw"></i> Master Data<span class="fa arrow"></span></a>
                    <ul class="nav nav-second-level">
                        <li>
                            <a href="<?= base_url('ppdb/sedit/' . urlencode(base64_encode(base64_encode($person['id_siswa'])))); ?>"><i class="fa fa-table fa-fw"></i> Edit Data</a>
                        </li>
                        <li>
                            <a href="<?= base_url('ppdb/doc/' . urlencode(base64_encode(base64_encode($person['id_siswa'])))); ?>"><i class="fa fa-table fa-fw"></i> Upload Document</a>
                        </li>
                        <li>
                            <a href="<?= base_url('ppdb/changePassword/' . urlencode( base64_encode(base64_encode($person['id_siswa'])))); ?>"><i class="fa fa-table fa-fw"></i> Ganti Password</a>
                        </li>
                    </ul>
                </li>
               
                
                
                <li>
                    <a onclick="return confirm('Yakin Ingin Logout.?')" href="<?= base_url('ppdb/logout'); ?>"><i class="fa fa-sign-out fa-fw"></i> Logout</a>
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