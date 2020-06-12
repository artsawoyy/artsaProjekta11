<!DOCTYPE html>
<html>
<head><?php $this->load->view("dashboard/_partials/head.php") ?> </head>
<body class="hold-transition sidebar-mini">
	<?php echo ucfirst($this->session->userdata('username')); ?>

	<div class="wrapper">
  <!-- Navbar -->
  <nav ><?php $this->load->view("dashboard/_partials/navbar.php") ?></nav>


	<aside><?php $this->load->view("dashboard/_partials/sidebar.php") ?></aside>

     <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Data Member</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="http://localhost/arlin_shop/dashboard/">Home Admin</a></li>
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
          <h3 class="card-title">Member</h3>

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
                          Id Member
                      </th>
                      <th style="width: 15%" class="text-center">
                          Nama Member
                      </th>
                      <th>
                          Username
                      </th>
                      <th >
                        Role
                      </th>
                      <th style="width: 10%">
                      	Email
                      </th>
                      <th style="width: 15%" >
                          Telp
                      </th>
                      <th style="width: 20%">
                        Alamat
                      </th>
                  </tr>
              </thead>

              <tbody>
              	<?php 
              		$no = 1;
              		foreach($member as $u){
              	 ?>
              	 <tr>
              	 	<td><?php echo $no++ ?></td>
              	 	<td><?php echo $u['nama_member'] ?></td>
              	 	<td><?php echo $u['username'] ?></td>
                  <td><?php echo $u['role'] ?></td>
              	 	<td><?php echo $u['email'] ?></td>
                  <td><?php echo $u['telp'] ?></td>
                  <td><?php echo $u['alamat'] ?></td>
                  <td class="project-actions text-right">
                    <div class="btn btn-outline-primary btn-sm">
                    <i class="fas fa-folder">
                          <?php echo anchor('dashboard/hapusmember/'.$u['id_member'],'Hapus'); ?>
                    </i>
                    </div>
					        </td>
              	 </tr>
              </tbody>
          <?php } ?>
              </table>


<script src="<?php echo base_url()?>assets/plugins/jquery/jquery.min.js"></script>
<script src="<?php echo base_url()?>assets/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="<?php echo base_url()?>assets/plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>
<script src="<?php echo base_url()?>assets/dist/js/adminlte.js"></script>

</body>
</html>