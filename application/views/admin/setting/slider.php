<h3 class="page-header"><?= $title2; ?></h3>
<div class="col-lg">
    <div class="panel panel-primary">
        <div class="panel-heading">
            Setting Slider Box
        </div>
        <div class="panel-body">
        	<?= $this->session->flashdata('msgi'); ?>
           <div class="col-md-4 col-sm-1">
           		<?= form_open_multipart('setting/upload'); ?>
           		<div class="panel panel-primary">
           			<div class="panel-heading">
           				Slider Box 1
           			</div>
           			<div class="panel-body">
			           <div class="form-group text-center">
			           		<img src="<?= base_url('assets/images/config/' . $setup['slider_1_foto']); ?>" alt="" width="50%">		
			           </div>
			           <div class="form-group">
			           		<label for="">Judul</label>
			           		<input type="text" class="form-control" name="slider1judul" value="<?= $setup['slider_1_judul']; ?>">
			           </div>
			           <div class="form-group">
			           		<label for="">Sub Judul</label>
			           		<input type="text" class="form-control" name="slider1sub" value="<?= $setup['slider_1_sub']; ?>">
			           </div>

			           <div class="form-group">
			           		<input type="file" name="slider1" class="form-control">
			           </div>           		
					</div>
				</div>
	       </div>
	       <div class="col-md-4 col-sm-1">
           		<div class="panel panel-primary">
           			<div class="panel-heading">
           				Slider Box 2
           			</div>
           			<div class="panel-body">
			           <div class="form-group text-center">
			           		<img src="<?= base_url('assets/images/config/' . $setup['slider_2_foto']); ?>" alt="" width="50%">		
			           </div>
			           <div class="form-group">
			           		<label for="">Judul</label>
			           		<input type="text" class="form-control" name="slider2judul" value="<?= $setup['slider_2_judul']; ?>">
			           </div>
			           <div class="form-group">
			           		<label for="">Sub Judul</label>
			           		<input type="text" class="form-control" name="slider2sub" value="<?= $setup['slider_2_sub']; ?>">
			           </div>

			           <div class="form-group">
			           		<input type="file" name="slider2" class="form-control">
			           </div>           		
					</div>
				</div>
	       </div>
	       <div class="col-md-4 col-sm-1">
           		<div class="panel panel-primary">
           			<div class="panel-heading">
           				Slider Box 3
           			</div>
           			<div class="panel-body">
			           <div class="form-group text-center">
			           		<img src="<?= base_url('assets/images/config/' . $setup['slider_3_foto']); ?>" alt="" width="50%">		
			           </div>
			           <div class="form-group">
			           		<label for="">Judul</label>
			           		<input type="text" class="form-control" name="slider3judul" value="<?= $setup['slider_3_judul']; ?>">
			           </div>
			           <div class="form-group">
			           		<label for="">Sub Judul</label>
			           		<input type="text" class="form-control" name="slider3sub" value="<?= $setup['slider_3_sub']; ?>">
			           </div>

			           <div class="form-group">
			           		<input type="file" name="slider3" class="form-control">
			           </div>           		
					</div>
				</div>
	       </div>
        </div>
    </div>
    <div class="panel panel-primary">
        <div class="panel-heading">
            Setting Logo
        </div>
        <div class="panel-body">
			<div class="col-lg">
				 <div class="col-md-3 col-sm-1">
			       		<div class="panel panel-primary">
			       			<div class="panel-heading">
			       				Logo Pondok Pesantren
			       			</div>
			       			<div class="panel-body">
					           <div class="form-group text-center">
					           		<img src="<?= base_url('assets/images/config/' . $setup['logo_ponpes']); ?>" alt="" width="50%">		
					           </div>
					           <div class="form-group">
					           		<label for="">Nama</label>
					           		<input type="text" class="form-control" name="judul_ponpes" value="<?= $setup['judul_ponpes']; ?>">
					           </div>
					           <div class="form-group">
					           		<label for="">Sub</label>
					           		<input type="text" class="form-control" name="sub_ponpes" value="<?= $setup['sub_ponpes']; ?>">
					           </div>

					           <div class="form-group">
					           		<input type="file" name="logo_ponpes" class="form-control">
					           </div>           		
							</div>
						</div>
			       </div>
			       <div class="col-md-3 col-sm-1">
			       		<div class="panel panel-primary">
			       			<div class="panel-heading">
			       				Logo RA
			       			</div>
			       			<div class="panel-body">
					           <div class="form-group text-center">
					           		<img src="<?= base_url('assets/images/config/' . $setup['logo_ra']); ?>" alt="" width="50%">		
					           </div>
					           <div class="form-group">
					           		<label for="">Nama</label>
					           		<input type="text" class="form-control" name="judul_ra" value="<?= $setup['judul_ra']; ?>">
					           </div>
					           <div class="form-group">
					           		<label for="">Sub</label>
					           		<input type="text" class="form-control" name="sub_ra" value="<?= $setup['sub_ra']; ?>">
					           </div>

					           <div class="form-group">
					           		<input type="file" name="logo_ra" class="form-control">
					           </div>           		
							</div>
						</div>
			       </div>
			       <div class="col-md-3 col-sm-1">
			       		<div class="panel panel-primary">
			       			<div class="panel-heading">
			       				Logo mts
			       			</div>
			       			<div class="panel-body">
					           <div class="form-group text-center">
					           		<img src="<?= base_url('assets/images/config/' . $setup['logo_mts']); ?>" alt="" width="50%">		
					           </div>
					           <div class="form-group">
					           		<label for="">Nama</label>
					           		<input type="text" class="form-control" name="judul_mts" value="<?= $setup['judul_mts']; ?>">
					           </div>
					           <div class="form-group">
					           		<label for="">Sub</label>
					           		<input type="text" class="form-control" name="sub_mts" value="<?= $setup['sub_mts']; ?>">
					           </div>

					           <div class="form-group">
					           		<input type="file" name="logo_mts" class="form-control">
					           </div>           		
							</div>
						</div>
			       </div>
			       <div class="col-md-3 col-sm-1">
			       		<div class="panel panel-primary">
			       			<div class="panel-heading">
			       				Logo MA
			       			</div>
			       			<div class="panel-body">
					           <div class="form-group text-center">
					           		<img src="<?= base_url('assets/images/config/' . $setup['logo_ma']); ?>" alt="" width="50%">		
					           </div>
					           <div class="form-group">
					           		<label for="">Nama</label>
					           		<input type="text" class="form-control" name="judul_ma" value="<?= $setup['judul_ma']; ?>">
					           </div>
					           <div class="form-group">
					           		<label for="">Sub</label>
					           		<input type="text" class="form-control" name="sub_ma" value="<?= $setup['sub_ma']; ?>">
					           </div>

					           <div class="form-group">
					           		<input type="file" name="logo_ma" class="form-control">
					           </div>           		
							</div>
						</div>
			       </div>
			</div>
		</div>
	</div>


    <button onclick="return confirm('Apakah anda yakin, ingin mengubah data.?')" type="submit" class="btn btn-primary mb-4">Simpan Perubahan</button><br><br>
	           <?= form_close(); ?>
</div>
