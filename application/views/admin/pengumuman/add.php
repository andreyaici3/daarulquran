<h3 class="page-header"><?= $title2; ?></h3>
<div class="col-lg">
	<?php formErr('judul'); ?>
    <div class="panel panel-primary">
        <div class="panel-heading">
        	Form Add New Guru
        </div>
        <div class="panel-body">
        	<?= form_open_multipart('pengumuman/add'); ?>
        	<div class="col-md-12">
		    	<div class="form-group">
		            <label>Judul Pengumuman</label>
		            <input class="form-control" name="judul" placeholder="judul Pengumuman ... " id="judul" type="text" value="<?= set_value('judul'); ?>">
		        </div>
        	</div>
        	<div class="col-md-12">
		    	<div class="form-group">
		            <label>Isi Pengumuman</label>
		            <textarea placeholder="" class="form-control" rows="10" name="isi" required></textarea>
		        </div>
        	</div>
        	<div class="col-md-12">
		    	<div class="form-group">
		            <label>Tanggal Pengumuman</label>
		            <input class="form-control" name="tanggal" readonly  id="tanggal" type="text" value="<?= date('Y-m-d'); ?>">
		        </div>
        	</div>
        	
        	<div class="col-md-12">
        		<button type="submit" class="btn btn-primary">Simpan</button>
        		<button type="reset" class="btn btn-danger">Reset</button>
        	</div>
        	<?= form_close(); ?>         
		</div>
	</div>
</div>