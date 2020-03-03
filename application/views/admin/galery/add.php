<h3 class="page-header"><?= $title2; ?></h3>
<?php formErr('judul'); ?>
<div class="col-lg-5">
    <div class="panel panel-primary">
        <div class="panel-heading">
        	Form Add Album
        </div>
        <div class="panel-body">
        	<?= form_open_multipart('galery/add'); ?>
        	<div class="col-md">
		    	<div class="form-group">
		            <label>Nama Album</label>
		            <input class="form-control" name="judul" placeholder="Album .... " id="judul" type="text" value="<?= set_value('judul'); ?>">
		        </div>
                <div class="form-group">
                    <label>Sampul</label>
                    <input type="file" name="sampul" class="form-control" id="sampul">
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
