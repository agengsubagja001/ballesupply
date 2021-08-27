<?php $this->load->view('partial/head'); ?>
<?php $this->load->view('partial/navbar'); ?>
<body> 
    <!-- dekrlerasi -->
	<section class="content">
		<div class="row container">
			<div class="col-md-8">
				<div class="container">
					<div class="row">
						<div class="col-md-12 text-center">
							<img src="https://seeklogo.com/images/T/tokopedia-logo-5340B636F6-seeklogo.com.png" class="img-fluid text-center" style="width:100px" alt="">
							<hr style="width: 100%;">
						</div>
						<div class="col-md-12">
							<div class="row">
								<div class="col-md-6">
									<?php foreach ($buyer as $buy) :?>
									<div class="row">
										<div class="col-md-12">
											<span style="font-size:12px;font-weight:bold">Penerima</span>
											<br>
											<span style="font-weight: bold;"><?php echo $buy->nama_pembeli?></span>
										</div>
										<div class="col-md-12">
											<span><?php echo $buy->no_telepon?></span>
										</div>
										<div class="col-md-12">
											<p><?php echo $buy->alamat?></p>
										</div>
									</div>
									<?php endforeach?>
								</div>
								<div class="col-md-6">
									<div class="row">
										<div class="col-md-12">
											<span style="font-size:12px;font-weight:bold">Pengirim</span>
											<br>
											<span style="font-weight: bold;">BALESUPPLY</span>
										</div>
										<div class="col-md-12">
											<span>083824966900</span>
										</div>
										<div class="col-md-12">
											<p>Cihapit,Bandung Wertan, Bandung Wetan,Jawa Barat 40114</p>
										</div>
									</div>
								</div>
							</div>
							<hr style="width: 100%;">
						</div>
						<div class="col-md-12">
							<br>
							<table style="margin-top: 1px;">
							
							<?php foreach ($query as $cart) : ?>
								<thead>
									<tr>
										<th style="width:400px">Produk</th>
										<th style="width:200px">Varian</th>
										<th style="width:200px">Jumlah</th>
									</tr>
								</thead>
								<tr>
									<td style="width:400px"><?php echo $cart->nama_produk ?></td>
									<td style="width:200px"><?php echo $cart->ukuran?></td>
									<td style="width:200px"><?php echo $cart->qty?></td>
								</tr>
								<?php endforeach ?>
							</table>
							<hr style="width:100%">
						</div>
						<div class="col-md-12">
							<div class="row">
								<div class="col-md-12">
									<span>Ongkir :</span>
									<br>
									<span>JNE Rp.50.000</span>
								</div>
							</div>
							<hr style="width:100%">
						</div>
						<div class="col-md-12 p-3 text-right">
							<button class="btn btn-dark" style="width:210px;margin-bottom:10px">Lanjut Ke Pembayaran</button>
							<br>
							
						</div>
					</div>
				</div>
			</div>
			<div class="col-md-4">
				<img src="https://kopertais5.ar-raniry.ac.id/assets_/img/team/team-1.jpg" style="width:400px" class="img-fluid" alt="">
			</div>
		</div>
	</section>
    <!-- footer -->
<?php $this->load->view('partial/footer') ?>     
</body>
