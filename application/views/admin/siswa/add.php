<h3 class="page-header"><?= $title2; ?></h3>
<div class="col-lg">
	<?php formErr('nis'); ?>
	<?php formErr('nama_siswa'); ?>
	<?php formErr('tempat_lahir'); ?>
	<?php formErr('tanggal_lahir'); ?>
	<?php formErr('kelas'); ?>
	
    <div class="panel panel-primary">
        <div class="panel-heading">
        	Form Add New Siswa
        </div>
        <div class="panel-body">
        	<?= form_open_multipart('siswa/add'); ?>
        	<div class="col-md-12">
		    	<div class="form-group">
		            <label>NIS</label>
		            <input class="form-control" name="nis" placeholder="nis  ... " id="nis" type="number" value="<?= set_value('nis'); ?>">
		        </div>
        	</div>
        	<div class="col-md-12">
		    	<div class="form-group">
	                <label>Nama Lengkap</label>
	                <input class="form-control" name="nama_siswa" placeholder="Nama Lengkap ... " id="nama_siswa" type="text" value="<?= set_value('nama_siswa'); ?>">
	            </div>
        	</div>
        	<div class="col-md-6">
		    	<div class="form-group">
	                <label>Tempat Lahir</label>
	                <input class="form-control" name="tempat_lahir" placeholder="Tempat Lahir ... " id="tempat_lahir" type="text" value="<?= set_value('tempat_lahir'); ?>">
	            </div>	
        	</div>
        	<div class="col-md-6">
		    	<div class="form-group">
	                <label>Tanggal Lahir</label>
	                <input class="form-control" name="tanggal_lahir" placeholder="tanggal_lahir ... " id="dateTime" type="text" value="<?= set_value('tanggal_lahir'); ?>">
	            </div>	
        	</div>
        	<div class="col-md-6">
		    	<div class="form-group">
	                <label>Kelas</label>
	                <select name="id_kelas" class="form-control">
	                	<option>--- Select Kelas ---</option>
	                	<?php foreach ($kelas as $mp): ?>
	                		<option value="<?= $mp['id_kelas']; ?>"><?= $mp['kelas']; ?></option>
	                	<?php endforeach ?>
	                </select>
	            </div>	
        	</div>
        	<div class="col-md-6">
		    	<div class="form-group">
	                <label>Foto</label>
	                <input class="form-control" name="foto_siswa" id="foto_siswa" type="file" value="<?= set_value('foto_siswa'); ?>">
	            </div>	
        	</div>
        	<div class="col-md-12">
		    	<div class="form-group">
	                <label>Quote</label>
	                <input class="form-control" name="quote" placeholder="Quotes ... " id="quote" type="text" value="<?= set_value('quote'); ?>">
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