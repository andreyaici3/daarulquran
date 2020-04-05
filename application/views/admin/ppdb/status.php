<h3 class="page-header"><?= $title2; ?></h3>
<div class="col-lg">
    <div class="panel panel-primary">
        <div class="panel-heading">
            Status Siswa
        </div>
        <div class="panel-body">
            <?= $this->session->flashdata('msgi'); ?>
            <div class="table-responsive">
                <table class="table table-striped table-bordered table-hover" id="dataTables-example" style="font-size: 13px;">
                    <thead>
                        <tr>
                            <th width="25" class="text-center">No</th>
                            <th>Nama Siswa</th>
                            <th>Username</th>
                            <th>Verifikasi Akun</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                    	<?php $i=1; ?>
                    	<?php foreach ($siswa as $sw): ?>
                    		<tr>
                    			<td><?= $i; ?></td>
                    			<td><?= $sw['nama_siswa']; ?></td>
                    			<td><?= $sw['username']; ?></td>
                                <td>
                                    
                                    <?php if ($sw['status_akun'] == 1): ?>
                                        <button class="btn btn-block btn-success">Verified</button>
                                    <?php else: ?>
                                        <a href="" class="btn btn-danger btn-block">Not Verified</a>
                                    <?php endif ?>

                                </td>
                    			
                    			<td align="center">
                    			<?php if ($sw['status_siswa'] == 1): ?>
                                    <a onclick="return confirm('Yakin ingin membatalkan siswa ini.?')" href="<?= base_url('ppdb/batal/' . $sw['id_siswa']); ?>" class="btn btn-danger">Batalkan</a>
                                <?php endif ?>
                                <?php if ($sw['status_siswa'] == 0 && $sw['access_edit'] == 0): ?>
                                     <a onclick="return confirm('Yakin ingin menerima siswa ini.?')" href="<?= base_url('ppdb/terima/' . $sw['id_siswa']); ?>" class="btn btn-danger btn-block">Terima Siswa</a>
                                <?php endif ?>
                                <?php if ($sw['status_siswa'] == 0 && $sw['access_edit'] == 1): ?>
                                    <a href="" class="btn-danger btn-xs">Data Belum Di Submit</a>
                                <?php endif ?>
                                </td>
                    			
                    		</tr>
                    	<?php $i++; ?>
                    	<?php endforeach ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
