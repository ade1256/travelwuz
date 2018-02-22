<section class="section-80 section-md-120">
	<div class="shell">
		<div class="range text-lg-left">
			<div class="cell-lg-12">
				<form action="<?php echo base_url() ?>booking/proccess" method="POST">
					<input type="hidden" name='key' value='<?php echo $_GET['key'] ?>'>

					<table class="customer-table">

						<?php $i = 0; ?>
						<?php foreach ($data_form as $value) : ?>
							<?php $i++; ?>

							<tr>
								<td>
									<div onclick="pget(this.id)" id="p<?php echo $i ?>" class="customer-color id-p<?php echo $i ?>"></div>
								</td>
								<td>
									<span>
										<?php echo $value ?>
									</span>
								</td>
								<td>
									<input name="seat[]" class="form-control" id="i<?php echo $i ?>" type="text">
								</td>
							</tr>

						<?php endforeach; ?>
					</table>
					<div class="pesawat"></div>
					<div class="seat">
						<?php for ($i = 1; $i <= $seat['seat_total']; $i++) : ?>

							<?php if (count($seat['seat_bookeds']) !== 0) : ?>
								<?php if (in_array($i, $seat['seat_bookeds'])) : ?>
									<div id="<?php echo $i ?>" class="seat-id seat-notavailabe">
										<p><?php echo $i ?></p>
									</div>

								<?php else : ?>
									<div onclick="sget(this.id)" id="<?php echo $i ?>" class="seat-id">
										<p><?php echo $i ?></p>
									</div>
								<?php endif; ?>
							<?php else : ?>
								<div onclick="sget(this.id)" id="<?php echo $i ?>" class="seat-id">
									<p><?php echo $i ?></p>
								</div>
							<?php endif; ?>



						<?php endfor; ?>

					</div>
					<div class="cell-xs-12 offset-top-20 text-right">
						<button style="min-width: 140px;" type="submit" class="btn btn-primary btn-sm">Next</button>
					</div>
				</form>
			</div>
		</div>
	</div>
</section>
<script>
	function pget(id) {
		seat.p = id;
		$('.customer-color').removeClass("customer-selected");
		$('#' + id).addClass("customer-selected");
	}

	function sget(id) {
		seat.selectSeat(id);
	}

	var seat = {
		p: '',
		pn: function (id) {
			pn = id.replace('p', '');
			return pn;
		},
		selectSeat: function (id) {
			if ($('#' + id).attr('class') == 'seat-id') {

				if ($('#i' + this.pn(this.p)).val() == '') {
					$('#' + id).addClass("seat-selected");
							// console.log(this.pn(this.p));
							$('#i' + this.pn(this.p)).val(id);
							$('#' + id).addClass('seat-for-' + this.p);
						}


					} else {
						cSeat = $('#' + id).attr('class');
						cSeatoc = cSeat.replace('seat-id seat-selected seat-for-p', '');
						$('#' + id).removeClass("seat-selected");
						$('#' + id).removeClass(cSeat.replace('seat-id ', ''));
						$('#i' + cSeatoc).val('');


					}
					//    console.log($('#'+id).attr('class'));
				}
			}

		</script>