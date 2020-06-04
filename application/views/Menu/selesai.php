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
                            <h5>Data Pengguna </h5>
                        </div>
                        </div>
                <div class="table-responsive">
                    <table class="table" id="table_id">
                      <thead>
                        <tr>
                        <th>NO</th>
                          <th>ID Transaksi</th>
                          <th>Nama Pelanggan</th>
                          <th>Berat Cucian</th>
                          <th>Total</th>
                          <th>Deadline</th>
                          <th>Status</th>
                          <th>Aksi</th>
                        </tr>
                      </thead>
                      <tbody>
                      <?php $i = 1; ?>
                            <?php foreach ($selesai as $q) : ?>
                        <tr>
                          <td><?=$i;?></td>
                          <td><?=$q['id_transaksi'];?></td>
                          <td><?=$q['nama_pelanggan'];?></td>
                          <td><?=$q['berat'];?> kg</td>
                          <td>Rp. <?= number_format($q['total']);?></td>
                          <td><?=$q['deadline'];?></td>
                          <td>
                            <label class="badge badge-warning"><a href="<?= base_url(); ?>menu/ubahselesai/<?= $q['id_transaksi']; ?>" class="text-white"> Pending </a></label>
                          </td>
                          <td>
                          <form method="post" action="<?=base_url('menu/voice');?>" >
                            
                            <input type="hidden" name="phone" value="<?=$q['tlp'];?>" id="phone">
                            <button type="submit" class="text-white badge badge-info">Kirim SMS </button>
                            </form>
                          </td>
                         
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
     