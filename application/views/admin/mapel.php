<h3 class="page-header"><?= $title2; ?></h3>
<div class="col-lg">
    <div class="panel panel-primary">
        <div class="panel-heading">
            <button class="btn btn-md btn-primary addMapel" data-toggle="modal" data-target="#myModal"><i class="fa fa-plus fa-fw"></i> Add New Mapel</button>
        </div>
        <div class="panel-body">
        	<?= $this->session->flashdata('msgi'); ?>
           <div class="table-responsive">
                <table class="table table-striped table-bordered table-hover" id="dataTables-example" style="font-size: 13px;">
                    <thead>
                        <tr>
                            <th width="30" class="text-center">No</th>
                            <th>Kode MP</th>
                            <th>Mata Pelajaran</th>
                            <th width="100" class="text-center">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                    	<?php $i=1; foreach ($mapel as $mp): ?>
                    	<tr>
                    		<td class="text-center"><?= $i; ?></td>
                    		<td><?= $mp['kode_mapel']; ?></td>
                    		<td><?= $mp['nama_mapel']; ?></td>
                    		<td class="text-center">
                                <a href="" class="btn btn-md btn-success ubhModal" data-id="<?= $mp['id']; ?>" data-toggle="modal" data-target="#myModal"><i class="fa fa-pencil fa-fw"> </i></a>
                                <a href="" class="btn btn-md btn-danger hpsModalMapel" data-id="<?= $mp['id']; ?>" data-toggle="modal" data-target="#myModal"><i class="fa fa-trash fa-fw"> </i></a>
                            </td>
                    	</tr>
                    	<?php $i++; endforeach ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>