<?php $this->load->view('admin/partial/head') ?>

<!-- CDN DATA TABLES -->


<!-- JS DATA TABLES -->

<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">

        <!-- Sidebar -->
        <?php $this->load->view('admin/partial/sidebar') ?>
        <!-- End of Sidebar -->

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">

                <!-- Topbar -->

				<nav class="navbar navbar-expand navbar-light bg-primary topbar mb-4 static-top shadow" style="background: #0049A8;">
                    <?php $this->load->view('admin/partial/topbar')  ?>
                </nav>

                <!-- End of Topbar -->

                <!-- Begin Page Content -->
				<section>
					<div class="container">
						<!-- Header -->
						<div class="row">
							<div class="col-md-4">
								<div class="card_dashboard" style="width: 100%;border-radius:20px;height:120px;background-color:#fff;box-shadow: 0 5px 10px rgb(73 84 100 / 5%);border-color: transparent;position:relative">
									<div class="row container" style="position: absolute;top:30px">
										<div class="col-md-6">
											<table>
												<tr>
													<td><span style="font-family:poppins;font-size:30px;font-weight:bold">24</span></td>
												</tr>
												<tr>
													<td><span style="font-family: Poppins;font-size: 15px;font-weight: 600;">Produk</span></td>
												</tr>
											</table>
										</div>
										<div class="col-md-6">
											<div class="border_admin" style="width: 60px;height:60px;border-radius:50%;background: #FFF4D6;float:right">
												<i class="fa fa-shopping-bag" aria-hidden="true" style=" position: absolute;font-size: 30px;top: 15px;right: 28px;color: #FEBB39;"></i>
											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="col-md-4">
								<div class="card_dashboard" style="width: 100%;border-radius:20px;height:120px;background-color:#fff;box-shadow: 0 5px 10px rgb(73 84 100 / 5%);border-color: transparent;position:relative">
									<div class="row container" style="position: absolute;top:30px">
										<div class="col-md-6">
											<table>
												<tr>
													<td><span style="font-family:poppins;font-size:30px;font-weight:bold">24</span></td>
												</tr>
												<tr>
													<td><span style="font-family: Poppins;font-size: 15px;font-weight: 600;">Kategori</span></td>
												</tr>
											</table>
										</div>
										<div class="col-md-6">
											<div class="border_admin" style="width: 60px;height:60px;border-radius:50%;background: #E7EDFF;float:right">
												<i class="fa fa-random" aria-hidden="true" style=" position: absolute;font-size: 30px;top: 15px;right: 28px;color: #3A69FE;"></i>
											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="col-md-4">
								<div class="card_dashboard" style="width: 100%;border-radius:20px;height:120px;background-color:#fff;box-shadow: 0 5px 10px rgb(73 84 100 / 5%);border-color: transparent;position:relative">
									<div class="row container" style="position: absolute;top:30px">
										<div class="col-md-6">
											<table>
												<tr>
													<td><span style="font-family:poppins;font-size:30px;font-weight:bold">24</span></td>
												</tr>
												<tr>
													<td><span style="font-family: Poppins;font-size: 15px;font-weight: 600;">Blog</span></td>
												</tr>
											</table>
										</div>
										<div class="col-md-6">
											<div class="border_admin" style="width: 60px;height:60px;border-radius:50%;background: #DCFAF9;float:right">
												<i class="fa fa-rss" aria-hidden="true" style=" position: absolute;font-size: 30px;top: 15px;right: 28px;color: #15DBCC;"></i>
											</div>
										</div>
									</div>
								</div>
							</div>
							
						</div>
						<!-- Akhir Header -->
						<!-- Body -->
						<div class="row mt-5">
							<div class="col-md-8">
								<div class="col-md-12">
									<h5 style="font-family: Raleway;font-weight:600">Produk</h5>
								</div>
								<div style="width: 100%;border-radius:20px;height:400px;background-color:#fff;box-shadow: 0 5px 10px rgb(73 84 100 / 5%);border-color: transparent;position:relative">
									<div class="table-responsive">
										<!-- Table -->
										<table class="table">
											<thead>
												<tr>
												<th scope="col">No</th>
												<th scope="col">Produk</th>
												<th scope="col">Nama</th>
												</tr>
											</thead>
											<tbody>
											
											
												<tr>
													<th scope="row">1</th>
													<td><img style="width:70px;" class="img-fluid" src="<?php echo base_url('/assets/gambar_utama/bergo1.jpg') ?>"></td>
													<td>Pashmina Babydoll / pashmina Ceruty baby doll - Mause</td>
												</tr>
												<tr>
													<th scope="row">2</th>
													<td><img style="width:70px;" class="img-fluid" src="<?php echo base_url('/assets/gambar_utama/sienna1.jpg') ?>"></td>
													<td>SiennaLuxury Voal / Voal Premium - Sand</td>
												</tr>
												<tr>
													<th scope="row">3</th>
													<td><img style="width:70px;" class="img-fluid" src="<?php echo base_url('/assets/gambar_utama/derby1.jpg') ?>"></td>
													<td>SEPATU PRIA DERBY SINTESIS - 40</td>
												</tr>
											
											</tbody>
										</table>
										<!-- Akhir Table -->
									</div>	
								</div>
							</div>
							<div class="col-md-4">
								<div class="row">
									<div class="col-md-12 text-center">
										<h6 style="font-size: 25px;font-family:Raleway;font-weight:bold">SCAN NOW</h6>
									</div>
									<div style="width: 100%;border-radius:20px;height:320px;background-color:#fff;box-shadow: 0 5px 10px rgb(73 84 100 / 5%);border-color: transparent;position:relative">
										<div class="row container">
											<div class="col-md-12 text-center">
												<img src="<?php echo base_url().'assets/img/qrcode.png' ?>" class="d-flex justify-content-center img-fluid text-center" style="position:absolute" alt="">
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
						<!-- Akhir Body -->
					</div>
				</section>
                

                    

                    

</body>

</html>
