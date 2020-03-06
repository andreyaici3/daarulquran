<h3 class="page-header"><?= $title2; ?></h3>
<div class="col-lg">
    <div class="panel panel-primary">
        <div class="panel-heading">
            <a class="btn btn-md btn-primary addMapel" href="<?= base_url('siswa/add'); ?>"><i class="fa fa-plus fa-fw"></i> Add New Siswa</a>
        </div>
        <div class="panel-body">
            <?= $this->session->flashdata('msgi'); ?>
            <div class="table-responsive">
                <table class="table table-striped table-bordered table-hover" id="dataTables-example" style="font-size: 13px;">
                    <thead>
                        <tr>
                            <th width="25" class="text-center">No</th>
                            <th>NIS</th>
                            <th>Nama Siswa</th>
                            <th>Tempat Lahir</th>
                            <th>Tanggal Lahir</th>
                            <th>Kelas</th>
                            <th>Foto</th>
                            <th width="50" class="text-center">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                    	<?php $i=1; foreach ($datas as $mp): ?>
                    	<tr>
                    		<td class="text-center"><?= $i; ?></td>
                    		<td><?= $mp['nis']; ?></td>
                    		<td><?= $mp['nama_siswa']; ?></td>
                    		<td><?= $mp['tempat_lahir']; ?></td>
                    		<td><?= $mp['tanggal_lahir']; ?></td>
                    		<td><?= $mp['kelas']; ?></td>
                    		<td><a href="<?= base_url('siswa/detail/' . $mp['id_siswa']); ?>">Lihat Detail</a></td>
                    		<td class="text-center">
                               <?= act('edit',$mp['id_siswa'],'siswa/edit/') ?>
                               <?= act('hapus',$mp['id_siswa'],'siswa/delete',['modal' => 'hpsModalSiswa']) ?>
                            </td>
                    	</tr>
                    	<?php $i++; endforeach ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
