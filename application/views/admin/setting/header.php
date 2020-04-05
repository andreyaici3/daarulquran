<h3 class="page-header"><?= $title2; ?></h3>
<div class="col-lg">
    <div class="panel panel-primary">
        <div class="panel-heading">
            Setting Header
        </div>
        <?= form_open_multipart('setting/hahay'); ?>
        <div class="panel-body">
        	<?= $this->session->flashdata('msgi'); ?>
        	<div class="col-md">
        		<div class="form-group">
        			<label>Header 1</label>
        			<input type="text" class="form-control" name="header_1" value="<?= $setup['header_1']; ?>">
        		</div>
        		<div class="form-group">
        			<label>Sub Header 1</label>
        			<input type="text" class="form-control" name="sub_header_1" value="<?= $setup['sub_header_1']; ?>">
        		</div>
        		<div class="form-group">
        			<label>Header 2</label>
        			<input type="text" class="form-control" name="header_2" value="<?= $setup['header_2']; ?>">
        		</div>
        		<div class="form-group">
        			<label>Sub Header 2</label>
        			<input type="text" class="form-control" name="sub_header_2" value="<?= $setup['sub_header_2']; ?>">
        		</div>
        		<div class="form-group">
        			<label>Header 3</label>
        			<input type="text" class="form-control" name="header_3" value="<?= $setup['header_3']; ?>">
        		</div>
        		<div class="form-group">
        			<label>Sub Header 3</label>
        			<input type="text" class="form-control" name="sub_header_3" value="<?= $setup['sub_header_3']; ?>">
        		</div>
        		<div class="form-group">
        			<label>Header 4</label>
        			<input type="text" class="form-control" name="header_4" value="<?= $setup['header_4']; ?>">
        		</div>
        		<div class="form-group">
        			<label>Sub Header 4</label>
        			<input type="text" class="form-control" name="sub_header_4" value="<?= $setup['sub_header_4']; ?>">
        		</div>
        	</div>
        </div>

    </div>

    <button onclick="return confirm('Apakah anda yakin, ingin mengubah data.?')" type="submit" class="btn btn-primary mb-4">Simpan Perubahan</button><br><br>
	           <?= form_close(); ?>
</div>
