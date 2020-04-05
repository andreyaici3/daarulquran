<h3 class="page-header"><?= $title2; ?></h3>
<div class="col-lg">
	<?php formErr('judul'); ?>
    <div class="panel panel-primary">
        <div class="panel-heading">
        	Form Edit Berita
        </div>
        <div class="panel-body">
        	<?= form_open_multipart('berita/edit/' . $identity ); ?>
        	<div class="col-md-12">
		    	<div class="form-group">
		            <label>Judul Berita</label>
		            <input type="hidden" name="iden" value="<?= $berita['id_berita']; ?>">
		            <input class="form-control" name="judul" placeholder="Judul Berita ... " id="judul" type="text" value="<?= $berita['judul_berita']; ?>">
		        </div>
        	</div>        	
        	<div class="col-md-12">
		    	<div class="form-group">
	                <label>Gambar Berita</label>
	                <input type="hidden" name="foto_lama" value="<?= $berita['gambar_berita']; ?>">
	                <input class="form-control" name="gambar" id="gambar" type="file">
	            </div>	
        	</div>
        	<div class="col-md-12">
		    	<div class="form-group">
	                <label>Isi Berita</label>
	                <textarea id="editor" name="isi"><?= $berita['isi_berita']; ?></textarea>
	            </div>	
        	</div>
        	<div class="col-md-12">
        		<button type="submit" class="btn btn-primary">Save</button>
        		<button type="reset" class="btn btn-danger">Reset</button>
        	</div>
        	<?= form_close(); ?>         
		</div>
	</div>
</div>