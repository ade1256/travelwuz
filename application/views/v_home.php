
 <!-- Swiper-->
 <div class="swiper-slide-wrapper">
  <div data-simulate-touch="false" data-autoplay="3500" data-slide-effect="fade" class="swiper-container swiper-slider" style="height: 75vh;">
    <div class="swiper-wrapper">
      <div data-slide-bg="<?php echo base_url(); ?>assets/images/header-pesawat.png" class="swiper-slide"></div>
      <div data-slide-bg="<?php echo base_url(); ?>assets/images/header-pesawat2.png" class="swiper-slide"></div>
    </div>
  </div>
  <div class="swiper-onSlider">
    <div class="shell shell-wide section-70 section-xl-top-200 section-xl-bottom-220">
      <div class="range range-xs-center">
        <div class="cell-xl-6 cell-lg-9 cell-md-11">
          <div data-type="horizontal" class="responsive-tabs text-md-left nav-custom-dark view-animate fadeInUpSmall">
            <!-- Responsive-tabs-->
            <ul class="nav-custom-tabs resp-tabs-list">
              <li class="nav-item"><span class="icon mdi mdi-airplane"></span><span>Flights</span></li>
                        <!-- <li class="nav-item"><span class="icon mdi mdi-hotel"></span><span>Hotels</span></li>
                          <li class="nav-item"><span class="icon mdi mdi-car"></span><span>Car Hire</span></li> -->
                        </ul>
                        <div class="resp-tabs-container nav-custom-tab nav-custom-wide">
                          <div>
                            <form method="get" action="<?php echo base_url('cari_pesawat/search');?>" class="small">
                              <div class="range">

                                <div class="range offset-top-15">
                                  <div class="cell-xs">
                                    <div class="form-group">
                                      <label class="form-group-label">From</label>
                                      <!--Select 2-->
                                      <select data-minimum-results-for-search="Infinity" class="form-control select-filter" name="rute_from" required="">
                                       <option value="">-- Pilih asal --</option>
                                       <?php foreach ($rute_from as $asal) { ?>
                                       <option value="<?php echo $asal->rute_from ?>"><?php echo $asal->rute_from ?></option>
                                       <?php } ?>
                                     </select>
                                   </div>
                                   
                                 </div>

                                 <div class="cell-xs offset-top-15 offset-xs-top-0">
                                  <div class="form-group">
                                    <label class="form-group-label">To</label>
                                    <!--Select 2-->
                                    <select data-minimum-results-for-search="Infinity" class="form-control select-filter" name="rute_to" required="">
                                      <option value="">-- PIlih tujuan --</option>
                                      <?php foreach ($rute_to as $tujuan) { ?>
                                      <option value="<?php echo $tujuan->rute_to ?>"><?php echo $tujuan->rute_to ?></option>
                                      <?php } ?>
                                    </select>
                                  </div>
                                </div>
                                <div class="cell-md-1-5 offset-top-10 offset-md-top-0">
                                 <div class="form-group">
                                  <label class="form-group-label">Class</label>
                                  <!--Select 2-->
                                  <select data-minimum-results-for-search="Infinity" class="form-control select-filter" name="class">
                                    <option value="">-- PIlih class --</option>
                                    <?php foreach ($class as $c) { ?>
                                    <option value="<?php echo $c->class ?>"><?php echo $c->class ?></option>
                                    <?php } ?>
                                  </select>
                                </div>
                              </div>
                              <div class="range offset-top-15">
                                <div class="cell-xs-3">
                                  <div class="form-group">
                                    <label class="form-group-label">Departure</label>
                                    <input type="text" data-time-picker="date" data-constraints="@Required" class="form-control" name="depart_at" placeholder="Pilih tanggal" required="">
                                  </div>
                                </div>
                                <div class="cell-xs-3">
                                <div class="form-group">
                                  <label class="form-group-label">Seat</label>
                                  <input type="number" min="0" value="1" name="seat" class="form-control">
                                </div>
                              </div>

                                <div class="cell-lg-clear-flex cell-sm-bottom cell-lg text-center text-lg-right offset-top-15 offset-lg-top-0">
                                  <button class="btn btn-primary btn-sm btn-naira btn-naira-up"><span class="icon fa-search"></span><span>Search Flight</span></button>
                                </div>
                              </div>
                            </div>
                          </form>
                        </div>

                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
       
            