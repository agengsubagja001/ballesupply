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
				<!-- Rekomendasi 3 -->
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
				<!-- Rekomendasi 4 -->
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
				<!-- Rekomendasi 5 -->
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
				<!-- Rekemondasi 6 -->
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
                                                        <img class="d-block w-100" src="<?php echo base_url().'assets/gambar_samping/bergo2.jpg' ?>"  alt="Second slide">
                                                        </div>
                                                        <div class="carousel-item">
                                                        <img class="d-block w-100" src="<?php echo base_url().'assets/gambar_atas/bergo3.jpg'  ?>"  alt="Third slide">
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
                                                <!-- <img src="<?php echo base_url().'assets/gambar_utama/' ?>" class="img-fluid" alt="..."> -->
                                            </div>

                                           
                                        <div class="col-md-7 text-left">
                                        <!-- awal form post -->
                                        <form action="<?php echo base_url('konfirmasii'); ?>" method="POST">
                                                <p style="left: 666px; top: 333px; font-family: Poppins; font-style: normal; font-weight: normal; font-size: 30px; line-height: 52px; color: #222222;">Bergo Khalisa / Bergo Maryam /Bergo Lasercut - Navy</p>
                                                <input type="text" style="display:none" name="nama_pdk" value="Bergo Khalisa / Bergo Maryam /Bergo Lasercut - Navy">
                                                <b style="font-family: Poppins; font-style: normal; font-weight: 600; font-size: 45px; line-height: 75px; display: flex; align-items: center; color: #000000;">Rp.33.000 </b>
                                                <input type="text" style="display:none" name="harga" value="33.000"> 
                                            <!-- row atribut -->
                                            <div class="row mt-3">
                                                <div class="col-md-5">
                                                    <P style="font-family: Poppins; font-style: normal; font-weight: 500; font-size: 20px; line-height: 30px; display: flex; align-items: center; color: #000000;">ukuran</P>
                                                        <select class="form-control" name="ukuran">
                                                            <option>Pilih ukuran</option>
                                                            
                                                                <option>-</option>
                                                            
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
                                                        <img class="d-block w-100" src="<?php echo base_url().'assets/gambar_samping/derby2.jpg' ?>"  alt="Second slide">
                                                        </div>
                                                        <div class="carousel-item">
                                                        <img class="d-block w-100" src="<?php echo base_url().'assets/gambar_atas/derby3.jpg'  ?>"  alt="Third slide">
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
                                                <!-- <img src="<?php echo base_url().'assets/gambar_utama/' ?>" class="img-fluid" alt="..."> -->
                                            </div>
                                        <div class="col-md-7 text-left">
                                                <p style="left: 666px; top: 333px; font-family: Poppins; font-style: normal; font-weight: normal; font-size: 30px; line-height: 52px; color: #222222;">SEPATU PRIA DERBY SINTESIS - 40</p>
                                                <b style="font-family: Poppins; font-style: normal; font-weight: 600; font-size: 45px; line-height: 75px; display: flex; align-items: center; color: #000000;">Rp.139.000 </b> 
                                            <!-- row atribut -->
                                            <div class="row mt-3">
                                                <div class="col-md-5">
                                                    <P style="font-family: Poppins; font-style: normal; font-weight: 500; font-size: 20px; line-height: 30px; display: flex; align-items: center; color: #000000;">ukuran</P>
                                                        <select class="form-control" name="ukuran">
                                                            <option>Pilih ukuran</option>
                                                                <option>36</option>
                                                                <option>37</option>
                                                                <option>38</option>
                                                                <option>39</option>
                                                                <option>40</option>
                                                                <option>41</option>
                                                                <option>42</option>
                                                                <option>43</option>
                                                                <option>44</option>
                                                                <option>45</option>
                                                                <option>46</option>
                                                            
                                                        </select> 
                                                </div>
                                                <div class="col-md-5" >
                                                    <p style="font-family: Poppins; font-style: normal; font-weight: 500; font-size: 20px; line-height: 30px; display: flex; align-items: center; color: #000000;">qty</p>
                                                        <form action="" >
                                                            
                                                                    <!-- <button style="border-radius:100%; width: 30px; height: 30px; left: 740px; top: 3906px; background: #FFFFFF; box-shadow: 0px 28px 80px rgba(0, 0, 0, 0.11), 0px 11.6977px 33.4221px rgba(0, 0, 0, 0.079074), 0px 6.25417px 17.869px rgba(0, 0, 0, 0.0655718), 0px 3.50603px 10.0172px rgba(0, 0, 0, 0.055), 0px 1.86203px 5.32008px rgba(0, 0, 0, 0.0444282), 0px 0.774832px 2.21381px rgba(0, 0, 0, 0.030926);" class="qtyminus" aria-hidden="true">&minus;</button> -->
                                                                        <!-- <input type="text" style="" id="nmbr" name="nmbr" value="0"/> -->
                                                                        <!-- <span class="badge badge-pill badge-danger" id="hasill" style="">0</span><input type="text" style="display:none" id="nmbr1" value="0"/> -->
                                                                    <!-- <button style="border-radius:100%; width: 30px; height: 30px; left: 740px; top: 3906px; background: #FFFFFF; box-shadow: 0px 28px 80px rgba(0, 0, 0, 0.11), 0px 11.6977px 33.4221px rgba(0, 0, 0, 0.079074), 0px 6.25417px 17.869px rgba(0, 0, 0, 0.0655718), 0px 3.50603px 10.0172px rgba(0, 0, 0, 0.055), 0px 1.86203px 5.32008px rgba(0, 0, 0, 0.0444282), 0px 0.774832px 2.21381px rgba(0, 0, 0, 0.030926);" class="qtyplus" aria-hidden="true">&plus;</button> -->
                                                                <!-- <button class="btn btn-warning" onclick="incrementValue()" value="plus">cek </button> -->
                                                                                <!-- <input style="color:#015EB6; border-radius:100%; width: 30px; height: 30px; left: 740px; top: 3906px; background: #FFFFFF; box-shadow: 0px 28px 80px rgba(0, 0, 0, 0.11), 0px 11.6977px 33.4221px rgba(0, 0, 0, 0.079074), 0px 6.25417px 17.869px rgba(0, 0, 0, 0.0655718), 0px 3.50603px 10.0172px rgba(0, 0, 0, 0.055), 0px 1.86203px 5.32008px rgba(0, 0, 0, 0.0444282), 0px 0.774832px 2.21381px rgba(0, 0, 0, 0.030926);" type="button" onclick="incrementValuein()" value="-" />
                                                                                    <span class="" id="hasi"></span><input type="text" style="display:block" id="number" value="1"/>
                                                                                    <input type="number">
                                                                                    <button type="button" class="tambahh" onclick="tambahdata()">tambahh</button>
                                                                                    <button type="button" class="tambah" >tambah</button>
                                                                                    <span class="hasil">0</span>
                                                                                <input style="color:#015EB6; border-radius:100%; width: 30px; height: 30px; left: 740px; top: 3906px; background: #FFFFFF; box-shadow: 0px 28px 80px rgba(0, 0, 0, 0.11), 0px 11.6977px 33.4221px rgba(0, 0, 0, 0.079074), 0px 6.25417px 17.869px rgba(0, 0, 0, 0.0655718), 0px 3.50603px 10.0172px rgba(0, 0, 0, 0.055), 0px 1.86203px 5.32008px rgba(0, 0, 0, 0.0444282), 0px 0.774832px 2.21381px rgba(0, 0, 0, 0.030926);" type="button" onclick="incrementValue()" value="+" /> -->
                                                            <select class="form-control" name="qty">
                                                                <option>1</option>
                                                                <option>2</option>
                                                                <option>3</option>
                                                                <option>4</option>
                                                                <option>5</option>
                                                                <option>6</option>
                                                                <option>7</option>
                                                                <option>8</option>
                                                                <option>9</option>
                                                                <option>10</option>
                                                                <option>11</option>
                                                                <option>12</option>
                                                            </select>
                                                            <input type="submit"/>
                                                        </form>
                                                </div>
                                            </div>
                                                <div class="row">
                                                    <div class="col-md-5">
                                                        <P style="font-family: Poppins; font-style: normal; font-weight: 500; font-size: 20px; line-height: 30px; display: flex; align-items: center; color: #000000;">Warna</P>
                                                            <select class="form-control" name="warna">
                                                                <option>Pilih warna</option>
                                                                <option>Tan</option>
                                                                <option>Cokelat</option>
                                                                <option>Hitam</option>
                                                            </select>
                                                    </div> 
                                                        <div class="col-md-5">
                                                            <p style="font-family: Poppins; font-style: normal; font-weight: 500; font-size: 20px; line-height: 30px; display: flex; align-items: center; color: #000000;">Berat</p> 
                                                            <table>
                                                                <td>
                                                                    <tr><p>1000 Gram</p></tr>
                                                                    <td></td>
                                                                </td>
                                                            </table>
                                                        </div>
                                                </div>   
                                                </div> 
                                                <!-- row akhir atribut -->
                                                <div class="col-md-12 text-right">
                                                    <div class="container">
                                                        <a href="https://api.whatsapp.com/send?phone=62895354997040&text=Saya%20membeli : %20%0ADengan%20Jumlah : %0AVarian : %0Aukuran : %20%0Adengan%20harga : %0A"  class=" btn btn-warning" type="submit"  onclick="incrementValue()" id="hasil" value="plus" aria-hidden="true"><i class="fa fa-shopping-cart"></i>tambahkan ke troli</a>
                                                    </div>
                                                </div>
                                                </div>
                                            </div>
                                        <div class="row container">
                                            <div class="col-md-6 text-left mb-5">
                                                <h5>Deskripsi</h3>
                                                <p style="white-space: pre-wrap;">Kondisi: Baru</p>
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
                                                        <img class="d-block w-100" src="<?php echo base_url().'assets/gambar_utama/'  ?>"  alt="First slide">
                                                        </div>
                                                        <div class="carousel-item">
                                                        <img class="d-block w-100" src="<?php echo base_url().'assets/gambar_samping/' ?>"  alt="Second slide">
                                                        </div>
                                                        <div class="carousel-item">
                                                        <img class="d-block w-100" src="<?php echo base_url().'assets/gambar_atas/'  ?>"  alt="Third slide">
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
                                                <!-- <img src="<?php echo base_url().'assets/gambar_utama/' ?>" class="img-fluid" alt="..."> -->
                                            </div>
                                        <div class="col-md-7 text-left">
                                                <p style="left: 666px; top: 333px; font-family: Poppins; font-style: normal; font-weight: normal; font-size: 30px; line-height: 52px; color: #222222;">MUKENA SLIM PREMIUM - VARIAN 1</p>
                                                <b style="font-family: Poppins; font-style: normal; font-weight: 600; font-size: 45px; line-height: 75px; display: flex; align-items: center; color: #000000;">Rp.300.000</b> 
                                            <!-- row atribut -->
                                            <div class="row mt-3">
                                                <div class="col-md-5">
                                                    <P style="font-family: Poppins; font-style: normal; font-weight: 500; font-size: 20px; line-height: 30px; display: flex; align-items: center; color: #000000;">ukuran</P>
                                                        <select class="form-control" name="ukuran">
                                                            <option>Pilih ukuran</option>
                                                            
                                                                <option>-</option>
                                                            
                                                        </select> 
                                                </div>
                                                <div class="col-md-5" >
                                                    <p style="font-family: Poppins; font-style: normal; font-weight: 500; font-size: 20px; line-height: 30px; display: flex; align-items: center; color: #000000;">qty</p>
                                                        <form >
                                                            
                                                                    <button style="border-radius:100%; width: 30px; height: 30px; left: 740px; top: 3906px; background: #FFFFFF; box-shadow: 0px 28px 80px rgba(0, 0, 0, 0.11), 0px 11.6977px 33.4221px rgba(0, 0, 0, 0.079074), 0px 6.25417px 17.869px rgba(0, 0, 0, 0.0655718), 0px 3.50603px 10.0172px rgba(0, 0, 0, 0.055), 0px 1.86203px 5.32008px rgba(0, 0, 0, 0.0444282), 0px 0.774832px 2.21381px rgba(0, 0, 0, 0.030926);" class="qtyminus" aria-hidden="true">&minus;</button> -->
                                                                        <input type="text" id="nmbr" name="nmbr" value="0"/>
                                                                        <span class="badge badge-pill badge-danger" id="hasill" style="">0</span><input type="text" style="display:none" id="nmbr1" value="0"/>
                                                                    <button style="border-radius:100%; width: 30px; height: 30px; left: 740px; top: 3906px; background: #FFFFFF; box-shadow: 0px 28px 80px rgba(0, 0, 0, 0.11), 0px 11.6977px 33.4221px rgba(0, 0, 0, 0.079074), 0px 6.25417px 17.869px rgba(0, 0, 0, 0.0655718), 0px 3.50603px 10.0172px rgba(0, 0, 0, 0.055), 0px 1.86203px 5.32008px rgba(0, 0, 0, 0.0444282), 0px 0.774832px 2.21381px rgba(0, 0, 0, 0.030926);" class="qtyplus" aria-hidden="true">&plus;</button> -->
                                                                <!-- <button class="btn btn-warning" onclick="incrementValue()" value="plus">cek </button> -->
                                                                                <!-- <input style="color:#015EB6; border-radius:100%; width: 30px; height: 30px; left: 740px; top: 3906px; background: #FFFFFF; box-shadow: 0px 28px 80px rgba(0, 0, 0, 0.11), 0px 11.6977px 33.4221px rgba(0, 0, 0, 0.079074), 0px 6.25417px 17.869px rgba(0, 0, 0, 0.0655718), 0px 3.50603px 10.0172px rgba(0, 0, 0, 0.055), 0px 1.86203px 5.32008px rgba(0, 0, 0, 0.0444282), 0px 0.774832px 2.21381px rgba(0, 0, 0, 0.030926);" type="button" onclick="incrementValuein()" value="-" />
                                                                                    <span class="" id="hasi"></span><input type="text" style="display:block" id="number" value="1"/>
                                                                                    <input type="number">
                                                                                    <button type="button" class="tambahh" onclick="tambahdata()">tambahh</button>
                                                                                    <button type="button" class="tambah" >tambah</button>
                                                                                    <span class="hasil">0</span>
                                                                                <input style="color:#015EB6; border-radius:100%; width: 30px; height: 30px; left: 740px; top: 3906px; background: #FFFFFF; box-shadow: 0px 28px 80px rgba(0, 0, 0, 0.11), 0px 11.6977px 33.4221px rgba(0, 0, 0, 0.079074), 0px 6.25417px 17.869px rgba(0, 0, 0, 0.0655718), 0px 3.50603px 10.0172px rgba(0, 0, 0, 0.055), 0px 1.86203px 5.32008px rgba(0, 0, 0, 0.0444282), 0px 0.774832px 2.21381px rgba(0, 0, 0, 0.030926);" type="button" onclick="incrementValue()" value="+" /> -->
                                                            <select class="form-select" name="" multiple="multiple">
                                                                <option>1</option>
                                                                <option>2</option>
                                                                <option>3</option>
                                                                <option>4</option>
                                                                <option>5</option>
                                                                <option>6</option>
                                                                <option>7</option>
                                                                <option>8</option>
                                                                <option>9</option>
                                                                <option>10</option>
                                                                <option>11</option>
                                                                <option>12</option>
                                                            </select>
                                                            <!-- <input type="submit"/> -->
                                                        </form>
                                                </div>
                                            </div>
                                                <div class="row">
                                                    <div class="col-md-5">
                                                        <P style="font-family: Poppins; font-style: normal; font-weight: 500; font-size: 20px; line-height: 30px; display: flex; align-items: center; color: #000000;">Warna</P>
                                                            <select class="form-control" name="warna">
                                                                <option>Pilih warna</option>
                                                                <option>Ungu</option>
                                                            </select>
                                                    </div> 
                                                        <div class="col-md-5">
                                                            <p style="font-family: Poppins; font-style: normal; font-weight: 500; font-size: 20px; line-height: 30px; display: flex; align-items: center; color: #000000;">Berat</p> 
                                                            <table>
                                                                <td>
                                                                    <tr><p>200 Gram</p></tr>
                                                                    <td></td>
                                                                </td>
                                                            </table>
                                                        </div>
                                                </div>   
                                                </div> 
                                                <!-- row akhir atribut -->
                                                <div class="col-md-12 text-right">
                                                    <div class="container">
                                                        <a href="https://api.whatsapp.com/send?phone=62895354997040&text=Saya%20membeli : %20%0ADengan%20Jumlah : %0AVarian : %0Aukuran : %20%0Adengan%20harga : %0A"  class=" btn btn-warning" type="submit"  onclick="incrementValue()" id="hasil" value="plus" aria-hidden="true"><i class="fa fa-shopping-cart"></i>tambahkan ke troli</a>
                                                    </div>
                                                </div>
                                                </div>
                                            </div>
                                        <div class="row container">
                                            <div class="col-md-6 text-left mb-5">
                                                <h5>Deskripsi</h3>
                                                <p style="white-space: pre-wrap;">Kondisi: Baru</p>
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
                                                        <img class="d-block w-100" src="<?php echo base_url().'assets/gambar_utama/plisket1.jpg'  ?>"  alt="First slide">
                                                        </div>
                                                        <div class="carousel-item">
                                                        <img class="d-block w-100" src="<?php echo base_url().'assets/gambar_samping/plisket2.jpg' ?>"  alt="Second slide">
                                                        </div>
                                                        <div class="carousel-item">
                                                        <img class="d-block w-100" src="<?php echo base_url().'assets/gambar_atas/plisket3.jpg'  ?>"  alt="Third slide">
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
                                                <!-- <img src="<?php echo base_url().'assets/gambar_utama/' ?>" class="img-fluid" alt="..."> -->
                                            </div>
                                        <div class="col-md-7 text-left">
                                                <p style="left: 666px; top: 333px; font-family: Poppins; font-style: normal; font-weight: normal; font-size: 30px; line-height: 52px; color: #222222;">PLISKET FULL CERUTY TANPA GARIS TENGAH PASHMINA - Coin</p>
                                                <b style="font-family: Poppins; font-style: normal; font-weight: 600; font-size: 45px; line-height: 75px; display: flex; align-items: center; color: #000000;">Rp.60.900</b> 
                                            <!-- row atribut -->
                                            <div class="row mt-3">
                                                <div class="col-md-5">
                                                    <P style="font-family: Poppins; font-style: normal; font-weight: 500; font-size: 20px; line-height: 30px; display: flex; align-items: center; color: #000000;">ukuran</P>
                                                        <select class="form-control" name="ukuran">
                                                            <option>Pilih ukuran</option>
                                                            
                                                                <option>-</option>
                                                            
                                                        </select> 
                                                </div>
                                                <div class="col-md-5" >
                                                    <p style="font-family: Poppins; font-style: normal; font-weight: 500; font-size: 20px; line-height: 30px; display: flex; align-items: center; color: #000000;">qty</p>
                                                        <form action="" >
                                                            
                                                                    <!-- <button style="border-radius:100%; width: 30px; height: 30px; left: 740px; top: 3906px; background: #FFFFFF; box-shadow: 0px 28px 80px rgba(0, 0, 0, 0.11), 0px 11.6977px 33.4221px rgba(0, 0, 0, 0.079074), 0px 6.25417px 17.869px rgba(0, 0, 0, 0.0655718), 0px 3.50603px 10.0172px rgba(0, 0, 0, 0.055), 0px 1.86203px 5.32008px rgba(0, 0, 0, 0.0444282), 0px 0.774832px 2.21381px rgba(0, 0, 0, 0.030926);" class="qtyminus" aria-hidden="true">&minus;</button> -->
                                                                        <!-- <input type="text" style="" id="nmbr" name="nmbr" value="0"/> -->
                                                                        <!-- <span class="badge badge-pill badge-danger" id="hasill" style="">0</span><input type="text" style="display:none" id="nmbr1" value="0"/> -->
                                                                    <!-- <button style="border-radius:100%; width: 30px; height: 30px; left: 740px; top: 3906px; background: #FFFFFF; box-shadow: 0px 28px 80px rgba(0, 0, 0, 0.11), 0px 11.6977px 33.4221px rgba(0, 0, 0, 0.079074), 0px 6.25417px 17.869px rgba(0, 0, 0, 0.0655718), 0px 3.50603px 10.0172px rgba(0, 0, 0, 0.055), 0px 1.86203px 5.32008px rgba(0, 0, 0, 0.0444282), 0px 0.774832px 2.21381px rgba(0, 0, 0, 0.030926);" class="qtyplus" aria-hidden="true">&plus;</button> -->
                                                                <!-- <button class="btn btn-warning" onclick="incrementValue()" value="plus">cek </button> -->
                                                                                <!-- <input style="color:#015EB6; border-radius:100%; width: 30px; height: 30px; left: 740px; top: 3906px; background: #FFFFFF; box-shadow: 0px 28px 80px rgba(0, 0, 0, 0.11), 0px 11.6977px 33.4221px rgba(0, 0, 0, 0.079074), 0px 6.25417px 17.869px rgba(0, 0, 0, 0.0655718), 0px 3.50603px 10.0172px rgba(0, 0, 0, 0.055), 0px 1.86203px 5.32008px rgba(0, 0, 0, 0.0444282), 0px 0.774832px 2.21381px rgba(0, 0, 0, 0.030926);" type="button" onclick="incrementValuein()" value="-" />
                                                                                    <span class="" id="hasi"></span><input type="text" style="display:block" id="number" value="1"/>
                                                                                    <input type="number">
                                                                                    <button type="button" class="tambahh" onclick="tambahdata()">tambahh</button>
                                                                                    <button type="button" class="tambah" >tambah</button>
                                                                                    <span class="hasil">0</span>
                                                                                <input style="color:#015EB6; border-radius:100%; width: 30px; height: 30px; left: 740px; top: 3906px; background: #FFFFFF; box-shadow: 0px 28px 80px rgba(0, 0, 0, 0.11), 0px 11.6977px 33.4221px rgba(0, 0, 0, 0.079074), 0px 6.25417px 17.869px rgba(0, 0, 0, 0.0655718), 0px 3.50603px 10.0172px rgba(0, 0, 0, 0.055), 0px 1.86203px 5.32008px rgba(0, 0, 0, 0.0444282), 0px 0.774832px 2.21381px rgba(0, 0, 0, 0.030926);" type="button" onclick="incrementValue()" value="+" /> -->
                                                            <select class="form-control" name="qty">
                                                                <option>1</option>
                                                                <option>2</option>
                                                                <option>3</option>
                                                                <option>4</option>
                                                                <option>5</option>
                                                                <option>6</option>
                                                                <option>7</option>
                                                                <option>8</option>
                                                                <option>9</option>
                                                                <option>10</option>
                                                                <option>11</option>
                                                                <option>12</option>
                                                            </select>
                                                            <input type="submit"/>
                                                        </form>
                                                </div>
                                            </div>
                                                <div class="row">
                                                    <div class="col-md-5">
                                                        <P style="font-family: Poppins; font-style: normal; font-weight: 500; font-size: 20px; line-height: 30px; display: flex; align-items: center; color: #000000;">Warna</P>
                                                            <select class="form-control" name="warna">
                                                                <option>Pilih warna</option>
                                                                <option>kuning</option>
                                                                <option>biru</option>
                                                                <option>pink</option>
                                                                <option>coin</option>
                                                                <option>grey</option>
                                                                <option>dove</option>
                                                                <option>coin</option>
                                                                <option>peach</option>
                                                                <option>maroon</option>
                                                                <option>wardah</option>
                                                            </select>
                                                    </div> 
                                                        <div class="col-md-5">
                                                            <p style="font-family: Poppins; font-style: normal; font-weight: 500; font-size: 20px; line-height: 30px; display: flex; align-items: center; color: #000000;">Berat</p> 
                                                            <table>
                                                                <td>
                                                                    <tr><p>100 Gram</p></tr>
                                                                    <td></td>
                                                                </td>
                                                            </table>
                                                        </div>
                                                </div>   
                                                </div> 
                                                <!-- row akhir atribut -->
                                                <div class="col-md-12 text-right">
                                                    <div class="container">
                                                        <a href="https://api.whatsapp.com/send?phone=62895354997040&text=Saya%20membeli : %20%0ADengan%20Jumlah : %0AVarian : %0Aukuran : %20%0Adengan%20harga : %0A"  class=" btn btn-warning" type="submit"  onclick="incrementValue()" id="hasil" value="plus" aria-hidden="true"><i class="fa fa-shopping-cart"></i>tambahkan ke troli</a>
                                                    </div>
                                                </div>
                                                </div>
                                            </div>
                                        <div class="row container">
                                            <div class="col-md-6 text-left mb-5">
                                                <h5>Deskripsi</h3>
                                                <p style="white-space: pre-wrap;">cek</p>
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
                                                        <img class="d-block w-100" src="<?php echo base_url().'assets/gambar_utama/baju_anak1.jpg'  ?>"  alt="First slide">
                                                        </div>
                                                        <div class="carousel-item">
                                                        <img class="d-block w-100" src="<?php echo base_url().'assets/gambar_samping/baju_anak2.jpg' ?>"  alt="Second slide">
                                                        </div>
                                                        <div class="carousel-item">
                                                        <img class="d-block w-100" src="<?php echo base_url().'assets/gambar_atas/baju_anak3.jpg'  ?>"  alt="Third slide">
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
                                                <!-- <img src="<?php echo base_url().'assets/gambar_utama/' ?>" class="img-fluid" alt="..."> -->
                                            </div>
                                        <div class="col-md-7 text-left">
                                                <p style="left: 666px; top: 333px; font-family: Poppins; font-style: normal; font-weight: normal; font-size: 30px; line-height: 52px; color: #222222;">BAJU ANAK PEREMPUAN KARAKTER LUCU MOTIF DP - TSAIBY - S</p>
                                                <b style="font-family: Poppins; font-style: normal; font-weight: 600; font-size: 45px; line-height: 75px; display: flex; align-items: center; color: #000000;">Rp.45.000 </b> 
                                            <!-- row atribut -->
                                            <div class="row mt-3">
                                                <div class="col-md-5">
                                                    <P style="font-family: Poppins; font-style: normal; font-weight: 500; font-size: 20px; line-height: 30px; display: flex; align-items: center; color: #000000;">ukuran</P>
                                                        <select class="form-control" name="ukuran">
                                                            <option>Pilih ukuran</option>
                                                            <option>S</option>
                                                            <option>M</option>
                                                            <option>L</option>
                                                            <option>XL</option>
                                                            
                                                        </select> 
                                                </div>
                                                <div class="col-md-5" >
                                                    <p style="font-family: Poppins; font-style: normal; font-weight: 500; font-size: 20px; line-height: 30px; display: flex; align-items: center; color: #000000;">qty</p>
                                                        <form action="" >
                                                            
                                                                    <!-- <button style="border-radius:100%; width: 30px; height: 30px; left: 740px; top: 3906px; background: #FFFFFF; box-shadow: 0px 28px 80px rgba(0, 0, 0, 0.11), 0px 11.6977px 33.4221px rgba(0, 0, 0, 0.079074), 0px 6.25417px 17.869px rgba(0, 0, 0, 0.0655718), 0px 3.50603px 10.0172px rgba(0, 0, 0, 0.055), 0px 1.86203px 5.32008px rgba(0, 0, 0, 0.0444282), 0px 0.774832px 2.21381px rgba(0, 0, 0, 0.030926);" class="qtyminus" aria-hidden="true">&minus;</button> -->
                                                                        <!-- <input type="text" style="" id="nmbr" name="nmbr" value="0"/> -->
                                                                        <!-- <span class="badge badge-pill badge-danger" id="hasill" style="">0</span><input type="text" style="display:none" id="nmbr1" value="0"/> -->
                                                                    <!-- <button style="border-radius:100%; width: 30px; height: 30px; left: 740px; top: 3906px; background: #FFFFFF; box-shadow: 0px 28px 80px rgba(0, 0, 0, 0.11), 0px 11.6977px 33.4221px rgba(0, 0, 0, 0.079074), 0px 6.25417px 17.869px rgba(0, 0, 0, 0.0655718), 0px 3.50603px 10.0172px rgba(0, 0, 0, 0.055), 0px 1.86203px 5.32008px rgba(0, 0, 0, 0.0444282), 0px 0.774832px 2.21381px rgba(0, 0, 0, 0.030926);" class="qtyplus" aria-hidden="true">&plus;</button> -->
                                                                <!-- <button class="btn btn-warning" onclick="incrementValue()" value="plus">cek </button> -->
                                                                                <!-- <input style="color:#015EB6; border-radius:100%; width: 30px; height: 30px; left: 740px; top: 3906px; background: #FFFFFF; box-shadow: 0px 28px 80px rgba(0, 0, 0, 0.11), 0px 11.6977px 33.4221px rgba(0, 0, 0, 0.079074), 0px 6.25417px 17.869px rgba(0, 0, 0, 0.0655718), 0px 3.50603px 10.0172px rgba(0, 0, 0, 0.055), 0px 1.86203px 5.32008px rgba(0, 0, 0, 0.0444282), 0px 0.774832px 2.21381px rgba(0, 0, 0, 0.030926);" type="button" onclick="incrementValuein()" value="-" />
                                                                                    <span class="" id="hasi"></span><input type="text" style="display:block" id="number" value="1"/>
                                                                                    <input type="number">
                                                                                    <button type="button" class="tambahh" onclick="tambahdata()">tambahh</button>
                                                                                    <button type="button" class="tambah" >tambah</button>
                                                                                    <span class="hasil">0</span>
                                                                                <input style="color:#015EB6; border-radius:100%; width: 30px; height: 30px; left: 740px; top: 3906px; background: #FFFFFF; box-shadow: 0px 28px 80px rgba(0, 0, 0, 0.11), 0px 11.6977px 33.4221px rgba(0, 0, 0, 0.079074), 0px 6.25417px 17.869px rgba(0, 0, 0, 0.0655718), 0px 3.50603px 10.0172px rgba(0, 0, 0, 0.055), 0px 1.86203px 5.32008px rgba(0, 0, 0, 0.0444282), 0px 0.774832px 2.21381px rgba(0, 0, 0, 0.030926);" type="button" onclick="incrementValue()" value="+" /> -->
                                                            <select class="form-control" name="qty">
                                                                <option>1</option>
                                                                <option>2</option>
                                                                <option>3</option>
                                                                <option>4</option>
                                                                <option>5</option>
                                                                <option>6</option>
                                                                <option>7</option>
                                                                <option>8</option>
                                                                <option>9</option>
                                                                <option>10</option>
                                                                <option>11</option>
                                                                <option>12</option>
                                                            </select>
                                                            <input type="submit"/>
                                                        </form>
                                                </div>
                                            </div>
                                                <div class="row">
                                                    <div class="col-md-5">
                                                        <P style="font-family: Poppins; font-style: normal; font-weight: 500; font-size: 20px; line-height: 30px; display: flex; align-items: center; color: #000000;">Warna</P>
                                                            <select class="form-control" name="warna">
                                                                <option>Pilih warna</option>
                                                                <option>TM</option>
                                                                <option>FFM</option>
                                                                <option>FM</option>
                                                                <option>DM</option>
                                                                <option>TP</option>
                                                                <option>MH</option>
                                                                <option>HH</option>
                                                            </select>
                                                    </div> 
                                                        <div class="col-md-5">
                                                            <p style="font-family: Poppins; font-style: normal; font-weight: 500; font-size: 20px; line-height: 30px; display: flex; align-items: center; color: #000000;">Berat</p> 
                                                            <table>
                                                                <td>
                                                                    <tr><p>100 Gram</p></tr>
                                                                    <td></td>
                                                                </td>
                                                            </table>
                                                        </div>
                                                </div>   
                                                </div> 
                                                <!-- row akhir atribut -->
                                                <div class="col-md-12 text-right">
                                                    <div class="container">
                                                        <a href="https://api.whatsapp.com/send?phone=62895354997040&text=Saya%20membeli : %20%0ADengan%20Jumlah : %0AVarian : %0Aukuran : %20%0Adengan%20harga : %0A"  class=" btn btn-warning" type="submit"  onclick="incrementValue()" id="hasil" value="plus" aria-hidden="true"><i class="fa fa-shopping-cart"></i>tambahkan ke troli</a>
                                                    </div>
                                                </div>
                                                </div>
                                            </div>
                                        <div class="row container">
                                            <div class="col-md-6 text-left mb-5">
                                                <h5>Deskripsi</h3>
                                                <p style="white-space: pre-wrap;">wwwwwwwwwwwwwwwwwww</p>
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
                                                        <img class="d-block w-100" src="<?php echo base_url().'assets/gambar_utama/kaki1.jpg'  ?>"  alt="First slide">
                                                        </div>
                                                        <div class="carousel-item">
                                                        <img class="d-block w-100" src="<?php echo base_url().'assets/gambar_samping/kaki2.jpg' ?>"  alt="Second slide">
                                                        </div>
                                                        <div class="carousel-item">
                                                        <img class="d-block w-100" src="<?php echo base_url().'assets/gambar_atas/kaki3.jpg'  ?>"  alt="Third slide">
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
                                                <!-- <img src="<?php echo base_url().'assets/gambar_utama/' ?>" class="img-fluid" alt="..."> -->
                                            </div>
                                        <div class="col-md-7 text-left">
                                                <p style="left: 666px; top: 333px; font-family: Poppins; font-style: normal; font-weight: normal; font-size: 30px; line-height: 52px; color: #222222;">KAOS KAKI WUDHU SASHEE-BASIC 23-24 CM WARNA HITAM - Hitam</p>
                                                <b style="font-family: Poppins; font-style: normal; font-weight: 600; font-size: 45px; line-height: 75px; display: flex; align-items: center; color: #000000;">Rp.21.250 </b> 
                                            <!-- row atribut -->
                                            <div class="row mt-3">
                                                <div class="col-md-5">
                                                    <P style="font-family: Poppins; font-style: normal; font-weight: 500; font-size: 20px; line-height: 30px; display: flex; align-items: center; color: #000000;">ukuran</P>
                                                        <select class="form-control" name="ukuran">
                                                            <option>Pilih ukuran</option>
                                                            
                                                                <option>-</option>
                                                            
                                                        </select> 
                                                </div>
                                                <div class="col-md-5" >
                                                    <p style="font-family: Poppins; font-style: normal; font-weight: 500; font-size: 20px; line-height: 30px; display: flex; align-items: center; color: #000000;">qty</p>
                                                        <form action="" >
                                                            
                                                                    <!-- <button style="border-radius:100%; width: 30px; height: 30px; left: 740px; top: 3906px; background: #FFFFFF; box-shadow: 0px 28px 80px rgba(0, 0, 0, 0.11), 0px 11.6977px 33.4221px rgba(0, 0, 0, 0.079074), 0px 6.25417px 17.869px rgba(0, 0, 0, 0.0655718), 0px 3.50603px 10.0172px rgba(0, 0, 0, 0.055), 0px 1.86203px 5.32008px rgba(0, 0, 0, 0.0444282), 0px 0.774832px 2.21381px rgba(0, 0, 0, 0.030926);" class="qtyminus" aria-hidden="true">&minus;</button> -->
                                                                        <!-- <input type="text" style="" id="nmbr" name="nmbr" value="0"/> -->
                                                                        <!-- <span class="badge badge-pill badge-danger" id="hasill" style="">0</span><input type="text" style="display:none" id="nmbr1" value="0"/> -->
                                                                    <!-- <button style="border-radius:100%; width: 30px; height: 30px; left: 740px; top: 3906px; background: #FFFFFF; box-shadow: 0px 28px 80px rgba(0, 0, 0, 0.11), 0px 11.6977px 33.4221px rgba(0, 0, 0, 0.079074), 0px 6.25417px 17.869px rgba(0, 0, 0, 0.0655718), 0px 3.50603px 10.0172px rgba(0, 0, 0, 0.055), 0px 1.86203px 5.32008px rgba(0, 0, 0, 0.0444282), 0px 0.774832px 2.21381px rgba(0, 0, 0, 0.030926);" class="qtyplus" aria-hidden="true">&plus;</button> -->
                                                                <!-- <button class="btn btn-warning" onclick="incrementValue()" value="plus">cek </button> -->
                                                                                <!-- <input style="color:#015EB6; border-radius:100%; width: 30px; height: 30px; left: 740px; top: 3906px; background: #FFFFFF; box-shadow: 0px 28px 80px rgba(0, 0, 0, 0.11), 0px 11.6977px 33.4221px rgba(0, 0, 0, 0.079074), 0px 6.25417px 17.869px rgba(0, 0, 0, 0.0655718), 0px 3.50603px 10.0172px rgba(0, 0, 0, 0.055), 0px 1.86203px 5.32008px rgba(0, 0, 0, 0.0444282), 0px 0.774832px 2.21381px rgba(0, 0, 0, 0.030926);" type="button" onclick="incrementValuein()" value="-" />
                                                                                    <span class="" id="hasi"></span><input type="text" style="display:block" id="number" value="1"/>
                                                                                    <input type="number">
                                                                                    <button type="button" class="tambahh" onclick="tambahdata()">tambahh</button>
                                                                                    <button type="button" class="tambah" >tambah</button>
                                                                                    <span class="hasil">0</span>
                                                                                <input style="color:#015EB6; border-radius:100%; width: 30px; height: 30px; left: 740px; top: 3906px; background: #FFFFFF; box-shadow: 0px 28px 80px rgba(0, 0, 0, 0.11), 0px 11.6977px 33.4221px rgba(0, 0, 0, 0.079074), 0px 6.25417px 17.869px rgba(0, 0, 0, 0.0655718), 0px 3.50603px 10.0172px rgba(0, 0, 0, 0.055), 0px 1.86203px 5.32008px rgba(0, 0, 0, 0.0444282), 0px 0.774832px 2.21381px rgba(0, 0, 0, 0.030926);" type="button" onclick="incrementValue()" value="+" /> -->
                                                            <select class="form-control" name="qty">
                                                                <option>1</option>
                                                                <option>2</option>
                                                                <option>3</option>
                                                                <option>4</option>
                                                                <option>5</option>
                                                                <option>6</option>
                                                                <option>7</option>
                                                                <option>8</option>
                                                                <option>9</option>
                                                                <option>10</option>
                                                                <option>11</option>
                                                                <option>12</option>
                                                            </select>
                                                            <input type="submit"/>
                                                        </form>
                                                </div>
                                            </div>
                                                <div class="row">
                                                    <div class="col-md-5">
                                                        <P style="font-family: Poppins; font-style: normal; font-weight: 500; font-size: 20px; line-height: 30px; display: flex; align-items: center; color: #000000;">Warna</P>
                                                            <select class="form-control" name="warna">
                                                                <option>Pilih warna</option>
                                                                <option>Putih</option>
                                                                <option>Cokelat</option>
                                                                <option>Abu Abu</option>
                                                                <option>Navy</option>
                                                                <option>Maroon</option>
                                                                <option>Cream</option>
                                                                <option>Ungu tua</option>
                                                                <option>Ungu muda</option>
                                                                <option>Dusty ungu</option>
                                                                <option>hitam</option>
                                                            </select>
                                                    </div> 
                                                        <div class="col-md-5">
                                                            <p style="font-family: Poppins; font-style: normal; font-weight: 500; font-size: 20px; line-height: 30px; display: flex; align-items: center; color: #000000;">Berat</p> 
                                                            <table>
                                                                <td>
                                                                    <tr><p>50 Gram</p></tr>
                                                                    <td></td>
                                                                </td>
                                                            </table>
                                                        </div>
                                                </div>   
                                                </div> 
                                                <!-- row akhir atribut -->
                                                <div class="col-md-12 text-right">
                                                    <div class="container">
                                                        <a href="https://api.whatsapp.com/send?phone=62895354997040&text=Saya%20membeli : %20%0ADengan%20Jumlah : %0AVarian : %0Aukuran : %20%0Adengan%20harga : %0A"  class=" btn btn-warning" type="submit"  onclick="incrementValue()" id="hasil" value="plus" aria-hidden="true"><i class="fa fa-shopping-cart"></i>tambahkan ke troli</a>
                                                    </div>
                                                </div>
                                                </div>
                                            </div>
                                        <div class="row container">
                                            <div class="col-md-6 text-left mb-5">
                                                <h5>Deskripsi</h3>
                                                <p style="white-space: pre-wrap;">wwwwwwwwwwwwwwwwwww</p>
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
        <div class="container" style="max-width: 1340px;" data-aos="fade-up">
			<img src="<?php echo base_url('assets/img/banner.jpg') ?>" class="img-fluid"  height="230px" width="100%" style="object-fit: cover;" loading="lazy" alt="">
        </div>    
    </section>
    <!-- Akhir Section pembatas -->
    <!-- section list produk -->
    <section>
		<div class="container mt-4" style="max-width: 1340px;">
			<div class="row" style="display">
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
			</div>  
			<!-- Card -->
			<div class="row" id="container">
				<?php foreach ($card as $pdk) : ?>
                    <div class="col-6 col-md-2 mt-2">
                        <a href="#" data-toggle="modal" data-target="#mdl_produkk<?php echo $pdk->id_produk ?>">
                        <div class="card_produk">
                            <div class="row">
								<div class="col-md-12">
									<img src="<?php echo base_url().'assets/gambar_utama/' .$pdk->foto_utama ?>" class="img-fluid"  style="width:100%;height:150px;object-fit: contain;" alt="produk">
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
                                                            <div class="carousel-item">
                                                            <img class="d-block w-100" src="<?php echo base_url().'assets/gambar_samping/' .$pdk->foto_samping ?>"  alt="Second slide">
                                                            </div>
                                                            <div class="carousel-item">
                                                            <img class="d-block w-100" src="<?php echo base_url().'assets/gambar_atas/' .$pdk->foto_atas ?>"  alt="Third slide">
                                                            </div>
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
                                                            <select class="form-control" name="ukuran">
                                                                <option>Pilih ukuran</option>
                                                                <?php foreach ($gabung as $jon) :  ?>
                                                                    <option><?php var_dump($jon->isi_varian) ?></option>
                                                                <?php endforeach ?>
                                                            </select> 
                                                    </div>
                                                    <div class="col-md-5"  >
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
                                                                    <option></option>
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
                    </div>
				<!-- Akhir Modal -->
                
			</div>
			
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
					<img class="lazy img-fluid d-flex justify-content-center" data-original="<?php echo base_url('assets/img/cara_belanja.png') ?>" style="width:600px"  alt="...">
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
    <script type="text/javascript" charset="utf-8">
        $(function() {
            $("img.lazy").lazyload({
                effect : "fadeIn"
            });

        });
    </script>

    <!-- script live search -->
    <script src="<?php echo base_url('assets/js/script.js'); ?>"></script>
    
    <!-- footer  -->
    <?php $this->load->view('partial/footer') ?>
    
    

    <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns" crossorigin="anonymous"></script>

    
  </body>

