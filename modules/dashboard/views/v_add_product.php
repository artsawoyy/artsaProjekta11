  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Add Product</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="http://localhost/arlin_shop/dashboard/">Home Admin</a></li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <!-- left column -->
          <div class="col-md-6">
              <p><?php echo $this->session->flashdata('msg') ?></p>
              <form action="<?php echo base_url(''); ?>dashboard/add_product/upload" method="post" enctype="multipart/form-data">
                
                <div class="form-group">
                    <label>Nama Product</label>
                      <input type="text" name="nama_produk" value="<?php echo set_value('nama_produk');?>" class="form-control" placeholder="Enter">
                </div>
                <div class="form-group">
                    <label>Harga</label>
                      <input type="text" name="harga" value="<?php echo set_value('harga');?>" class="form-control" placeholder="Enter">
                </div>
                <div class="form-group">
                    <label>Stok</label>
                      <input type="text" name="harga" value="<?php echo set_value('stok');?>" class="form-control" placeholder="Enter">
                </div>
                <div class="row">
                    <div class="col-sm-6">
                      <!-- select -->
                      <div class="form-group">
                        <label>Kategori</label>
                        <select class="custom-select" name="kategori">
                          <option>--Select Kategori--</option>
                          <?php 
                            foreach($kategori as $u){
                          ?>
                          <option  value="<?php echo $u['id'] ?>"><?php echo $u['nama_kategori'] ?></option>
                        <?php   }; ?>
                        </select>
                      </div>
                    </div>
                  </div>
                <div class="form-group">
                    <label>Deskripsi</label>
                    <textarea type="text" class="form-control" rows="3" placeholder="Enter ..." name="deskripsi" value="<?php echo set_value('deskripsi');?>">
                    </textarea>
                  </div>
                <div class="form-group">
                <label for="exampleInputFile">File input</label>
                <div class="input-group">
                <input type="file" name="gambar">
                </div>
                </div>
                <input type="submit" value="Tambah" class="btn btn-primary btn-block">
              <?php echo form_close() ?>  
              </form>
      </div>
        </div>
          </div>
    </section>
