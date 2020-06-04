
    
     
      <!-- partial -->
      <div class="main-panel">
        <div class="content-wrapper">
        
          <div class="row">
          
            <div class="col-xl-4 col-lg-4 col-md-4 col-sm-6 grid-margin stretch-card">
              <div class="card card-statistics">
                <div class="card-body">
                  <div class="clearfix">
                    <div class="float-left">
                      <i class="mdi mdi-receipt text-warning icon-lg"></i>
                    </div>
                    <div class="float-right">
                      <p class="mb-0 text-right">Transaksi</p>
                      <div class="fluid-container">
                        <h3 class="font-weight-medium text-right mb-0"><?=$trans;?></h3>
                      </div>
                    </div>
                  </div>
                  <p class="text-muted mt-4 mb-0">
                    <i class="mdi mdi-bookmark-outline mr-1" aria-hidden="true"></i> Product-wise sales
                  </p>
                </div>
              </div>
            </div>
            <div class="col-xl-4 col-lg-4 col-md-4 col-sm-6 grid-margin stretch-card">
              <div class="card card-statistics">
                <div class="card-body">
                  <div class="clearfix">
                    <div class="float-left">
                      <i class="mdi mdi-poll-box text-success icon-lg"></i>
                    </div>
                    <div class="float-right">
                      <p class="mb-0 text-right">Pelanggan</p>
                      <div class="fluid-container">
                        <h3 class="font-weight-medium text-right mb-0"><?=$pelanggan;?></h3>
                      </div>
                    </div>
                  </div>
                  <p class="text-muted mt-4 mb-0">
                    <i class="mdi mdi-calendar mr-1" aria-hidden="true"></i> Weekly Sales
                  </p>
                </div>
              </div>
            </div>
            <div class="col-xl-4 col-lg-4 col-md-4 col-sm-6 grid-margin stretch-card">
              <div class="card card-statistics">
                <div class="card-body">
                  <div class="clearfix">
                    <div class="float-left">
                      <i class="mdi mdi-account-location text-info icon-lg"></i>
                    </div>
                    <div class="float-right">
                      <p class="mb-0 text-right">Petugas</p>
                      <div class="fluid-container">
                        <h3 class="font-weight-medium text-right mb-0"><?=$petugas;?></h3>
                      </div>
                    </div>
                  </div>
                  <p class="text-muted mt-4 mb-0">
                    <i class="mdi mdi-reload mr-1" aria-hidden="true"></i> Product-wise sales
                  </p>
                </div>
              </div>
            </div>
          </div>
      
        

          <div class="row">
            <div class="col-lg-12 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                  <h4 class="card-title">Line chart</h4>
                  <canvas id="lineChart" style="height:250px"></canvas>
                </div>
              </div>
            </div>
</div>
          
<!--isi disini  -->







        </div>
        <!-- content-wrapper ends -->
     