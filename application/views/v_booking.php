<?php 


?>

<section class="section-80 section-md-120">
	<div class="shell">
		<div class="range text-lg-left">
			<div class="cell-lg-6">
				<form action="<?php echo base_url() ?>booking/insert_customer" method="POST" class="range text-left">
					<input name="key" value="<?php echo $_GET['key'] ?>" type="hidden">
					<?php for ($i = 1; $i <= $kursi['seat']; $i++) { ?>
					<div class="cell-lg-12 well bg-gray-lighter">
						<h4>Penumpang <?php echo $i ?></h4>
						<div class="cell-xs-12 offset-top-40">
							<div class="form-group">
								<label for="contact-name" class="form-label form-label-outside rd-input-label">Name</label>
								<input id="contact-name" type="text" name="name[]" data-constraints="@Required" class="form-control form-control-gray form-control-has-validation form-control-last-child">
							</div>
						</div>
						<div class="cell-xs-12 offset-top-20">
							<div class="form-group">
								<label for="contact-address" class="form-label form-label-outside rd-input-label">Address</label>
								<input id="contact-address" type="text" name="address[]" data-constraints="@Required" class="form-control form-control-gray form-control-has-validation form-control-last-child">
							</div>
						</div>
						<div class="cell-xs-6 offset-top-20">
							<div class="form-group">
								<label for="contact-phone" class="form-label form-label-outside rd-input-label">Phone</label>
								<input id="contact-phone" type="text" name="phone[]" data-constraints="@Required @Integer" class="form-control form-control-gray form-control-has-validation form-control-last-child">
							</div>
						</div>
						<div class="cell-xs-6 offset-top-20">
							<div class="form-group">
								<label for="contact-email" class="form-label form-label-outside rd-input-label">Email</label>
								<input id="contact-email" type="email" name="email[]" data-constraints="@Required" class="form-control form-control-gray form-control-has-validation form-control-last-child">
							</div>
						</div>
						<div class="cell-xs-12 offset-top-20">
							<div class="form-group">
								<label for="gender" class="form-group-label">Gender</label>
								<!--Select 2-->
								<select data-minimum-results-for-search="Infinity" class="form-control select-filter select2-hidden-accessible " name="gender[]" tabindex="-1" aria-hidden="true" id="gender">
									<option value=""></option>
									<option value="male">Male</option>
									<option value="female">Female</option>
								</select>
							</div>
						</div>
					</div>
					<?php } ?>
					<div class="cell-xs-12 offset-top-20 text-right">
						<button style="min-width: 140px;" type="submit" class="btn btn-primary btn-sm">Next</button>
					</div>
				</form>
			</div>

			<!-- <div class="shell text-lg-left"> -->
				<!-- <div class="range text-lg-left"> -->

					<div class="cell-lg-6 ">
						<div class="range text-lg-left">
							<div class="shell">
								<div class="cell-xs-12 text-lg-left well">
									<h4>Detail</h4>
									<div class="table-responsive offset-top-40">
										<table class="table table-striped text-left">
											<tr>
												<td>Airplane</td>
												<td>:</td>
												<td><!-- <?php echo $data_rute['description'];?> --><?php echo $data_rute['code'];?></td>
											</tr>
											<tr>
												<td>Depart at</td>
												<td>:</td>
												<td><?php echo date('g:i:s, d/m/Y', strtotime($data_rute['depart_at']));?></td>
											</tr>
											<tr>
												<td>Depart arrive</td>
												<td>:</td>
												<td><?php echo date('g:i:s, d/m/Y', strtotime($data_rute['depart_arrive']));?></td>
											</tr>
											<tr>
												<td>Duration</td>
												<td>:</td>
												<td>

													<?php 
													$waktu1 = new DateTime($data_rute['depart_at']);
													$waktu2 = new DateTime($data_rute['depart_arrive']);
													$lamanya = $waktu1->diff($waktu2);
													echo $lamanya->format('%d hari %H jam %i menit');
													?>
												</td>
											</tr>
											<tr>
												<td>Class</td>
												<td>:</td>
												<td><?php echo $data_rute['class'] ;?></td>
											</tr>
										</table>
									</div>
								</div>
								<div class="cell-xs-12 text-lg-left well">
									<h4>Summary</h4>
									<div class="table-responsive offset-top-40">
										<table class="table table-striped text-left">
											<tr>
												<td>Price</td>
												<td>:</td>
												<td><?php echo "Rp ".strrev(implode('.', str_split(strrev(strval($data_rute['price'])), 3)));?></td>
											</tr>
											<tr>
												<td>Seat</td>
												<td>:</td>
												<td><?php echo $kursi['seat'] ?></td>
											</tr>
											<tr>
												<td><h5>Total yang harus dibayar</h5></td>
												<td><h5>:</h5></td>
												<td><h5><?php 
												$total_harga=$data_rute['price']*$kursi['seat'];
												echo "Rp ".strrev(implode('.', str_split(strrev(strval($total_harga)), 3)));
												?></h5></td>
											</tr>
										</table>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>