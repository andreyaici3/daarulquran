<h3 class="page-header"><?= $title2; ?></h3>
<div class="row">
    <div class="col-lg-6">
        <div class="panel panel-primary">
            <div class="panel-heading text-center">
                Guru Information
            </div>
            <!-- /.panel-heading -->
            <div class="panel-body">
                <div class="table-responsive">
                    <table class="table table-hover" style="font-size: 13px;">
                        <tbody>
                        	<tr>
                            	<th>NIP</th>
                            	<td>:</td>
                            	<td><?= $guru['nip']; ?></td>
                            </tr>
                            <tr>
                            	<th>Nama Lengkap</th>
                            	<td>:</td>
                            	<td><?= $guru['nama_guru']; ?></td>
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
                            	<th>Mata Pelajaran</th>
                            	<td>:</td>
                            	<td><?= $guru['nama_mapel']; ?></td>
                            </tr>
                            <tr>
                            	<th>Pendidikan Terakhir</th>
                            	<td>:</td>
                            	<td><?= $guru['pendidikan']; ?></td>
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
                <img src="<?= base_url('assets/images/guru/' . $guru['foto_guru']) ?>" width="100%" heigt="80%">
            </div>
            <!-- /.panel-body -->
        </div>
        <!-- /.panel -->
    </div>
    <!-- /.col-lg-6 -->
</div>
