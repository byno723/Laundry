<div class="main-panel">
        <div class="content-wrapper">
    
        <div class="row purchace-popup">
            <div class="col-12">
              <span class="d-block d-md-flex align-items-center bg-info">
                <p class=" text-white"> Informasi</p>
               
               
              </span>
            </div>
          </div>


        
    <div class="col-lg-12 stretch-card">
                  <div class="card">
                    <div class="card-body">
                    <div class="row mb-2">
                        <div class="col-sm-5">
                            <h5>Data Pengguna </h5>
                        </div>
                        <div class="col-sm-7">
                            
                        <a href="#" class="btn btn-primary float-right" data-toggle="modal" data-target="#modalContactForm"><i class="mdi mdi-account"></i> <span>Tambah Pelanggan</span></a>	
                          					
                        </div>
                </div>
                      <div class="table-responsive">
                        <table class="table table-bordered" id="table_id">
                          <thead>
                            <tr>
                              <th>No</th>
                              <th>ID Pelanggan</th>
                              <th>Nama Pelanggan</th>
                              <th>Alamat </th>
                              <th>Telp </th>
                              <th>Aksi</th>
                            </tr>
                          </thead>
                          <tbody>
                          <?php $i = 1; ?>
                            <?php foreach ($pel as $q) : ?>
                            <tr class="table-info">
                              <td> <?=$i;?></td>
                              <td><?=$q['id_pelanggan'];?></td>
                              <td><?=$q['nama_pelanggan'];?></td>
                              <td> <?=$q['alamat'];?> </td>
                              <td><?=$q['tlp'];?></td>
                              <td><a href="<?= base_url(); ?>menu/hapuscustomer/<?= $q['id_pelanggan']; ?>" class="badge badge-danger px-2 py-2">Hapus </a></td>
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
        <h4 class="modal-title w-100 font-weight-bold">Daftar Member </h4>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body mx-3">
      <?= $this->session->flashdata('message'); ?>
        <form method="post" action="<?=base_url('menu/customer');?>" >
        <div class="md-form mb-5">
          <i class="fas fa-user prefix grey-text"></i>
          <input type="text" id="form34" name = "id_pelanggan" class="form-control validate">
          <label data-error="wrong" data-success="right" for="form34">ID Pelanggan</label>
        </div>
        <div class="md-form mb-5">
          <i class="fas fa-user prefix grey-text"></i>
          <input type="text" id="form34" name = "nama_pelanggan" class="form-control validate">
          <label data-error="wrong" data-success="right" for="form34">Nama Pelanggan</label>
        </div>

        <div class="md-form mb-5">
          <i class="fas fa-phone prefix grey-text"></i>
          <input type="text" id="form29" name = "tlp" class="form-control validate">
          <label data-error="wrong" data-success="right" for="form29">Telp</label>
        </div>


        <div class="md-form">
          <i class="mdi mdi-pencil prefix grey-text"></i>
          <textarea type="text" id="form8" name = "alamat" class="md-textarea form-control" rows="4"></textarea>
          <label data-error="wrong" data-success="right" for="form8">Alamat</label>
        </div>

      </div>
      <div class="modal-footer d-flex justify-content-center">
        <button class="btn btn-primary" type="submit" name="submit">Send <i class="fas fa-paper-plane-o ml-1"></i></button>
      </div>

    </form>
    </div>
  </div>
</div>
