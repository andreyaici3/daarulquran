<h3 class="page-header"><?= $title2; ?></h3>
<div class="col-lg">
    <div class="panel panel-primary">
        <div class="panel-heading">
            <a class="btn btn-md btn-primary" href="<?= base_url('upload/add'); ?>"><i class="fa fa-plus fa-fw"></i> Upload New File</a>
        </div>
        <div class="panel-body">
            <?= $this->session->flashdata('msgi'); ?>
            <div class="table-responsive">
                <table class="table table-striped table-bordered table-hover" id="dataTables-example" style="font-size: 13px;">
                    <thead>
                        <tr>
                            <th width="25" class="text-center">No</th>
                            <th>Deskripsi File</th>
                            <th>Link</th>
                            <th>Author</th>
                            <th>Tanggal Upload</th>
                            <th width="50" class="text-center">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                    	<?php $i=1; foreach ($file as $mp): ?>
                    	<tr>
                    		<td class="text-center"><?= $i; ?></td>
                    		<td><?= $mp['ket_file']; ?></td>
                            <td><?= $mp['nama_file']; ?></td>
                    		<td><?= $mp['name']; ?></td>
                    		<td><?= date('d-m-Y', $mp['waktu_upload']); ?></td>
                    		<td class="text-center">
                                <a class="btn btn-xs btn-success" href="<?= base_url('upload/edit/').urlencode( base64_encode(base64_encode($mp['id_file']))); ?>"><i class="fa fa-pencil fa-fw"> </i></a>
                                <a class="btn btn-xs btn-danger hpsModalfile" data-id="<?= $mp['id_file']; ?>" data-toggle="modal" data-target="#myModal"><i class="fa fa-trash fa-fw"> </i></a>
                            </td>
                    	</tr>
                    	<?php $i++; endforeach ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
