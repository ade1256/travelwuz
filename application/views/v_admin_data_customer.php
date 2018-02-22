
   <?php  $this->load->view('layout_admin/header');?>
    <!-- Left side column. contains the logo and sidebar -->
   <?php  $this->load->view('layout_admin/menu_samping');?>

    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
      <!-- Content Header (Page header) -->
      <section class="content-header">
        <h1>
          Data Tables
          <small>advanced tables</small>
        </h1>
        <ol class="breadcrumb">
          <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
          <li><a href="#">Tables</a></li>
          <li class="active">Data tables</li>
        </ol>
      </section>

      <!-- Main content -->
      <section class="content">
        <div class="row">
          <div class="col-xs-12">

            <div class="box">
              <div class="box-header">
                <h3 class="box-title">Data Customer</h3>     
                  <a href=<?php echo base_url("crud/tambah_customer/"); ?> class="btn btn-primary a-btn-slide-text" style="position:absolute;right:0;margin-right:10px; ">
                          <span class="glyphicon glyphicon-plus" aria-hidden="true"></span>
                          <span><strong>Add</strong></span>            
                        </a>
              </div>
              <!-- /.box-header -->
              <div class="box-body">
                <table id="data_customer" class="table table-bordered table-striped">
                  <thead>
                    <tr>
                      <th>No id</th>
                      <th>Name</th>
                      <th>Address</th>
                      <th>Phone</th>
                      <th>Email</th>
                      <th>Gender</th>
                      <th>Action</th>
                    </tr>
                  </thead>
                  <tbody>
                    <?php  foreach ($tb_customer as $c) { ?>
                    <tr>
                      <td><?php echo $c->id; ?></td>
                      <td><?php echo $c->name; ?></td>
                      <td><?php echo $c->address; ?></td>
                      <td><?php echo $c->phone; ?></td>
                      <td><?php echo $c->email; ?></td>
                      <td><?php echo $c->gender; ?></td>
                      <td>
                        <a href=<?php echo base_url("crud/edit_customer/".$c->id); ?> class="btn btn-primary a-btn-slide-text">
                          <span class="glyphicon glyphicon-edit" aria-hidden="true"></span>
                          <span><strong>Edit</strong></span>            
                        </a>
                        <a href=<?php echo base_url("crud/hapus_customer/".$c->id); ?> class="btn btn-primary a-btn-slide-text">
                         <span class="glyphicon glyphicon-remove" aria-hidden="true"></span>
                         <span><strong>Delete</strong></span>            
                       </a>
                     </td>
                   </tr>
                   <?php } ?>
                 </tfoot>
               </table>
             </div>
             <!-- /.box-body -->
           </div>
           <!-- /.box -->
         </div>
         <!-- /.col -->
       </div>
       <!-- /.row -->
     </section>
     <!-- /.content -->
   </div>
   <!-- /.content-wrapper -->
<?php  $this->load->view('layout_admin/footer');?>
  <script>
  $(function () {
    $("#data_customer").DataTable({
       "paging": true,
      "lengthChange": true,
      "searching": true,
      "ordering": true,
      "info": true,
      "autoWidth": true
    });
  });
</script>
