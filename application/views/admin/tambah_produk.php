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
                <div class="container-fluid">

                    <!-- DataTales Example -->
                    <nav class="navbar navbar-light bg-light justify-content-between">
                        <a class="navbar-brand"><b style=" left: 439px; top: 128px; font-family: Poppins; font-style: normal; font-weight: 500; font-size: 25px; line-height: 37px; display: flex; align-items: center; color: #222222;">Tambah Produk</b></a>
                            <a href="" class="" data-toggle="modal" data-target="#tambah_baru">
                            <button class="btn btn-primary " style="width: 180px;">Tambah Baru</button></a>
                    </nav>
                    <div class="card shadow mb-4">
                        <div class="card-body">
						<?php echo $this->session->flashdata('pesan'); ?> 
                            <div class="table-responsive">
                                <table class="table table-bordered" id="table_id" width="100%">
                                        <thead>
                                            <tr>
                                                <th scope="col">No</th>
                                                <th scope="col">Produk</th>
                                                <th scope="col">Nama Produk</th>
                                                <th scope="col">Berat</th>
                                                <th scope="col">Harga</th>
                                                <th scope="col">Aksi</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php $no=1; ?>
                                            <?php foreach ($item as $brg) : ?>
                                            <tr>
                                                <td><?php echo $no++ ?></td>
                                                <td><img src="<?php echo base_url(). '/assets/gambar_utama/'. $brg->foto_utama ?>" class="img-fluid" style="width: 100px; left: px; top: 454px" alt=""></td>
                                                <td><?php echo $brg->nama_produk ?></td>
                                                <td><?php echo $brg->berat ?> gram</td>
                                                <td>Rp.<?php echo number_format ($brg->harga) ?></td>
                                                <td>
                                                <div class="row">
                                                    <div class="col-md-2" style="padding:5px;">
                                                            <button data-toggle="modal" data-target="#edit_data<?php echo $brg->id_produk?>" class="btn btn-small" style="background: #FFFFFF; box-shadow: 0px 23px 80px rgba(0, 0, 0, 0.12), 0px 9.60885px 33.4221px rgba(0, 0, 0, 0.0862625), 0px 5.13735px 17.869px rgba(0, 0, 0, 0.0715329), 0px 2.87996px 10.0172px rgba(0, 0, 0, 0.06), 0px 1.52952px 5.32008px rgba(0, 0, 0, 0.0484671), 0px 0.636469px 2.21381px rgba(0, 0, 0, 0.0337375);"><i class="fa fa-pencil-square-o" style="color:#FDD922;" aria-hidden="true"></i></button>
                                                    </div>
                                                    
                                                    <div class="col-md-2"></div>

                                                    <div class="col-md-2" style="padding:5px;">
													<a href="<?=site_url('admin/tambah_produk/hapus/'.$brg->id_produk,) ;?>" onclick="return confirm('Yakin akan menghapus data?')"><button type="button" data="modal"  class="btn btn-small" style="background: #FFFFFF; box-shadow: 0px 23px 80px rgba(0, 0, 0, 0.12), 0px 9.60885px 33.4221px rgba(0, 0, 0, 0.0862625), 0px 5.13735px 17.869px rgba(0, 0, 0, 0.0715329), 0px 2.87996px 10.0172px rgba(0, 0, 0, 0.06), 0px 1.52952px 5.32008px rgba(0, 0, 0, 0.0484671), 0px 0.636469px 2.21381px rgba(0, 0, 0, 0.0337375);"><i class="fa fa-trash" style="color:#FC185A;" aria-hidden="true"></i></button></a>
                                                    </div>
                                                </div>                           
												</td>
												<!-- Modal Edit -->
												<div class="modal fade" id="edit_data<?php echo $brg->id_produk?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
													<div class="modal-dialog">
														<div class="modal-content">
														<div class="modal-header">
															<h5 class="modal-title" id="exampleModalLabel">Ubah Data Produk</h5>
															<button type="button" class="close" data-dismiss="modal" aria-label="Close">
															<span aria-hidden="true">&times;</span>
															</button>
														</div>
														<div class="modal-body">
																
																<form  action="<?php  echo base_url('admin/tambah_produk/ubah_data_produk');?>"  method="post" enctype="multipart/form-data">
																<!-- String ID PRODUK-->
																<!-- Akhir  STRING ID PRODUK -->
																<div class="form-group">
																	<label>Nama barang</label>
																	<input type="hidden" value="<?php echo $brg->id_produk?>" name="id_produk_edit">
																	<input type="text" name="nama_produk_edit" class="form-control" value="<?php echo $brg->nama_produk?>">
																</div>

																<div class="form-group">
																	<label>Deskripsi</label>
																	<textarea name="deskripsi_edit" id="" cols="30" rows="10" class="form-control"><?php echo $brg->deskripsi?></textarea>
																</div>
																	<div class="row">
																		<div class="col-md-6">
																			<div class="form-group">
																				<label>Harga</label>
																				<input type="number" name="harga_edit" class="form-control" value="<?php echo $brg->harga?>">
																			</div>
																		</div>
																		<div class="col-md-6">
																			<div class="form-group">
																				<label>Berat (Gram)</label>
																				<input type="number" name="berat_edit" value="<?php echo $brg->berat?>" class="form-control">
																			</div>
																		</div>
																	</div>
														</div>
														<div class="modal-footer">
															<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
															<button type="submit" class="btn btn-primary" name="btn_add">Ubah</button>
														</div>

																</form>
														
														</div>
													</div>
												</div>
												<!-- Akhir Modal -->
                                            </tr>
                                        <?php endforeach ?>   
                                        </tbody>
                                </table>
                                        
                                <script type="text/javascript">
                                    $(document).ready( function () {
                                        $('#table_id').DataTable();
                                    } );
                                </script>
                            </div>
                            <!-- End of Main Content -->

                            <!-- Footer -->
                            <?php $this->load->view('admin/partial/footer') ?>
                            <!-- End of Footer -->

                        </div>
                        <!-- End of Content Wrapper -->

                    </div>
                    <!-- End of Page Wrapper -->

                    <!-- Scroll to Top Button-->
                    <a class="scroll-to-top rounded" href="#page-top">
                        <i class="fas fa-angle-up"></i>
                    </a>

                    <!-- Logout Modal-->
                    <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
                                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">×</span>
                                    </button>
                                </div>
                                <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
                                <div class="modal-footer">
                                    <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                                    <a class="btn btn-primary" href="login.html">Logout</a>
                                </div>
                            </div>
                        </div>
                    </div>


                    <!-- Modal Card Tambah Baru -->
                    <div class="modal fade" id="tambah_baru" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
						<div class="modal-dialog">
							<div class="modal-content">
							<div class="modal-header">
								<h5 class="modal-title" id="exampleModalLabel">Input Produk</h5>
								<button type="button" class="close" data-dismiss="modal" aria-label="Close">
								<span aria-hidden="true">&times;</span>
								</button>
							</div>
							<div class="modal-body">
									
									<form  action="<?php echo base_url('admin/tambah_produk/campur');?>"  method="post" enctype="multipart/form-data">
									<!-- String ID PRODUK-->
									<?php
											function varian($length = 7, $chars = '1234567890abcdefghijklmnopqrstuvwxyz')
											{
												if($length > 0)
												{
													$len_chars = (strlen($chars) - 1);
													$the_chars = $chars{rand(0, $len_chars)};
													for ($i = 1; $i < $length; $i = strlen($the_chars))
													{
														$r = $chars{rand(0, $len_chars)};
														if ($r != $the_chars{$i - 1}) $the_chars .=  $r;
													}

													return $the_chars;
												}
											}
											function produk($length = 8, $chars = '1234567890abcdefghijklmnopqrstuvwxyz')
											{
												if($length > 0)
												{
													$len_chars = (strlen($chars) - 1);
													$the_chars = $chars{rand(0, $len_chars)};
													for ($i = 1; $i < $length; $i = strlen($the_chars))
													{
														$r = $chars{rand(0, $len_chars)};
														if ($r != $the_chars{$i - 1}) $the_chars .=  $r;
													}

													return $the_chars;
												}
											}

									?>
									<!-- Akhir  STRING ID PRODUK -->
										<!-- Foto -->
										<div class="form-group">
											<div class="row">
												<div class="col-md-4">
													<label>Foto Utama</label>
													<input type="file" name="foto_upload" size="20" class="form-control">
												</div>
												<div class="col-md-4">
													<label>Foto Samping</label>
													<input type="file" name="foto_uploaddua" size="20" class="form-control">
												</div>
												<div class="col-md-4">
													<label>Foto Atas</label>
													<input type="file" name="foto_uploadtiga" size="20" class="form-control">
												</div>
											</div>
											
										</div> 
									<!-- Akhir Foto -->
									<div class="form-group">
										<label>Nama barang</label>
										<input type="hidden" name="id_varian" value="<?php echo varian()?>">
										<input type="hidden" name="id_produk" value="<?php echo produk()?>">
										<input type="text" name="nama_produk" class="form-control" >
									</div>

									<div class="form-group">
										<label>Deskripsi</label>
										<textarea name="deskripsi" id="" cols="30" rows="10" class="form-control"></textarea>
									</div>
										<div class="row">
											<div class="col-md-6">
												<div class="form-group">
													<label>Harga</label>
													<input type="number" name="harga" class="form-control" placeholder="Rp.">
												</div>
											</div>
											<div class="col-md-6">
												<div class="form-group">
													<label>Berat (Gram)</label>
													<input type="number" name="berat" class="form-control">
												</div>
											</div>
										</div>

										
									<!-- Varian -->
									<div class="form-group">
										<span>Untuk menambahkan Varian Klik button dibwah</span>
										<br>
										<button type="button" class="btn btn-dark" onclick="btn_tambah_varian()" id="tmb_varian">Tambah Varian</button>
									</div>
									<div class="form-group" style="display:none" id="tampil_var">
										<label for="">Varian</label>
										<select name="nama_varian" class="form-control" id="id_var" onchange="show_ukuran()">
											<option >Pilih Varian</option>
											<option value="Warna" >Warna</option>
											<option value="Ukuran" >Ukuran</option>
										</select>
									</div>
									<!-- Ukuran -->
									<div class="form-group" style="display:none" id="sect_ukuran">
										<label for="Ukuran">Ukuran</label>
										<textarea name="isi_varian" id="" cols="5" class="form-control" rows="5" placeholder="30,33,S,M,L,XL"></textarea>
									</div>
									<!-- Warna -->
									<div class="form-group"  id="sect_warna" style="display:none">
										<label for="Warna">Warna</label>
										<textarea name="" id="" cols="5" class="form-control" placeholder="maroon,hitam,hijau" rows="5"></textarea>
									</div>
							</div>
							<div class="modal-footer">
								<button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
								<button type="submit" class="btn btn-primary" name="btn_add">Simpan</button>
							</div>

									</form>
							
							</div>
						</div>
                    </div>
                    <!-- akhir modal card Tambah Baru -->


                    <!-- FUNCTION DATA TABLE -->
                   

                    <!-- CDN JQUERY DATA TABLES -->
                    

                    <!-- Bootstrap core JavaScript-->
                    
                    <script src="<?= base_url() ?>template_admin/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

                    <!-- Core plugin JavaScript-->
                    

                    <!--font awesome  -->
                    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

                    <!-- Custom scripts for all pages-->
                    <script src="<?= base_url() ?>template_admin/js/sb-admin-2.min.js"></script>

                </div>
            </div>
        </div>
	</div>
	<!-- Validasi Varian -->
	<!-- Alert -->
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/6.6.9/sweetalert2.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/6.6.9/sweetalert2.min.js"></script>
	<script>
		function btn_tambah_varian(){
			document.getElementById("tampil_var").style.display = "block";
		}
		function show_ukuran(){
			
			var x = document.getElementById("id_var").value;
  			if(x == "Ukuran"){
				document.getElementById("sect_ukuran").style.display = "block";
				document.getElementById("sect_warna").style.display = "none";
			  }else if(x == "Warna"){
				document.getElementById("sect_warna").style.display = "block";
				document.getElementById("sect_ukuran").style.display = "none";
			  }
		}
	</script>
	<!-- Akhir Validasi -->

</body>
