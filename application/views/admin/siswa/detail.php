<h3 class="page-header"><?= $title2; ?></h3>
<div class="row">
    <div class="col-lg-6">
        <div class="panel panel-primary">
            <div class="panel-heading text-center">
                Siswa Information
            </div>
            <!-- /.panel-heading -->
            <div class="panel-body">
                <div class="table-responsive">
                    <table class="table table-hover" style="font-size: 13px;">
                        <tbody>
                        	<tr>
                            	<th>NIS</th>
                            	<td>:</td>
                            	<td><?= $guru['nis']; ?></td>
                            </tr>
                            <tr>
                            	<th>Nama Lengkap</th>
                            	<td>:</td>
                            	<td><?= $guru['nama_siswa']; ?></td>
                            </tr>
                            <tr>
                            	<th>Tempat Lahir</th>
                            	<td>:</td>
                            	<td><?= $guru['tempat_lahir']; ?></td>
                            </tr>
                            <tr>
                            	<th>Tanggal Lahir</th>
                            	<td>:</td>
                            	<td><?= $guru['tanggal_lahir']; ?></td>
                            </tr>
                            <tr>
                            	<th>Kelas</th>
                            	<td>:</td>
                            	<td><?= $guru['kelas']; ?></td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                <!-- /.table-responsive -->
            </div>
            <!-- /.panel-body -->
        </div>
        <!-- /.panel -->
    </div>
    <!-- /.col-lg-6 -->
    <div class="col-lg-6">
        <div class="panel panel-primary">
            <!-- /.panel-heading -->
            <div class="panel-body">
                <img src="<?= base_url('assets/images/siswa/' . $guru['foto_siswa']) ?>" width="100%" heigt="80%">
            </div>
            <!-- /.panel-body -->
        </div>
        <!-- /.panel -->
    </div>
    <!-- /.col-lg-6 -->
</div>
