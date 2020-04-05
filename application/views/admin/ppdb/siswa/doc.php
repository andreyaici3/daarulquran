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
                       <td class="text-center">
                         <!--  -->
                          <?php if ($status_ktp == 1): ?>
                               <a class="btn btn-success btn-xs" href="<?= base_url('assets/file/siswa/' . $document['ktp']); ?>"><i class="fa fa-eye fas-fw"></i> View</a>
                           <?php endif ?>
                           <?php if ($status_ktp == 0): ?>
                               <a href="<?= base_url('upload/ktp/' . urlencode(base64_encode(base64_encode($id)))); ?>" class="btn btn-primary">Upload</a>
                           <?php endif ?>
                           <?php if ($status_ktp == 3): ?>
                               <a href="<?= base_url('upload/ktp/' . urlencode(base64_encode(base64_encode($id)))); ?>" class="btn btn-primary">Upload</a>
                           <?php endif ?>
                       </td>
                       <td class="text-center">
                        <?php if ($status_ktp == 3): ?>
                               <button class="btn btn-danger btn-xs"><i class="fa fa-ban fas-fw"></i> Document is Not Valid</button>
                           <?php endif ?>
                           <?php if ($status_ktp == 2): ?>
                               <button class="btn btn-warning btn-xs"><i class="fa fa-ban fas-fw"></i> Valditaion</button>
                           <?php endif ?>
                           <?php if ($status_ktp == 1): ?>
                               <button class="btn btn-xs btn-success"><i class="fa fa-check fas-fw"> </i> Accept</button>
                           <?php endif ?>
                           <?php if ($status_ktp == 0): ?>
                                <button class="btn btn-xs btn-danger"><i class="fa fa-ban fas-fw"> </i> Not Upload</button>
                           <?php endif ?>
                       </td>
                   </tr>

                   <!-- FOTO -->
                   <tr>
                       <td>Pas Foto</td>
                       <td class="text-center">
                         <!--  -->
                          <?php if ($status_foto == 1): ?>
                               <a class="btn btn-success btn-xs" href="<?= base_url('assets/file/siswa/' . $document['foto']); ?>"><i class="fa fa-eye fas-fw"></i> View</a>
                           <?php endif ?>
                           <?php if ($status_foto == 0): ?>
                              <a href="<?= base_url('upload/foto/' . urlencode(base64_encode(base64_encode($id)))); ?>" class="btn btn-primary">Upload</a>
                           <?php endif ?>
                           <?php if ($status_foto == 3): ?>
                               <a href="<?= base_url('upload/foto/' . urlencode(base64_encode(base64_encode($id)))); ?>" class="btn btn-primary">Upload</a>
                           <?php endif ?>
                       </td>
                       <td class="text-center">
                        <?php if ($status_foto == 3): ?>
                               <button class="btn btn-danger btn-xs"><i class="fa fa-ban fas-fw"></i> Document is Not Valid</button>
                           <?php endif ?>
                           <?php if ($status_foto == 2): ?>
                               <button class="btn btn-warning btn-xs"><i class="fa fa-ban fas-fw"></i> Valditaion</button>
                           <?php endif ?>
                           <?php if ($status_foto == 1): ?>
                               <button class="btn btn-xs btn-success"><i class="fa fa-check fas-fw"> </i> Accept</button>
                           <?php endif ?>
                           <?php if ($status_foto == 0): ?>
                                <button class="btn btn-xs btn-danger"><i class="fa fa-ban fas-fw"> </i> Not Upload</button>
                           <?php endif ?>
                       </td>
                   </tr>
                     <!-- END FOTO -->

                   <tr>
                       <td>Kartu Keluarga</td>
                       <td class="text-center">
                         <!--  -->
                          <?php if ($status_kk == 1): ?>
                               <a class="btn btn-success btn-xs" href="<?= base_url('assets/file/siswa/' . $document['kk']); ?>"><i class="fa fa-eye fas-fw"></i> View</a>
                           <?php endif ?>
                           <?php if ($status_kk == 0): ?>
                               <a href="<?= base_url('upload/kk/' . urlencode(base64_encode(base64_encode($id)))); ?>" class="btn btn-primary">Upload</a>
                           <?php endif ?>
                           <?php if ($status_kk == 3): ?>
                               <a href="<?= base_url('upload/kk/' . urlencode(base64_encode(base64_encode($id)))); ?>" class="btn btn-primary">Upload</a>
                           <?php endif ?>
                       </td>
                      
                       <td class="text-center">
                           <?php if ($status_kk == 3): ?>
                               <button class="btn btn-danger btn-xs"><i class="fa fa-ban fas-fw"></i> Document is Not Valid</button>
                           <?php endif ?>
                           <?php if ($status_kk == 2): ?>
                               <button class="btn btn-warning btn-xs"><i class="fa fa-ban fas-fw"></i> Valditaion</button>
                           <?php endif ?>
                           <?php if ($status_kk == 1): ?>
                               <button class="btn btn-xs btn-success"><i class="fa fa-check fas-fw"> </i> Accept</button>
                           <?php endif ?>
                           <?php if ($status_kk == 0): ?>
                                <button class="btn btn-xs btn-danger"><i class="fa fa-ban fas-fw"> </i> Not Upload</button>
                           <?php endif ?>
                       </td>
                   </tr>


                   <tr>
                       <td>Ijasah</td>
                       <td class="text-center">
                         <?php if ($status_ijasah == 1): ?>
                               <a class="btn btn-success btn-xs" href="<?= base_url('assets/file/siswa/' . $document['ijasah']); ?>"><i class="fa fa-eye fas-fw"></i> View</a>
                           <?php endif ?>
                           <?php if ($status_ijasah == 0): ?>
                              <a href="<?= base_url('upload/ijasah/' . urlencode(base64_encode(base64_encode($id)))); ?>" class="btn btn-primary">Upload</a>
                           <?php endif ?>
                           <?php if ($status_ijasah == 3): ?>
                               <a href="<?= base_url('upload/ijasah/' . urlencode(base64_encode(base64_encode($id)))); ?>" class="btn btn-primary">Upload</a>
                           <?php endif ?>
                       </td>
                       <td class="text-center">
                           <?php if ($status_ijasah == 3): ?>
                               <button class="btn btn-danger btn-xs"><i class="fa fa-ban fas-fw"></i> Document is Not Valid</button>
                           <?php endif ?>
                           <?php if ($status_ijasah == 2): ?>
                               <button class="btn btn-warning btn-xs"><i class="fa fa-ban fas-fw"></i> Valditaion</button>
                           <?php endif ?>
                           <?php if ($status_ijasah == 1): ?>
                               <button class="btn btn-xs btn-success"><i class="fa fa-check fas-fw"> </i> Accept</button>
                           <?php endif ?>
                           <?php if ($status_ijasah == 0): ?>
                                <button class="btn btn-xs btn-danger"><i class="fa fa-ban fas-fw"> </i> Not Upload</button>
                           <?php endif ?>
                       </td>
                   </tr>
                   <tr>
                       <td>SKHUN</td>
                        <td class="text-center">
                         <?php if ($status_skhun == 1): ?>
                               <a class="btn btn-success btn-xs" href="<?= base_url('assets/file/siswa/' . $document['skhun']); ?>"><i class="fa fa-eye fas-fw"></i> View</a>
                           <?php endif ?>
                           <?php if ($status_skhun == 0): ?>
                             <a href="<?= base_url('upload/skhun/' . urlencode(base64_encode(base64_encode($id)))); ?>" class="btn btn-primary">Upload</a>
                           <?php endif ?>
                           <?php if ($status_skhun == 3): ?>
                              <a href="<?= base_url('upload/skhun/' . urlencode(base64_encode(base64_encode($id)))); ?>" class="btn btn-primary">Upload</a>
                           <?php endif ?>
                       </td>
                  
                       <td class="text-center">
                           <?php if ($status_skhun == 3): ?>
                               <button class="btn btn-danger btn-xs"><i class="fa fa-ban fas-fw"></i> Document is Not Valid</button>
                           <?php endif ?>
                           <?php if ($status_skhun == 2): ?>
                               <button class="btn btn-warning btn-xs"><i class="fa fa-ban fas-fw"></i> Valditaion</button>
                           <?php endif ?>
                           <?php if ($status_skhun == 1): ?>
                               <button class="btn btn-xs btn-success"><i class="fa fa-check fas-fw"> </i> Accept</button>
                           <?php endif ?>
                           <?php if ($status_skhun == 0): ?>
                                <button class="btn btn-xs btn-danger"><i class="fa fa-ban fas-fw"> </i> Not Upload</button>
                           <?php endif ?>
                       </td>
                   </tr>
                   <tr>
                       <td>Akta Kelahiran</td>
                       <td class="text-center">
                         <?php if ($status_akta == 1): ?>
                               <a class="btn btn-success btn-xs" href="<?= base_url('assets/file/siswa/' . $document['akta']); ?>"><i class="fa fa-eye fas-fw"></i> View</a>
                           <?php endif ?>
                           <?php if ($status_akta == 0): ?>
                             <a href="<?= base_url('upload/akta/' . urlencode(base64_encode(base64_encode($id)))); ?>" class="btn btn-primary">Upload</a>
                           <?php endif ?>
                           <?php if ($status_akta == 3): ?>
                             <a href="<?= base_url('upload/akta/' . urlencode(base64_encode(base64_encode($id)))); ?>" class="btn btn-primary">Upload</a>
                           <?php endif ?>
                       </td>
                  
                       <td class="text-center">
                           <?php if ($status_akta == 3): ?>
                               <button class="btn btn-danger btn-xs"><i class="fa fa-ban fas-fw"></i> Document is Not Valid</button>
                           <?php endif ?>
                           <?php if ($status_akta == 2): ?>
                               <button class="btn btn-warning btn-xs"><i class="fa fa-ban fas-fw"></i> Valditaion</button>
                           <?php endif ?>
                           <?php if ($status_akta == 1): ?>
                               <button class="btn btn-xs btn-success"><i class="fa fa-check fas-fw"> </i> Accept</button>
                           <?php endif ?>
                           <?php if ($status_akta == 0): ?>
                                <button class="btn btn-xs btn-danger"><i class="fa fa-ban fas-fw"> </i> Not Upload</button>
                           <?php endif ?>
                       </td>
                   </tr>
                   
               </tbody>
           </table>             
        </div>
    </div>
    
    


    
    
</div>