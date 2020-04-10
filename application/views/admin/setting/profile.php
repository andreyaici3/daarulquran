<h3 class="page-header"><?= $title2; ?></h3>
<div class="col-lg">
    <div class="panel panel-primary">
        <div class="panel-heading">
            Setting Web Profile
        </div>
        <?= form_open_multipart('setting/setProfile'); ?>
        <div class="panel-body">
            <input type="hidden" name="id" value="<?= $setup['id']; ?>">
        	<?= $this->session->flashdata('msgi'); ?>
        	<div class="col-md-3">
                <div class="text-center">
                    <span class="text-center"><h4>Pimpinan Yayasan</h4></span>
                </div>
        	   <div class="form-group">
                    <div style="width: 225px; height: 130px;">

                        <img src="<?= base_url('assets/images/config/' . $setup['foto_pimp']); ?>" alt="" class="img-responsive">    
                    </div><br><br>
                    <input type="file" name="pimp" class="form-control">   
               </div>
                <div class="form-group">
                   <label for="nama_pimp">Nama Pimpinan</label>
                   <input type="text" class="form-control" name="nama_pimp" value="<?= $setup['nama_pimp']; ?>">
               </div>   	
               <div class="form-group">
                   <label for="nama_pimp">Sub Pimpinan</label>
                   <input type="text" class="form-control" name="sub_pimp" value="<?= $setup['sub_pimp']; ?>">
               </div>  
        	</div>
            <div class="col-md-3">
                <div class="text-center">
                    <span class="text-center"><h4>Kepala RA</h4></span>
                </div>
               <div class="form-group">
                    <div style="width: 225px; height: 130px; border: 1px solid silver;">
                        <img src="<?= base_url('assets/images/config/' . $setup['foto_kepala_ra']); ?>" alt="" class="img-responsive"> 
                    </div><br><br>
                    <input type="file" name="ra" class="form-control">   
               </div> 
                <div class="form-group">
                   <label for="nama_ra">Kepala Ra</label>
                   <input type="text" class="form-control" name="nama_ra" value="<?= $setup['nama_kepala_ra']; ?>">
               </div>       
               <div class="form-group">
                   <label for="nama_ra">Sub Kepala Ra</label>
                   <input type="text" class="form-control" name="sub_ra" value="<?= $setup['sub_kepala_ra']; ?>">
               </div>    
            </div>
            <div class="col-md-3">
                <div class="text-center">
                    <span class="text-center"><h4>Kepala MTS</h4></span>
                </div>
               <div class="form-group">
                    <div style="width: 225px; height: 130px; border: 1px solid silver;">
                         <img src="<?= base_url('assets/images/config/' . $setup['foto_kepala_mts']); ?>" alt="" class="img-responsive"> 
                    </div><br><br>
                    <input type="file" name="mts" class="form-control">   
               </div>
                <div class="form-group">
                   <label for="nama_mts">Kepala Mts</label>
                   <input type="text" class="form-control" name="nama_mts" value="<?= $setup['nama_kepala_mts']; ?>">
               </div>       
               <div class="form-group">
                   <label for="nama_mts">Sub Kepala Mts</label>
                   <input type="text" class="form-control" name="sub_mts" value="<?= $setup['sub_kepala_mts']; ?>">
               </div>    
            </div>
            <div class="col-md-3">
                <div class="text-center">
                    <span class="text-center"><h4>Kepala MA</h4></span>
                </div>
               <div class="form-group">
                    <div style="width: 225px; height: 130px; border: 1px solid silver;">
                        <img src="<?= base_url('assets/images/config/' . $setup['foto_kepala_ma']); ?>" alt="" class="img-responsive"> 
                    </div><br><br>
                    <input type="file" name="ma" class="form-control">   
               </div>   
               <div class="form-group">
                   <label for="nama_ma">Kepala Ma</label>
                   <input type="text" class="form-control" name="nama_ma" value="<?= $setup['nama_kepala_ma']; ?>">
               </div>       
               <div class="form-group">
                   <label for="nama_ma">Sub Kepala Ma</label>
                   <input type="text" class="form-control" name="sub_ma" value="<?= $setup['sub_kepala_ma']; ?>">
               </div>   
            </div>
        </div>
    </div>
    <button onclick="return confirm('Apakah anda yakin, ingin mengubah data.?')" type="submit" class="btn btn-primary mb-4">Simpan Perubahan</button><br><br>
	<?= form_close(); ?>
</div>
