<h3 class="page-header"><?= $title2; ?></h3>
<div class="col-lg">
    <div class="panel panel-primary">
        <div class="panel-heading">
            <a class="btn btn-md btn-primary" href="<?= base_url('galery/add'); ?>"><i class="fa fa-plus fa-fw"></i> Tambah Album</a>
        </div>
        <div class="panel-body">
            <?= $this->session->flashdata('msgi'); ?>
            <div class="table-responsive">                
                <table class="table table-striped table-bordered table-hover" id="dataTables-example" style="font-size: 13px;">

                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Judul Album</th>
                            <th>Jumlah</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                    	<?php $i=1; foreach ($list as $mp): ?>
                    	<tr>
                    		<td class="text-center"><?= $i; ?></td>
                    		<td><?= $mp['judul_album']; ?></td>
                    		<td><a href="<?= base_url('galery/foto/' . $mp['id_album']); ?>"><i class="fa fa-image fa-fw"></i> <?= $mp['jml']; ?> Foto</a></td>
                    		<td class="text-center">
                                <a class="btn btn-success" href="<?= base_url('galery/edit/').urlencode( base64_encode(base64_encode($mp['id_album']))); ?>"><i class="fa fa-pencil fa-fw"> </i></a>
                                <a class="btn btn-danger hpsModalAlbum" data-id="<?= $mp['id_album']; ?>" data-toggle="modal" data-target="#myModal"><i class="fa fa-trash fa-fw"> </i></a>
                            </td>
                    	</tr>
                    	<?php $i++; endforeach ?>
                    </tbody>
                </table>
            </div>
            <a href="" class="btn btn-success"><i class="fa fa-share-alt fa-fw"></i> Export</a>
        </div>
    </div>
</div>
