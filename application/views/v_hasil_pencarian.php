<?php $this->load->view('layout/header'); ?>

<?php ?>


<section class="bg-image-06">
	<div class="breadcrumb-wrapper">
		<div class="shell context-dark section-30 section-lg-top-120">
			<h5>Hasil Pencarian</h5>
			<h1 class="offset-top-20 text-ubold">Daftar Penerbangan</h1>
			<ol class="breadcrumb">
				<li><a href="<?php echo base_url('home'); ?>">Home</a></li>
				<li>Daftar Penerbangan
				</li>
			</ol>
		</div>
	</div>
</section>
<section class="section-80 section-md-120 bg-gray-lighter">
	<div class="shell shell-wide">
		<div class="range text-lg-left">
			<div class="cell-lg-8">
				<div class="offset-top-40">
					<ul class="list-tickets">
						<?php foreach ($tb_rute as $r) { ?>
						<?php

						$depart_at = $r->depart_at;
						$tanggal = substr($depart_at, 10);
						$jam = substr($depart_at, 12);
						

						?>
						<li class="list-item">
							<div class="list-item-inner">
								<div class="list-item-main">
									<div class="list-item-top">
										<div class="list-item-logo"><img src="<?php echo base_url(); ?>assets/images/logo-18.png" alt=""></div>
										<div class="list-item-content">
											<div class="list-item-content-left">
												<div class="text-bold text-base"><?php echo $jam;?></div><span class="small reveal-block"><?php echo $r->rute_from;?></span>
											</div>
											<div class="list-item-content-line-wrapper small">
												<!-- <div class="list-item-content-line-top">6h 50m</div> -->
												<div class="list-item-content-line"></div>
												<!-- <div class="list-item-content-line-bottom text-info-dr">Direct</div> -->
											</div>
											<div class="list-item-content-right">
												<div class="text-bold text-base">7:45pm</div><span class="small reveal-block"><?php echo $r->rute_to;?></span>
											</div>
										</div>
									</div>
								
								</div>
								<div class="list-item-footer">
									<span class="small">Harga</span>
									<h5 class="text-bold list-item-price"><?php echo 'Rp '.$r->price;?></h5><a href="#" class="btn btn-primary btn-xs btn-no-shadow">Beli</a>
								</div>
							</div>
							<div class="small text-gray-light list-item-subtitle">Operated by American Airlines</div>
						<?php } ?>
						</ul>
					</div>
				</div>
				<div class="cell-lg-4">
					<form method="get" action="<?php echo base_url('cari_pesawat/search');?>" class="small">
						<div class="range">
                              <!-- <div class="cell-md-8">
                                <div class="form-group radio-inline-wrapper">
                                  <label class="radio-inline">
                                    <input name="input-group-radio" value="radio-1" type="radio" checked>Round Trip
                                  </label>
                                  <label class="radio-inline">
                                    <input name="input-group-radio" value="radio-2" type="radio">One Way
                                  </label>
                                  <label class="radio-inline">
                                    <input name="input-group-radio" value="radio-3" type="radio">Multi-city
                                  </label>
                                </div>
                            </div> -->
                              <!-- <div class="offset-top-6 offset-md-top-0 cell-md-4 text-md-right">
                                <div class="form-group">
                                  <label class="checkbox-inline">
                                    <input name="input-group-radio" value="checkbox-1" type="checkbox">Direct Flights Only
                                  </label>
                                </div>
                            </div> -->


                            <div class="range offset-top-15">
                            	<div class="cell-xs">
                            		<div class="form-group">
                            			<label class="form-group-label">From</label>
                            			<!--Select 2-->
                            			<select data-minimum-results-for-search="Infinity" class="form-control select-filter" name="rute_from">
                            				<option value="">-- Tidak memilih --</option>
                            				<?php foreach ($rute as $rut) { ?>
                            				<option value="<?php echo $rut->rute_from ?>"><?php echo $rut->rute_from ?></option>
                            				<?php } ?>
                            			</select>
                            		</div>
                                  <!-- <div class="form-group">
                                    <label class="checkbox-inline">
                                      <input name="input-group-radio" value="checkbox-1" type="checkbox">Add Nearby Airports
                                    </label>
                                </div> -->
                            </div>
                            <div class="cell-xs offset-top-15 offset-xs-top-0">
                            	<div class="form-group">
                            		<label class="form-group-label">To</label>
                            		<!--Select 2-->
                            		<select data-minimum-results-for-search="Infinity" class="form-control select-filter" name="rute_to">
                            			<option value="">-- Tidak memilih --</option>
                            			<?php foreach ($rute as $rut) { ?>
                            			<option value="<?php echo $rut->rute_to ?>"><?php echo $rut->rute_to ?></option>
                            			<?php } ?>
                            		</select>
                            	</div>
                                 <!--  <div class="form-group">
                                    <label class="checkbox-inline">
                                      <input name="input-group-radio" value="checkbox-2" type="checkbox">Add Nearby Airports
                                    </label>
                                </div> -->
                            </div>
                               <!--  <div class="cell-md-1-5 offset-top-10 offset-md-top-0">
                                  <div class="form-group">
                                    <label class="form-group-label">Cabin Class</label>
                            
                                    <select data-minimum-results-for-search="Infinity" class="form-control select-filter">
                                      <option>Economy</option>
                                      <option value="2">Demo Item 1-1</option>
                                      <option value="3">Demo Item 1-2</option>
                                      <option value="4">Demo Item 1-2</option>
                                      <option value="5">Demo Item 2-1</option>
                                      <option value="6">Demo Item 2-2</option>
                                      <option value="7">Demo Item 2-3</option>
                                    </select>
                                  </div>
                              </div> -->
                          </div>
                          <div class="range offset-top-15">
                          	<div class="cell-sm-6">
                          		<div class="form-group">
                          			<label class="form-group-label">Departure</label>
                          			<input type="text" data-time-picker="date" data-constraints="@Required" class="form-control" name="depart_at">
                          		</div>
                          	</div>
                               <!--  <div class="cell-xs offset-top-15 offset-xs-top-0">
                                  <div class="form-group">
                                    <label class="form-group-label">Return</label>
                                    <input type="text" data-time-picker="date" data-constraints="@Required" name="return" class="form-control">
                                  </div>
                              </div> -->
                                <!-- <div class="cell-sm-6 cell-lg-4 offset-top-15 offset-sm-top-0">
                                  <div class="range">
                                    <div class="cell-xs-6">
                                      <div class="form-group">
                                        <label class="form-group-label">Adults (16+)</label>
                                        <input type="number" min="0" value="2" class="form-control">
                                      </div>
                                    </div>
                                    <div class="cell-xs-6 offset-top-15 offset-xs-top-0">
                                      <div class="form-group">
                                        <label class="form-group-label">Children</label>
                                        <input type="number" min="0" value="0" class="form-control">
                                      </div>
                                    </div>
                                  </div>
                              </div> -->
                              <div class="cell-lg-clear-flex cell-sm-bottom cell-lg text-center text-lg-right offset-top-15 offset-lg-top-0">
                              	<button class="btn btn-primary btn-sm btn-naira btn-naira-up"><span class="icon fa-search"></span><span>Search Flight</span></button>
                              </div>
                          </div>
                      </div>
                  </form>
              </div>
          </div>


      </div>

  </section>

  <?php $this->load->view('layout/footer'); ?>