<h3 class="page-header"><?= $title2; ?></h3>
<div class="col-lg">
    <div class="panel panel-primary">
        <div class="panel-heading">
            Kartu Keluarga
        </div>
        <?= $this->session->flashdata('msgi'); ?>
        <div class="panel-body">
           
            <?= form_open_multipart('upload/document/kk'); ?>
                <div class="form-group">
                    <label>Kartu Keluarga</label>
                    <input type="file" name="kk" class="form-control">
                    <input type="hidden" name="ident" value="<?= $person['id_siswa']; ?>">
                </div>
                <div class="form-group">
                    <button type="submit" class="btn btn-md btn-primary">Upload</button>
                </div>
            <?= form_close(); ?> 
        </div>
    </div>
</div>
