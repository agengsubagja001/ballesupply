<?php $this->load->view('user/partial/head') ?>

  <body>
      <!-- navbar -->
      <?php $this->load->view('user/partial/navbar') ?> 
        
    <!-- Section Slide -->
    <section class="">
        <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
            <ol class="carousel-indicators">
                <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active" style="width: 25px;height: 25px;border-radius: 50%;"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="1" class="active" style="width: 25px;height: 25px;border-radius: 50%;"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="2"class="active" style="width: 25px;height: 25px;border-radius: 50%;"></li>
            </ol>
            <!-- img -->
            <div class="carousel-inner">
                <div class="carousel-item active">
                <img src="<?php echo base_url('assets/img/gambar1.jpg') ?>" class="d-block w-100" alt="...">
                </div>
                <div class="carousel-item">
                <img src="<?php echo base_url('assets/img/gambar2.jpg') ?>" class="d-block w-100" alt="...">
                </div>
                <div class="carousel-item">
                <img src="<?php echo base_url('assets/img/gambar3.jpg') ?>" class="d-block w-100" alt="...">
                </div>
            </div>
            <!-- img -->
            
        </div>
    </section>
    <!-- Akhir Section slide -->
    <!-- Section Yang Kita suka -->
    <section>
        <div class="container-fluid">
            <div class="row text-center">
                <div class="col-md-12 d-flex justify-content-start">
                    <p style="font-family: Poppins; font-style: normal; font-weight: normal; font-size: 30px; line-height: 45px; ">Mungkin kamu suka</p>
                </div>
                <div class="col-6 col-md-2">
                    <a href="" class="" data-toggle="modal" data-target="#mdl_produk">
                    <div style="float:right; transform: translateY(25px); width:55px; height:55px; border-radius: 100%; left: 196px; top: 978px; background: #FC185A; border: 3px solid rgba(255, 255, 255, 0.6);">
                        <span style="width: 46px; height: 39px; left: 207px; top: 989px; font-family: Poppins; font-style: normal; font-weight: bold; font-size: 19px; line-height: 28px; align-items: center; color: #FFFFFF; ">20%</span>
                    </div>
                        <div class="card" style="width:100%; height:344px; position:initial; border-radius:0px 0px 80px 80px; background: #FAFAFA; box-shadow: 0px -7px 80px rgba(0, 0, 0, 0.07), 0px -2.92443px 33.4221px rgba(0, 0, 0, 0.0503198), 0px -1.56354px 17.869px rgba(0, 0, 0, 0.0417275), 0px -0.876509px 10.0172px rgba(0, 0, 0, 0.035), 0px -0.465507px 5.32008px rgba(0, 0, 0, 0.0282725), 0px -0.193708px 2.21381px rgba(0, 0, 0, 0.0196802);">
                            <img src="<?php echo base_url('assets/img/gambar4.jpg') ?>" class="img-fluid" alt="...">
                                <div class="card-body">
                                    <div class="col-md-12">
                                        <p class="card-text" style="font-family: Inter; font-style: normal; color: #000000; font-weight: 500; font-size: 20px; line-height: 24px;">Rp 500.000</p>
                                    </div>
                                </div>
                        </div>
                    <div>
                        <button class="btn btn-warning" style="width:80px;height:80px;border-radius:100%;transform:translateY(-35px); background: #FDD922; border: 2px solid #FAFAFA; box-shadow: 0px 134px 195px rgba(0, 0, 0, 0.07), 0px 48.9122px 71.1782px rgba(0, 0, 0, 0.0482987), 0px 23.746px 34.5557px rgba(0, 0, 0, 0.0389404), 0px 11.6407px 16.9398px rgba(0, 0, 0, 0.0310596), 0px 4.60276px 6.69804px rgba(0, 0, 0, 0.0217013);"><i class="fa fa-shopping-cart"></i></button>
                    </div>
                </div>
                <div class="col-6 col-md-2">
                    <a href="" class="" data-toggle="modal" data-target="#mdl_produk">
                    <div style="float:right; transform: translateY(25px); width:55px; height:55px; border-radius: 100%; left: 196px; top: 978px; background: #FC185A; border: 3px solid rgba(255, 255, 255, 0.6);">
                        <span style="width: 46px; height: 39px; left: 207px; top: 989px; font-family: Poppins; font-style: normal; font-weight: bold; font-size: 19px; line-height: 28px; align-items: center; color: #FFFFFF; ">20%</span>
                    </div>
                        <div class="card" style="width:100%; height:344px; position:initial; border-radius:0px 0px 80px 80px; background: #FAFAFA; box-shadow: 0px -7px 80px rgba(0, 0, 0, 0.07), 0px -2.92443px 33.4221px rgba(0, 0, 0, 0.0503198), 0px -1.56354px 17.869px rgba(0, 0, 0, 0.0417275), 0px -0.876509px 10.0172px rgba(0, 0, 0, 0.035), 0px -0.465507px 5.32008px rgba(0, 0, 0, 0.0282725), 0px -0.193708px 2.21381px rgba(0, 0, 0, 0.0196802);">
                            <img src="<?php echo base_url('assets/img/gambar4.jpg') ?>" class="img-fluid" alt="...">
                                <div class="card-body">
                                    <div class="col-md-12">
                                        <p class="card-text" style="font-family: Inter; font-style: normal; color: #000000; font-weight: 500; font-size: 20px; line-height: 24px;">Rp 500.000</p>
                                    </div>
                                </div>
                        </div>
                    <div>
                        <button class="btn btn-warning" style="width:80px;height:80px;border-radius:100%;transform:translateY(-35px); background: #FDD922; border: 2px solid #FAFAFA; box-shadow: 0px 134px 195px rgba(0, 0, 0, 0.07), 0px 48.9122px 71.1782px rgba(0, 0, 0, 0.0482987), 0px 23.746px 34.5557px rgba(0, 0, 0, 0.0389404), 0px 11.6407px 16.9398px rgba(0, 0, 0, 0.0310596), 0px 4.60276px 6.69804px rgba(0, 0, 0, 0.0217013);"><i class="fa fa-shopping-cart"></i></button>
                    </div>
                </div>
                <div class="col-6 col-md-2">
                    <a href="" class="" data-toggle="modal" data-target="#mdl_produk">
                    <div style="float:right; transform: translateY(25px); width:55px; height:55px; border-radius: 100%; left: 196px; top: 978px; background: #FC185A; border: 3px solid rgba(255, 255, 255, 0.6);">
                        <span style="width: 46px; height: 39px; left: 207px; top: 989px; font-family: Poppins; font-style: normal; font-weight: bold; font-size: 19px; line-height: 28px; align-items: center; color: #FFFFFF; ">20%</span>
                    </div>
                        <div class="card" style="width:100%; height:344px; position:initial; border-radius:0px 0px 80px 80px; background: #FAFAFA; box-shadow: 0px -7px 80px rgba(0, 0, 0, 0.07), 0px -2.92443px 33.4221px rgba(0, 0, 0, 0.0503198), 0px -1.56354px 17.869px rgba(0, 0, 0, 0.0417275), 0px -0.876509px 10.0172px rgba(0, 0, 0, 0.035), 0px -0.465507px 5.32008px rgba(0, 0, 0, 0.0282725), 0px -0.193708px 2.21381px rgba(0, 0, 0, 0.0196802);">
                            <img src="<?php echo base_url('assets/img/gambar4.jpg') ?>" class="img-fluid" alt="...">
                                <div class="card-body">
                                    <div class="col-md-12">
                                        <p class="card-text" style="font-family: Inter; font-style: normal; color: #000000; font-weight: 500; font-size: 20px; line-height: 24px;">Rp 500.000</p>
                                    </div>
                                </div>
                        </div>
                    <div>
                        <button class="btn btn-warning" style="width:80px;height:80px;border-radius:100%;transform:translateY(-35px); background: #FDD922; border: 2px solid #FAFAFA; box-shadow: 0px 134px 195px rgba(0, 0, 0, 0.07), 0px 48.9122px 71.1782px rgba(0, 0, 0, 0.0482987), 0px 23.746px 34.5557px rgba(0, 0, 0, 0.0389404), 0px 11.6407px 16.9398px rgba(0, 0, 0, 0.0310596), 0px 4.60276px 6.69804px rgba(0, 0, 0, 0.0217013);"><i class="fa fa-shopping-cart"></i></button>
                    </div>
                </div>
                <div class="col-6 col-md-2">
                    <a href="" class="" data-toggle="modal" data-target="#mdl_produk">
                    <div style="float:right; transform: translateY(25px); width:55px; height:55px; border-radius: 100%; left: 196px; top: 978px; background: #FC185A; border: 3px solid rgba(255, 255, 255, 0.6);">
                        <span style="width: 46px; height: 39px; left: 207px; top: 989px; font-family: Poppins; font-style: normal; font-weight: bold; font-size: 19px; line-height: 28px; align-items: center; color: #FFFFFF; ">20%</span>
                    </div>
                        <div class="card" style="width:100%; height:344px; position:initial; border-radius:0px 0px 80px 80px; background: #FAFAFA; box-shadow: 0px -7px 80px rgba(0, 0, 0, 0.07), 0px -2.92443px 33.4221px rgba(0, 0, 0, 0.0503198), 0px -1.56354px 17.869px rgba(0, 0, 0, 0.0417275), 0px -0.876509px 10.0172px rgba(0, 0, 0, 0.035), 0px -0.465507px 5.32008px rgba(0, 0, 0, 0.0282725), 0px -0.193708px 2.21381px rgba(0, 0, 0, 0.0196802);">
                            <img src="<?php echo base_url('assets/img/gambar4.jpg') ?>" class="img-fluid" alt="...">
                                <div class="card-body">
                                    <div class="col-md-12">
                                        <p class="card-text" style="font-family: Inter; font-style: normal; color: #000000; font-weight: 500; font-size: 20px; line-height: 24px;">Rp 500.000</p>
                                    </div>
                                </div>
                        </div>
                    <div>
                        <button class="btn btn-warning" style="width:80px;height:80px;border-radius:100%;transform:translateY(-35px); background: #FDD922; border: 2px solid #FAFAFA; box-shadow: 0px 134px 195px rgba(0, 0, 0, 0.07), 0px 48.9122px 71.1782px rgba(0, 0, 0, 0.0482987), 0px 23.746px 34.5557px rgba(0, 0, 0, 0.0389404), 0px 11.6407px 16.9398px rgba(0, 0, 0, 0.0310596), 0px 4.60276px 6.69804px rgba(0, 0, 0, 0.0217013);"><i class="fa fa-shopping-cart"></i></button>
                    </div>
                </div>
                <div class="col-6 col-md-2">
                    <a href="" class="" data-toggle="modal" data-target="#mdl_produk">
                    <div style="float:right; transform: translateY(25px); width:55px; height:55px; border-radius: 100%; left: 196px; top: 978px; background: #FC185A; border: 3px solid rgba(255, 255, 255, 0.6);">
                        <span style="width: 46px; height: 39px; left: 207px; top: 989px; font-family: Poppins; font-style: normal; font-weight: bold; font-size: 19px; line-height: 28px; align-items: center; color: #FFFFFF; ">20%</span>
                    </div>
                        <div class="card" style="width:100%; height:344px; position:initial; border-radius:0px 0px 80px 80px; background: #FAFAFA; box-shadow: 0px -7px 80px rgba(0, 0, 0, 0.07), 0px -2.92443px 33.4221px rgba(0, 0, 0, 0.0503198), 0px -1.56354px 17.869px rgba(0, 0, 0, 0.0417275), 0px -0.876509px 10.0172px rgba(0, 0, 0, 0.035), 0px -0.465507px 5.32008px rgba(0, 0, 0, 0.0282725), 0px -0.193708px 2.21381px rgba(0, 0, 0, 0.0196802);">
                            <img src="<?php echo base_url('assets/img/gambar4.jpg') ?>" class="img-fluid" alt="...">
                                <div class="card-body">
                                    <div class="col-md-12">
                                        <p class="card-text" style="font-family: Inter; font-style: normal; color: #000000; font-weight: 500; font-size: 20px; line-height: 24px;">Rp 500.000</p>
                                    </div>
                                </div>
                        </div>
                    <div>
                        <button class="btn btn-warning" style="width:80px;height:80px;border-radius:100%;transform:translateY(-35px); background: #FDD922; border: 2px solid #FAFAFA; box-shadow: 0px 134px 195px rgba(0, 0, 0, 0.07), 0px 48.9122px 71.1782px rgba(0, 0, 0, 0.0482987), 0px 23.746px 34.5557px rgba(0, 0, 0, 0.0389404), 0px 11.6407px 16.9398px rgba(0, 0, 0, 0.0310596), 0px 4.60276px 6.69804px rgba(0, 0, 0, 0.0217013);"><i class="fa fa-shopping-cart"></i></button>
                    </div>
                </div>
                <div class="col-6 col-md-2">
                    <a href="" class="" data-toggle="modal" data-target="#mdl_produk">
                    <div style="float:right; transform: translateY(25px); width:55px; height:55px; border-radius: 100%; left: 196px; top: 978px; background: #FC185A; border: 3px solid rgba(255, 255, 255, 0.6);">
                        <span style="width: 46px; height: 39px; left: 207px; top: 989px; font-family: Poppins; font-style: normal; font-weight: bold; font-size: 19px; line-height: 28px; align-items: center; color: #FFFFFF; ">20%</span>
                    </div></a>
                        <div class="card" style="width:100%; height:344px; position:initial; border-radius:0px 0px 80px 80px; background: #FAFAFA; box-shadow: 0px -7px 80px rgba(0, 0, 0, 0.07), 0px -2.92443px 33.4221px rgba(0, 0, 0, 0.0503198), 0px -1.56354px 17.869px rgba(0, 0, 0, 0.0417275), 0px -0.876509px 10.0172px rgba(0, 0, 0, 0.035), 0px -0.465507px 5.32008px rgba(0, 0, 0, 0.0282725), 0px -0.193708px 2.21381px rgba(0, 0, 0, 0.0196802);">
                            <img src="<?php echo base_url('assets/img/gambar4.jpg') ?>" class="img-fluid" alt="...">
                                <div class="card-body">
                                    <div class="col-md-12">
                                        <p class="card-text" style="font-family: Inter; font-style: normal; color: #000000; font-weight: 500; font-size: 20px; line-height: 24px;">Rp 500.000</p>
                                    </div>
                                </div>
                        </div>
                    <div>
                        <button class="btn btn-warning" style="width:80px;height:80px;border-radius:100%;transform:translateY(-35px); background: #FDD922; border: 2px solid #FAFAFA; box-shadow: 0px 134px 195px rgba(0, 0, 0, 0.07), 0px 48.9122px 71.1782px rgba(0, 0, 0, 0.0482987), 0px 23.746px 34.5557px rgba(0, 0, 0, 0.0389404), 0px 11.6407px 16.9398px rgba(0, 0, 0, 0.0310596), 0px 4.60276px 6.69804px rgba(0, 0, 0, 0.0217013);"><i class="fa fa-shopping-cart"></i></button>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Akhir Yang kita suka -->

    <!--section pembatas  -->
    <section> 
        <div class="col-md-12">
                <img src="<?php echo base_url('assets/img/gambar3.jpg') ?>" class="card-img-top"  style="height:344px; border-radius:20px 20px 20px 20px; background: #C4C4C4; box-shadow: 0px -7px 80px rgba(0, 0, 0, 0.07), 0px -2.92443px 33.4221px rgba(0, 0, 0, 0.0503198), 0px -1.56354px 17.869px rgba(0, 0, 0, 0.0417275), 0px -0.876509px 10.0172px rgba(0, 0, 0, 0.035), 0px -0.465507px 5.32008px rgba(0, 0, 0, 0.0282725), 0px -0.193708px 2.21381px rgba(0, 0, 0, 0.0196802);" alt="...">
        </div>    
    </section>
    <!-- Akhir Section pembatas -->
    <!-- section list produk -->
    <section>
        <div class="container-fluid">
                <nav class="navbar navbar-light bg-light justify-content-between">
                    <a class="navbar-brand">Produk</a>
                    <?php echo form_open('user/landing_page/search') ?>
                    <form class="form-inline">
                        <input class="form-control mr-sm-2" type="text" name="keyword" placeholder="Search" aria-label="Search" style="width: 281px; height: 50px; left: 1110px; top: 1933px; background: #FAFAFA; border: 1px solid #777777; box-sizing: border-box; border-radius: 50px;">
                            <div style="height:80px;border-radius:100%;color:blue;"></div>
                        </input>
                    </form>
                    <?php echo form_close() ?>
                </nav>
                
            <div class="row text-center">
                <?php foreach ($query as $pdk) : ?>
                    <div class="col-6 col-md-2 p-1">
                        <a href="" class="" data-toggle="modal" data-target="#mdl_produk<?php echo $pdk->id_produk ?>">
                            <div class="card" style="height:336px; background: #FAFAFA; box-shadow: 0px -7px 80px rgba(0, 0, 0, 0.07), 0px -2.92443px 33.4221px rgba(0, 0, 0, 0.0503198), 0px -1.56354px 17.869px rgba(0, 0, 0, 0.0417275), 0px -0.876509px 10.0172px rgba(0, 0, 0, 0.035), 0px -0.465507px 5.32008px rgba(0, 0, 0, 0.0282725), 0px -0.193708px 2.21381px rgba(0, 0, 0, 0.0196802);">
                                <img src="<?php echo base_url().'assets/gambar_utama/' .$pdk->foto_utama ?>" class="img-fluid" alt="...">
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col-md-12">
                                            <p class="card-text" style="height: 34px; left: 70px; top: 2285px; font-family: Inter; font-style: normal; font-weight: 300; font-size: 14px; line-height: 18px; display: flex; align-items: center; color: #222222;"><?php echo $pdk->nama_produk ?></p>
                                        </div>
                                            <div class="col-md-12 d-flex justify-content-start" style="bottom: 0;position: absolute;">
                                                <p class="card-text" style="height: 34px; left: 70px; top: 2351px; font-family: Inter; font-style: normal; font-weight: 500; font-size: 16px; line-height: 24px; display: flex; align-items: center; color: #222222;">Rp. <?php echo number_format ($pdk->harga) ?></p>
                                            </div>
                                        <div class="col-md-12 d-flex justify-content-end " style="bottom: 0;position: absolute;">
                                            <button type="button" class="btn btn-warning" style="width:40px; height:40px; border-radius: 100%; right: 123px; top: 1288px; background: #FDD922; border: 2px solid #FAFAFA; box-shadow: 0px 134px 195px rgba(0, 0, 0, 0.07), 0px 48.9122px 71.1782px rgba(0, 0, 0, 0.0482987), 0px 23.746px 34.5557px rgba(0, 0, 0, 0.0389404), 0px 11.6407px 16.9398px rgba(0, 0, 0, 0.0310596), 0px 4.60276px 6.69804px rgba(0, 0, 0, 0.0217013);"><i class="fa fa-shopping-cart" aria-hidden="true"></i></button>   
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>

                <!-- Modal Card-->
                <div class="modal fade" id="mdl_produk<?php echo $pdk->id_produk ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
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
                                                        <img class="d-block w-100" src="<?php echo base_url().'assets/gambar_utama/' .$pdk->foto_utama ?>" alt="First slide">
                                                        </div>
                                                        <div class="carousel-item">
                                                        <img class="d-block w-100" src="<?php echo base_url().'assets/gambar_samping/' .$pdk->foto_samping ?>" alt="Second slide">
                                                        </div>
                                                        <div class="carousel-item">
                                                        <img class="d-block w-100" src="<?php echo base_url().'assets/gambar_atas/' .$pdk->foto_atas ?>" alt="Third slide">
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
                                        <div class="col-md-7 text-left">
                                                <p style="left: 666px; top: 333px; font-family: Poppins; font-style: normal; font-weight: normal; font-size: 30px; line-height: 52px; color: #222222;"><?php echo $pdk->nama_produk ?></p>
                                                <b style="font-family: Poppins; font-style: normal; font-weight: 600; font-size: 45px; line-height: 75px; display: flex; align-items: center; color: #000000;">Rp.<?php echo number_format ($pdk->harga) ?> </b> 
                                            <!-- row atribut -->
                                            <div class="row mt-3">
                                                <div class="col-md-5">
                                                    <P style="font-family: Poppins; font-style: normal; font-weight: 500; font-size: 20px; line-height: 30px; display: flex; align-items: center; color: #000000;">ukuran</P>
                                                        <select class="form-control" name="ukuran">
                                                            <option>Pilih ukuran</option>
                                                            <?php foreach ($gabung as $jon) :  ?>
                                                            <option><?php echo $jon->berat ?></option>
                                                            <?php endforeach ?>
                                                        </select> 
                                                </div>
                                                <div class="col-md-5">
                                                    <p style="font-family: Poppins; font-style: normal; font-weight: 500; font-size: 20px; line-height: 30px; display: flex; align-items: center; color: #000000;">qty</p>
                                                        
                                                            
                                                            <button class="btn btn-warning" onclick="incrementValue()" id="hasill" value="plus">cek </button>
                                                        
                                                </div>
                                            </div>
                                                <div class="row">
                                                    <div class="col-md-5">
                                                        <P style="font-family: Poppins; font-style: normal; font-weight: 500; font-size: 20px; line-height: 30px; display: flex; align-items: center; color: #000000;">Warna</P>
                                                            <select class="form-control" name="warna">
                                                                <option>Pilih warna</option>
                                                                <option>Hitam</option>
                                                                <option>biru</option>
                                                                <option>cokelat</option>
                                                                <option>grey</option>
                                                                <option>pink</option>
                                                                <option>merah</option>
                                                                <option>hijau</option>
                                                            </select>
                                                    </div> 
                                                        <div class="col-md-5">
                                                            <p style="font-family: Poppins; font-style: normal; font-weight: 500; font-size: 20px; line-height: 30px; display: flex; align-items: center; color: #000000;">Berat</p> 
                                                            <table>
                                                                <td>
                                                                    <tr><p><?php echo $pdk->berat ?> Gram</p></tr>
                                                                    <td></td>
                                                                </td>
                                                            </table>
                                                        </div>
                                                </div>   
                                                </div> 
                                                <!-- row akhir atribut -->
                                                <div class="col-md-12 text-right">
                                                    <div class="container">
                                                        <a href="https://api.whatsapp.com/send?phone=62895354997040&text=Saya%20membeli : <?php echo $pdk->nama_produk?>%20%0ADengan%20Jumlah : %0AVarian%0Aukuran%20%0Adengan%20harga : <?php echo $pdk->harga?>%0A"  class=" btn btn-warning"  onclick="incrementValue()" id="hasil" value="plus" aria-hidden="true"><i class="fa fa-shopping-cart"></i>tambahkan ke troli</a>
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
                                                                    <button type="button" class="btn btn-outline-warning" aria-hidden="true"><i class="fa fa-user" aria-hidden="true"></i>  Hubungi Customer Service</button>
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
            
            
            <!-- akhir modal -->
            <!-- Testing -->
            <!-- Akhir Testing -->
                

               
                <div class="col-md-12">
                    <nav aria-label="Page navigation example mt-2">
                        <ul class="pagination mt-2">
                        <span style="font-family: Poppins; font-style: normal; font-weight: normal; font-size: 30px; line-height: 45px; ">Jumlah produk per halaman</span>
                            <li class="page-item">
                            </li>
                            <li class="page-item"><a class="page-link" href="#">1</a></li>
                            <li class="page-item"><a class="page-link" href="#">2</a></li>
                            <li class="page-item"><a class="page-link" href="#">3</a></li>
                            <li class="page-item">
                            <a class="page-link" href="#" aria-label="Next">
                                <span aria-hidden="true">&raquo;</span>
                            </a>
                            </li>
                        </ul>
                    </nav>
                </div>
            </div>
        </div>
    </section>
    <!-- Akhir list produk -->
    <!-- section belanja  -->
    <section>
        <div class="container text-center">
            <div class="row">
                <div class="col-md-12 mt-5">
                    <P style="left: 53px; top: 3583px; font-family: Poppins; font-style: normal; font-weight: 600; font-size: 30px; line-height: 45px; align-items: center; text-align: center; color: #000000; text-shadow: 0px 99px 280px rgba(253, 217, 34, 0.17), 0px 41.3598px 116.977px rgba(253, 217, 34, 0.122205), 0px 22.1129px 62.5417px rgba(253, 217, 34, 0.101338), 0px 12.3963px 35.0603px rgba(253, 217, 34, 0.085), 0px 6.5836px 18.6203px rgba(253, 217, 34, 0.0686618), 0px 2.73958px 7.74832px rgba(253, 217, 34, 0.0477948);">Cara Berbelanja</p>
                </div>
                    <div class="col-md-6">
                        <img src="<?php echo base_url('assets/img/belanja1.jpg') ?>" style="left: 111px; top: 3776px; background: #C4C4C4;" class="img-fluid" alt="...">
                    </div>
                        <div class="col-md-6 text-lg-start">
                            <h5 style="color:#015EB6;">Beginilah Cara Belanja Dengan Mudah</h5>
                            <table>
                                <tr style="transform:translateY(10px);">
                                    <td>
                                        <div style="color:#015EB6; border-radius:100%; width: 30px; height: 30px; left: 740px; top: 3906px; background: #FFFFFF; box-shadow: 0px 28px 80px rgba(0, 0, 0, 0.11), 0px 11.6977px 33.4221px rgba(0, 0, 0, 0.079074), 0px 6.25417px 17.869px rgba(0, 0, 0, 0.0655718), 0px 3.50603px 10.0172px rgba(0, 0, 0, 0.055), 0px 1.86203px 5.32008px rgba(0, 0, 0, 0.0444282), 0px 0.774832px 2.21381px rgba(0, 0, 0, 0.030926);">1</div>
                                    </td>
                                    <td style="font-family: Poppins; font-style: normal; font-weight: 300; font-size: 18px; line-height: 27px; display: flex; align-items: flex-end; color: #015EB6;">Pilih produk</td>
                                </tr>
                                <tr style="transform:translateY(20px);">
                                    <td>
                                        <div style="color:#015EB6; border-radius:100%; width: 30px; height: 30px; left: 740px; top: 3906px; background: #FFFFFF; box-shadow: 0px 28px 80px rgba(0, 0, 0, 0.11), 0px 11.6977px 33.4221px rgba(0, 0, 0, 0.079074), 0px 6.25417px 17.869px rgba(0, 0, 0, 0.0655718), 0px 3.50603px 10.0172px rgba(0, 0, 0, 0.055), 0px 1.86203px 5.32008px rgba(0, 0, 0, 0.0444282), 0px 0.774832px 2.21381px rgba(0, 0, 0, 0.030926);">2</div>
                                    </td>
                                    <td style="font-family: Poppins; font-style: normal; font-weight: 300; font-size: 18px; line-height: 27px; display: flex; align-items: flex-end; color: #015EB6;">Baca deskripsi</td>
                                </tr>
                                <tr style="transform:translateY(30px);">
                                    <td>
                                        <div style="color:#015EB6; border-radius:100%; width: 30px; height: 30px; left: 740px; top: 3906px; background: #FFFFFF; box-shadow: 0px 28px 80px rgba(0, 0, 0, 0.11), 0px 11.6977px 33.4221px rgba(0, 0, 0, 0.079074), 0px 6.25417px 17.869px rgba(0, 0, 0, 0.0655718), 0px 3.50603px 10.0172px rgba(0, 0, 0, 0.055), 0px 1.86203px 5.32008px rgba(0, 0, 0, 0.0444282), 0px 0.774832px 2.21381px rgba(0, 0, 0, 0.030926);">3</div>
                                    </td>
                                    <td style="font-family: Poppins; font-style: normal; font-weight: 300; font-size: 18px; line-height: 27px; display: flex; align-items: flex-end; color: #015EB6;">Tentukan Jumlah QTY</td>
                                </tr>

                            </table>
                        </div>
                <div class="col-md-12 mt-5">
                    <P style="left: 53px; top: 3583px; font-family: Poppins; font-style: normal; font-weight: 600; font-size: 30px; line-height: 45px; align-items: center; text-align: center; color: #000000; text-shadow: 0px 99px 280px rgba(253, 217, 34, 0.17), 0px 41.3598px 116.977px rgba(253, 217, 34, 0.122205), 0px 22.1129px 62.5417px rgba(253, 217, 34, 0.101338), 0px 12.3963px 35.0603px rgba(253, 217, 34, 0.085), 0px 6.5836px 18.6203px rgba(253, 217, 34, 0.0686618), 0px 2.73958px 7.74832px rgba(253, 217, 34, 0.0477948);">Cara Bertransaksi</p>
                </div>
                <div class="row flex-column-reverse flex-lg-row container">
                    <div class="col-md-6">
                        <h5 style="color:#015EB6; padding: 10px;">Beginilah Cara Bertransaksi Dengan Aman</h5>
                        <table style="text-center"> 
                            <tr style="transform:translateY(10px);">
                                <td>
                                    <div style="color:#015EB6; border-radius:100%; width: 30px; height: 30px; left: 740px; top: 3906px; background: #FFFFFF; box-shadow: 0px 28px 80px rgba(0, 0, 0, 0.11), 0px 11.6977px 33.4221px rgba(0, 0, 0, 0.079074), 0px 6.25417px 17.869px rgba(0, 0, 0, 0.0655718), 0px 3.50603px 10.0172px rgba(0, 0, 0, 0.055), 0px 1.86203px 5.32008px rgba(0, 0, 0, 0.0444282), 0px 0.774832px 2.21381px rgba(0, 0, 0, 0.030926);">1</div>
                                </td>
                                <td style="font-family: Poppins; font-style: normal; font-weight: 300; font-size: 18px; line-height: 27px; display: flex; align-items: flex-end; color: #015EB6;">Tentukan lokasi penerima</td>
                            </tr>
                            <tr style="transform:translateY(20px);">
                                <td>
                                    <div style="color:#015EB6; border-radius:100%; width: 30px; height: 30px; left: 740px; top: 3906px; background: #FFFFFF; box-shadow: 0px 28px 80px rgba(0, 0, 0, 0.11), 0px 11.6977px 33.4221px rgba(0, 0, 0, 0.079074), 0px 6.25417px 17.869px rgba(0, 0, 0, 0.0655718), 0px 3.50603px 10.0172px rgba(0, 0, 0, 0.055), 0px 1.86203px 5.32008px rgba(0, 0, 0, 0.0444282), 0px 0.774832px 2.21381px rgba(0, 0, 0, 0.030926);">2</div>
                                </td>
                                <td style="font-family: Poppins; font-style: normal; font-weight: 300; font-size: 18px; line-height: 27px; display: flex; align-items: flex-end; color: #015EB6;">Tentukan metode pembayaran</td>
                            </tr>
                            <tr style="transform:translateY(30px);">
                                <td>
                                    <div style="color:#015EB6; border-radius:100%; width: 30px; height: 30px; left: 740px; top: 3906px; background: #FFFFFF; box-shadow: 0px 28px 80px rgba(0, 0, 0, 0.11), 0px 11.6977px 33.4221px rgba(0, 0, 0, 0.079074), 0px 6.25417px 17.869px rgba(0, 0, 0, 0.0655718), 0px 3.50603px 10.0172px rgba(0, 0, 0, 0.055), 0px 1.86203px 5.32008px rgba(0, 0, 0, 0.0444282), 0px 0.774832px 2.21381px rgba(0, 0, 0, 0.030926);">3</div>
                                </td>
                                <td style="font-family: Poppins; font-style: normal; font-weight: 300; font-size: 18px; line-height: 27px; display: flex; align-items: flex-end; color: #015EB6;">Pembeli akan menerima resi</td>
                            </tr>

                        </table>
                    </div>
                    <div class="col-md-6 mt-2">
                        <img src="<?php echo base_url('assets/img/belanja2.jpg') ?>" style="left: 111px; top: 3776px; background: #C4C4C4;" class="img-fluid" alt="...">
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- akhir section belanja  -->
    
    <!-- footer  -->
    <?php $this->load->view('user/partial/footer') ?>
    
    <!-- JS cart -->
    <script>
        function incrementValue()
        {
            var value = parseInt(document.getElementById('qtyy').value, 10);
            value = isNaN(value) ? 0 : value;
            value++;
            document.getElementById('qtyy').value = value;

            var nilai_form=document.getElementById("qtyy").value;
            document.getElementById("hasill").innerHTML=nilai_form;
        }
    </script>

    <!-- JS QTY -->
    <script>
        var input = document.querySelector(".qty");
            var btnminus = document.querySelector(".qtyminus");
            var btnplus = document.querySelector(".qtyplus");

            if (
            input !== undefined &&
            btnminus !== undefined &&
            btnplus !== undefined &&
            input !== null &&
            btnminus !== null &&
            btnplus !== null
            ) {
            var min = Number(input.getAttribute("min"));
            var max = Number(input.getAttribute("max"));
            var step = Number(input.getAttribute("step"));

            function qtyminus(e) {
                var current = Number(input.value);
                var newval = current - step;
                if (newval < min) {
                newval = min;
                } else if (newval > max) {
                newval = max;
                }
                input.value = Number(newval);
                e.preventDefault();
            }

            function qtyplus(e) {
                var current = Number(input.value);
                var newval = current + step;
                if (newval > max) newval = max;
                input.value = Number(newval);
                e.preventDefault();
            }

            btnminus.addEventListener("click", qtyminus);
            btnplus.addEventListener("click", qtyplus);
            } // End if test

    </script>

    <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.min.js" integrity="sha384-+YQ4JLhjyBLPDQt//I+STsc9iw4uQqACwlvpslubQzn4u2UU2UFM80nGisd026JF" crossorigin="anonymous"></script>
    -->
    <!-- font awesome v5 -->
    <!-- <script src="https://kit.fontawesome.com/10e0601b40.js" crossorigin="anonymous"></script> -->
  </body>
</html>