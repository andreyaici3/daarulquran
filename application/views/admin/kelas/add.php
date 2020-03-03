<h3 class="page-header"><?= $title2; ?></h3>
<?php formErr('kelas'); ?>
<center>
<div class="col-lg-5">
    <div class="panel panel-primary">
        <div class="panel-heading">
        	Form Add Kelas
        </div>
        <div class="panel-body">
        	<?= form_open_multipart('kelas/add'); ?>
        	<div class="col-md">
		    	<div class="form-group">
		            <label>Kelas</label>
		            <input class="form-control" name="kelas" placeholder="kelas " id="kelas" type="text" value="<?= set_value('kelas'); ?>">
		        </div>
        	</div>
        	<div class="col-md">
        		<button type="submit" class="btn btn-primary">Simpan</button>
        		<button type="reset" class="btn btn-danger">Reset</button>
        	</div>
        	<?= form_close(); ?>         
		</div>
	</div>
</div>
</center>