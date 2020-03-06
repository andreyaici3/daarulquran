<h3 class="page-header"><?= $title2; ?></h3>
<div class="col-lg">
    <div class="panel panel-primary">
        <div class="panel-heading">
            <a class="btn btn-md btn-primary addMapel" href="<?= base_url('guru/add'); ?>"><i class="fa fa-plus fa-fw"></i> Add New Guru</a>
        </div>
        <div class="panel-body">
            <?= $this->session->flashdata('msgi'); ?>
            <div class="table-responsive">
                <table class="table table-striped table-bordered table-hover" id="dataTables-example" style="font-size: 13px;">
                    <thead>
                        <tr>
                            <th width="25" class="text-center">No</th>
                            <th>Nama Guru</th>
                            <th>Nip</th>
                            <th>Tempat Lahir</th>
                            <th>Tanggal Lahir</th>
                            <th>Mata Pelajaran</th>
                            <th>Pendidikan</th>
                            <th>Foto</th>
                            <th width="50" class="text-center">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                    	<?php $i=1; foreach ($guru as $mp): ?>
                    	<tr>
                    		<td class="text-center"><?= $i; ?></td>
                    		<td><?= $mp['nama_guru']; ?></td>
                            <td><?= $mp['nip']; ?></td>
                    		<td><?= $mp['tempat_lahir']; ?></td>
                    		<td><?= $mp['tanggal_lahir']; ?></td>
                    		<td><?= $mp['nama_mapel']; ?></td>
                    		<td><?= $mp['pendidikan']; ?></td>
                    		<td><a href="<?= base_url('guru/detail/' . $mp['id_guru']); ?>">Lihat Detail</a></td>
                    		<td class="text-center">
                                <a class="btn btn-xs btn-success" href="<?= base_url('guru/edit/').urlencode( base64_encode(base64_encode($mp['id_guru']))); ?>"><i class="fa fa-pencil fa-fw"> </i></a>
                                <a class="btn btn-xs btn-danger hpsModalGuru" data-id="<?= $mp['id_guru']; ?>" data-toggle="modal" data-target="#myModal"><i class="fa fa-trash fa-fw"> </i></a>
                            </td>
                    	</tr>
                    	<?php $i++; endforeach ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
