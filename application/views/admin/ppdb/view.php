<h3 class="page-header"><?= $title2; ?></h3>
<div class="col-lg">
    <div class="panel panel-primary">
        <div class="panel-heading">
            LIST SISWA YANG MELAKUKAN PPDB ONLINE
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
                            <th>No Whatsapp</th>
                            <th>Status Akun</th>
                            <th>Status Siswa</th>
                            <th>Lihat Detail</th>
                            <th width="50" class="text-center">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                    	<?php $i=1; ?>
                    	<?php foreach ($siswa as $sw): ?>
                    		<tr>
                    			<td><?= $i; ?></td>
                    			<td><?= $sw['nama_siswa']; ?></td>
                    			<td><?= $sw['username']; ?></td>
                    			<td><?= $sw['no_whatsapp']; ?></td>
                    			<td>
                    				<?php if ($sw['status_akun'] == 1) {
                    					echo "Aktif";
                    				} else {
                    					echo "Tidak Aktif";
                    				} ?>
                    			</td>
                    			<td>
                    				<?php 

                    					if ($sw['status_siswa'] == 1) {
                    						echo "Diterima";
                    					} else if ($sw['status_siswa'] == 2) {
                    						echo "Tidak Diterima";
                    					} else {
                    						echo "Belum Diputuskan";
                    					}

                    				 ?>
                    			</td>
                    			<td>
                    				
                    			</td>
                    			<td class="text-center">
	                               <?= act('edit', $sw['id_siswa'],'ppdb/edit/') ?>
	                               <?= act('hapus',$sw['id_siswa'],'ppdb/delete',['modal' => 'hpsModalSiswaPpdb']) ?>
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
