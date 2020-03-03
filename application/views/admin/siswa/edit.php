<h3 class="page-header"><?= $title2; ?></h3>
<div class="col-lg">
	<?php formErr('nis'); ?>
	<?php formErr('nama_siswa'); ?>
	<?php formErr('tempat_lahir'); ?>
	<?php formErr('tanggal_lahir'); ?>
	<?php formErr('kelas'); ?>
    <div class="panel panel-primary">
        <div class="panel-heading">
        	Form Edit siswa
        </div>
        <div class="panel-body">
        	<?= form_open_multipart('siswa/edit/' . $identity ); ?>
        	<div class="col-md-12">
		    	<div class="form-group">
		            <label>NIS</label>
		            <input type="hidden" name="iden" value="<?= $siswa['id_siswa']; ?>">
		            <input class="form-control" name="nis" id="nis" type="number" value="<?= $siswa['nis']; ?>">
		        </div>
        	</div>
        	<div class="col-md-12">
		    	<div class="form-group">
	                <label>Nama Lengkap</label>
	                <input class="form-control" name="nama_siswa" placeholder="Nama Lengkap ... " id="nama_siswa" type="text" value="<?= $siswa['nama_siswa']; ?>">
	            </div>
        	</div>
        	<div class="col-md-6">
		    	<div class="form-group">
	                <label>Tempat Lahir</label>
	                <input class="form-control" name="tempat_lahir" placeholder="Tempat Lahir ... " id="tempat_lahir" type="text" value="<?= $siswa['tempat_lahir']; ?>">
	            </div>	
        	</div>
        	<div class="col-md-6">
		    	<div class="form-group">
	                <label>Tanggal Lahir</label>
	                <input class="form-control" name="tanggal_lahir" placeholder="tanggal_lahir ... " id="tanggal_lahir" type="date" value="<?= $siswa['tanggal_lahir']; ?>">
	            </div>	
        	</div>
        	<div class="col-md-12">
		    	<div class="form-group">
	                <label>Kelas</label>
	                <select name="id_kelas" class="form-control">
	                	<option>--- Select Mapel ---</option>
	                	<?php foreach ($kelas as $mp): ?>
	                		<option value="<?= $mp['id_kelas']; ?>" <?php if ($mp['id_kelas'] == $siswa['id_kelas']): ?>
	                			selected
	                		<?php endif ?>><?= $mp['kelas']; ?></option>
	                	<?php endforeach ?>
	                </select>
	            </div>	
        	</div>
        	<br>
        	<div class="col-md-6">
		    	<div class="form-group">
		    		<table>
		    			<tr>
		    				<input type="hidden" name="foto_lama" value="<?= $siswa['foto_siswa']; ?>">
		    				<td><label>Foto</label></td>
		    				<td>:</td>
		    				<td><img src="<?= base_url(); ?>assets/images/siswa/<?= $siswa['foto_siswa']; ?>" width="100" height="140px"></td>
		    			</tr>
		    			<tr>
		    				<td></td>
		    				<td></td>
		    				<td><br><input name="foto_siswa" id="foto_siswa" type="file"></td>
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