<h3 class="page-header"><?= $title2; ?></h3>
<?php 

        $akta = $person['akta'];
        $id = $person['id_siswa'];
        

     ?>
<div class="col-lg">
    <?php formErr('username'); ?>
    
    
    <div class="col-lg">    
    <div class="panel panel-primary">
        <div class="panel-heading">
            Upload Document
        </div>
        <div class="panel-body">
            <?= form_open_multipart('ppdb/document'); ?>
            <div class="form-group">
                <?php if (!$person['akta']): ?>
                    <label>Persyaratan</label>
                    <input type="hidden" name="ident" value="<?= $id; ?>">
                    <input type="file" name="akta" class="form-control"><br>
                    <button type="submit" class="btn btn-primary" onclick="return confirm('apakah file sudah benar.?')">Upload</button>
                <?php else: ?>
                    <a href="<?= base_url('assets/ppdb/' . $person['akta']); ?>">Download Document Anda</a>
                <?php endif ?>
            </div>

            
        </div>
    </div>
    
    


    
    <?= form_close(); ?> 
</div>