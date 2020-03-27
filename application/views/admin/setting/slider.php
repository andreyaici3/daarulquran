<h3 class="page-header"><?= $title2; ?></h3>
<div class="col-lg">
    <div class="panel panel-primary">
        <div class="panel-heading">
            <a class="btn btn-md btn-primary addMapel" href="<?= base_url('guru/add'); ?>"><i class="fa fa-plus fa-fw"></i> Setting Slider</a>
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
			           		<input type="text" class="form-control" name="judul1" value="<?= $setup['slider_1_judul']; ?>">
			           </div>
			           <div class="form-group">
			           		<label for="">Sub Judul</label>
			           		<input type="text" class="form-control" name="judul2" value="<?= $setup['slider_1_sub']; ?>">
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
			           		<input type="text" class="form-control" name="judul1" value="<?= $setup['slider_2_judul']; ?>">
			           </div>
			           <div class="form-group">
			           		<label for="">Sub Judul</label>
			           		<input type="text" class="form-control" name="judul2" value="<?= $setup['slider_2_sub']; ?>">
			           </div>

			           <div class="form-group">
			           		<input type="file" name="slider2" class="form-control">
			           </div>           		
					</div>
				</div>

	       </div>
                         
          
           
        </div>

    </div>
    <button type="submit" class="btn btn-primary">Change slider 2</button>
	           <?= form_close(); ?>
</div>
