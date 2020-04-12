<h3 class="page-header"><?= $title2; ?></h3>
<div class="col-lg">
	<?php formErr('nip'); ?>
	<?php formErr('nama_guru'); ?>
	<?php formErr('tempat_lahir'); ?>
	<?php formErr('tanggal_lahir'); ?>
	<?php formErr('mapel'); ?>
	<?php formErr('foto_guru'); ?>
    <div class="panel panel-primary">
        <div class="panel-heading">
        	Form Add New Guru
        </div>
        <div class="panel-body">
        	<?= form_open_multipart('guru/add'); ?>
        	<div class="col-md-12">
		    	<div class="form-group">
		            <label>NIP</label>
		            <input class="form-control" name="nip" placeholder="NIP Guru ... " id="nip" type="number" value="<?= set_value('nip'); ?>">
		        </div>
        	</div>
        	<div class="col-md-12">
		    	<div class="form-group">
	                <label>Nama Lengkap</label>
	                <input class="form-control" name="nama_guru" placeholder="Nama Lengkap ... " id="nama_guru" type="text" value="<?= set_value('nama_guru'); ?>">
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
	                <input class="form-control" id="datepicker" name="tanggal_lahir" placeholder="tanggal_lahir ... " id="dateTime" type="text" value="<?= set_value('tanggal_lahir'); ?>" autocomplete="off">
	            </div>	
        	</div>
        	<div class="col-md-6">
		    	<div class="form-group">
	                <label>Mata Pelajaran</label>
	                <select name="mapel" class="form-control">
	                	<option>--- Select Mapel ---</option>
	                	<?php foreach ($mapel as $mp): ?>
	                		<option value="<?= $mp['id']; ?>"><?= $mp['nama_mapel']; ?></option>
	                	<?php endforeach ?>
	                </select>
	            </div>	
        	</div>
        	<div class="col-md-6">
		    	<div class="form-group">
	                <label>Pendidikan</label>
	                <select name="pendidikan" class="form-control">
	                	<option>--- Select Pendidikan ---</option>
	                	<option value="D3">D3</option>
	                	<option value="S1">S1</option>
	                	<option value="S2">S2</option>
	                	<option value="S3">S3</option>
	                </select>
	            </div>	
        	</div>
        	<div class="col-md-6">
		    	<div class="form-group">
	                <label>Foto</label>
	                <input class="form-control" name="foto_guru" id="foto_guru" type="file" value="<?= set_value('foto_guru'); ?>">
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