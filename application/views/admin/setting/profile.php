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
            <div class="col-md-6">
                <div class="form-group">
                  <label for="">Nama Lembaga</label>
                  <input type="text" class="form-control" name="nama_lembaga" value="<?= $setup['nama_lembaga']; ?>">
                </div>
                <div class="form-group">
                  <label for="">Alamat Lembaga</label>
                  <input type="text" class="form-control" name="alamat" value="<?= $setup['alamat_lembaga']; ?>">
                </div>
                <div class="form-group">
                  <label for="">Status Akreditas</label>
                  <input type="text" class="form-control" name="status_akre" value="<?= $setup['status_akre']; ?>">
                </div>
            </div>
            <div class="col-md-6">
              <div class="form-group">
                  <label for="">No Hp</label>
                  <input type="text" class="form-control" name="no_hp_lembaga" value="<?= $setup['no_lembaga']; ?>">
                </div>
                <div class="form-group">
                  <label for="">Status Lembaga</label>
                  <input type="text" class="form-control" name="status_lembaga" value="<?= $setup['status_lembaga']; ?>">
                </div>
                <div class="form-group">
                  <label for="">Tahun Berdiri</label>
                  <input type="text" class="form-control" name="tahun_berdiri" value="<?= $setup['tahun_berdiri']; ?>">
                </div>
            </div>
            <div class="col-md-12">
              <div class="form-group">
                <label for="">Jenjang Pendidikan</label>
                <input type="text" class="form-control" name="jenjang" value="<?= $setup['jenjang_pend']; ?>">
              </div>
            </div>
            <div class="col-md-12">
              <div class="form-group">
                <label for="">Sejarah</label>
                <textarea name="sejarah" style="resize: none;" cols="30" rows="8" class="form-control" style=""><?= $setup['sejarah']; ?></textarea>
              </div>
            </div>
            <div class="col-md-12">
               <div class="form-group">
                  <label for="">Visi</label>
                  <textarea style="resize: none;" name="visi" cols="30" rows="5" class="form-control"><?= $setup['visi']; ?></textarea>
                </div>
              </div>
              <div class="col-md-12">
               <div class="form-group">
                  <label for="">Misi</label>
                  <textarea name="misi" id="editor"><?= $setup['misi']; ?></textarea>
                </div>
              </div>
            </div>
            </div>
            
        </div>

    </div>
    <button onclick="return confirm('Apakah anda yakin, ingin mengubah data.?')" type="submit" class="btn btn-primary mb-4">Simpan Perubahan</button><br><br>
	<?= form_close(); ?>
</div>
