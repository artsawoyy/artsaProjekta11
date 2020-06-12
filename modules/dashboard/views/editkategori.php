    <div class="content-wrapper">

      <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Product</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>
        <section class="content">
          <div class="container-fluid">
        <?php foreach($tbl_kategori as $u){ ?>
              <form action="<?php echo base_url(''); ?>dashboard/updatekategori" method="post" enctype="multipart/form-data">
                <div class="form-group">
                    <label>Id</label>
                      <input type="text" name="id" value="<?php echo $u->id;?>" class="form-control" placeholder="Enter">
                </div>
                <div class="form-group">
                    <label>Nama Kategori</label>
                      <input type="text" name="nama_kategori" value="<?php echo $u->nama_kategori;?>" class="form-control" placeholder="Enter">
                </div>
                
                  
                <input type="submit" value="Update" class="btn btn-primary btn-block">
              </form>
              <?php } ?>
              </div>
            </section>
            </div>

    </div>
