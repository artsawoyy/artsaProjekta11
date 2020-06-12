
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Add Kategori</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="http://localhost/arlin_shop/">Kembali ke Home Users</a></li>
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
              <form action="<?php echo base_url(''); ?>dashboard/Add_Kategori/tambah" method="post" enctype="multipart/form-data">
                <div class="form-group">
                    <label>Id</label>
                      <input type="text" name="id" value="<?php echo set_value('id');?>" class="form-control" placeholder="Enter">
                </div>
                <div class="form-group">
                    <label>Nama Kategori</label>
                      <input type="text" name="nama_kategori" value="<?php echo set_value('nama_kategori');?>" class="form-control" placeholder="Enter">
                </div>
                
               
                </div>
                <input type="submit" value="Tambah" class="btn btn-primary btn-block">
              <?php echo form_close() ?>  
              </form>
      </div>
        </div>
          </div>
    </section>
