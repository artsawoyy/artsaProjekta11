     <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Detail pemesanan</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="http://localhost/arlin_shop/dashboard/">Home admin</a></li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    
   <div class="container-fluid">
    <div class="row">
     <div class="col-lg-6">
      <div class="card">
       <div class="card-header border-0">
        <h3 class="card-title">Detail Pelanggan</h3>
        <div class="card-tools">
                      <a href="freelancer/tambah" class="btn btn-tool btn-sm">
                        <i class="fas fa-plus"></i>
                      </a>
                      <a href="#" class="btn btn-tool btn-sm">
                        <i class="fas fa-bars"></i>
                      </a>
                    </div>
       </div>
       <div class="card-body table-responsive p-0">
                    <table class="table table-striped table-valign-middle">
                      <thead>
                      <tr>
                        <th>Id</th>
                        <th>Nama</th>
                        <th>Email</th>
                        <th>Alamat</th>
                        <th>Telepon</th>
                      </tr>
                      </thead>

                              <tbody>
                        <?php 
                          $no = 1;
                          foreach($pelanggan as $u){
                         ?>
                         <tr>
                          <td><?php echo $u['id']?></td>
                          <td><?php echo $u['nama'] ?></td>
                          <td><?php echo $u['email'] ?></td>
                          <td><?php echo $u['alamat'] ?></td>
                          <td><?php echo $u['telp'] ?></td>
                          
                         </tr>
                      </tbody>
                  <?php } ?>
                  </table>
              </div>
      </div>
     </div>

     <div class="col-lg-6">
      <div class="card">
       <div class="card-header border-0">
        <h3 class="card-title">Detail Order</h3>
        <div class="card-tools">
                      <a href="freelancer/tambah" class="btn btn-tool btn-sm">
                        <i class="fas fa-plus"></i>
                      </a>
                      <a href="#" class="btn btn-tool btn-sm">
                        <i class="fas fa-bars"></i>
                      </a>
                    </div>
       </div>
       <div class="card-body table-responsive p-0">
                    <table class="table table-striped table-valign-middle">
                      <thead>
                      <tr>
                        <th>id</th>
                        <th>order_id</th>
                        <th>produk</th>
                        <th>qty</th>
                        <th>harga</th>
                      </tr>
                      </thead>
                      <tbody>
                        <?php 
                          $no = 1;
                          foreach($detail_order as $u){
                         ?>
                         <tr>
                          <td><?php echo $u['id']?></td>
                          <td><?php echo $u['order_id'] ?></td>
                          <td><?php echo $u['produk'] ?></td>
                          <td><?php echo $u['qty'] ?></td>
                          <td><?php echo $u['harga'] ?></td>
                          
                         </tr>
                      </tbody>
                      <?php } ?>
                  </table>
              </div>
      </div>
     </div>
    </div>
   </div>
  </div>

