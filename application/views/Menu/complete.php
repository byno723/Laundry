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
                        <div class="col-sm-7">
                        <a href="<?=base_url('menu/excel_export');?>" class="btn btn-success float-right"><i class="mdi mdi-file-outline "></i> <span>Export to Excel</span></a>	  
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
                        </tr>
                      </thead>
                      <tbody>
                      <?php $i = 1; ?>
                            <?php foreach ($com as $q) : ?>
                        <tr>
                          <td><?=$i;?></td>
                          <td><?=$q['id_transaksi'];?></td>
                          <td><?=$q['nama_pelanggan'];?></td>
                          <td><?=$q['berat'];?> kg</td>
                          <td>Rp. <?= number_format($q['total']);?></td>
                          <td><?=$q['deadline'];?></td>
                          <td>
                            <label class="badge badge-danger">Completed</label>
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
     