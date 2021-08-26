<?php $this->load->view('partial/head') ?>


  <body>
      <!-- navbar -->
      <?php $this->load->view('partial/navbar') ?> 
        
    <!-- Section Slide -->
    <section class=""  >
		<div class="container" style="max-width: 1340px;">
			<div id="carouselExampleControls" class="carousel slide" data-ride="carousel" style="border-radius: 20px;">
				<div class="carousel-inner">
					<div class="carousel-item active">
					<img src="<?php echo base_url('assets/img/gambar1.jpg') ?>" class="d-block w-100"  alt="slider 1" style="border-radius: 20px;">
					</div>
					<div class="carousel-item">
					<img src="<?php echo base_url('assets/img/gambar1.jpg') ?>" class="d-block w-100"  alt="slider 2" style="border-radius: 20px;">
					</div>
					<div class="carousel-item">
					<img src="<?php echo base_url('assets/img/gambar1.jpg') ?>" class="d-block w-100"  alt="slider 3" style="border-radius: 20px;">
					</div>
				</div>
				<a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
					<span class="carousel-control-prev-icon" aria-hidden="true"></span>
					<span class="sr-only">Previous</span>
				</a>
				<a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
					<span class="carousel-control-next-icon" aria-hidden="true"></span>
					<span class="sr-only">Next</span>
				</a>
			</div>
		</div>
    </section>
    <!-- Akhir Section slide -->
    <!-- Section Yang Kita suka -->
    <section>
		<div class="container" style="max-width: 1340px;">
			<div class="col-md-12 mt-5" style="padding-left:0px">
				<span style="font-size:25px;font-weight:bold">Mungkin Kamu Suka</span>
			</div>
            <div class="row text-center">
				<!-- Rekomendasi 1 -->
                <div class="col-6 col-md-2">
                    <a href="" class="" data-toggle="modal" data-target="#mdl_produk1">
						<div style="width: 50px;height:50px;background-color:#FC185A;border-radius:50%;position:relative;color:#fff;float: right;transform: translateY(15px);">
							<span style="position: absolute;left: 12px;top: 15px;font-family:Poppins;font-weight:700">20%</span>
						</div>
                        <div class="card" style="width:100%; position:initial; border-radius:0px 0px 80px 80px; background: #FAFAFA;height:250px">
                            <img src="<?php echo base_url('assets/gambar_utama/bergo1.jpg') ?>"  class="card-img-top" style="object-fit: cover;width: 100%;height: 180px;object-fit: cover;" alt="...">
                        </div>
						<div>
							<button class="btn btn-warning" style="width:80px;height:80px;border-radius:100%;transform:translateY(-35px); background: #FDD922; border: 2px solid #FAFAFA; box-shadow: 0px 134px 195px rgba(0, 0, 0, 0.07), 0px 48.9122px 71.1782px rgba(0, 0, 0, 0.0482987), 0px 23.746px 34.5557px rgba(0, 0, 0, 0.0389404), 0px 11.6407px 16.9398px rgba(0, 0, 0, 0.0310596), 0px 4.60276px 6.69804px rgba(0, 0, 0, 0.0217013);"><i class="fa fa-shopping-cart"></i></button>
						</div> 
                    </a>
				</div>
				<!-- Rekomendasi 2 -->
				<div class="col-6 col-md-2">
                    <a href="" class="" data-toggle="modal" data-target="#mdl_produk2">
						<div style="width: 50px;height:50px;background-color:#FC185A;border-radius:50%;position:relative;color:#fff;float: right;transform: translateY(15px);">
							<span style="position: absolute;left: 12px;top: 15px;font-family:Poppins;font-weight:700">20%</span>
						</div>
                        <div class="card" style="width:100%; position:initial; border-radius:0px 0px 80px 80px; background: #FAFAFA;height:250px">
                            <img src="<?php echo base_url().'assets/gambar_utama/derby1.jpg'  ?>"  class="card-img-top" style="object-fit: cover;width: 100%;height: 180px;object-fit: cover;" alt="...">
                        </div>
						<div>
							<button class="btn btn-warning" style="width:80px;height:80px;border-radius:100%;transform:translateY(-35px); background: #FDD922; border: 2px solid #FAFAFA; box-shadow: 0px 134px 195px rgba(0, 0, 0, 0.07), 0px 48.9122px 71.1782px rgba(0, 0, 0, 0.0482987), 0px 23.746px 34.5557px rgba(0, 0, 0, 0.0389404), 0px 11.6407px 16.9398px rgba(0, 0, 0, 0.0310596), 0px 4.60276px 6.69804px rgba(0, 0, 0, 0.0217013);"><i class="fa fa-shopping-cart"></i></button>
						</div> 
                    </a>
				</div>
				<!-- Rekomendasi 3 -->
				<div class="col-6 col-md-2">
                    <a href="" class="" data-toggle="modal" data-target="#mdl_produk3">
						<div style="width: 50px;height:50px;background-color:#FC185A;border-radius:50%;position:relative;color:#fff;float: right;transform: translateY(15px);">
							<span style="position: absolute;left: 12px;top: 15px;font-family:Poppins;font-weight:700">20%</span>
						</div>
                        <div class="card" style="width:100%; position:initial; border-radius:0px 0px 80px 80px; background: #FAFAFA;height:250px">
                            <img src="<?php echo base_url('assets/gambar_utama/YnQxLnBuZw==.png') ?>"  class="card-img-top" style="object-fit: cover;width: 100%;height: 180px;object-fit: cover;" alt="...">
                        </div>
						<div>
							<button class="btn btn-warning" style="width:80px;height:80px;border-radius:100%;transform:translateY(-35px); background: #FDD922; border: 2px solid #FAFAFA; box-shadow: 0px 134px 195px rgba(0, 0, 0, 0.07), 0px 48.9122px 71.1782px rgba(0, 0, 0, 0.0482987), 0px 23.746px 34.5557px rgba(0, 0, 0, 0.0389404), 0px 11.6407px 16.9398px rgba(0, 0, 0, 0.0310596), 0px 4.60276px 6.69804px rgba(0, 0, 0, 0.0217013);"><i class="fa fa-shopping-cart"></i></button>
						</div> 
                    </a>
				</div>
				<!-- Rekomendasi 4 -->
				<div class="col-6 col-md-2">
                    <a href="" class="" data-toggle="modal" data-target="#mdl_produk4">
						<div style="width: 50px;height:50px;background-color:#FC185A;border-radius:50%;position:relative;color:#fff;float: right;transform: translateY(15px);">
							<span style="position: absolute;left: 12px;top: 15px;font-family:Poppins;font-weight:700">20%</span>
						</div>
                        <div class="card" style="width:100%; position:initial; border-radius:0px 0px 80px 80px; background: #FAFAFA;height:250px">
                            <img src="<?php echo base_url('assets/gambar_utama/bWsxLnBuZw==.png') ?>"  class="card-img-top" style="object-fit: cover;width: 100%;height: 180px;object-fit: cover;" alt="...">
                        </div>
						<div>
							<button class="btn btn-warning" style="width:80px;height:80px;border-radius:100%;transform:translateY(-35px); background: #FDD922; border: 2px solid #FAFAFA; box-shadow: 0px 134px 195px rgba(0, 0, 0, 0.07), 0px 48.9122px 71.1782px rgba(0, 0, 0, 0.0482987), 0px 23.746px 34.5557px rgba(0, 0, 0, 0.0389404), 0px 11.6407px 16.9398px rgba(0, 0, 0, 0.0310596), 0px 4.60276px 6.69804px rgba(0, 0, 0, 0.0217013);"><i class="fa fa-shopping-cart"></i></button>
						</div> 
                    </a>
				</div>
				<!-- Rekomendasi 5 -->
				<div class="col-6 col-md-2">
                    <a href="" class="" data-toggle="modal" data-target="#mdl_produk5">
						<div style="width: 50px;height:50px;background-color:#FC185A;border-radius:50%;position:relative;color:#fff;float: right;transform: translateY(15px);">
							<span style="position: absolute;left: 12px;top: 15px;font-family:Poppins;font-weight:700">20%</span>
						</div>
                        <div class="card" style="width:100%; position:initial; border-radius:0px 0px 80px 80px; background: #FAFAFA;height:250px">
                            <img src="<?php echo base_url('assets/gambar_utama/ZDEucG5n.png') ?>"  class="card-img-top" style="object-fit: cover;width: 100%;height: 180px;object-fit: cover;" alt="...">
                        </div>
						<div>
							<button class="btn btn-warning" style="width:80px;height:80px;border-radius:100%;transform:translateY(-35px); background: #FDD922; border: 2px solid #FAFAFA; box-shadow: 0px 134px 195px rgba(0, 0, 0, 0.07), 0px 48.9122px 71.1782px rgba(0, 0, 0, 0.0482987), 0px 23.746px 34.5557px rgba(0, 0, 0, 0.0389404), 0px 11.6407px 16.9398px rgba(0, 0, 0, 0.0310596), 0px 4.60276px 6.69804px rgba(0, 0, 0, 0.0217013);"><i class="fa fa-shopping-cart"></i></button>
						</div> 
                    </a>
				</div>
				<!-- Rekemondasi 6 -->
				<div class="col-6 col-md-2">
                    <a href="" class="" data-toggle="modal" data-target="#mdl_produk6">
						<div style="width: 50px;height:50px;background-color:#FC185A;border-radius:50%;position:relative;color:#fff;float: right;transform: translateY(15px);">
							<span style="position: absolute;left: 12px;top: 15px;font-family:Poppins;font-weight:700">20%</span>
						</div>
                        <div class="card" style="width:100%; position:initial; border-radius:0px 0px 80px 80px; background: #FAFAFA;height:250px">
                            <img src="<?php echo base_url('assets/gambar_utama/cDEucG5n.png') ?>"  class="card-img-top" style="object-fit: cover;width: 100%;height: 180px;object-fit: cover;" alt="...">
                        </div>
						<div>
							<button class="btn btn-warning" style="width:80px;height:80px;border-radius:100%;transform:translateY(-35px); background: #FDD922; border: 2px solid #FAFAFA; box-shadow: 0px 134px 195px rgba(0, 0, 0, 0.07), 0px 48.9122px 71.1782px rgba(0, 0, 0, 0.0482987), 0px 23.746px 34.5557px rgba(0, 0, 0, 0.0389404), 0px 11.6407px 16.9398px rgba(0, 0, 0, 0.0310596), 0px 4.60276px 6.69804px rgba(0, 0, 0, 0.0217013);"><i class="fa fa-shopping-cart"></i></button>
						</div> 
                    </a>
				</div>
            </div>
        </div>
    </section>
    <!-- Akhir Yang kita suka -->

     <!-- modal 1 -->
    <div class="modal fade" id="mdl_produk1" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-xl">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLabel"></h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body">       
                                <div class="container">
                                    <div class="row">
                                            <div class="col-md-5 text-center">
                                                <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
                                                    <div class="carousel-inner">
                                                        <div class="carousel-item active">
                                                        <img class="d-block w-100" src="<?php echo base_url().'assets/gambar_utama/bergo1.jpg'  ?>"  alt="First slide">
                                                        </div>
                                                        <div class="carousel-item">
                                                        <!-- <img class="d-block w-100" src="<?php echo base_url().'assets/gambar_samping/bergo2.jpg' ?>"  alt="Second slide"> -->
                                                        </div>
                                                        <div class="carousel-item">
                                                        <!-- <img class="d-block w-100" src="<?php echo base_url().'assets/gambar_atas/bergo3.jpg'  ?>"  alt="Third slide"> -->
                                                        </div>
                                                    </div>
                                                    <a class="carousel-control-prev" href="#carouselExampleControls " role="button" data-slide="prev">
                                                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                                        <span class="sr-only">Previous</span>
                                                    </a>
                                                    <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
                                                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                                        <span class="sr-only">Next</span>
                                                    </a>
                                                </div>
                                               
                                            </div>

                                           
                                        <div class="col-md-7 text-left">
                                        <!-- awal form post -->
                                        <form action="<?php echo base_url('konfirmasii'); ?>" method="POST">
                                                <p style="left: 666px; top: 333px; font-family: Poppins; font-style: normal; font-weight: normal; font-size: 30px; line-height: 52px; color: #222222;">Bergo Khalisa / Bergo Maryam /Bergo Lasercut - Navy</p>
                                                <input type="text" style="display:none" name="nama_pdk" value="Bergo Khalisa / Bergo Maryam /Bergo Lasercut - Navy">
                                                <b style="font-family: Poppins; font-style: normal; font-weight: 600; font-size: 45px; line-height: 75px; display: flex; align-items: center; color: #000000;">Rp.33.000 </b>
                                                <input type="text" style="display:none" name="harga" value="33000" > 
                                            <!-- row atribut -->
                                            <div class="row mt-3">
                                                <div class="col-md-5">
                                                    <P style="font-family: Poppins; font-style: normal; font-weight: 500; font-size: 20px; line-height: 30px; display: flex; align-items: center; color: #000000;">ukuran</P>
                                                        <select class="form-control" name="ukuran">
                                                            <option>-</option>
                                                                <!-- <option value="31">31</option>
                                                                <option value="32">32</option>
                                                                <option value="33">33</option>
                                                                <option value="34">34</option>
                                                                <option value="35">35</option>
                                                                <option value="36">36</option>
                                                                <option value="37">37</option> -->
                                                            
                                                        </select> 
                                                </div>
                                                <div class="col-md-5" >
                                                    <p style="font-family: Poppins; font-style: normal; font-weight: 500; font-size: 20px; line-height: 30px; display: flex; align-items: center; color: #000000;">qty</p>
                                                
                                                            <select class="form-control" name="cek">
                                                                <option value="1">1</option>
                                                                <option value="2">2</option>
                                                                <option value="3">3</option>
                                                                <option value="4">4</option>
                                                                <option value="5">5</option>
                                                                <option value="6">6</option>
                                                                <option value="7">7</option>
                                                                <option value="8">8</option>
                                                                <option value="9">9</option>
                                                                <option value="10">10</option>
                                                                <option value="11">11</option>
                                                                <option value="12">12</option>
                                                            </select>

                                                </div>
                                            </div>
                                                <div class="row">
                                                    <div class="col-md-5">
                                                        <P style="font-family: Poppins; font-style: normal; font-weight: 500; font-size: 20px; line-height: 30px; display: flex; align-items: center; color: #000000;">Warna</P>
                                                            <select class="form-control" name="warna" required>
                                                                <option>Pilih warna</option>
                                                                <option>Sephia</option>
                                                                <option>butter</option>
                                                                <option>Peanut</option>
                                                                <option>Baby pink</option>
                                                                <option>Dusty pink</option>
                                                                <option>Beige</option>
                                                                <option>Maroon</option>
                                                            </select>
                                                    </div> 
                                                        <div class="col-md-5">
                                                            <p style="font-family: Poppins; font-style: normal; font-weight: 500; font-size: 20px; line-height: 30px; display: flex; align-items: center; color: #000000;">Berat</p> 
                                                            <table>
                                                                <td>
                                                                    <tr><p>70 Gram</p></tr>
                                                                    <input type="text" style="display:none" name="berat" value="70 ">
                                                                    <td></td>
                                                                </td>
                                                            </table>
                                                        </div>
                                                </div>   
                                                </div> 
                                                <!-- row akhir atribut -->
                                                <div class="col-md-12 text-right">
                                                    <div class="container">
                                                    <button class=" btn btn-warning" name ="test1" type="submit" aria-hidden="true">Beli Sekarang</button>
                                                </form>
                                                <!-- akhir form post -->
                                                    </div>
                                                </div>
                                                </div>
                                            </div>
                                        <div class="row container">
                                            <div class="col-md-6 text-left mb-5">
                                                <h5>Deskripsi</h3>
                                                <p style="white-space: pre-wrap;">‼️MOHON TANYA STOCK DULU YA SEBELUM ORDER‼️</p>
                                               <p style="white-space: pre-wrap;">Kondisi: Baru
Berat: 70 Gram
Kategori: Hijab Instan
Etalase: Semua Etalase
‼️MOHON TANYA STOCK DULU YA SEBELUM ORDER‼️

The most wanted "Khalisa Instan” hijab super simple langsung slup tanpa ribet peniti atau pentul ini kembali restiock! MasyaAllah hijab ini solusi banget buat kamu yang ga suka ribet.

Bahannya diamond crepe karena bahannya ringan, adem, jadi nyaman sekali nih buat dipake di rumah atau keluar juga mantul!

Khalisa Instan tersedia 20 pilihan warna yang siap kamu bawa pulang

Bahan : Diamond crepe
Ukuran :
Panjang depan 70 cm
Panjang belakang 90 cm
✔️Finishing : Lasercut 100% cantik!

Yang udh tau kualitas produk hijabghaitsa udh gak pake main nunda lagi 😘 langsung cuuusss order dengan cara KLIK LIK DI BIO tanpa tapi, tanpa nanti karena klo ga kebagian nanti gigit jari 💕 !!

#dailyhijab #bergodaily #diamonditaliano #bergoinstant #bergosyari #bergomurah #hijabrumahan #bergomaryam #bergotali #bergosimple</p>
                                            </div>

                                            <div class="col-md-5 justify-content-center">
                                                <div class="row text-center">
                                                    <div class="col-md-12 d-flex justify-content-center mt-2">
                                                        <h5>Hubungi Customer Service kami</h5>
                                                    </div>
                                                    <div class="col-md-12 d-flex justify-content-center p-2">
                                                        <div class="card " style="width:300px; height:344px; position:initial; border-radius: 30px; background: #FAFAFA; box-shadow: 0px -7px 80px rgba(0, 0, 0, 0.07), 0px -2.92443px 33.4221px rgba(0, 0, 0, 0.0503198), 0px -1.56354px 17.869px rgba(0, 0, 0, 0.0417275), 0px -0.876509px 10.0172px rgba(0, 0, 0, 0.035), 0px -0.465507px 5.32008px rgba(0, 0, 0, 0.0282725), 0px -0.193708px 2.21381px rgba(0, 0, 0, 0.0196802);">
                                                            <img src="<?php echo base_url('assets/img/support 1.png') ?>" class="card-img-right" alt="...">
                                                                <div class="card-body">
                                                                    <a href="https://api.whatsapp.com/send?phone=62895354997040&text=Saya%20membeli : %20%0ADengan%20Jumlah : %0AVarian : %0Aukuran : %20%0Adengan%20harga : %0A">
                                                                    <button type="button" class="btn btn-outline-warning" aria-hidden="true"><i class="fa fa-user" aria-hidden="true"></i>  Hubungi Customer Service</button></a>
                                                                </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                        </div>
                                    </div>
                                </div>   
                            </div>
        </div>        
    </div>
    <!-- akhir modal 1  -->
    <!-- moodal produk 2 -->
    <div class="modal fade" id="mdl_produk2" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-xl">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLabel"></h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body">       
                                <div class="container">
                                    <div class="row">
                                            <div class="col-md-5 text-center">
                                                <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
                                                    <div class="carousel-inner">
                                                    <div class="carousel-item active">
                                                        <img class="d-block w-100" src="<?php echo base_url().'assets/gambar_utama/derby1.jpg'  ?>"  alt="First slide">
                                                        </div>
                                                        <div class="carousel-item">
                                                        <!-- <img class="d-block w-100" src="<?php echo base_url().'assets/gambar_samping/derby2.jpg' ?>"  alt="Second slide"> -->
                                                        </div>
                                                        <div class="carousel-item">
                                                        <!-- <img class="d-block w-100" src="<?php echo base_url().'assets/gambar_atas/derby3.jpg'  ?>"  alt="Third slide"> -->
                                                        </div>
                                                    </div>
                                                    <a class="carousel-control-prev" href="#carouselExampleControls " role="button" data-slide="prev">
                                                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                                        <span class="sr-only">Previous</span>
                                                    </a>
                                                    <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
                                                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                                        <span class="sr-only">Next</span>
                                                    </a>
                                                </div>
                                               
                                            </div>

                                           
                                        <div class="col-md-7 text-left">
                                        <!-- awal form post -->
                                        <form action="<?php echo base_url('konfirmasii'); ?>" method="POST">
                                                <p style="left: 666px; top: 333px; font-family: Poppins; font-style: normal; font-weight: normal; font-size: 30px; line-height: 52px; color: #222222;">SEPATU PRIA DERBY SINTESIS - 40</p>
                                                <input type="text" style="display:none" name="nama_pdk" value="Bergo Khalisa / Bergo Maryam /Bergo Lasercut - Navy">
                                                <b style="font-family: Poppins; font-style: normal; font-weight: 600; font-size: 45px; line-height: 75px; display: flex; align-items: center; color: #000000;">Rp.139.000 </b>
                                                <input type="text" style="display:none" name="harga" value="139000" > 
                                            <!-- row atribut -->
                                            <div class="row mt-3">
                                                <div class="col-md-5">
                                                    <P style="font-family: Poppins; font-style: normal; font-weight: 500; font-size: 20px; line-height: 30px; display: flex; align-items: center; color: #000000;">ukuran</P>
                                                        <select class="form-control" name="ukuran">
                                                            <option>Pilih ukuran</option>
                                                                <option value="36">36</option>
                                                                <option value="37">37</option>
                                                                <option value="38">39</option>
                                                                <option value="40">40</option>
                                                                <option value="41">41</option>
                                                                <option value="42">42</option>
                                                                <option value="43">43</option>
                                                            
                                                        </select> 
                                                </div>
                                                <div class="col-md-5" >
                                                    <p style="font-family: Poppins; font-style: normal; font-weight: 500; font-size: 20px; line-height: 30px; display: flex; align-items: center; color: #000000;">qty</p>
                                                
                                                            <select class="form-control" name="cek">
                                                                <option value="1">1</option>
                                                                <option value="2">2</option>
                                                                <option value="3">3</option>
                                                                <option value="4">4</option>
                                                                <option value="5">5</option>
                                                                <option value="6">6</option>
                                                                <option value="7">7</option>
                                                                <option value="8">8</option>
                                                                <option value="9">9</option>
                                                                <option value="10">10</option>
                                                                <option value="11">11</option>
                                                                <option value="12">12</option>
                                                            </select>

                                                </div>
                                            </div>
                                                <div class="row">
                                                    <div class="col-md-5">
                                                        <P style="font-family: Poppins; font-style: normal; font-weight: 500; font-size: 20px; line-height: 30px; display: flex; align-items: center; color: #000000;">Warna</P>
                                                            <select class="form-control" name="warna">
                                                                <option>Pilih warna</option>
                                                                <option value="Tan">Tan</option>
                                                                <option value="Cokelat">Cokelat</option>
                                                                <option value="Hitam">Hitam</option>
                                                            </select>
                                                    </div> 
                                                        <div class="col-md-5">
                                                            <p style="font-family: Poppins; font-style: normal; font-weight: 500; font-size: 20px; line-height: 30px; display: flex; align-items: center; color: #000000;">Berat</p> 
                                                            <table>
                                                                <td>
                                                                    <tr><p>70 Gram</p></tr>
                                                                    <input type="text" style="display:none" name="berat" value="70 ">
                                                                    <td></td>
                                                                </td>
                                                            </table>
                                                        </div>
                                                </div>   
                                                </div> 
                                                <!-- row akhir atribut -->
                                                <div class="col-md-12 text-right">
                                                    <div class="container">
                                                    <button class=" btn btn-warning" name ="test1" type="submit" aria-hidden="true">Beli Sekarang</button>
                                                </form>
                                                <!-- akhir form post -->
                                                    </div>
                                                </div>
                                                </div>
                                            </div>
                                        <div class="row container">
                                            <div class="col-md-6 text-left mb-5">
                                                <h5>Deskripsi</h3>
                                                <p style="white-space: pre-wrap;">‼️MOHON TANYA STOCK DULU YA SEBELUM ORDER‼️</p>
                                                <p style="white-space: pre-wrap;">Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptate vitae tempora dolorem nobis! Est magnam voluptas voluptatum, vel autem facilis totam, amet rem beatae, eum ab eos accusamus hic error.</p>
                                                <p style="white-space: pre-wrap;">Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptate vitae tempora dolorem nobis! Est magnam voluptas voluptatum, vel autem facilis totam, amet rem beatae, eum ab eos accusamus hic error.</p>
                                            </div>

                                            <div class="col-md-5 justify-content-center">
                                                <div class="row text-center">
                                                    <div class="col-md-12 d-flex justify-content-center mt-2">
                                                        <h5>Hubungi Customer Service kami</h5>
                                                    </div>
                                                    <div class="col-md-12 d-flex justify-content-center p-2">
                                                        <div class="card " style="width:300px; height:344px; position:initial; border-radius: 30px; background: #FAFAFA; box-shadow: 0px -7px 80px rgba(0, 0, 0, 0.07), 0px -2.92443px 33.4221px rgba(0, 0, 0, 0.0503198), 0px -1.56354px 17.869px rgba(0, 0, 0, 0.0417275), 0px -0.876509px 10.0172px rgba(0, 0, 0, 0.035), 0px -0.465507px 5.32008px rgba(0, 0, 0, 0.0282725), 0px -0.193708px 2.21381px rgba(0, 0, 0, 0.0196802);">
                                                            <img src="<?php echo base_url('assets/img/support 1.png') ?>" class="card-img-right" alt="...">
                                                                <div class="card-body">
                                                                    <a href="https://api.whatsapp.com/send?phone=62895354997040&text=Saya%20membeli : %20%0ADengan%20Jumlah : %0AVarian : %0Aukuran : %20%0Adengan%20harga : %0A">
                                                                    <button type="button" class="btn btn-outline-warning" aria-hidden="true"><i class="fa fa-user" aria-hidden="true"></i>  Hubungi Customer Service</button></a>
                                                                </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                        </div>
                                    </div>
                                </div>   
                            </div>
        </div>        
    </div>
    <!-- akhir modal 2 -->
    <!-- modal produk 3 -->
    <div class="modal fade" id="mdl_produk3" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-xl">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLabel"></h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body">       
                                <div class="container">
                                    <div class="row">
                                            <div class="col-md-5 text-center">
                                                <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
                                                    <div class="carousel-inner">
                                                    <div class="carousel-item active">
                                                        <img class="d-block w-100" src="<?php echo base_url().'assets/gambar_utama/YnQxLnBuZw==.png'  ?>"  alt="First slide">
                                                        </div>
                                                        <!-- <div class="carousel-item"> -->
                                                        <!-- <img class="d-block w-100" src="<?php echo base_url().'assets/gambar_samping/' ?>"  alt="Second slide"> -->
                                                        <!-- </div> -->
                                                        <!-- <div class="carousel-item"> -->
                                                        <!-- <img class="d-block w-100" src="<?php echo base_url().'assets/gambar_atas/'  ?>"  alt="Third slide"> -->
                                                        <!-- </div> -->
                                                    </div>
                                                    <a class="carousel-control-prev" href="#carouselExampleControls " role="button" data-slide="prev">
                                                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                                        <span class="sr-only">Previous</span>
                                                    </a>
                                                    <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
                                                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                                        <span class="sr-only">Next</span>
                                                    </a>
                                                </div>
                                               
                                            </div>

                                           
                                        <div class="col-md-7 text-left">
                                        <!-- awal form post -->
                                        <form action="<?php echo base_url('konfirmasii'); ?>" method="POST">
                                                <p style="left: 666px; top: 333px; font-family: Poppins; font-style: normal; font-weight: normal; font-size: 30px; line-height: 52px; color: #222222;">BAJU ANAK LAKI-LAKI KARAKTER LUCU MOTIF KZK | AIRLANE - S</p>
                                                <input type="text" style="display:none" name="nama_pdk" value="Bergo Khalisa / Bergo Maryam /Bergo Lasercut - Navy">
                                                <b style="font-family: Poppins; font-style: normal; font-weight: 600; font-size: 45px; line-height: 75px; display: flex; align-items: center; color: #000000;">Rp.43,000</b>
                                                <input type="text" style="display:none" name="harga" value="43000" > 
                                            <!-- row atribut -->
                                            <div class="row mt-3">
                                                <div class="col-md-5">
                                                    <P style="font-family: Poppins; font-style: normal; font-weight: 500; font-size: 20px; line-height: 30px; display: flex; align-items: center; color: #000000;">ukuran</P>
                                                        <select class="form-control" name="ukuran">
                                                            <option>Pilih ukuran</option>
                                                                <option value="S">S</option>
                                                                <option value="M">M</option>
                                                                <option value="L">L</option>
                                                                <option value="XL">XL</option>
                                                                
                                                            
                                                        </select> 
                                                </div>
                                                <div class="col-md-5" >
                                                    <p style="font-family: Poppins; font-style: normal; font-weight: 500; font-size: 20px; line-height: 30px; display: flex; align-items: center; color: #000000;">qty</p>
                                                
                                                            <select class="form-control" name="cek">
                                                                <option value="1">1</option>
                                                                <option value="2">2</option>
                                                                <option value="3">3</option>
                                                                <option value="4">4</option>
                                                                <option value="5">5</option>
                                                                <option value="6">6</option>
                                                                <option value="7">7</option>
                                                                <option value="8">8</option>
                                                                <option value="9">9</option>
                                                                <option value="10">10</option>
                                                                <option value="11">11</option>
                                                                <option value="12">12</option>
                                                            </select>

                                                </div>
                                            </div>
                                                <div class="row">
                                                    <div class="col-md-5">
                                                        <P style="font-family: Poppins; font-style: normal; font-weight: 500; font-size: 20px; line-height: 30px; display: flex; align-items: center; color: #000000;">Warna</P>
                                                            <select class="form-control" name="warna">
                                                                <option>Pilih warna</option>
                                                                <option value="Kuning">Kuning</option>
                                                                <option value="Merah">Merah</option>
                                                                <option value="Hijau">Hijau</option>
                                                                <option value="Hitam">Hitam</option>
                                                            </select>
                                                    </div> 
                                                        <div class="col-md-5">
                                                            <p style="font-family: Poppins; font-style: normal; font-weight: 500; font-size: 20px; line-height: 30px; display: flex; align-items: center; color: #000000;">Berat</p> 
                                                            <table>
                                                                <td>
                                                                    <tr><p>100 Gram</p></tr>
                                                                    <input type="text" style="display:none" name="berat" value="70 ">
                                                                    <td></td>
                                                                </td>
                                                            </table>
                                                        </div>
                                                </div>   
                                                </div> 
                                                <!-- row akhir atribut -->
                                                <div class="col-md-12 text-right">
                                                    <div class="container">
                                                    <button class=" btn btn-warning" name ="test1" type="submit" aria-hidden="true">Beli Sekarang</button>
                                                </form>
                                                <!-- akhir form post -->
                                                    </div>
                                                </div>
                                                </div>
                                            </div>
                                        <div class="row container">
                                            <div class="col-md-6 text-left mb-5">
                                                <h5>Deskripsi</h3>
                                                <p style="white-space: pre-wrap;">‼️MOHON TANYA STOCK DULU YA SEBELUM ORDER‼️</p>
                                                <p style="white-space: pre-wrap;">Bahan : 100% cotton combed 30s</p>
                                                <p style="white-space: pre-wrap;">NOTE :</p>
                                                <p style="white-space: pre-wrap;">* Kenapa Combed 30s ? Karena kainnya yg mudah menyerap keringat, bahannya adem, lembut tidak kaku sangat cocok untuk menemani Aktivitas anak2 bermain maupun didlm rumah tidak akan terganggu oleh rasa gerah.</p>
                                                <p style="white-space: pre-wrap;">* Memiliki jahitan yang rapi dengan jahitan rantai dipundak dan bagian leher menggunakan rib sehingga bagian leher tidak mudah rusak atau berubah bentuk.</p>
                                                <p style="white-space: pre-wrap;">* Menggunakan tinta sablon jenis plastisol yang melekat kuat pada kain tidak mudah rusak /retak/pecah walaupun dicuci berkali-kali dan aman untuk kulit anak-anak</p>
                                                <p style="white-space: pre-wrap;">* Dilengkapi dengan hangtag berkualitas . untuk membedakan produk kami dengan yang lain.</p>
                                                <p style="white-space: pre-wrap;">Untuk motif ini tersedia dalam ukuran S,M,L,XL</p>
                                                <p style="white-space: pre-wrap;">Estimasi size untuk usia 1 sampai 8 tahun</p>
                                                <p style="white-space: pre-wrap;">Size S : Lebar 28cm Tinggi 41cm ( usia 1 sd 2 tahun)</p>
                                                <p style="white-space: pre-wrap;">Size M : Lebar 31cm Tinggi 44cm (usia 3 sd 4 tahun)</p>
                                                <p style="white-space: pre-wrap;">Size L : Lebar 34cm Tinggi 47cm (usia 5 sd 6 tahun)</p>
                                                <p style="white-space: pre-wrap;">Size XL : Lebar 37cm Tinggi 50cm ( usia 7 sd 8 tahun)</p>
                                                <p style="white-space: pre-wrap;"></p>
                                                <p style="white-space: pre-wrap;"></p>
                                                <p style="white-space: pre-wrap;"></p>
                                                <p style="white-space: pre-wrap;">* MOTIF READY SILAHKAN PILIH SIZE YANG DIINGINKAN PADA VARIASI</p>
                                                <p style="white-space: pre-wrap;">* PESAN BANYAK CHAT TERLEBIH DAHULU</p>
                                                <p style="white-space: pre-wrap;">* PENTING ! SILHAKAN LANGSUNG CHAT SAJA. KAMI FAST RESPONS</p>
                                                <p style="white-space: pre-wrap;">* APABILA PAKET SUDAH DITERIMA SILAHKAN KLIK PESAN DITERIMA. MOHON KERJASAMANYA KAK :)</p>
                                                <p style="white-space: pre-wrap;">#BALESOCKS#BANDUNG#KAOSKAKI#BAJUANAK#POPULER#ANAK</p>
                                                <p style="white-space: pre-wrap;">#PEREMPUAN#LAKILAKI</p>
                                            </div>

                                            <div class="col-md-5 justify-content-center">
                                                <div class="row text-center">
                                                    <div class="col-md-12 d-flex justify-content-center mt-2">
                                                        <h5>Hubungi Customer Service kami</h5>
                                                    </div>
                                                    <div class="col-md-12 d-flex justify-content-center p-2">
                                                        <div class="card " style="width:300px; height:344px; position:initial; border-radius: 30px; background: #FAFAFA; box-shadow: 0px -7px 80px rgba(0, 0, 0, 0.07), 0px -2.92443px 33.4221px rgba(0, 0, 0, 0.0503198), 0px -1.56354px 17.869px rgba(0, 0, 0, 0.0417275), 0px -0.876509px 10.0172px rgba(0, 0, 0, 0.035), 0px -0.465507px 5.32008px rgba(0, 0, 0, 0.0282725), 0px -0.193708px 2.21381px rgba(0, 0, 0, 0.0196802);">
                                                            <img src="<?php echo base_url('assets/img/support 1.png') ?>" class="card-img-right" alt="...">
                                                                <div class="card-body">
                                                                    <a href="https://api.whatsapp.com/send?phone=62895354997040&text=Saya%20membeli : %20%0ADengan%20Jumlah : %0AVarian : %0Aukuran : %20%0Adengan%20harga : %0A">
                                                                    <button type="button" class="btn btn-outline-warning" aria-hidden="true"><i class="fa fa-user" aria-hidden="true"></i>  Hubungi Customer Service</button></a>
                                                                </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                        </div>
                                    </div>
                                </div>   
                            </div>
        </div>        
    </div>
    <!-- akhir modal produk 3 -->        
    <!-- modal produk 4 -->
    <div class="modal fade" id="mdl_produk4" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-xl">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLabel"></h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body">       
                                <div class="container">
                                    <div class="row">
                                            <div class="col-md-5 text-center">
                                                <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
                                                    <div class="carousel-inner">
                                                    <div class="carousel-item active">
                                                        <img class="d-block w-100" src="<?php echo base_url().'assets/gambar_utama/bWsxLnBuZw==.png'  ?>"  alt="First slide">
                                                        </div>
                                                        <!-- <div class="carousel-item"> -->
                                                        <!-- <img class="d-block w-100" src="<?php echo base_url().'assets/gambar_samping/' ?>"  alt="Second slide"> -->
                                                        <!-- </div> -->
                                                        <!-- <div class="carousel-item"> -->
                                                        <!-- <img class="d-block w-100" src="<?php echo base_url().'assets/gambar_atas/'  ?>"  alt="Third slide"> -->
                                                        <!-- </div> -->
                                                    </div>
                                                    <a class="carousel-control-prev" href="#carouselExampleControls " role="button" data-slide="prev">
                                                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                                        <span class="sr-only">Previous</span>
                                                    </a>
                                                    <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
                                                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                                        <span class="sr-only">Next</span>
                                                    </a>
                                                </div>
                                               
                                            </div>

                                           
                                        <div class="col-md-7 text-left">
                                        <!-- awal form post -->
                                        <form action="<?php echo base_url('konfirmasii'); ?>" method="POST">
                                                <p style="left: 666px; top: 333px; font-family: Poppins; font-style: normal; font-weight: normal; font-size: 30px; line-height: 52px; color: #222222;">MUKENA SIFFON PREMUIM</p>
                                                <input type="text" style="display:none" name="nama_pdk" value="Bergo Khalisa / Bergo Maryam /Bergo Lasercut - Navy">
                                                <b style="font-family: Poppins; font-style: normal; font-weight: 600; font-size: 45px; line-height: 75px; display: flex; align-items: center; color: #000000;">Rp.290,000 </b>
                                                <input type="text" style="display:none" name="harga" value="299000" > 
                                            <!-- row atribut -->
                                            <div class="row mt-3">
                                                <div class="col-md-5">
                                                    <P style="font-family: Poppins; font-style: normal; font-weight: 500; font-size: 20px; line-height: 30px; display: flex; align-items: center; color: #000000;">ukuran</P>
                                                        <select class="form-control" name="ukuran">
                                                            <option>-</option>
                                                                <!-- <option value="36">36</option>
                                                                <option value="37">37</option>
                                                                <option value="38">39</option>
                                                                <option value="40">40</option>
                                                                <option value="41">41</option>
                                                                <option value="42">42</option>
                                                                <option value="43">43</option> -->
                                                            
                                                        </select> 
                                                </div>
                                                <div class="col-md-5" >
                                                    <p style="font-family: Poppins; font-style: normal; font-weight: 500; font-size: 20px; line-height: 30px; display: flex; align-items: center; color: #000000;">qty</p>
                                                
                                                            <select class="form-control" name="cek">
                                                                <option value="1">1</option>
                                                                <option value="2">2</option>
                                                                <option value="3">3</option>
                                                                <option value="4">4</option>
                                                                <option value="5">5</option>
                                                                <option value="6">6</option>
                                                                <option value="7">7</option>
                                                                <option value="8">8</option>
                                                                <option value="9">9</option>
                                                                <option value="10">10</option>
                                                                <option value="11">11</option>
                                                                <option value="12">12</option>
                                                            </select>

                                                </div>
                                            </div>
                                                <div class="row">
                                                    <div class="col-md-5">
                                                        <P style="font-family: Poppins; font-style: normal; font-weight: 500; font-size: 20px; line-height: 30px; display: flex; align-items: center; color: #000000;">Warna</P>
                                                            <select class="form-control" name="warna">
                                                                <option>Pilih warna</option>
                                                                <option value="Tan">Tan</option>
                                                                <option value="Cokelat">Cokelat</option>
                                                                <option value="Hitam">Hitam</option>
                                                            </select>
                                                    </div> 
                                                        <div class="col-md-5">
                                                            <p style="font-family: Poppins; font-style: normal; font-weight: 500; font-size: 20px; line-height: 30px; display: flex; align-items: center; color: #000000;">Berat</p> 
                                                            <table>
                                                                <td>
                                                                    <tr><p>150 Gram</p></tr>
                                                                    <input type="text" style="display:none" name="berat" value="70 ">
                                                                    <td></td>
                                                                </td>
                                                            </table>
                                                        </div>
                                                </div>   
                                                </div> 
                                                <!-- row akhir atribut -->
                                                <div class="col-md-12 text-right">
                                                    <div class="container">
                                                    <button class=" btn btn-warning" name ="test1" type="submit" aria-hidden="true">Beli Sekarang</button>
                                                </form>
                                                <!-- akhir form post -->
                                                    </div>
                                                </div>
                                                </div>
                                            </div>
                                        <div class="row container">
                                            <div class="col-md-6 text-left mb-5">
                                                <h5>Deskripsi</h3>
                                                <p style="white-space: pre-wrap;">‼️MOHON TANYA STOCK DULU YA SEBELUM ORDER‼️</p>
                                                <p style="white-space: pre-wrap;">Hai sahabat Bale,sekarang ada produk dari kami untuk perlengkapan ibadah mu</p>
                                                <p style="white-space: pre-wrap;">Size</p>
                                                <p style="white-space: pre-wrap;">Depan 115 cm</p>
                                                <p style="white-space: pre-wrap;">Belakang 125 cm</p>
                                                <p style="white-space: pre-wrap;">Bawahan 117 cm</p>
                                                <p style="white-space: pre-wrap;">Ada resleting dibawah dagu, cocok sekali untuk traveling. Bisa dipakai tanpa bagian kepala tanpa merusak hijab.</p>
                                                <p style="white-space: pre-wrap">Motifnya benar-benar cute & banyak pilihan. Jangan sampai kehabisan lagi ya shay????	</p>
                                            </div>

                                            <div class="col-md-5 justify-content-center">
                                                <div class="row text-center">
                                                    <div class="col-md-12 d-flex justify-content-center mt-2">
                                                        <h5>Hubungi Customer Service kami</h5>
                                                    </div>
                                                    <div class="col-md-12 d-flex justify-content-center p-2">
                                                        <div class="card " style="width:300px; height:344px; position:initial; border-radius: 30px; background: #FAFAFA; box-shadow: 0px -7px 80px rgba(0, 0, 0, 0.07), 0px -2.92443px 33.4221px rgba(0, 0, 0, 0.0503198), 0px -1.56354px 17.869px rgba(0, 0, 0, 0.0417275), 0px -0.876509px 10.0172px rgba(0, 0, 0, 0.035), 0px -0.465507px 5.32008px rgba(0, 0, 0, 0.0282725), 0px -0.193708px 2.21381px rgba(0, 0, 0, 0.0196802);">
                                                            <img src="<?php echo base_url('assets/img/support 1.png') ?>" class="card-img-right" alt="...">
                                                                <div class="card-body">
                                                                    <a href="https://api.whatsapp.com/send?phone=62895354997040&text=Saya%20membeli : %20%0ADengan%20Jumlah : %0AVarian : %0Aukuran : %20%0Adengan%20harga : %0A">
                                                                    <button type="button" class="btn btn-outline-warning" aria-hidden="true"><i class="fa fa-user" aria-hidden="true"></i>  Hubungi Customer Service</button></a>
                                                                </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                        </div>
                                    </div>
                                </div>   
                            </div>
        </div>        
    </div>
    <!-- akhir modal produk 4 -->
    <!-- modal 5 -->
    <div class="modal fade" id="mdl_produk5" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-xl">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLabel"></h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body">       
                                <div class="container">
                                    <div class="row">
                                            <div class="col-md-5 text-center">
                                                <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
                                                    <div class="carousel-inner">
                                                    <div class="carousel-item active">
                                                        <img class="d-block w-100" src="<?php echo base_url().'assets/gambar_utama/ZDEucG5n.png'  ?>"  alt="First slide">
                                                        </div>
                                                        <!-- <div class="carousel-item"> -->
                                                        <!-- <img class="d-block w-100" src="<?php echo base_url().'assets/gambar_samping/derby2.jpg' ?>"  alt="Second slide"> -->
                                                        <!-- </div> -->
                                                        <!-- <div class="carousel-item"> -->
                                                        <!-- <img class="d-block w-100" src="<?php echo base_url().'assets/gambar_atas/derby3.jpg'  ?>"  alt="Third slide"> -->
                                                        <!-- </div> -->
                                                    </div>
                                                    <a class="carousel-control-prev" href="#carouselExampleControls " role="button" data-slide="prev">
                                                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                                        <span class="sr-only">Previous</span>
                                                    </a>
                                                    <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
                                                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                                        <span class="sr-only">Next</span>
                                                    </a>
                                                </div>
                                               
                                            </div>

                                           
                                        <div class="col-md-7 text-left">
                                        <!-- awal form post -->
                                        <form action="<?php echo base_url('konfirmasii'); ?>" method="POST">
                                                <p style="left: 666px; top: 333px; font-family: Poppins; font-style: normal; font-weight: normal; font-size: 30px; line-height: 52px; color: #222222;">KAOS KAKI JEMPOL POLOS PLUS RAYA DEWASA - Tumit Pendek</p>
                                                <input type="text" style="display:none" name="nama_pdk" value="Bergo Khalisa / Bergo Maryam /Bergo Lasercut - Navy">
                                                <b style="font-family: Poppins; font-style: normal; font-weight: 600; font-size: 45px; line-height: 75px; display: flex; align-items: center; color: #000000;">Rp.11.000 </b>
                                                <input type="text" style="display:none" name="harga" value="139000" > 
                                            <!-- row atribut -->
                                            <div class="row mt-3">
                                                <div class="col-md-5">
                                                    <P style="font-family: Poppins; font-style: normal; font-weight: 500; font-size: 20px; line-height: 30px; display: flex; align-items: center; color: #000000;">ukuran</P>
                                                        <select class="form-control" name="ukuran">
                                                            <option>32 cm</option>
                                                                <!-- <option value="36">36</option>
                                                                <option value="37">37</option>
                                                                <option value="38">39</option>
                                                                <option value="40">40</option>
                                                                <option value="41">41</option>
                                                                <option value="42">42</option>
                                                                <option value="43">43</option> -->
                                                            
                                                        </select> 
                                                </div>
                                                <div class="col-md-5" >
                                                    <p style="font-family: Poppins; font-style: normal; font-weight: 500; font-size: 20px; line-height: 30px; display: flex; align-items: center; color: #000000;">qty</p>
                                                
                                                            <select class="form-control" name="cek">
                                                                <option value="1">1</option>
                                                                <option value="2">2</option>
                                                                <option value="3">3</option>
                                                                <option value="4">4</option>
                                                                <option value="5">5</option>
                                                                <option value="6">6</option>
                                                                <option value="7">7</option>
                                                                <option value="8">8</option>
                                                                <option value="9">9</option>
                                                                <option value="10">10</option>
                                                                <option value="11">11</option>
                                                                <option value="12">12</option>
                                                            </select>

                                                </div>
                                            </div>
                                                <div class="row">
                                                    <div class="col-md-5">
                                                        <P style="font-family: Poppins; font-style: normal; font-weight: 500; font-size: 20px; line-height: 30px; display: flex; align-items: center; color: #000000;">Warna</P>
                                                            <select class="form-control" name="warna">
                                                                <option>Pilih warna</option>
                                                                <option value="Tan">Tan</option>
                                                                <option value="Cokelat">Cokelat</option>
                                                                <option value="Hitam">Hitam</option>
                                                            </select>
                                                    </div> 
                                                        <div class="col-md-5">
                                                            <p style="font-family: Poppins; font-style: normal; font-weight: 500; font-size: 20px; line-height: 30px; display: flex; align-items: center; color: #000000;">Berat</p> 
                                                            <table>
                                                                <td>
                                                                    <tr><p>100 Gram</p></tr>
                                                                    <input type="text" style="display:none" name="berat" value="70 ">
                                                                    <td></td>
                                                                </td>
                                                            </table>
                                                        </div>
                                                </div>   
                                                </div> 
                                                <!-- row akhir atribut -->
                                                <div class="col-md-12 text-right">
                                                    <div class="container">
                                                    <button class=" btn btn-warning" name ="test1" type="submit" aria-hidden="true">Beli Sekarang</button>
                                                </form>
                                                <!-- akhir form post -->
                                                    </div>
                                                </div>
                                                </div>
                                            </div>
                                        <div class="row container">
                                            <div class="col-md-6 text-left mb-5">
                                                <h5>Deskripsi</h3>
                                                <p style="white-space: pre-wrap;">‼️MOHON TANYA STOCK DULU YA SEBELUM ORDER‼️</p>
                                                <p style="white-space: pre-wrap;">Hallo kali ini Balesupply mengadakan paket hemat jempol polos dan jempol raya dewasa</p>
                                                <p style="white-space: pre-wrap;">Detail :</p>
                                                <p style="white-space: pre-wrap">Panjang : 32 cm</p>
                                                <p style="white-space: pre-wrap">Bahan : Nylon Spandek</p>
                                                <p style="white-space: pre-wrap">Notes:</p>
                                                <p style="white-space: pre-wrap">Bisa Request motif dan warna campur</p>
                                            </div>

                                            <div class="col-md-5 justify-content-center">
                                                <div class="row text-center">
                                                    <div class="col-md-12 d-flex justify-content-center mt-2">
                                                        <h5>Hubungi Customer Service kami</h5>
                                                    </div>
                                                    <div class="col-md-12 d-flex justify-content-center p-2">
                                                        <div class="card " style="width:300px; height:344px; position:initial; border-radius: 30px; background: #FAFAFA; box-shadow: 0px -7px 80px rgba(0, 0, 0, 0.07), 0px -2.92443px 33.4221px rgba(0, 0, 0, 0.0503198), 0px -1.56354px 17.869px rgba(0, 0, 0, 0.0417275), 0px -0.876509px 10.0172px rgba(0, 0, 0, 0.035), 0px -0.465507px 5.32008px rgba(0, 0, 0, 0.0282725), 0px -0.193708px 2.21381px rgba(0, 0, 0, 0.0196802);">
                                                            <img src="<?php echo base_url('assets/img/support 1.png') ?>" class="card-img-right" alt="...">
                                                                <div class="card-body">
                                                                    <a href="https://api.whatsapp.com/send?phone=62895354997040&text=Saya%20membeli : %20%0ADengan%20Jumlah : %0AVarian : %0Aukuran : %20%0Adengan%20harga : %0A">
                                                                    <button type="button" class="btn btn-outline-warning" aria-hidden="true"><i class="fa fa-user" aria-hidden="true"></i>  Hubungi Customer Service</button></a>
                                                                </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                        </div>
                                    </div>
                                </div>   
                            </div>
        </div>        
    </div>
    <!-- akhir modal 5 -->
    <!-- modal 6 -->
    <div class="modal fade" id="mdl_produk6" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-xl">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLabel"></h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body">       
                                <div class="container">
                                    <div class="row">
                                            <div class="col-md-5 text-center">
                                                <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
                                                    <div class="carousel-inner">
                                                    <div class="carousel-item active">
                                                        <img class="d-block w-100" src="<?php echo base_url().'assets/gambar_utama/cDEucG5n.png'  ?>"  alt="First slide">
                                                        </div>
                                                        <div class="carousel-item">
                                                        <!-- <img class="d-block w-100" src="<?php echo base_url().'assets/gambar_samping/' ?>"  alt="Second slide"> -->
                                                        </div>
                                                        <div class="carousel-item">
                                                        <!-- <img class="d-block w-100" src="<?php echo base_url().'assets/gambar_atas/'  ?>"  alt="Third slide"> -->
                                                        </div>
                                                    </div>
                                                    <a class="carousel-control-prev" href="#carouselExampleControls " role="button" data-slide="prev">
                                                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                                        <span class="sr-only">Previous</span>
                                                    </a>
                                                    <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
                                                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                                        <span class="sr-only">Next</span>
                                                    </a>
                                                </div>
                                               
                                            </div>

                                           
                                        <div class="col-md-7 text-left">
                                        <!-- awal form post -->
                                        <form action="<?php echo base_url('konfirmasii'); ?>" method="POST">
                                                <p style="left: 666px; top: 333px; font-family: Poppins; font-style: normal; font-weight: normal; font-size: 30px; line-height: 52px; color: #222222;">PLISKET FULL CERUTY TANPA GARIS TENGAH PASHMINA - Coin</p>
                                                <input type="text" style="display:none" name="nama_pdk" value="Bergo Khalisa / Bergo Maryam /Bergo Lasercut - Navy">
                                                <b style="font-family: Poppins; font-style: normal; font-weight: 600; font-size: 45px; line-height: 75px; display: flex; align-items: center; color: #000000;">Rp.60.900 </b>
                                                <input type="text" style="display:none" name="harga" value="60900" > 
                                            <!-- row atribut -->
                                            <div class="row mt-3">
                                                <div class="col-md-5">
                                                    <P style="font-family: Poppins; font-style: normal; font-weight: 500; font-size: 20px; line-height: 30px; display: flex; align-items: center; color: #000000;">ukuran</P>
                                                        <select class="form-control" name="ukuran">
                                                            <option>185x75cm (toleransi jahitan)</option>
                                                                <!-- <option value="36">36</option>
                                                                <option value="37">37</option>
                                                                <option value="38">39</option>
                                                                <option value="40">40</option>
                                                                <option value="41">41</option>
                                                                <option value="42">42</option>
                                                                <option value="43">43</option>
                                                             -->
                                                        </select> 
                                                </div>
                                                <div class="col-md-5" >
                                                    <p style="font-family: Poppins; font-style: normal; font-weight: 500; font-size: 20px; line-height: 30px; display: flex; align-items: center; color: #000000;">qty</p>
                                                
                                                            <select class="form-control" name="cek">
                                                                <option value="1">1</option>
                                                                <option value="2">2</option>
                                                                <option value="3">3</option>
                                                                <option value="4">4</option>
                                                                <option value="5">5</option>
                                                                <option value="6">6</option>
                                                                <option value="7">7</option>
                                                                <option value="8">8</option>
                                                                <option value="9">9</option>
                                                                <option value="10">10</option>
                                                                <option value="11">11</option>
                                                                <option value="12">12</option>
                                                            </select>

                                                </div>
                                            </div>
                                                <div class="row">
                                                    <div class="col-md-5">
                                                        <P style="font-family: Poppins; font-style: normal; font-weight: 500; font-size: 20px; line-height: 30px; display: flex; align-items: center; color: #000000;">Warna</P>
                                                            <select class="form-control" name="warna">
                                                                <option>Pilih warna</option>
                                                                <option value="Pink">Pink</option>
                                                                <option value="Ungu">Ungu</option>
                                                                <option value="Abu Abu">Abu Abu</option>
                                                            </select>
                                                    </div> 
                                                        <div class="col-md-5">
                                                            <p style="font-family: Poppins; font-style: normal; font-weight: 500; font-size: 20px; line-height: 30px; display: flex; align-items: center; color: #000000;">Berat</p> 
                                                            <table>
                                                                <td>
                                                                    <tr><p>100 Gram</p></tr>
                                                                    <input type="text" style="display:none" name="berat" value="70 ">
                                                                    <td></td>
                                                                </td>
                                                            </table>
                                                        </div>
                                                </div>   
                                                </div> 
                                                <!-- row akhir atribut -->
                                                <div class="col-md-12 text-right">
                                                    <div class="container">
                                                    <button class=" btn btn-warning" name ="test1" type="submit" aria-hidden="true">Beli Sekarang</button>
                                                </form>
                                                <!-- akhir form post -->
                                                    </div>
                                                </div>
                                                </div>
                                            </div>
                                        <div class="row container">
                                            <div class="col-md-6 text-left mb-5">
                                                <h5>Deskripsi</h3>
                                                <p style="white-space: pre-wrap;">‼️MOHON TANYA STOCK DULU YA SEBELUM ORDER‼️</p>
                                                <p style="white-space: pre-wrap;">Pashmina Plisket dengan bahan Ceruty Armany Babydoll high quality berserat khusus detail plisket full hingga ujung pashmina Karakter bahan tegak dipakai, tidak mudah kusut, tidak perlu disetrika</p>
                                                <p style="white-space: pre-wrap;">Detail ukuran Lebih panjang </p>
                                                <p style="white-space: pre-wrap;">185x75cm (toleransi jahitan)</p>
                                                <p style="white-space: pre-wrap;">Finishing Jahit Tepi Halus</p>
                                            </div>

                                            <div class="col-md-5 justify-content-center">
                                                <div class="row text-center">
                                                    <div class="col-md-12 d-flex justify-content-center mt-2">
                                                        <h5>Hubungi Customer Service kami</h5>
                                                    </div>
                                                    <div class="col-md-12 d-flex justify-content-center p-2">
                                                        <div class="card " style="width:300px; height:344px; position:initial; border-radius: 30px; background: #FAFAFA; box-shadow: 0px -7px 80px rgba(0, 0, 0, 0.07), 0px -2.92443px 33.4221px rgba(0, 0, 0, 0.0503198), 0px -1.56354px 17.869px rgba(0, 0, 0, 0.0417275), 0px -0.876509px 10.0172px rgba(0, 0, 0, 0.035), 0px -0.465507px 5.32008px rgba(0, 0, 0, 0.0282725), 0px -0.193708px 2.21381px rgba(0, 0, 0, 0.0196802);">
                                                            <img src="<?php echo base_url('assets/img/support 1.png') ?>" class="card-img-right" alt="...">
                                                                <div class="card-body">
                                                                    <a href="https://api.whatsapp.com/send?phone=62895354997040&text=Saya%20membeli : %20%0ADengan%20Jumlah : %0AVarian : %0Aukuran : %20%0Adengan%20harga : %0A">
                                                                    <button type="button" class="btn btn-outline-warning" aria-hidden="true"><i class="fa fa-user" aria-hidden="true"></i>  Hubungi Customer Service</button></a>
                                                                </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                        </div>
                                    </div>
                                </div>   
                            </div>
        </div>        
    </div>
    <!-- akhir modal 6 -->     
    <!--section pembatas  -->
    <section> 
        <div class="container" style="max-width: 1340px;">
			<img src="<?php echo base_url('assets/img/banner.jpg') ?>" class="img-fluid"  height="230px" width="100%" style="object-fit: cover;" loading="lazy" alt="">
        </div>    
    </section>
    <!-- Akhir Section pembatas -->
    <!-- section list produk -->
    <section>
		<div class="container mt-4" style="max-width: 1340px;">
			<!-- <div class="row" style="display">
				<div class="col-md-6 text-left">
						<a class="navbar-brand">Produk</a>
				</div>
				<div class="col-md-6 text-right">
					
						<form class="form-inline" action="" method="post">
							<input class="form-control mr-sm-2" type="text" name="keyword" id="keyword" placeholder="masukan keyword pencarian.." autocomplete="off" style="width: 281px; height: 50px; left: 1110px; top: 1933px; background: #FAFAFA; border: 1px solid #777777; box-sizing: border-box; border-radius: 50px;">
                            <button type="submit" style="display:none;" name="cari" id="tombol-cari">Cari</button>
								<div style="height:80px;border-radius:100%;color:blue;"></div>
							</input>
						</form>
					
				</div>
			</div>   -->
			<!-- Card -->
			<div class="row" id="container">
				<?php $no = $this->uri->segment('3') + 1;
                 foreach ($card as $pdk) : ?>
                    <div class="col-6 col-md-2 mt-2">
                        <a href="#" data-toggle="modal" data-target="#mdl_produkk<?php echo $pdk->id_produk ?>">
                        <div class="card_produk">
                            <div class="row">
								<div class="col-md-12">
									<img src="<?php echo base_url().'assets/gambar_utama/' .$pdk->foto_utama ?>" class="img-fluid"  style="width:100%;height:150px;object-fit: cover;" alt="Produk">
								</div>
								<div class="col-md-12 text-left m-2" style="position: relative;height:70px;font-family:Poppins">
									<span style="color: #222222; display:flex;overflow: hidden;text-overflow: ellipsis;-o-text-overflow: ellipsis;-moz-binding: url('assets/xml/ellipsis.xml#ellipsis');font-size:12px;margin-right:20px;max-height:40px"><?php echo $pdk->nama_produk ?></span>
									<br>
									<h5 style="position: absolute;bottom:0;font-weight:800;font-family:Poppins;font-size:13px;color:#000">Rp.<?php echo number_format ($pdk->harga) ?></h5>
								</div>
							</div>
						</div>
                        </a>
					</div>
					<!-- Akhir Colom  -->

				    <!-- Awal Modal -->
                    <div class="modal fade" id="mdl_produkk<?php echo $pdk->id_produk ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog modal-xl">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalLabel"></h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <div class="modal-body">
                                      
                                    <div class="container">
                                        <div class="row">
                                                <div class="col-md-5 text-center">
                                                    <div id="carouselExampleControls<?php echo $pdk->id_produk ?>" class="carousel slide" data-ride="carousel">
                                                    
                                                        <div class="carousel-inner">
                                                            <div class="carousel-item active">
                                                            <img class="d-block w-100" src="<?php echo base_url().'assets/gambar_utama/' .$pdk->foto_utama ?>"  alt="First slide">
                                                            <input type="text" style="display:none" name="gambar" value="<?php echo $pdk->foto_utama ?>"> 
                                                            </div>
                                                            <!-- <div class="carousel-item">
                                                            <img class="d-block w-100" src="<?php echo base_url().'assets/gambar_samping/' .$pdk->foto_samping ?>"  alt="Second slide">
                                                            </div>
                                                            <div class="carousel-item">
                                                            <img class="d-block w-100" src="<?php echo base_url().'assets/gambar_atas/' .$pdk->foto_atas ?>"  alt="Third slide">
                                                            </div> -->
                                                        </div>
                                                        <a class="carousel-control-prev" href="#carouselExampleControls<?php echo $pdk->id_produk ?>" role="button" data-slide="prev">
                                                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                                            <span class="sr-only">Previous</span>
                                                        </a>
                                                        <a class="carousel-control-next" href="#carouselExampleControls<?php echo $pdk->id_produk ?>" role="button" data-slide="next">
                                                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                                            <span class="sr-only">Next</span>
                                                        </a>
                                                    </div>
                                                    <!-- <img src="<?php echo base_url().'assets/gambar_utama/' .$pdk->foto_utama ?>" class="img-fluid" alt="..."> -->
                                                </div>

                                            <!-- konfirmasi pembelian -->
                                            <div class="col-md-7 text-left">

                                            <!--Form konfirmasi pembelian -->
                                            <form action="<?php echo base_url('konfirmasi'); ?>" method="POST">
                                                    <p style="left: 666px; top: 333px; font-family: Poppins; font-style: normal; font-weight: normal; font-size: 30px; line-height: 52px; color: #222222;"><?php echo $pdk->nama_produk ?></p>
                                                    <input type="text" style="display:none" name="nama_pdk" value="<?php echo $pdk->nama_produk ?>">
                                                    <b style="font-family: Poppins; font-style: normal; font-weight: 600; font-size: 45px; line-height: 75px; display: flex; align-items: center; color: #000000;">Rp.<?php echo number_format ($pdk->harga) ?> </b>
                                                    <input type="text" style="display:none" name="harga" value="<?php echo $pdk->harga ?>"> 
                                                <!-- row atribut -->
                                                <div class="row mt-3">
                                                    <div class="col-md-5">
                                                        <P style="font-family: Poppins; font-style: normal; font-weight: 500; font-size: 20px; line-height: 30px; display: flex; align-items: center; color: #000000;">ukuran</P>
                                                            <select class="form-control" name="ukuran" required>
                                                                <option>Pilih ukuran/optional</option>
																<option value="S">S</option>
																<option value="M">M</option>
																<option value="L">L</option>
                                                                <option value="XL">XL</option>
                                                                <option value="36">36</option>
                                                                <option value="37">37</option>
                                                                <option value="38">39</option>
                                                                <option value="40">40</option>
                                                                <option value="41">41</option>
                                                                <option value="42">42</option>
                                                                <option value="43">43</option>

                                                            </select> 
                                                    </div>
                                                    <div class="col-md-5"  >
                                                        <p style="font-family: Poppins; font-style: normal; font-weight: 500; font-size: 20px; line-height: 30px; display: flex; align-items: center; color: #000000;">qty</p>
                                                            
                                                                <select class="form-control" name="cek" required>
                                                                    <option value="1">1</option>
                                                                    <option value="2">2</option>
                                                                    <option value="3">3</option>
                                                                    <option value="4">4</option>
                                                                    <option value="5">5</option>
                                                                    <option value="6">6</option>
                                                                    <option value="7">7</option>
                                                                    <option value="8">8</option>
                                                                    <option value="9">9</option>
                                                                    <option value="10">10</option>
                                                                    <option value="11">11</option>
                                                                    <option value="12">12</option>
                                                                </select>
                                                              
                                                    </div>
                                                    
                                                </div>
                                                    <div class="row">
                                                        <div class="col-md-5">
                                                            <P style="font-family: Poppins; font-style: normal; font-weight: 500; font-size: 20px; line-height: 30px; display: flex; align-items: center; color: #000000;">Warna</P>
                                                                <select class="form-control" name="warna" required>
                                                                    <option>Pilih warna</option>
																	<option value="Maroon">Maroon</option>
																	<option value="Hitam">Hitam</option>
                                                                    <option value="Kuning">Kuning</option>
                                                                    <option value="Cokelat">Cokelat</option>
                                                                    <option value="Biru">Biru</option>

                                                                </select>
                                                        </div> 
                                                            <div class="col-md-5">
                                                                <p style="font-family: Poppins; font-style: normal; font-weight: 500; font-size: 20px; line-height: 30px; display: flex; align-items: center; color: #000000;">Berat</p> 
                                                                <table>
                                                                    <td>
                                                                        <tr><p><?php echo $pdk->berat ?> Gram</p></tr>
                                                                        <input type="text" style="display:none" name="berat" value="<?php echo $pdk->berat ?>">
                                                                    </td>
                                                                </table>
                                                            </div>
                                                    </div>   
                                                    </div> 
                                                    <!-- row akhir atribut -->
                                                    <div class="col-md-12 text-right">
                                                        <div class="container">
                                                            <!-- Button beli sekarang -->
                                                            <button class=" btn btn-warning" name ="test" type="submit" aria-hidden="true">Beli Sekarang</button>
                                                </form>
                                                <!--Form konfirmasi pembelian -->

                                                        </div>
                                                    </div>
                                                    </div>
                                                </div>
                                            <div class="row container">
                                                <div class="col-md-6 text-left mb-5">
                                                    <h5>Deskripsi</h3>
                                                    <p style="white-space: pre-wrap;"><?php echo $pdk->deskripsi ?></p>
                                                </div>

                                                <div class="col-md-5 justify-content-center">
                                                    <div class="row text-center">
                                                        <div class="col-md-12 d-flex justify-content-center mt-2">
                                                            <h5>Hubungi Customer Service kami</h5>
                                                        </div>
                                                        <div class="col-md-12 d-flex justify-content-center p-2">
                                                            <div class="card " style="width:300px; height:344px; position:initial; border-radius: 30px; background: #FAFAFA; box-shadow: 0px -7px 80px rgba(0, 0, 0, 0.07), 0px -2.92443px 33.4221px rgba(0, 0, 0, 0.0503198), 0px -1.56354px 17.869px rgba(0, 0, 0, 0.0417275), 0px -0.876509px 10.0172px rgba(0, 0, 0, 0.035), 0px -0.465507px 5.32008px rgba(0, 0, 0, 0.0282725), 0px -0.193708px 2.21381px rgba(0, 0, 0, 0.0196802);">
                                                                <img src="<?php echo base_url('assets/img/support 1.png') ?>" class="card-img-right" alt="...">
                                                                    <div class="card-body">
                                                                        <!-- <a href="https://api.whatsapp.com/send?phone=62895354997040&text=Saya%20membeli : <?php echo $pdk->nama_produk?>%20%0ADengan%20Jumlah : %0AVarian : <?php echo $jon->isi_varian ?>%0Aukuran : <?php echo $jon->isi_varian ?>%20%0Adengan%20harga : <?php echo $pdk->harga?>%0A"></a> -->

                                                                        <a href="https://api.whatsapp.com/send?phone=62895354997040&text=hallo%20%0Akami%20membutuhkan%20bantuan%20dari%20kaka%20admin%20terkait%20pembelian%20dan%20sebagai%20nya"><button type="button" class="btn btn-outline-warning" aria-hidden="true"><i class="fa fa-user" aria-hidden="true"></i>  Hubungi Customer Service</button></a>
                                                                    </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>

                                            </div>
                                        </div>
                                    </div>   
                                </div>
                            </div>
                            <?php endforeach ?>      
                        </div>
                        <!-- <div class="mt-3">
                            <nav aria-label="Page navigation example">
                                <ul class="pagination">
                                    <li class="page-item">
                                    <a class="page-link" href="#" aria-label="Previous">
                                        <span aria-hidden="true">&laquo;</span>
                                        <span class="sr-only">Previous</span>
                                    </a>
                                    </li>
                                    <li class="page-item"><a class="page-link" href="#">1</a></li>
                                    <li class="page-item"><a class="page-link" href="#">2</a></li>
                                    <li class="page-item"><a class="page-link" href="#">3</a></li>
                                    <li class="page-item">
                                    <a class="page-link" href="#" aria-label="Next">
                                        <span aria-hidden="true">&raquo;</span>
                                        <span class="sr-only">Next</span>
                                    </a>
                                    </li>
                                </ul>
                            </nav> 
                        </div> -->
                    </div>
				<!-- Akhir Modal -->
                
			</div>
			<?= $this->pagination->create_links(); ?>
			<!-- Akhir Card -->
               
            </div>
        </div>
    </section>
    <!-- Akhir list produk -->
    <!-- section belanja  -->
    <section class="mb-5 mt-5">
		<div class="container text-center" style="max-width: 1340px;">
		<!-- Cara Berbelanja -->
			<div class="row">
				<div class="col-md-12 text-center">
					<h6 style="left: 53px; top: 3583px; font-family: Poppins; font-style: normal; font-weight: 600; font-size: 30px; line-height: 45px; align-items: center; text-align: center; color: #000000; text-shadow: 0px 99px 280px rgba(253, 217, 34, 0.17), 0px 41.3598px 116.977px rgba(253, 217, 34, 0.122205), 0px 22.1129px 62.5417px rgba(253, 217, 34, 0.101338), 0px 12.3963px 35.0603px rgba(253, 217, 34, 0.085), 0px 6.5836px 18.6203px rgba(253, 217, 34, 0.0686618), 0px 2.73958px 7.74832px rgba(253, 217, 34, 0.0477948);">Cara Berbelanja</h6>
					<!-- <hr style="width: 80px;"> -->
				</div>
				<div class=" col-md-6" data-aos="fade-up" data-aos-duration="3000">
					<img class="img-fluid d-flex justify-content-center" src="<?php echo base_url('assets/img/cara_belanja.png') ?>" style="width:600px"  alt="...">
				</div>
				<div class="col-md-6">
					<div style="margin-top:15%;margin-bottom:5%">
						<h5 style="color:#015EB6;font-weight: 600;" class="text-left">Beginilah Cara Belanja Dengan Mudah</h5>
						<br>
						<table>
							<tr style="transform:translateY(10px);">
								<td>
									<div style="color:#015EB6; border-radius:100%; width: 30px; height: 30px; left: 740px; top: 3906px; background: #FFFFFF; box-shadow: 0px 28px 80px rgba(0, 0, 0, 0.11), 0px 11.6977px 33.4221px rgba(0, 0, 0, 0.079074), 0px 6.25417px 17.869px rgba(0, 0, 0, 0.0655718), 0px 3.50603px 10.0172px rgba(0, 0, 0, 0.055), 0px 1.86203px 5.32008px rgba(0, 0, 0, 0.0444282), 0px 0.774832px 2.21381px rgba(0, 0, 0, 0.030926);">1</div>
								</td>
								<td></td>
								<td style="font-family: Poppins; font-style: normal; font-weight: 300; font-size: 18px; line-height: 27px; display: flex; align-items: flex-end; color: #015EB6;">Pilih produk</td>
							</tr>
							<tr style="transform:translateY(20px);">
								<td>
									<div style="color:#015EB6; border-radius:100%; width: 30px; height: 30px; left: 740px; top: 3906px; background: #FFFFFF; box-shadow: 0px 28px 80px rgba(0, 0, 0, 0.11), 0px 11.6977px 33.4221px rgba(0, 0, 0, 0.079074), 0px 6.25417px 17.869px rgba(0, 0, 0, 0.0655718), 0px 3.50603px 10.0172px rgba(0, 0, 0, 0.055), 0px 1.86203px 5.32008px rgba(0, 0, 0, 0.0444282), 0px 0.774832px 2.21381px rgba(0, 0, 0, 0.030926);">2</div>
								</td>
								<td></td>
								<td style="font-family: Poppins; font-style: normal; font-weight: 300; font-size: 18px; line-height: 27px; display: flex; align-items: flex-end; color: #015EB6;">Baca deskripsi</td>
							</tr>
							<tr style="transform:translateY(30px);">
								<td>
									<div style="color:#015EB6; border-radius:100%; width: 30px; height: 30px; left: 740px; top: 3906px; background: #FFFFFF; box-shadow: 0px 28px 80px rgba(0, 0, 0, 0.11), 0px 11.6977px 33.4221px rgba(0, 0, 0, 0.079074), 0px 6.25417px 17.869px rgba(0, 0, 0, 0.0655718), 0px 3.50603px 10.0172px rgba(0, 0, 0, 0.055), 0px 1.86203px 5.32008px rgba(0, 0, 0, 0.0444282), 0px 0.774832px 2.21381px rgba(0, 0, 0, 0.030926);">3</div>
								</td>
								<td></td>
								<td style="font-family: Poppins; font-style: normal; font-weight: 300; font-size: 18px; line-height: 27px; display: flex; align-items: flex-end; color: #015EB6;">Tentukan Jumlah QTY</td>
							</tr>

						</table>
					</div>
				</div>
				<div class="col-md-12" style="margin-top:5%">
					<P style="left: 53px; top: 3583px; font-family: Poppins; font-style: normal; font-weight: 600; font-size: 30px; line-height: 45px; align-items: center; text-align: center; color: #000000; text-shadow: 0px 99px 280px rgba(253, 217, 34, 0.17), 0px 41.3598px 116.977px rgba(253, 217, 34, 0.122205), 0px 22.1129px 62.5417px rgba(253, 217, 34, 0.101338), 0px 12.3963px 35.0603px rgba(253, 217, 34, 0.085), 0px 6.5836px 18.6203px rgba(253, 217, 34, 0.0686618), 0px 2.73958px 7.74832px rgba(253, 217, 34, 0.0477948);">Cara Bertransaksi</p>
					<!-- <hr style="width: 70px;"> -->
				</div>
			</div>
			<!-- Transaksi -->
			<div class="row flex-column-reverse flex-lg-row">
				<div class="col-md-2"></div>
				<div class="col-md-4">
						<div style="margin-top:30%;margin-bottom:5%">
							<h5 style="color:#015EB6;;font-weight:600" class="text-left">Beginilah Cara Bertransaksi Dengan Aman</h5>
							<table > 
								<tr style="transform:translateY(10px);">
									<td>
										<div style="color:#015EB6; border-radius:100%; width: 30px; height: 30px; left: 740px; top: 3906px; background: #FFFFFF; box-shadow: 0px 28px 80px rgba(0, 0, 0, 0.11), 0px 11.6977px 33.4221px rgba(0, 0, 0, 0.079074), 0px 6.25417px 17.869px rgba(0, 0, 0, 0.0655718), 0px 3.50603px 10.0172px rgba(0, 0, 0, 0.055), 0px 1.86203px 5.32008px rgba(0, 0, 0, 0.0444282), 0px 0.774832px 2.21381px rgba(0, 0, 0, 0.030926);">1</div>
									</td>
									<td></td>
									<td style="font-family: Poppins; font-style: normal; font-weight: 300; line-height: 27px; display: flex; align-items: flex-end; color: #015EB6;">Tentukan lokasi penerima</td>
								</tr>
								<tr style="transform:translateY(20px);">
									<td>
										<div style="color:#015EB6; border-radius:100%; width: 30px; height: 30px; left: 740px; top: 3906px; background: #FFFFFF; box-shadow: 0px 28px 80px rgba(0, 0, 0, 0.11), 0px 11.6977px 33.4221px rgba(0, 0, 0, 0.079074), 0px 6.25417px 17.869px rgba(0, 0, 0, 0.0655718), 0px 3.50603px 10.0172px rgba(0, 0, 0, 0.055), 0px 1.86203px 5.32008px rgba(0, 0, 0, 0.0444282), 0px 0.774832px 2.21381px rgba(0, 0, 0, 0.030926);">2</div>
									</td>
									<td></td>
									<td style="font-family: Poppins; font-style: normal; font-weight: 300;line-height: 27px; display: flex; align-items: flex-end; color: #015EB6;">Tentukan metode pembayaran</td>
								</tr>
								<tr style="transform:translateY(30px);">
									<td>
										<div style="color:#015EB6; border-radius:100%; width: 30px; height: 30px; left: 740px; top: 3906px; background: #FFFFFF; box-shadow: 0px 28px 80px rgba(0, 0, 0, 0.11), 0px 11.6977px 33.4221px rgba(0, 0, 0, 0.079074), 0px 6.25417px 17.869px rgba(0, 0, 0, 0.0655718), 0px 3.50603px 10.0172px rgba(0, 0, 0, 0.055), 0px 1.86203px 5.32008px rgba(0, 0, 0, 0.0444282), 0px 0.774832px 2.21381px rgba(0, 0, 0, 0.030926);">3</div>
									</td>
									<td></td>
									<td style="font-family: Poppins; font-style: normal; font-weight: 300; line-height: 27px; display: flex; align-items: flex-end; color: #015EB6;">Pembeli akan menerima resi</td>
								</tr>
							</table>
						</div>
				</div>
				<div class="col-md-6" data-aos="fade-down" data-aos-duration="1500">  
					<img src="<?php echo base_url('assets/img/cara_transaksi.png') ?>" style="width:600px" class="img-fluid d-flex justify-content-center"  alt="...">
				</div>
			</div>
        </div>
    </section>
	<!-- akhir section belanja  -->
	<!-- Paralax -->
	<section>
		<div class="container" style="max-width: 1340px;">
			<div class="paralax">

			</div>
		</div>
	</section>
	<!-- Akhir Paralax -->

    <!-- Lazy -->
    <!-- <script type="text/javascript" charset="utf-8">
        $(function() {
            $("img.lazy").lazyload({
                effect : "fadeIn"
            });

        });
    </script> -->


    <!-- lazyload -->
    <!-- <script  type="text/javascript" charset="utf-8">
              document.addEventListener("DOMContentLoaded", function() {
                var lazyloadImages = document.querySelectorAll("img.lazy");    
                var lazyloadThrottleTimeout;

                function lazyload () {
                    if(lazyloadThrottleTimeout) {
                        clearTimeout(lazyloadThrottleTimeout);
                    }    

                    lazyloadThrottleTimeout = setTimeout(function() {
                        var scrollTop = window.pageYOffset;
                        lazyloadImages.forEach(function(img) {
                            if(img.offsetTop < (window.innerHeight + scrollTop)) {
                                img.src = img.dataset.src;
                                img.classList.remove('lazy');
                            }
                        });
                        if(lazyloadImages.length == 0) { 
                            document.removeEventListener("scroll", lazyload);
                            window.removeEventListener("resize", lazyload);
                            window.removeEventListener("orientationChange", lazyload);
                        }
                    }, 20);
                }

                document.addEventListener("scroll", lazyload);
                window.addEventListener("resize", lazyload);
                window.addEventListener("orientationChange", lazyload);
            });
    </script> -->

    <!-- script live search -->
    <script src="<?php echo base_url('assets/js/script.js'); ?>"></script>
    
    <!-- footer  -->
    <?php $this->load->view('partial/footer') ?>
    
    

    <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns" crossorigin="anonymous"></script>

    
  </body>

