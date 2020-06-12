     <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Product</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="<?php echo base_url()?>login/logout">LogOut Admin</a></li>
           </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>
    

    <!-- Main content -->
    <section class="content">

      <!-- Default box -->
      <div class="card">
        <div class="card-header">
          <h3 class="card-title">Product</h3>

          <div class="card-tools">
            <button type="button" class="btn btn-tool" data-card-widget="collapse" data-toggle="tooltip" title="Collapse">
              <i class="fas fa-minus"></i></button>
            <button type="button" class="btn btn-tool" data-card-widget="remove" data-toggle="tooltip" title="Remove">
              <i class="fas fa-times"></i></button>
          </div>
        </div>
        <div class="card-body p-0">
          <table class="table table-striped projects">
              <thead>
                  <tr>
                      <th style="width: 1%">
                          #
                      </th>
                      <th class="text-center">
                          Gambar
                      </th>
                      <th style="width: 20%">
                          Product Name
                      </th>
                      <th style="width: 10%">
                      	Kategori
                      </th>
                      <th>
                          Price
                      </th>
                      <th style="width: 20%">
                          Sisa Stok 
                      </th>
                      <th style="width: 20%" >
                          Desc
                      </th>
                      <th style="width: 20%">
                      </th>
                  </tr>
              </thead>

              <tbody>
              	<?php 
              		$no = 1;
              		foreach($tbl_produk as $u){
              	 ?>
              	 <tr>
              	 	<td><?php echo $no++ ?></td>
              	 	<td><img src="<?php echo base_url('assets/images/'.$u->gambar.''); ?>"height="50px" width="50px"></td>
              	 	<td><?php echo $u->nama_produk?></td>
              	 	<td><?php echo $u->kategori ?></td>
              	 	<td><?php echo $u->harga ?></td>
                  <td><?php echo $u->stok ?></td>
              	 	<td><?php echo $u->deskripsi ?></td>
              	 	<td class="project-actions text-right">
              	 		<div class="btn btn-outline-primary btn-sm">
              	 		<i class="fas fa-folder">
			      		<?php echo anchor(base_url('dashboard/edit/'.$u->id_produk),'Edit'); ?>
                        </i>
                        </div>
                        <div class="btn btn-outline-primary btn-sm">
              	 		<i class="fas fa-folder">
			      		<?php echo anchor('dashboard/hapus/'.$u->id_produk,'Hapus'); ?>
                        </i>
                        </div>
					</td>
              	 </tr>
              </tbody>
          <?php } ?>
              </table>


