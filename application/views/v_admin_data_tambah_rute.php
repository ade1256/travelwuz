<?php  $this->load->view('layout_admin/header');?>
<!-- daterange picker -->
<link rel="stylesheet" href="<?php echo base_url(); ?>assets/adminlte/plugins/daterangepicker/daterangepicker.css">
<!-- bootstrap datepicker -->
<link rel="stylesheet" href="<?php echo base_url(); ?>assets/adminlte/plugins/datepicker/datepicker3.css">
<!-- Bootstrap time Picker -->
<link rel="stylesheet" href="<?php echo base_url(); ?>assets/adminlte/plugins/timepicker/bootstrap-timepicker.min.css">

<?php  $this->load->view('layout_admin/menu_samping');?>
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
	<!-- Content Header (Page header) -->
	<section class="content-header">
		<h1>
			Data Rute
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
						<h3 class="box-title">Tambah data</h3>
					</div>
					<!-- /.box-header -->
					<div class="box-body">
						<!-- form start -->
						<form  action=<?php echo base_url("crud/tambah_rute_aksi"); ?> method="post">
							<div class="box-body">
								<div class="col-xs-12">
									<div class="form-group">
										<label>Rute ID</label>									
											<input name="id" type="text" class="form-control">
										<!-- /.input group -->
									</div>
								</div>
								<div class="col-xs-6">
									<div class="form-group">
										<label>Depart at</label>

										<div class="input-group">
											<div class="input-group-addon">
												<i class="fa fa-calendar"></i>
											</div>
											<input name="tanggal" id="datemask3" type="text" class="form-control">
										</div>
										<!-- /.input group -->
									</div>

								</div>
								<div class="col-xs-6">
									<div class="form-group">
										<label>Jam</label>

										<div class="input-group">
											<input name="waktu" id="time" type="text" class="form-control">

											<div class="input-group-addon">
												<i class="fa fa-clock-o"></i>
											</div>
										</div>
										<!-- /.input group -->
									</div>
								</div>
								
								<div class="col-xs-12">
									<div class="form-group">
									<label>Rute from</label>
									<input name="rute_from" type="text" class="form-control" name="rute_from"/>
								</div>
								</div>
								<div class="col-xs-12">
									<div class="form-group">
									<label>Rute to</label>
									<input name="rute_to" type="text" class="form-control" name="rute_to"/>
								</div>
								</div>
								<div class="col-xs-12">
									<div class="form-group">
									<label>Price</label>
									<input name="price" type="text" class="form-control" name="price"/>
								</div>
								</div>
								<div class="col-xs-12">
									<div class="form-group">
									<label>Transportation id</label>
									<select class="form-control" name="transportation_id">
										<option value="-">-- Pilih Opsi --</option>
										<option  value="1">1 (Garuda Air)</option>
										<option value="2">2</option>
									</select>
								</div>
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
<!-- jQuery 2.2.3 -->
<script src="<?php echo base_url(); ?>assets/adminlte/plugins/jQuery/jquery-2.2.3.min.js"></script>
<!-- Bootstrap 3.3.6 -->
<script src="<?php echo base_url(); ?>assets/adminlte/bootstrap/js/bootstrap.min.js"></script>
<!-- Select2 -->
<script src="<?php echo base_url(); ?>assets/adminlte/plugins/select2/select2.full.min.js"></script>
<!-- InputMask -->
<script src="<?php echo base_url(); ?>assets/adminlte/plugins/input-mask/jquery.inputmask.js"></script>
<script src="<?php echo base_url(); ?>assets/adminlte/plugins/input-mask/jquery.inputmask.date.extensions.js"></script>
<script src="<?php echo base_url(); ?>assets/adminlte/plugins/input-mask/jquery.inputmask.extensions.js"></script>
<!-- date-range-picker -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.11.2/moment.min.js"></script>
<script src="<?php echo base_url(); ?>assets/adminlte/plugins/daterangepicker/daterangepicker.js"></script>
<!-- bootstrap datepicker -->
<script src="<?php echo base_url(); ?>assets/adminlte/plugins/datepicker/bootstrap-datepicker.js"></script>
<!-- bootstrap color picker -->
<script src="<?php echo base_url(); ?>assets/adminlte/plugins/colorpicker/bootstrap-colorpicker.min.js"></script>
<!-- bootstrap time picker -->
<script src="<?php echo base_url(); ?>assets/adminlte/plugins/timepicker/bootstrap-timepicker.min.js"></script>
<!-- SlimScroll 1.3.0 -->
<script src="<?php echo base_url(); ?>assets/adminlte/plugins/slimScroll/jquery.slimscroll.min.js"></script>
<!-- iCheck 1.0.1 -->
<script src="<?php echo base_url(); ?>assets/adminlte/plugins/iCheck/icheck.min.js"></script>
<!-- FastClick -->
<script src="<?php echo base_url(); ?>assets/adminlte/plugins/fastclick/fastclick.js"></script>
<!-- AdminLTE App -->
<script src="<?php echo base_url(); ?>assets/adminlte/dist/js/app.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="<?php echo base_url(); ?>assets/adminlte/dist/js/demo.js"></script>
<script>
	$(function () {
    //Initialize Select2 Elements
    $(".select2").select2();

    //Datemask dd/mm/yyyy
    $("#datemask").inputmask("dd/mm/yyyy", {"placeholder": "dd/mm/yyyy"});
    //Datemask2 mm/dd/yyyy
    $("#datemask2").inputmask("mm/dd/yyyy", {"placeholder": "mm/dd/yyyy"});
    $("#datemask3").inputmask("yyyy/mm/dd", {"placeholder": "yyyy/mm/dd"});


    $("#time").inputmask("hh:mm", {"placeholder": "hh:mm"});


    //Money Euro
    $("[data-mask]").inputmask();


});
</script>