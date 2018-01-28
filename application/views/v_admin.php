<?php  $this->load->view('layout_admin/header');?>
<?php  $this->load->view('layout_admin/menu_samping');?>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Dashboard
        <small>Control panel</small>
      </h1>
      <ol class="breadcrumb">
        <li class="active"><a href="<?php echo base_url('admin'); ?>"><i class="fa fa-dashboard"></i> Home</a></li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
      <!-- Small boxes (Stat box) -->
      <div class="row">
        <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-purple">
            <div class="inner">
              <h3><?php echo $this->db->count_all('tb_reservation')?></h3>

              <p>Total Reservation</p>
            </div>
            <div class="icon">
              <i class="ion ion-plane"></i>
            </div>
            <a href="<?php echo base_url('admin/data_reservation'); ?>" class="small-box-footer">Lihat selengkapnya <i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>
        <!-- ./col -->
        <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-purple">
            <div class="inner">
              <h3><?php echo $this->db->count_all('tb_customer')?></h3>

              <p>Total Customer</p>
            </div>
            <div class="icon">
              <i class="ion ion-person-stalker"></i>
            </div>
            <a href="<?php echo base_url('admin/data_customer'); ?>" class="small-box-footer">Lihat selengkapnya <i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>
        <!-- ./col -->
        <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-purple">
            <div class="inner">
              <h3><?php echo  $this->db->count_all('tb_user')?></h3>

              <p>Total User</p>
            </div>
            <div class="icon">
              <i class="ion ion-person"></i>
            </div>
            <a href="<?php echo base_url('admin/data_user'); ?>" class="small-box-footer">Lihat selengkapnya <i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>
        <!-- ./col -->
        <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-purple">
            <div class="inner">
              <h3><?php echo  $this->db->count_all('tb_transportation')?></h3>

              <p>Data Transportation</p>
            </div>
            <div class="icon">
              <i class="ion ion-android-bus"></i>
            </div>
           <a href="<?php echo base_url('admin/data_transportation'); ?>" class="small-box-footer">Lihat selengkapnya <i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>
        <!-- ./col -->
      </div>
      <!-- /.row -->

      <!-- start row -->
      <div class="row">
        <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-purple">
            <div class="inner">
              <h3><?php echo $this->db->count_all('tb_rute')?></h3>

              <p>Data Rute</p>
            </div>
            <div class="icon">
              <i class="ion ion-arrow-swap"></i>
            </div>
            <a href="<?php echo base_url('admin/data_rute'); ?>" class="small-box-footer">Lihat selengkapnya <i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>
      </div>
      <!-- /.row -->
    </section>
    <!-- /.content -->
    </div>
   <!-- /.content-wrapper -->


<?php $this->load->view('layout_admin/footer'); ?>

