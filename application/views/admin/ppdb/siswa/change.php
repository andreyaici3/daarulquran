<h3 class="page-header"><?= $title2; ?></h3>
<div class="col-lg">
    <?php formErr('password'); ?>
    <?php formErr('passwordBaru'); ?>
    <?php formErr('passwordBaru1'); ?>

    
    <div class="panel panel-primary">
        <div class="panel-heading">
            Form Edit siswa PPDB
        </div>
        <div class="panel-body">
            <?= form_open_multipart('ppdb/changePassword/' . $identity ); ?>
            <?= $this->session->userdata('msgi'); ?>
            <div class="col-md-12">
                <div class="form-group">
                    <input type="hidden" name="ident" value="<?= $person['id_siswa']; ?>">
                    <label>Password Lama</label>
                    <input type="hidden" name="ident" value="<?= $person['id_siswa']; ?>">
                    <input class="form-control" name="password" type="password">
                </div>
            </div>

            <div class="col-md-12">
                <div class="form-group">
                    <label>Password Baru</label>
                    <input class="form-control" name="passwordBaru" type="password">
                </div>
            </div>  

            <div class="col-md-12">
                <div class="form-group">
                    <label>Konfirmasi Password Baru</label>
                    <input class="form-control" name="passwordBaru1" type="password">
                </div>
            </div>         
            
            

                    
        </div>
    </div>

    <div class="col-md-12">
                <button type="submit" class="btn btn-primary" onclick="return confirm('Apakah data sudah benar?')">Save Changes</button>
                <button type="reset" class="btn btn-danger">Reset</button>
    </div>
    <?= form_close(); ?> 
</div>