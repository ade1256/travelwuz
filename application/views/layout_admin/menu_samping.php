<aside class="main-sidebar">
  <!-- sidebar: style can be found in sidebar.less -->
  <section class="sidebar">
    <!-- Sidebar user panel -->
    <div class="user-panel">
      <div class="pull-left image">
        <img src="<?php echo base_url(); ?>assets/adminlte/dist/img/user2-160x160.jpg" class="img-circle" alt="User Image">
      </div>
      <div class="pull-left info">
        <p><?php echo $this->session->userdata('fullname'); ?></p>
        <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
      </div>
    </div>
    <!-- search form -->
    <form action="#" method="get" class="sidebar-form">
      <div class="input-group">
        <input type="text" name="q" class="form-control" placeholder="Search...">
        <span class="input-group-btn">
          <button type="submit" name="search" id="search-btn" class="btn btn-flat"><i class="fa fa-search"></i>
          </button>
        </span>
      </div>
    </form>
    <!-- /.search form -->
    <!-- sidebar menu: : style can be found in sidebar.less -->
    <?php 
    $halaman = apache_getenv("HTTP_HOST") . apache_getenv("REQUEST_URI");
    $admin = 'localhost/travelwuz/admin';
    $data_user = 'localhost/travelwuz/admin/data_user';
    $data_customer = 'localhost/travelwuz/admin/data_customer';
    $data_rute = 'localhost/travelwuz/admin/data_rute';
    $data_transportation = 'localhost/travelwuz/admin/data_transportation';
    $data_transportation_type = 'localhost/travelwuz/admin/data_transportation_type';
    $data_reservation = 'localhost/travelwuz/admin/data_reservation';
    ?>
    <ul class="sidebar-menu">
      <li class="header">MAIN NAVIGATION</li>
      <li <?php if ($halaman==$admin) {echo "class='active'"; } ?> ><a href=<?php echo base_url("admin"); ?>><i class="fa fa-circle-o"></i> Overview</a></li>
      <li <?php if ($halaman==$data_user) {echo "class='active'"; } ?> ><a href=<?php echo base_url("admin/data_user"); ?>><i class="fa fa-table"></i> Data users</a></li>   
      <li <?php if ($halaman==$data_customer) {echo "class='active'"; } ?> ><a href=<?php echo base_url("admin/data_customer"); ?>><i class="fa fa-table"></i> Data customers</a></li>
      <li <?php if ($halaman==$data_rute) {echo "class='active'"; } ?> ><a href=<?php echo base_url("admin/data_rute"); ?>><i class="fa fa-table"></i> Data rute</a></li>
      <li <?php if ($halaman==$data_transportation) {echo "class='active'"; } ?> ><a href=<?php echo base_url("admin/data_transportation"); ?>><i class="fa fa-table"></i> Data transportation</a></li>
      <li <?php if ($halaman==$data_transportation_type) {echo "class='active'"; } ?> ><a href=<?php echo base_url("admin/data_transportation_type"); ?>><i class="fa fa-table"></i> Data transportation type</a></li>
      <li <?php if ($halaman==$data_reservation) {echo "class='active'"; } ?> ><a href=<?php echo base_url("admin/data_reservation"); ?>><i class="fa fa-table"></i> Data reservation</a></li>
    </ul>
  </section>
  <!-- /.sidebar -->
</aside>
