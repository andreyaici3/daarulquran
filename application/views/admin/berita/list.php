<h3 class="page-header"><?= $title2; ?></h3>
<div class="col-lg">
    <div class="panel panel-primary">
        <div class="panel-heading">
            <a class="btn btn-md btn-primary addMapel" href="<?= base_url('berita/add'); ?>"><i class="fa fa-plus fa-fw"></i> Tambah Berita</a>
        </div>
        <div class="panel-body">
            <?= $this->session->flashdata('msgi'); ?>
            <div class="table-responsive">
                <table class="table table-striped table-bordered table-hover" id="dataTables-example" style="font-size: 13px;">
                    <thead>
                        <tr>
                            <th width="25" class="text-center">No</th>
                            <th>Judul Berita</th>
                            <th>Slug Berita</th>
                            <th>Tanggal Berita</th>
                            <th>Terakhir Di Update</th>
                            <th>Nama User</th>
                            <th width="50" class="text-center">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                    	<?php $i=1; foreach ($berita as $mp): ?>
                    	<tr>
                    		<td class="text-center"><?= $i; ?></td>
                    		<td><?= $mp['judul_berita']; ?></td>
                            <td><?= $mp['slug_berita']; ?></td>
                    		<td><?= date('l, d-m-Y - G:i:s', $mp['tanggal_berita']); ?></td>
                            <?php if ($mp['terakhir_diupdate']): ?>
                                <td><?= date('l, d-m-Y - G:i:s', $mp['terakhir_diupdate']); ?></td>
                                <?php else : ?>
                                <td></td>
                            <?php endif ?>
                    		<td><?= $mp['name']; ?></td>
                    		<td class="text-center">
                                <a class="btn btn-xs btn-success" href="<?= base_url('berita/edit/').urlencode( base64_encode(base64_encode($mp['id_berita']))); ?>"><i class="fa fa-pencil fa-fw"> </i></a>
                                <a class="btn btn-xs btn-danger hpsModalBerita" data-id="<?= $mp['id_berita']; ?>" data-toggle="modal" data-target="#myModal"><i class="fa fa-trash fa-fw"> </i></a>
                            </td>
                    	</tr>
                    	<?php $i++; endforeach ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
