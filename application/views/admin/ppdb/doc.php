<h3 class="page-header"><?= $title2; ?></h3>
<div class="col-lg">
    <!-- <?php 

    // var_dump($document); die;

     ?> -->
    <div class="panel panel-primary">
        <div class="panel-heading">
            Document yang diupload
        </div>
        <div class="panel-body">
            <?= $this->session->flashdata('msgi'); ?>
            <div class="table-responsive">
                <table class="table table-striped table-bordered table-hover" id="dataTables-example" style="font-size: 13px;">
                    <thead>
                        <tr>
                            <th width="25" class="text-center">No</th>
                            <th>Nama Siswa</th>
                            <th>KTP</th>
                            <th>KK</th>
                            <th>AKTA</th>
                            <th>IJASAH</th>
                            <th>SKHUN</th>
                            <th>FOTO</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $i=1; ?>
                        <?php foreach ($document as $sw): ?>
                            <tr>
                                <td><?= $i; ?></td>
                                <td><?= $sw['nama_siswa']; ?></td>
                                 <td class="text-center">
                                     <?php if ($sw['ktp']): ?>
                                         <a class="btn btn-success btn-xs" href="<?= base_url('assets/file/siswa/' . $sw['ktp']); ?>"><i class="fa fa-eye fas-fw"></i> View</a>
                                     <?php endif ?>
                                      <?php if ($sw['status_ktp'] == 2): ?>
                                         <a onclick="return confirm('Ingin approve ktp.?')" class="btn btn-primary btn-xs" href="<?= base_url('ppdb/approve/ktp/') . $sw['ktp']; ?>"><i class="fa fa-check fas-fw"></i> Accept</a>
                                         <a  class="btn btn-danger btn-xs" onclick="return confirm('Ingin Reject ktp.?')" href="<?= base_url('ppdb/reject/ktp/') . $sw['ktp']; ?>"><i class="fa fa-ban fas-fw"></i>  Reject</a>
                                     <?php endif ?>
                                     <?php if ($sw['status_ktp'] == 1): ?>
                                          <a class="btn btn-danger btn-xs" onclick="return confirm('Ingin Hapus ktp.?')" href="<?= base_url('ppdb/remove/ktp/') . $sw['ktp']; ?>" ><i class="fa fa-ban fas-fw"></i>  Remove Document</a>
                                     <?php endif ?>
                                 </td>
                                 <td class="text-center">
                                      <?php if ($sw['kk']): ?>
                                         <a class="btn btn-success btn-xs" href="<?= base_url('assets/file/siswa/' . $sw['kk']); ?>"><i class="fa fa-eye fas-fw"></i> View</a>
                                     <?php endif ?>
                                      <?php if ($sw['status_kk'] == 2): ?>
                                         <a onclick="return confirm('Ingin approve kk.?')" class="btn btn-primary btn-xs" href="<?= base_url('ppdb/approve/kk/') . $sw['kk']; ?>"><i class="fa fa-check fas-fw"></i> Accept</a>
                                         <a  class="btn btn-danger btn-xs" onclick="return confirm('Ingin Reject kk.?')" href="<?= base_url('ppdb/reject/kk/') . $sw['kk']; ?>"><i class="fa fa-ban fas-fw"></i>  Reject</a>
                                     <?php endif ?>
                                     <?php if ($sw['status_kk'] == 1): ?>
                                          <a class="btn btn-danger btn-xs" onclick="return confirm('Ingin Hapus kk.?')" href="<?= base_url('ppdb/remove/kk/') . $sw['kk']; ?>" ><i class="fa fa-ban fas-fw"></i>  Remove Document</a>
                                     <?php endif ?>
                                 </td>
                                <td class="text-center">
                                      <?php if ($sw['akta']): ?>
                                         <a class="btn btn-success btn-xs" href="<?= base_url('assets/file/siswa/' . $sw['akta']); ?>"><i class="fa fa-eye fas-fw"></i> View</a>
                                     <?php endif ?>
                                      <?php if ($sw['status_akta'] == 2): ?>
                                         <a onclick="return confirm('Ingin approve akta.?')" class="btn btn-primary btn-xs" href="<?= base_url('ppdb/approve/akta/') . $sw['akta']; ?>"><i class="fa fa-check fas-fw"></i> Accept</a>
                                         <a  class="btn btn-danger btn-xs" onclick="return confirm('Ingin Reject akta.?')" href="<?= base_url('ppdb/reject/akta/') . $sw['akta']; ?>"><i class="fa fa-ban fas-fw"></i>  Reject</a>
                                     <?php endif ?>
                                     <?php if ($sw['status_akta'] == 1): ?>
                                          <a class="btn btn-danger btn-xs" onclick="return confirm('Ingin Hapus akta.?')" href="<?= base_url('ppdb/remove/akta/') . $sw['akta']; ?>" ><i class="fa fa-ban fas-fw"></i>  Remove Document</a>
                                     <?php endif ?>
                                 </td>
                                 <td class="text-center">
                                      <?php if ($sw['ijasah']): ?>
                                         <a class="btn btn-success btn-xs" href="<?= base_url('assets/file/siswa/' . $sw['ijasah']); ?>"><i class="fa fa-eye fas-fw"></i> View</a>
                                     <?php endif ?>
                                      <?php if ($sw['status_ijasah'] == 2): ?>
                                         <a onclick="return confirm('Ingin approve ijasah.?')" class="btn btn-primary btn-xs" href="<?= base_url('ppdb/approve/ijasah/') . $sw['ijasah']; ?>"><i class="fa fa-check fas-fw"></i> Accept</a>
                                         <a  class="btn btn-danger btn-xs" onclick="return confirm('Ingin Reject ijasah.?')" href="<?= base_url('ppdb/reject/ijasah/') . $sw['ijasah']; ?>"><i class="fa fa-ban fas-fw"></i>  Reject</a>
                                     <?php endif ?>
                                     <?php if ($sw['status_ijasah'] == 1): ?>
                                          <a class="btn btn-danger btn-xs" onclick="return confirm('Ingin Hapus ijasah.?')" href="<?= base_url('ppdb/remove/ijasah/') . $sw['ijasah']; ?>" ><i class="fa fa-ban fas-fw"></i>  Remove Document</a>
                                     <?php endif ?>
                                 </td>
                                 <td class="text-center">
                                      <?php if ($sw['skhun']): ?>
                                         <a class="btn btn-success btn-xs" href="<?= base_url('assets/file/siswa/' . $sw['skhun']); ?>"><i class="fa fa-eye fas-fw"></i> View</a>
                                     <?php endif ?>
                                      <?php if ($sw['status_skhun'] == 2): ?>
                                         <a onclick="return confirm('Ingin approve skhun.?')" class="btn btn-primary btn-xs" href="<?= base_url('ppdb/approve/skhun/') . $sw['skhun']; ?>"><i class="fa fa-check fas-fw"></i> Accept</a>
                                         <a  class="btn btn-danger btn-xs" onclick="return confirm('Ingin Reject skhun.?')" href="<?= base_url('ppdb/reject/skhun/') . $sw['skhun']; ?>"><i class="fa fa-ban fas-fw"></i>  Reject</a>
                                     <?php endif ?>
                                     <?php if ($sw['status_skhun'] == 1): ?>
                                          <a class="btn btn-danger btn-xs" onclick="return confirm('Ingin Hapus skhun.?')" href="<?= base_url('ppdb/remove/skhun/') . $sw['skhun']; ?>" ><i class="fa fa-ban fas-fw"></i>  Remove Document</a>
                                     <?php endif ?>
                                 </td>
                                 <td class="text-center">
                                      <?php if ($sw['foto']): ?>
                                         <a class="btn btn-success btn-xs" href="<?= base_url('assets/file/siswa/' . $sw['foto']); ?>"><i class="fa fa-eye fas-fw"></i> View</a>
                                     <?php endif ?>
                                      <?php if ($sw['status_foto'] == 2): ?>
                                         <a onclick="return confirm('Ingin approve foto.?')" class="btn btn-primary btn-xs" href="<?= base_url('ppdb/approve/foto/') . $sw['foto']; ?>"><i class="fa fa-check fas-fw"></i> Accept</a>
                                         <a  class="btn btn-danger btn-xs" onclick="return confirm('Ingin Reject foto.?')" href="<?= base_url('ppdb/reject/foto/') . $sw['foto']; ?>"><i class="fa fa-ban fas-fw"></i>  Reject</a>
                                     <?php endif ?>
                                     <?php if ($sw['status_foto'] == 1): ?>
                                          <a class="btn btn-danger btn-xs" onclick="return confirm('Ingin Hapus foto.?')" href="<?= base_url('ppdb/remove/foto/') . $sw['foto']; ?>" ><i class="fa fa-ban fas-fw"></i>  Remove Document</a>
                                     <?php endif ?>
                                 </td>
                            </tr>
                            <?php $i++; ?>
                        <?php endforeach ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
