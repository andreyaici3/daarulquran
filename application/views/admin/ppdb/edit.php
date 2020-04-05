<h3 class="page-header"><?= $title2; ?></h3>
<div class="col-lg">
	<?php formErr('nis'); ?>
	<?php formErr('nama_siswa'); ?>
	<?php formErr('tempat_lahir'); ?>
	<?php formErr('tanggal_lahir'); ?>
	<?php formErr('kelas'); ?>
    <div class="panel panel-primary">
        <div class="panel-heading">
        	Form Edit siswa PPDB
        </div>
        <div class="panel-body">
        	<?= form_open_multipart('ppdb/edit/' . $identity ); ?>
        	
        	<div class="col-md-12">
		    	<div class="form-group">
	                <label>Nama Lengkap</label>
                    <input type="hidden" name="ident" value="<?= $siswa['id_siswa']; ?>">
	                <input class="form-control" name="nama_siswa" id="nama_siswa" type="text" value="<?= $siswa['nama_siswa']; ?>" readonly>
	            </div>
        	</div>
        	<div class="col-md-12">
		    	<div class="form-group">
	                <label>Username</label>
	                <input class="form-control" name="username" type="text" value="<?= $siswa['username']; ?>" readonly>
	            </div>
        	</div>
             <div class="col-md-4">
                <div class="form-group">
                   <div class="form-group">
                    <label>Tempat Lahir</label>
                    <input class="form-control" name="tempat_lahir" placeholder="Tempat Lahir ... " id="tempat_lahir" type="text" value="<?= $siswa['tempat_lahir']; ?>">
                </div>  
                </div>  
            </div>


            <div class="col-md-2">
                <div class="form-group">
                    <label>Tanggal Lahir</label>
                    <input class="form-control" id="datepicker" name="tanggal_lahir"  value="<?= date('m/d/Y', $siswa['tanggal_lahir']); ?>" autocomplete="off"">
                </div>  
            </div>



            <div class="col-md-2">
                <div class="form-group">
                    <label>No Whatsapp</label>
                    <input class="form-control" name="wa" placeholder="No Whatsapp ... " type="number" value="<?= $siswa['no_whatsapp']; ?>">
                </div>  
            </div>

            <div class="col-md-4">
                <div class="form-group">
                    <label>Jenis Kelamin</label>
                    <select class="form-control" name="jenis_kelamin">
                        <option>--Jenis Kelamin--</option>
                        <option value="L" <?php if ($siswa['jenis_kelamin'] == "L"): ?>
                            selected
                        <?php endif ?>>Laki - Laki</option>
                        <option value="P" <?php if ($siswa['jenis_kelamin'] == "P"): ?>
                            selected
                        <?php endif ?>>Perempuan</option>
                    </select>
                </div>  
            </div>
        
            
            <div class="col-md-5">
                <div class="form-group">
                    <label>Alamat</label>
                    <input type="text" name="jalan" placeholder="jalan...." class="form-control" value="<?= $siswa['jln']; ?>" >
                </div>
            </div>

            <div class="col-md-3">
                <div class="form-group">
                    <label>Nik</label>
                    <input type="text" name="nik" placeholder="NIK...." class="form-control" value="<?= $siswa['nik']; ?>" >
                </div>
            </div>

            <div class="col-md-2">
                <div class="form-group">
                    <label>RT</label>
                    <input type="text" name="rt" placeholder="RT....." class="form-control" value="<?= $siswa['rt']; ?>">
                </div>
            </div>

            <div class="col-md-2">
                <div class="form-group">
                    <label>RW</label>
                    <input type="text" name="rw" placeholder="RW....." class="form-control" value="<?= $siswa['rw']; ?>">
                </div>
            </div>
        	

        	<div class="col-md-6">
        		<div class="form-group">
        			<label>Dusun</label>
        			<input type="text" name="dusun" placeholder="Dusun...." class="form-control" value="<?= $siswa['dusun']; ?>">
        		</div>
        	</div>

        	<div class="col-md-6">
        		<div class="form-group">
        			<label>Desa</label>
        			<input type="text" name="desa" placeholder="Desa...." class="form-control" value="<?= $siswa['desa']; ?>">
        		</div>
        	</div>
        	
        	<div class="col-md-6">
        		<div class="form-group">
        			<label>Kecamatan</label> 
        			<input type="text" name="kec" placeholder="Kecamatan...." class="form-control" value="<?= $siswa['kec']; ?>">
        		</div>
        	</div>
        	<div class="col-md-6">
        		<div class="form-group">
        			<label>Kabupaten</label>
        			<input type="text" name="kab" placeholder="Kabupaten...." class="form-control" value="<?= $siswa['kota']; ?>">
        		</div>
        	</div>
        	<div class="col-md-6">
        		<div class="form-group">
        			<label>Provinsi</label>
        			<input type="text" name="prov" placeholder="provinsi...." class="form-control" value="<?= $siswa['prov']; ?>">
        		</div>
        	</div>
        	<div class="col-md-6">
        		<div class="form-group">
        			<label>Email</label>
        			<input type="text" name="email" placeholder="Email...." class="form-control" value="<?= $siswa['email']; ?>">
        		</div>
        	</div>
        	<div class="col-md-12">
        		<div class="form-group">
        			<label>Asal Sekolah</label>
        			<input type="text" name="asal_sekolah" placeholder="Asal Sekolah....." class="form-control" value="<?= $siswa['asal_sekolah']; ?>">
        		</div>
        	</div>
        	<div class="col-md-12">
        		<div class="form-group">
        			<label>Alamat Sekolah</label>
        			<input type="text" name="alamat_sekolah" placeholder="Alamat Sekolah" class="form-control" value="<?= $siswa['alamat_sekolah']; ?>">
        		</div>
        	</div>

        	<div class="col-md-12">
        		<div class="form-group">
        			<label>Email Sekolah</label>
        			<input type="email" name="email_sekolah" placeholder="email Sekolah" class="form-control" value="<?= $siswa['email_sekolah']; ?>">
        		</div>
        	</div>
        	
        	<div class="col-md-8">
        		<div class="form-group">
        			<label>Nama Guru BP / BK</label>
        			<input type="text" name="guru_bp" placeholder="Nama Guru BP / BK" class="form-control" value="<?= $siswa['nama_guru_bp_bk']; ?>">
        		</div>
        	</div>

        	<div class="col-md-4">
        		<div class="form-group">
        			<label>No Telp / Hp</label>
        			<input type="number" name="telp_hp" placeholder="No Wa Guru" class="form-control" value="<?= $siswa['telp_hp']; ?>">
        		</div>
        	</div>

        	<div class="col-md-12">
        		<div class="form-group">
        			<label>Nama Ayah</label>
        			<input type="text" name="nama_ayah" placeholder="Nama Ayah...." class="form-control" value="<?= $siswa['nama_ayah']; ?>">
        		</div>
        	</div>

        	<div class="col-md-5">
        		<div class="form-group">
                    <label>Tempat Lahir Ayah</label>
                    <input type="text" name="tempat_lahir_ayah" placeholder="tempat lahir Ayah...." class="form-control" value="<?= $siswa['tempat_lahir_ayah']; ?>">
        		</div>
        	</div>
        	<div class="col-md-4">
        		<div class="form-group">
        			
                    <label>Tanggal Lahir Ayah</label>
                    <input class="form-control" id="datepicker" name="tanggal_lahir_ayah"  value="<?= date('m/d/Y', $siswa['tanggal_lahir_ayah']); ?>" autocomplete="off"">
        			
        		</div>
        	</div>
        	<div class="col-md-3">
        		<div class="form-group">
        			<label>Pendidikan Terakhir Ayah</label>
        			<input type="text" name="pendidikan_terakhir_ayah" placeholder="Pendidikan Terakhir Ayah...." class="form-control" value="<?= $siswa['pendidikan_terakhir_ayah']; ?>">
        		</div>
        	</div>

        	<div class="col-md-4">
        		<div class="form-group">
        			<label>Pekerjaan Ayah</label>
        			<input type="text" name="pekerjaan_ayah" placeholder="Pekerjaan Ayah...." class="form-control" value="<?= $siswa['pekerjaan_ayah']; ?>">
        		</div>
        	</div>

        	<div class="col-md-4">
        		<div class="form-group">
        			<label>Penghasilan Perbulan</label>
        			<input type="number" name="penghasilan_perbulan_ayah" placeholder="Penghasilan Ayah...." class="form-control" value="<?= $siswa['penghasilan_perbulan_ayah']; ?>" required>
        		</div>
        	</div>

        	<div class="col-md-4">
        		<div class="form-group">
        			<label>No Telepon</label>
        			<input type="number" name="hp_wa_ayah" placeholder="No telepon Ayah...." class="form-control" value="<?= $siswa['hp_wa_ayah']; ?>">
        		</div>
        	</div>

        	<!-- Ibu -->
        	<div class="col-md-12">
        		<div class="form-group">
        			<label>Nama ibu</label>
        			<input type="text" name="nama_ibu" placeholder="Nama ibu...." class="form-control" value="<?= $siswa['nama_ibu']; ?>">
        		</div>
        	</div>

        	<div class="col-md-5">
        		<div class="form-group">
        			<label>Tanggal Lahir Ibu</label>
                   <input class="form-control" id="datepicker" name="tanggal_lahir_ibu"  value="<?= date('m/d/Y', $siswa['tanggal_lahir_ibu']); ?>" autocomplete="off"">
        		</div>
        	</div>
        	<div class="col-md-4">
        		<div class="form-group">
        			<label>tempat Lahir</label>
        			<input type="text" name="tempat_lahir_ibu" placeholder="tempat lahir ..." class="form-control" value="<?= $siswa['tempat_lahir_ibu']; ?>">
        		</div>
        	</div>
        	<div class="col-md-3">
        		<div class="form-group">
        			<label>Pendidikan Terakhir ibu</label>
        			<input type="text" name="pendidikan_terakhir_ibu" placeholder="Pendidikan Terakhir ...." class="form-control" value="<?= $siswa['pendidikan_terakhir_ibu']; ?>">
        		</div>
        	</div>

        	<div class="col-md-4">
        		<div class="form-group">
        			<label>Pekerjaan Ibu</label>
        			<input type="text" name="pekerjaan_ibu" placeholder="Pekerjaan...." class="form-control" value="<?= $siswa['pekerjaan_ibu']; ?>">
        		</div>
        	</div>

        	<div class="col-md-4">
        		<div class="form-group">
        			<label>Penghasilan Perbulan</label>
        			<input type="number" requied name="penghasilan_perbulan_ibu" placeholder="jika tida ada, isi 0." class="form-control" value="<?= $siswa['penghasilan_perbulan_ibu']; ?>" required>
        		</div>
        	</div>

        	<div class="col-md-4">
        		<div class="form-group">
        			<label>No Telepon</label>
        			<input type="number" name="hp_wa_ibu" placeholder="No telepon...." class="form-control" value="<?= $siswa['hp_wa_ibu']; ?>">
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
