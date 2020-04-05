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
        	<?= form_open_multipart('pengumuman/edit/' . $identity ); ?>
        	<div class="col-md-12">
		    	<div class="form-group">
		            <label>Judul Pengumuman</label>
		            <input type="hidden" name="id" value="<?= $pengumuman['id_pengumuman']; ?>">
		            <input class="form-control" name="judul" placeholder="judul Pengumuman ... " id="judul" type="text" value="<?= $pengumuman['judul_pengumuman']; ?>">
		        </div>
        	</div>
        	<div class="col-md-12">
		    	<div class="form-group">
		            <label>Isi Pengumuman</label>
		            <textarea placeholder="" class="form-control" rows="10" name="isi" required><?= $pengumuman['isi_pengumuman']; ?></textarea>
		        </div>
        	</div>
        	<div class="col-md-12">
		    	<div class="form-group">
		            <label>Tanggal Pengumuman</label>
		            <input class="form-control" name="tanggal"  id="tanggal" type="date" value="<?= $pengumuman['tanggal_pengumuman']; ?>">
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