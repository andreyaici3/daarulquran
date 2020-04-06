<h3 class="page-header"></h3>
<div class="col-lg">
    <?php if ($person['status_siswa'] == 1): ?>
        <div class="alert alert-success">
            Selamat Status Anda sudah diterima menjadi siswa daarul Qur'an
        </div>
    <?php endif ?>
    <?php if ($person['status_siswa'] == 2): ?>
         <div class="alert alert-danger">
            Maaf, Anda tidak bisa masuk ke Daarul Qur'an
        </div>
    <?php endif ?>
    <?php if ($person['status_siswa'] == 0 && $person['access_edit'] == 1): ?>
         <div class="alert alert-warning">
            Anda belum mengajukan penerimaan, silahkan isi biodata lalu klik save untuk mengajukan
        </div>
    <?php endif ?>
     <?php if ($person['status_siswa'] == 0 && $person['access_edit'] == 0): ?>
         <div class="alert alert-info">
            Status Penerimaan sedang di proses
        </div>
    <?php endif ?>


        
    
    <div class="panel panel-primary">
        <div class="panel-heading">
          Informasi Akun PPDB
        </div>
        <div class="panel-body">
            <?= $this->session->flashdata('msgi'); ?>
            <div class="form-group text-center">
               <h4>Selamat Datang, <?= $this->session->userdata('name'); ?></h4>
               <h6>Silahkan Cek kembali identitas saudara, sebelum mengajukan pendaftaran ke master data Staff <br><br><b>Mohon simpan baik baik password yang telah saudara/i dapatkan </b></h6>
           </div>
           <table style="font-size: 14px;" class="table table-responsive text-center">
                <tr>
                    <td width="500" align="right">Nama Lengkap</td>
                    <td>:</td>
                    <td align="left"><?= $person['nama_siswa']; ?></td>
                </tr>
                <tr>
                    <td width="500" align="right">Username</td>
                    <td>:</td>
                    <td align="left"><?= $person['username']; ?></td>
                </tr>
                <tr>
                    <td width="500" align="right">No Whatsapp</td>
                    <td>:</td>
                    <td align="left"><?= $person['no_whatsapp']; ?></td>
                </tr>
                <tr>
                    <td width="500" align="right">Status Akun</td>
                    <td>:</td>
                    <td align="left">
                        
                        <?php if ($person['status_akun'] == 1): ?>
                             <a href="">Sudah Diverifikasi</a>
                         <?php else: ?>
                            <a href="">Belum Terverifikasi</a>
                        <?php endif ?>
                    </td>
                </tr>
                <tr>
                    <td width="500" align="right">Status siswa</td>
                    <td>:</td>
                    <td align="left">
                        
                        <?php if ($person['status_siswa'] == 1): ?>
                            <a href="">Diterima</a>
                        <?php endif ?>
                        <?php if ($person['status_siswa'] == 2): ?>
                            <a href="Tidak Diterima"></a>
                        <?php endif ?>
                        <?php if (!$person['status_siswa']): ?>
                            <a href="">Belum Diputuskan</a>
                        <?php endif ?>
                    </td>
                </tr>
            </table> 
             <div class="form-group text-center">
                <?php if ($person['status_siswa'] == 1): ?>
                    <a href="<?= base_url('report/formulir/' .  urlencode(base64_encode($person['id_siswa']))) ?>" class="btn btn-md btn-primary">Cetak Formulir</a>
                <?php endif ?>
               
           </div>
    </div>
</div>
<div class="panel panel-primary">
        <div class="panel-heading">
          Pengumuman
        </div>
        <div class="panel-body">
        </div>
        </div>
    </div>

