<h3 class="page-header"><?= $title2; ?></h3>
<div class="col-lg">
    <div class="panel panel-primary">
        <div class="panel-heading">
            <a class="btn btn-md btn-primary" href="<?= base_url('kelas/add'); ?>"><i class="fa fa-plus fa-fw"></i> Tambah kelas</a>
        </div>
        <div class="panel-body">
            <?= $this->session->flashdata('msgi'); ?>
            <div class="table-responsive">                
                <table class="table table-striped table-bordered table-hover" id="dataTables-example" style="font-size: 13px;">

                    <thead>
                        <tr>
                            <th width="25" class="text-center">No</th>
                            <th>Kelas</th>
                            <th width="50" class="text-center">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                    	<?php $i=1; foreach ($list as $mp): ?>
                    	<tr>
                    		<td class="text-center"><?= $i; ?></td>
                    		<td><?= $mp['kelas']; ?></td>
                    		<td class="text-center">
                                <a class="btn btn-xs btn-success" href="<?= base_url('kelas/edit/').urlencode( base64_encode(base64_encode($mp['id_kelas']))); ?>"><i class="fa fa-pencil fa-fw"> </i></a>
                                <a class="btn btn-xs btn-danger hpsModalkelas" data-id="<?= $mp['id_kelas']; ?>" data-toggle="modal" data-target="#myModal"><i class="fa fa-trash fa-fw"> </i></a>
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
