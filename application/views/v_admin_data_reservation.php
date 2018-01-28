
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
          <li class="active">Data transportation</li>
        </ol>
      </section>

      <!-- Main content -->
      <section class="content">
        <div class="row">
          <div class="col-xs-12">

            <div class="box">
              <div class="box-header">
                <h3 class="box-title">Data Reservation</h3>     
                  <a href=<?php echo base_url("crud/tambah_reservation/"); ?> class="btn btn-primary a-btn-slide-text" style="position:absolute;right:0;margin-right:10px; ">
                          <span class="glyphicon glyphicon-plus" aria-hidden="true"></span>
                          <span><strong>Add</strong></span>            
                        </a>
              </div>
              <!-- /.box-header -->
              <div class="box-body">
                <table id="data_reservation" class="table table-bordered table-striped">
                  <thead>
                    <tr>
                      <th>No id</th>
                      <th>Code</th>
                      <th>at</th>
                      <th>date</th>
                      <th>customer id</th>
                      <th>seat code</th>
                      <th>rute id</th>
                      <th>depart at</th>
                      <th>price</th>
                      <th>user id</th>
                      <th>What will you do ?</th>
                    </tr>
                  </thead>
                  <tbody>
                    <?php  foreach ($tb_reservation as $reservation) { ?>
                    <tr>
                      <td><?php echo $reservation->id; ?></td>
                      <td><?php echo $reservation->reservation_code; ?></td>
                      <td><?php echo $reservation->reservation_at; ?></td>
                      <td><?php echo $reservation->reservation_date; ?></td>
                      <td><?php echo $reservation->customer_id; ?></td>
                      <td><?php echo $reservation->seat_code; ?></td>
                      <td><?php echo $reservation->rute_id; ?></td>
                      <td><?php echo $reservation->depart_at; ?></td>
                      <td><?php echo $reservation->price; ?></td>
                      <td><?php echo $reservation->user_id; ?></td>
                   
                      <td>
                        <a href=<?php echo base_url("crud/edit_reservation/".$reservation->id); ?> class="btn btn-primary a-btn-slide-text">
                          <span class="glyphicon glyphicon-edit" aria-hidden="true"></span>
                          <span><strong>Edit</strong></span>            
                        </a>
                        <a href=<?php echo base_url("crud/hapus_reservation/".$reservation->id); ?> class="btn btn-primary a-btn-slide-text">
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
    $("#data_reservation").DataTable({
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