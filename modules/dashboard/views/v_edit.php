
    <div class="content-wrapper">

      <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Product</h1>
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
        <?php foreach($tbl_produk as $u){ ?>
              <form action="<?php echo base_url(''); ?>dashboard/upload" method="post" enctype="multipart/form-data">
                <div class="form-group">
                    <label>Id Product</label>
                      <input type="text" name="id_produk" value="<?php echo $u->id_produk;?>" class="form-control" placeholder="Enter">
                </div>
                <div class="form-group">
                    <label>Nama Product</label>
                      <input type="text" name="nama_produk" value="<?php echo $u->nama_produk;?>" class="form-control" placeholder="Enter">
                </div>
                <div class="form-group">
                    <label>Harga</label>
                      <input type="text" name="harga" value="<?php echo $u->harga;?>" class="form-control" placeholder="Enter">
                </div>
                <div class="form-group">
                    <label>Stok</label>
                      <input type="text" name="stok" value="<?php echo $u->stok;?>" class="form-control" placeholder="Enter">
                </div>
                <div class="form-group">
                    <label>Kategori</label>
                      <input type="text" name="kategori" value="<?php echo $u->kategori;?>" class="form-control" placeholder="Enter">
                </div>
                <div class="form-group">
                    <label>Deskripsi</label>
                    <textarea type="text" class="form-control" rows="3" placeholder="Enter ..." name="deskripsi"><?php echo $u->deskripsi;?></textarea>
                  </div>
                  <img src="<?php echo base_url('assets/images/'.$u->gambar.''); ?>"height="50px" width="50px" name='gambar'>
                  <input type="hidden" name="gambar" value="<?php echo $u->gambar; ?>" />
                <div class="form-group">
                <label for="exampleInputFile">Change Images</label>
                <div class="input-group">
                <input type="file" name="new_gambar">
                </div>
                </div>
                <input type="submit" value="Update" class="btn btn-primary btn-block">
              </form>
              <?php } ?>
              </div>
            </section>
            </div>

    </div>
