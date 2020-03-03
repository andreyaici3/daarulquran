<h3 class="page-header"><?= $title2 .'  <small>'. $album['judul_album'] . '</small>'; ?></h3>
<?php formErr('ket'); ?>
<div class="col-lg">
    <div class="panel panel-primary">
        <div class="panel-heading">
        	Form Add Foto
        </div>
        <div class="panel-body">
        	<?= form_open_multipart('galery/foto/' . $album['id_album']); ?>
        	<div class="col-md-6">
		    	<div class="form-group">
		            <label>Keterangan</label>
		            <input type="hidden" name="iden" value="<?= $album['id_album']; ?>">
		            <input class="form-control" name="ket" placeholder="Keterangan Foto .... " id="ket" type="text" value="<?= set_value('ket'); ?>">
		        </div>
        	</div>
        	<div class="col-md-6">
        		<div class="form-group">
                    <label>Foto</label>
                    <input type="file" name="foto" class="form-control" id="foto">
                </div>
        	</div>
        	
        	<div class="col-md-12" style="margin-bottom: 25px;">
        		<button type="submit" class="btn btn-primary">Simpan</button>
        		<button type="reset" class="btn btn-danger">Reset</button>
        	</div>

        	<div class="col-md-12 text-center">
        		<h3>List Foto</h3>
        		<?php foreach ($foto as $fto): ?>
        			<div class="col-md-3">
        				 <div class="panel panel-primary">
					        <div class="panel-heading">
					        	<?= $fto['ket_foto']; ?>
					        </div>
					        <div class="panel-body">
	        			
			        			<img src="<?= base_url('assets/images/galery/' . $fto['foto']); ?>" width="180px" height="150">
			        			
			        		</div>
			        		<div class="panel-footer mt-0">
			        			<a onclick="return confirm('Yakin Ingin menghapus.?')" href="<?= base_url('galery/hapusFoto/'. $fto['id_foto']); ?> " class="btn btn-xs  btn-block btn-danger"><i class="fa fa-trash fa-fw"></i> Hapus</a>
			        		</div>
			        	</div>
        			</div>
        		<?php endforeach ?>
        	</div>
        	<?= form_close(); ?>         
		</div>
	</div>
</div>