<h3 class="page-header"><?= $title2; ?></h3>
<div class="col-lg">
    <div class="panel panel-primary">
        <div class="panel-heading">
            <a class="btn btn-md btn-primary" href="<?= base_url('pengumuman/add'); ?>"><i class="fa fa-plus fa-fw"></i> Tambahkan Pengumuman</a>
        </div>
        <div class="panel-body">
            <?= $this->session->flashdata('msgi'); ?>
            <div class="table-responsive">
                <table class="table table-striped table-bordered table-hover" id="dataTables-example" style="font-size: 13px;">
                    <thead>
                        <tr>
                            <th width="25" class="text-center">No</th>
                            <th>Judul Pengumuman</th>
                            <th>Isi Pengumuman</th>
                            <th>Tanggal Pengumuman</th>
                            <th width="50" class="text-center">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                    	<?php $i=1; foreach ($list as $mp): ?>
                    	<tr>
                    		<td class="text-center"><?= $i; ?></td>
                    		<td><?= $mp['judul_pengumuman']; ?></td>
                            <td><?= $mp['isi_pengumuman']; ?></td>
                    		<td><?= $mp['tanggal_pengumuman']; ?></td>
                    		<td class="text-center">
                                <a class="btn btn-xs btn-success" href="<?= base_url('pengumuman/edit/').urlencode( base64_encode(base64_encode($mp['id_pengumuman']))); ?>"><i class="fa fa-pencil fa-fw"> </i></a>
                                <a class="btn btn-xs btn-danger hpsModalPengumuman" data-id="<?= $mp['id_pengumuman']; ?>" data-toggle="modal" data-target="#myModal"><i class="fa fa-trash fa-fw"> </i></a>
                            </td>
                    	</tr>
                    	<?php $i++; endforeach ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
