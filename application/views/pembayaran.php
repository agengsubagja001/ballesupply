<?php $this->load->view('partial/head') ?>


<body>
      <!-- navbar -->
      <?php $this->load->view('partial/navbar') ?>

        <!-- mengambil data alamat -->
      <?php if(isset($_POST['tambah'])){
                $no_telepon=$_POST['no_telepon'];
                $alamat=$_POST['alamat'];
                $pengiriman=$_POST['ekpedisi'];
            
        } ?>

      <!-- section alamat -->
      <section>
          <div class="container"> 
              <h3 class="text-center">Metode Pembayaran</h3>
                <div class="row">
                    <div class="col-md-6 mt-4">
                        <div class="card" style="widht: 25rem;">
                            <ul class="list-group list-group-flush">
                                <li class="list-group-item"><p style="font-size:12px">Kontak</p><?php var_dump($no_telepon); ?></li>
                                <li class="list-group-item"><p style="font-size:12px">alamat</p><?php echo $alamat ?></li>
                                <li class="list-group-item"><p style="font-size:12px">Pengiriman</p><?php echo $pengiriman ?><p><small>estimasi 3-6 hari</small></p></li>
                                
                            </ul>
                        </div>
                        <h6 class="text-left mt-5">Pilih Metode Pembayaran</h6>
                        <div class="card " style="widht: 25rem;">
                            <ul class="list-group list-group-flush">
                                <li class="list-group-item">
                                    <div class="form-check">
                                        <input style="transform: translatey(15px);" class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1">
                                        <label class="form-check-label" for="flexRadioDefault1">
                                            <img src="<?php echo base_url('assets/gambar/BRI 1.png'); ?>" alt="">
                                        </label>
                                    </div>
                                </li>
                                <li class="list-group-item">
                                    <div class="form-check">
                                        <input style="transform: translatey(15px);" class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1">
                                        <label class="form-check-label" for="flexRadioDefault1">
                                            <img src="<?php echo base_url('assets/gambar/mandiri 1.png'); ?>" alt="">
                                        </label>
                                    </div>
                                </li>
                                <li class="list-group-item">
                                    <div class="form-check">
                                        <input style="transform: translatey(7px);" class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1">
                                        <label class="form-check-label" for="flexRadioDefault1">
                                            <img src="<?php echo base_url('assets/gambar/ovo 1.png'); ?>" alt="">
                                        </label>
                                    </div>
                                </li>
                                <li class="list-group-item">
                                    <div class="form-check">
                                        <input style="transform: translatey(7px);" class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1">
                                        <label class="form-check-label" for="flexRadioDefault1">
                                            <img src="<?php echo base_url('assets/gambar/GoPay 1.png'); ?>" alt="">
                                        </label>
                                    </div>
                                </li>
                            </ul>
                        </div>
                            <div class="mt-4">
                                <button type="submit" class="btn btn-dark">Lanjutkan Pembayaran</button>
                                <a href="<?php echo base_url('alamat'); ?>" style="text-white ml-3">Kembali Ke sebelumnya</a>
                            </div>
                    </div>
                    <div class="col-md-6">
                        <div class="text-center container" >

                        <div class="card mt-4" style="height:500px; ">
                            <div class="col-md-12" style="background:#FAFAFA;">
                            <div class="card-header">
                            
                            </div>
                            <div class="table-responsive">
                            <table class="table">    
                            <thead>
                                <tr>
                                        <th style="text-align: -webkit-auto;" scope="col">Produk</th>
                                        <th scope="col">Nama Produk</th>
                                        <th scope="col">QTY</th>
                                        <th scope="col">Harga</th>
                                </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td> <img style="width: 80px;" src="<?php echo base_url('assets/gambar/sepatu.png'); ?>" alt=""></td>
                                        <td>Sepatu</td>
                                        <td>1</td>
                                        <td>Rp.150.000</td>
                                    </tr>
                                    <tr>
                                        <td><img style="width: 80px;" src="<?php echo base_url('assets/gambar/sepatu.png'); ?>" alt=""></td>
                                        <td>Sepatu</td>
                                        <td>1</td>
                                        <td>Rp.150.000</td> 
                                    </tr>
                                </tbody>
                            </table>
                            </div>
                            <div class="col-md-12 text-right mt-4">
                                <span> Harga Total:  <b>Rp.300.000</b></span>
                            </div>
                            </div>
                            
                        </div>
        
                    </div>
                </div>
            </div>
      </section>
      
      <div class="mt-5">
        <?php $this->load->view('partial/footer') ?>
      </div>
</body>

