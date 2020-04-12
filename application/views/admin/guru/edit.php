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
        	Form Edit Guru
        </div>
        <div class="panel-body">
        	<?= form_open_multipart('guru/edit/' . $identity ); ?>
        	<div class="col-md-12">
		    	<div class="form-group">
		            <label>NIP</label>
		            <input type="hidden" name="iden" value="<?= $guru['id_guru']; ?>">
		            <input class="form-control" name="nip" placeholder="NIP Guru ... " id="nip" type="number" value="<?= $guru['nip']; ?>">
		        </div>
        	</div>
        	<div class="col-md-12">
		    	<div class="form-group">
	                <label>Nama Lengkap</label>
	                <input class="form-control" name="nama_guru" placeholder="Nama Lengkap ... " id="nama_guru" type="text" value="<?= $guru['nama_guru']; ?>">
	            </div>
        	</div>
        	<div class="col-md-6">
		    	<div class="form-group">
	                <label>Tempat Lahir</label>
	                <input class="form-control" name="tempat_lahir" placeholder="Tempat Lahir ... " id="tempat_lahir" type="text" value="<?= $guru['tempat_lahir']; ?>">
	            </div>	
        	</div>
        	<div class="col-md-6">
		    	<div class="form-group">
	                <label>Tanggal Lahir</label>
	                <input class="form-control" name="tanggal_lahir" id="datepicker" value="<?= date('d-m-Y', $guru['tanggal_lahir']); ?>" autocomplete="off">
	            </div>	
        	</div>
        	<div class="col-md-6">
		    	<div class="form-group">
	                <label>Mata Pelajaran</label>
	                <select name="mapel" class="form-control">
	                	<option>--- Select Mapel ---</option>
	                	<?php foreach ($mapel as $mp): ?>
	                		<option value="<?= $mp['id']; ?>" <?php if ($mp['id'] == $guru['mata_pelajaran']): ?>
	                			selected
	                		<?php endif ?>><?= $mp['nama_mapel']; ?></option>
	                	<?php endforeach ?>
	                </select>
	            </div>	
        	</div>
        	<div class="col-md-6">
		    	<div class="form-group">
	                <label>Pendidikan</label>
	                <select name="pendidikan" class="form-control">
	                	<option>--- Select Pendidikan ---</option>
	                	<option value="D3" <?php if ('D3' == $guru['pendidikan']): ?>
	                			selected
	                		<?php endif ?>>D3</option>
	                	<option value="S1" <?php if ('S1' == $guru['pendidikan']): ?>
	                			selected
	                		<?php endif ?>>S1</option>
	                	<option value="S2" <?php if ('S2' == $guru['pendidikan']): ?>
	                			selected
	                		<?php endif ?>>S2</option>
	                	<option value="S3" <?php if ('S3' == $guru['pendidikan']): ?>
	                			selected
	                		<?php endif ?>>S3</option>
	                </select>
	            </div>	
        	</div>
        	<div class="col-md-6">
		    	<div class="form-group">
		    		<table>
		    			<tr>
		    				<input type="hidden" name="foto_lama" value="<?= $guru['foto_guru']; ?>">
		    				<td><label>Foto</label></td>
		    				<td>:</td>
		    				<td><img src="<?= base_url(); ?>assets/images/guru/<?= $guru['foto_guru']; ?>" width="100" height="140px"></td>
		    			</tr>
		    			<tr>
		    				<td></td>
		    				<td></td>
		    				<td><br><input name="foto_guru" id="foto_guru" type="file"></td>
		    			</tr>
		    		</table>
	                
	            
                   
	                
	            </div>	
        	</div>
        	<div class="col-md-12">
        		<button type="submit" class="btn btn-primary">Edit</button>
        		<button type="reset" class="btn btn-danger">Reset</button>
        	</div>
        	<?= form_close(); ?>         
		</div>
	</div>
</div>