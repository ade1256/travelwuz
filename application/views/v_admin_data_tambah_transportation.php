<?php  $this->load->view('layout_admin/header');?>
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
      <div class="col-xs-6">

        <div class="box">
          <div class="box-header">
            <h3 class="box-title">Edit data</h3>
          </div>
          <!-- /.box-header -->
          <div class="box-body">
            <!-- form start -->
              <form  action=<?php echo base_url("crud/tambah_transportation_aksi"); ?> method="post">
                <div class="box-body">
                  <div class="form-group">
                    <label>id</label>
                    <input type="text" class="form-control" name="id" />
                  </div>
                  <div class="form-group">
                    <label>Code</label>
                    <input type="text" class="form-control" name="code" />
                  </div>
                  <div class="form-group">
                    <label>Seat Quantity</label>
                    <input type="text" class="form-control" name="seat_qty" />
                  </div>
                  <div class="form-group">
                    <label>Type id</label>
                    <select class="form-control" name="transportation_type_id">
                      <option value="-">-- Pilih Opsi --</option>
                      <?php foreach ($transportation_type_id as $ttid) { ?>
                      <option value="<?php echo $ttid->id ?>"><?php echo $ttid->id; ?></option>
                      <?php } ?>
                    </select>
                  </div>
                </div>
                <!-- /.box-body -->
                <div class="box-footer">
                  <input type="submit" value="submit" class="btn btn-primary"/>
                </div>
              </form>
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