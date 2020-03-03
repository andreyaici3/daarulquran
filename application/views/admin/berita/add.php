<h3 class="page-header"><?= $title2; ?></h3>
<div class="col-lg">
	<?php formErr('judul'); ?>
    <div class="panel panel-primary">
        <div class="panel-heading">
        	Form Tambah Berita
        </div>
        <div class="panel-body">
        	<?= form_open_multipart('berita/add'); ?>
        	<div class="col-md-12">
		    	<div class="form-group">
		            <label>Judul Berita</label>
		            <input class="form-control" name="judul" placeholder="Judul Berita ... " id="judul" type="text" value="<?= set_value('judul'); ?>">
		        </div>
        	</div>        	
        	<div class="col-md-12">
		    	<div class="form-group">
	                <label>Gambar Berita</label>
	                <input class="form-control" name="gambar" id="gambar" type="file">
	            </div>	
        	</div>
        	<div class="col-md-12">
		    	<div class="form-group">
	                <label>Isi Berita</label>
	                <textarea id="editor" name="isi"></textarea>
	            </div>	
        	</div>
        	<div class="col-md-12">
        		<button type="submit" class="btn btn-primary">Add</button>
        		<button type="reset" class="btn btn-danger">Reset</button>
        	</div>
        	<?= form_close(); ?>         
		</div>
	</div>
</div>