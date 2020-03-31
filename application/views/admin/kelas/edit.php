<h3 class="page-header"><?= $title2; ?></h3>
<?php formErr('kelas'); ?>
<div class="col-lg-7">
    <div class="panel panel-primary">
        <div class="panel-heading">
        	Form Edit Kelas
        </div>
        <div class="panel-body">
        	<?= form_open_multipart('kelas/edit/' . $identity ); ?>
        	<div class="col-md">
		    	<div class="form-group">
		            <label>Kelas</label>
		            <input type="hidden" name="id" value="<?= $kelas['id_kelas']; ?>">
		            <input class="form-control" name="kelas" placeholder="kelas... " id="kelas" type="text" value="<?= $kelas['kelas']; ?>">
		        </div>
        	</div>
        	
        	
        	<div class="col-md">
        		<button type="submit" class="btn btn-primary">Edit</button>
        		<button type="reset" class="btn btn-danger">Reset</button>
        	</div>
        	<?= form_close(); ?>         
		</div>
	</div>
</div>