<?php $this->load->view('layout/header'); ?>




<section class="bg-image-06">
	<div class="breadcrumb-wrapper">
		<div class="shell context-dark section-30 section-lg-top-120">
			<h5>Hasil Pencarian</h5>
      <h5 class="offset-top-20 text-ubold"><?php echo $this->input->get('rute_from');?> ke <?php echo $this->input->get('rute_to');?></h5>
      <h5><?php echo $this->input->get('seat');?> Penumpang - <?php echo $this->input->get('class');?></h5>
      <h5><?php echo $this->input->get('depart_at');?></h5>
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
        <?php 
if ($this->session->userdata('status')!='login') {
           echo "<b>Perhatian !</b> Anda belum login hanya bisa melihat saja tidak bisa klik booking, Jika anda klik booking maka anda akan dialihkan ke halaman login." ;
        }
        ?>
				<div class="offset-top-40">
					<ul class="list-tickets">
						<?php foreach ($tb_rute as $r) { ?>
            <?php

            $depart_at = $r->depart_at;
            $tanggal = substr($depart_at, 0,10);
            $tanggalformat = explode("-", $tanggal);
            $tanggal ="$tanggalformat[2]-$tanggalformat[1]-$tanggalformat[0]";
            $jam = substr($depart_at, 11);
            $depart_arrive = $r->depart_arrive;
            $tanggal_arrive = substr($depart_arrive, 0,10);
            $tanggal_arriveformat = explode("-", $tanggal_arrive);
            $tanggal_arrive ="$tanggal_arriveformat[2]-$tanggal_arriveformat[1]-$tanggal_arriveformat[0]";
            $jam_arrive = substr($depart_arrive, 11);

            ?>
            <li class="list-item">
             <div class="list-item-inner">
              <div class="list-item-main">
               <div class="list-item-top">
                <div class="list-item-logo"><img src="<?php echo base_url(); ?>assets/images/logo-<?php echo $r->transportation_id ?>.png" alt=""></div>
                <div class="list-item-content">
                 <div class="list-item-content-left">
                  <div class="text-bold text-base"><?php echo $jam;?></div>
                  <span class="small reveal-block"><?php echo $r->rute_from;?></span>
                  <span class="small reveal-block"><?php echo $tanggal;?></span>
                </div>
                <div class="list-item-content-line-wrapper small">

                  <?php 
                  $waktu1 = new DateTime($r->depart_at);
                  $waktu2 = new DateTime($r->depart_arrive);
                  $lamanya = $waktu1->diff($waktu2);
                  ?>
                  <div class="list-item-content-line-top"><?php echo $lamanya->format('%d hari %h jam %i menit');?></div>
                  <div class="list-item-content-line"></div>
                  <!-- <div class="list-item-content-line-bottom text-info-dr">Direct</div> -->
                </div>
                <div class="list-item-content-right">
                  <div class="text-bold text-base"><?php echo $jam_arrive;?></div>
                  <span class="small reveal-block"><?php echo $r->rute_to;?></span>
                  <span class="small reveal-block"><?php echo $tanggal_arrive;?></span>
                </div>
              </div>
            </div>

          </div>
          <div class="list-item-footer">
           <span class="small">Harga</span>
           <h5 class="text-bold list-item-price">
             <?php 
             echo "Rp " . strrev(implode('.', str_split(strrev(strval($r->price)), 3)));
             ?>
           </h5>
           <!-- <a href="#" class="btn btn-primary btn-xs btn-no-shadow">Beli</a> -->
           <form action="<?php echo base_url() ?>cari_pesawat/mau_booking" method="POST">
            <input name="rute_id" value="<?php echo $r->id ?>" type="hidden">
            <input name="seat" value="<?php echo $this->input->get('seat') ?>" type="hidden">
              <button class="btn btn-primary btn-xs btn-no-shadow">Booking</button>
          </form>
        </div>
      </div>
      <?php } ?>
      <!-- <div class="small text-gray-light list-item-subtitle">NAMA</div> -->
    </ul>
  </div>
</div>
<div class="cell-lg-4">
 <form method="get" action="<?php echo base_url('cari_pesawat/search');?>" class="small">
  <div class="range">


    <div class="range offset-top-15">
     <div class="cell-xs">
      <div class="form-group">
       <label class="form-group-label">From</label>
       <!--Select 2-->
       <select data-minimum-results-for-search="Infinity" class="form-control select-filter" name="rute_from">
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
    <select data-minimum-results-for-search="Infinity" class="form-control select-filter" name="rute_to">
     <option value="">-- Pilih tujuan --</option>
     <?php foreach ($rute_to as $tujuan) { ?>
     <option value="<?php echo $tujuan->rute_to ?>"><?php echo $tujuan->rute_to ?></option>
     <?php } ?>
   </select>
 </div>
</div>
</div>
<div class="range offset-top-15">
 <div class="cell-sm-6">
  <div class="form-group">
   <label class="form-group-label">Departure</label>
   <input type="text" data-time-picker="date" data-constraints="@Required" class="form-control" name="depart_at" placeholder="-- Pilih tanggal--">
 </div>
</div>
<div class="cell-xs offset-top-15 offset-xs-top-0">
  <div class="form-group">
    <label class="form-group-label">Class</label>
    <!--Select 2-->
    <select data-minimum-results-for-search="Infinity" class="form-control select-filter" name="class">
      <option value="">-- Pilih class --</option>
      <?php foreach ($class as $c) { ?>
      <option value="<?php echo $c->class ?>"><?php echo $c->class ?></option>
      <?php } ?>
    </select>
  </div>
</div>
</div>
<div class="range offset-top-15">
  <div class="cell-xs offset-top-15 offset-sm-top-0">
    <div class="range">
      <div class="cell-xs-6">
        <div class="form-group">
          <label class="form-group-label">Seat</label>
          <input type="number" min="0" value="2" name="seat" class="form-control">
        </div>
      </div>
      <div class="cell-xs-6">
       <div class="offset-top-30">
         <button class="btn btn-primary btn-sm btn-naira btn-naira-up"><span class="icon fa-search"></span><span>Search Flight</span></button>
       </div>
     </div>
   </div>
 </div>
</div>
</div>
</form>
</div>
</div>


</div>

</section>

<?php $this->load->view('layout/footer'); ?>