
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
          <li class="active">Data rute</li>
        </ol>
      </section>

      <!-- Main content -->
      <section class="content">
        <div class="row">
          <div class="col-xs-12">

            <div class="box">
              <div class="box-header">
                <h3 class="box-title">Data Rute</h3>     
                  <a href=<?php echo base_url("crud/tambah_rute/"); ?> class="btn btn-primary a-btn-slide-text" style="position:absolute;right:0;margin-right:10px; ">
                          <span class="glyphicon glyphicon-plus" aria-hidden="true"></span>
                          <span><strong>Add</strong></span>            
                        </a>
              </div>
              <!-- /.box-header -->
              <div class="box-body">
                <table id="data_rute" class="table table-bordered table-striped">
                  <thead>
                    <tr>
                      <th>No id</th>
                      <th>Depart at</th>
                      <th>Rute from</th>
                      <th>Rute to</th>
                      <th>Price</th>
                      <th>Transportation id</th>
                      <th>What will you do ?</th>
                    </tr>
                  </thead>
                  <tbody>
                    <?php  foreach ($tb_rute as $rute) { ?>
                    <tr>
                      <td><?php echo $rute->id; ?></td>
                      <td><?php echo $rute->depart_at; ?></td>
                      <td><?php echo $rute->rute_from; ?></td>
                      <td><?php echo $rute->rute_to; ?></td>
                      <td><?php echo $rute->price; ?></td>
                      <td><?php echo $rute->transportation_id; ?></td>
                      <td>
                        <a href=<?php echo base_url("crud/edit_rute/".$rute->id); ?> class="btn btn-primary a-btn-slide-text">
                          <span class="glyphicon glyphicon-edit" aria-hidden="true"></span>
                          <span><strong>Edit</strong></span>            
                        </a>
                        <a href=<?php echo base_url("crud/hapus_rute/".$rute->id); ?> class="btn btn-primary a-btn-slide-text">
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
<script>
  $(function () {
    $("#data_rute").DataTable({
       "paging": true,
      "lengthChange": true,
      "searching": true,
      "ordering": true,
      "info": true,
      "autoWidth": true
    });
  });
</script>
<?php $this->load->view('layout_admin/footer'); ?>