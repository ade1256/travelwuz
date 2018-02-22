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
						<?php foreach ($tb_rute as $r) {

							$full = $r->depart_at;
							$jam =substr($full, 11);
							$tanggal = substr($full,0,10);
							$full_arrive = $r->depart_arrive;
							$jam_arrive =substr($full_arrive, 11);
							$tanggal_arrive = substr($full_arrive,0,10);

							?>
							<!-- form start -->
							<form  action=<?php echo base_url("crud/update_rute"); ?> method="post">
								<div class="box-body">
									<div class="col-xs-6">
										<div class="form-group">
											<label>Depart at</label>

											<div class="input-group">
												<div class="input-group-addon">
													<i class="fa fa-calendar"></i>
												</div>
												<input type="hidden" class="form-control" name="id" value=<?php echo $r->id;?>  />
												<?php
												$posisitanggal = explode("-",$tanggal);
												$tanggal = "$posisitanggal[2]/$posisitanggal[1]/$posisitanggal[0]";
												?>
												<input name="tanggal" data-inputmask="'alias': 'dd/mm/yyyy'" data-mask="" type="text" class="form-control" value=<?php echo $tanggal;?> />
												
											</div>
											<!-- /.input group -->
										</div>

									</div>
									<div class="col-xs-6">
										<div class="form-group">
											<label>Jam</label>

											<div class="input-group">
												<input name="waktu" data-inputmask="'alias': 'hh:mm'" data-mask="" type="text" class="form-control" value=<?php echo $jam;?> />

												<div class="input-group-addon">
													<i class="fa fa-clock-o"></i>
												</div>
											</div>
											<!-- /.input group -->
										</div>
									</div>

									<div class="col-xs-6">
										<div class="form-group">
											<label>Depart arrive</label>

											<div class="input-group">
												<div class="input-group-addon">
													<i class="fa fa-calendar"></i>
												</div>
												<?php
												$posisitanggal2 = explode("-",$tanggal_arrive);
												$tanggal_arrive = "$posisitanggal2[2]/$posisitanggal2[1]/$posisitanggal2[0]";
												?>
												<input name="tanggal_arrive" data-inputmask="'alias': 'dd/mm/yyyy'" data-mask="" type="text" class="form-control" value=<?php echo $tanggal_arrive;?> />
												
											</div>
											<!-- /.input group -->
										</div>

									</div>
									<div class="col-xs-6">
										<div class="form-group">
											<label>Jam</label>

											<div class="input-group">
												<input name="waktu_arrive" data-inputmask="'alias': 'hh:mm'" data-mask="" type="text" class="form-control" value=<?php echo $jam_arrive;?> />

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
											<input name="rute_from" type="text" class="form-control" name="rute_from" value=<?php echo $r->rute_from;?> />
										</div>
									</div>
									<div class="col-xs-12">
										<div class="form-group">
											<label>Rute to</label>
											<input name="rute_to" type="text" class="form-control" name="rute_to" value=<?php echo $r->rute_to;?> />
										</div>
									</div>
									<div class="col-xs-12">
										<div class="form-group">
											<label>Price</label>
											<input name="price" type="text" class="form-control" name="price" value=<?php echo $r->price;?> />
											
										</div>
									</div>
									<div class="col-xs-12">
										<div class="form-group">
											<label>Class</label>
											<select class="form-control" name="class">
												<option value="-">-- Pilih Opsi --</option>
												<?php foreach ($class as $k) { ?>
												<option <?php if($k->class===$r->class){echo "selected";} ?> value="<?php echo $k->class ?>"><?php echo $k->class; ?></option>
												<?php } ?>
											</select>
										</div>
									</div>
									<div class="col-xs-12">
										<div class="form-group">
											<label>Transportation id</label>
											<select class="form-control" name="transportation_id">
												<option value="-">-- Pilih Opsi --</option>
												<?php foreach ($tb_transportation as $t) { ?>
												<option <?php if($t->id===$r->transportation_id){echo "selected";} ?> value="<?php echo $t->id ?>"><?php echo $t->id; ?> - <?php echo $t->description; ?></option>
												<?php } ?>
											</select>
										</div>
									</div>
								</div>
								<!-- /.box-body -->
								<div class="box-footer">
									<input type="submit" value="submit" class="btn btn-primary"/>
								</div>
							</form>
							<?php } ?>
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