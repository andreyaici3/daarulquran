<h3 class="page-header"><?= $title2; ?></h3>
<?php 
        $id = $person['id_siswa'];
        $status_ktp = $document['status_ktp']; 
        $status_kk = $document['status_kk']; 
        $status_akta = $document['status_akta']; 
        $status_skhun = $document['status_skhun']; 
        $status_ijasah = $document['status_ijasah']; 
        $status_foto = $document['status_foto']; 


     ?>
<div class="col-lg">
    <?php formErr('username'); ?>
    
    
    <div class="col-lg">    
    <div class="panel panel-primary">
        <div class="panel-heading">
            Upload Document
        </div>
        <div class="panel-body">
           <table class="table table-bordered table-hover">
               <thead>
                   <th>Nama Dokumen</th>
                   <th>Upload</th>
                   <th>Status</th>
               </thead>
               <tbody>

                   <tr>
                       <td>Ktp</td>
                       <td class="text-center"><a href="<?= base_url('upload/ktp/' . urlencode(base64_encode(base64_encode($id)))); ?>" class="btn btn-primary">Upload</a></td>
                       <td class="text-center">
                           <?php if ($status_ktp == 2): ?>
                               Verifying
                           <?php endif ?>
                           <?php if ($status_ktp == 1): ?>
                               Accept
                           <?php endif ?>
                           <?php if ($status_ktp == 0): ?>
                               Not Upload
                           <?php endif ?>
                       </td>
                   </tr>
                   <tr>
                       <td>Pas Foto</td>
                       <td class="text-center"><a href="<?= base_url('upload/foto/' . urlencode(base64_encode(base64_encode($id)))); ?>" class="btn btn-primary">Upload</a></td>
                       <td class="text-center">
                           <?php if ($status_foto == 2): ?>
                               Verifying
                           <?php endif ?>
                           <?php if ($status_foto == 1): ?>
                               Accept
                           <?php endif ?>
                           <?php if ($status_foto == 0): ?>
                               Not Upload
                           <?php endif ?>
                       </td>
                   </tr>
                   <tr>
                       <td>Kartu Keluarga</td>
                       <td class="text-center"><a href="<?= base_url('upload/kk/' . urlencode(base64_encode(base64_encode($id)))); ?>" class="btn btn-primary">Upload</a></td>
                       <td class="text-center">
                           <?php if ($status_kk == 2): ?>
                               Verifying
                           <?php endif ?>
                           <?php if ($status_kk == 1): ?>
                               Accept
                           <?php endif ?>
                           <?php if ($status_kk == 0): ?>
                               Not Upload
                           <?php endif ?>
                       </td>
                   </tr>
                   <tr>
                       <td>Ijasah</td>
                       <td class="text-center"><a href="<?= base_url('upload/ijasah/' . urlencode(base64_encode(base64_encode($id)))); ?>" class="btn btn-primary">Upload</a></td>
                       <td class="text-center">
                           <?php if ($status_ijasah == 2): ?>
                               Verifying
                           <?php endif ?>
                           <?php if ($status_ijasah == 1): ?>
                               Accept
                           <?php endif ?>
                           <?php if ($status_ijasah == 0): ?>
                               Not Upload
                           <?php endif ?>
                       </td>
                   </tr>
                   <tr>
                       <td>Skhun</td>
                       <td class="text-center"><a href="<?= base_url('upload/skhun/' . urlencode(base64_encode(base64_encode($id)))); ?>" class="btn btn-primary">Upload</a></td>
                       <td class="text-center">
                           <?php if ($status_skhun == 2): ?>
                               Verifying
                           <?php endif ?>
                           <?php if ($status_skhun == 1): ?>
                               Accept
                           <?php endif ?>
                           <?php if ($status_skhun == 0): ?>
                               Not Upload
                           <?php endif ?>
                       </td>
                   </tr>
                   <tr>
                       <td>Akta Kelahiran</td>
                       <td class="text-center"><a href="<?= base_url('upload/akta/' . urlencode(base64_encode(base64_encode($id)))); ?>" class="btn btn-primary">Upload</a></td>
                       <td class="text-center">
                           <?php if ($status_akta == 2): ?>
                               Verifying
                           <?php endif ?>
                           <?php if ($status_akta == 1): ?>
                               Accept
                           <?php endif ?>
                           <?php if ($status_akta == 0): ?>
                               Not Upload
                           <?php endif ?>
                       </td>
                   </tr>
                   
               </tbody>
           </table>             
        </div>
    </div>
    
    


    
    
</div>