<div class="main-panel">
        <div class="content-wrapper">
    
        <div class="row purchace-popup">
            <div class="col-12">
              <span class="d-block d-md-flex align-items-center bg-info">
                <p class=" text-white"> Informasi</p>
               
               
              </span>
            </div>
          </div>


          <div class="col-lg-12 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                <div class="row mb-3">
                        <div class="col-sm-5 mt-2">
                            <h5>Data Transaksi </h5>
                        </div>
                        <div class="col-sm-7">
                            
                            <a href="#" class="btn btn-info float-right"  data-toggle="modal" data-target="#modalContactForm"><i class="mdi mdi-account-plus "></i> <span>Tambah Data</span></a>						
                        </div>
                </div>
                  <div class="table-responsive">
                    <table class="table table-striped" id="table_id">
                      <thead>
                        <tr>
                        <th>No</th>
                          <th>Nama Customer</th>
                          <th>Produk</th>
                          <th>Progress</th>
                          <th>Berat</th>
                          <th>Total Bayar</th>
                          <th>Tanggal Masuk</th>
                          <th>Deadline</th>
                          <th>Alamat</th>
                          <th>No HP</th>
                          <th>Aksi</th>
                        </tr>
                      </thead>
                      <tbody>
                      <?php $i = 1; ?>
                            <?php foreach ($proses as $q) : ?>
                        <tr>
                        <td><?=$i;?></td>
                          <td><?=$q['nama_pelanggan'];?></td>
                          <td> <?=$q['nama_produk'];?></td>
                          <td>
                          <?php $selisih = ((abs(strtotime ($q['tgl_masuk']) - strtotime ($q['deadline'])))/(60*60*24)) ;
                                $hasil = 100 / $selisih ;
                          ?>

                            <div class="progress">
                              <div class="progress-bar bg-warning" role="progressbar" style="width: <?=$hasil;?>%" aria-valuenow="25" aria-valuemin="0" value="" aria-valuemax="100"><?= round($hasil);?> %</div>
                            </div>
                          </td>
                          <td><?=$q['berat'];?> /kg</td>
                          <td><p class="text-danger font-weight-bold ">Rp.<?=number_format($q['total']);?></p></td>
                          <td> <?=$q['tgl_masuk'];?></td>
                          <td> <?=$q['deadline'];?></td>
                          <td><?=$q['alamat'];?></td>
                          <td><?=$q['tlp'];?></td>
                          <td><a href="<?= base_url(); ?>menu/hapusproses/<?= $q['id_transaksi']; ?>" class="badge badge-danger px-2 py-2">Hapus </a> </td>
                        </tr>
                        <?php $i++ ?>
                            <?php endforeach; ?>
                        </tbody>
                    </table>
                  </div>
                </div>
              </div>
            </div>
    




        </div>
        <!-- content-wrapper ends -->
     


     
        <div class="modal fade" id="modalContactForm" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
  aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header text-center">
        <h4 class="modal-title w-100 font-weight-bold">Daftar Transaksi </h4>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body mx-3">
      <?= $this->session->flashdata('message'); ?>
        <form method="post" action="<?=base_url('menu/proses');?>" >
        <div class="md-form mb-5">
        
        <select class="browser-default custom-select" name="id_produk">

  <?php foreach ($pro as $q) : ?>
  <option value="<?=$q['id_produk'] ;?>" ><?=$q['nama_produk'];?></option>
<?php endforeach;?>
</select>
        </div>
        <div class="md-form mb-5">
          <i class="fas fa-pen prefix grey-text"></i>
          <input type="text" id="form34" name ="berat" class="form-control validate">
          <label data-error="wrong" data-success="right" for="form34">Berat</label>
        </div>

        <div class="md-form mb-5">
          <i class="fas fa-edit prefix grey-text"></i>
          <input type="text" value="<?= date('Y-m-d');?>" id="form29" name="tgl_masuk" class="form-control disabled validate"  >
          <label data-error="wrong" data-success="right" for="form29">Tanggal Masuk</label>
        </div>

        <div class="md-form mb-5">
          <i class="fas fa-edit prefix grey-text"></i>
          <input type="date" id="form29" name ="deadline" class="form-control validate">
          <label data-error="wrong" data-success="right" for="form29">Deadline</label>
        </div>

        <div class="md-form mb-5">
         
        <select class="browser-default custom-select" name="id_pelanggan">
  
  <?php foreach ($pel as $q) : ?>
  <option value="<?=$q['id_pelanggan'] ;?>" ><?=$q['nama_pelanggan'];?></option>
<?php endforeach;?>
</select>
        </div>

      </div>
      <div class="modal-footer d-flex justify-content-center">
        <button class="btn btn-primary" type="submit" name="submit">Submit <i class="fas fa-paper-plane-o ml-1"></i></button>
      </div>

    </form>
    </div>
  </div>
</div>
