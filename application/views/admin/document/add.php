<h3 class="page-header"><?= $title2; ?></h3>
<div class="col-lg">
	<?php formErr('ket'); ?>
    <div class="panel panel-primary">
        <div class="panel-heading">
        	Form Upload
        </div>
        <div class="panel-body">
        	<?= form_open_multipart('upload/add'); ?>
        	<div class="col-md-12">
		    	<div class="form-group">
		            <label>Deskripsi File</label>
		            <input class="form-control" name="ket" placeholder="Deskripsi ..... " id="ket" type="text" value="<?= set_value('ket'); ?>">
		        </div>
        	</div>
        	<div class="col-md-12">
		    	<div class="form-group">
	                <label>Upload</label>
	                <input type="file" name="doc" class="form-control">
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