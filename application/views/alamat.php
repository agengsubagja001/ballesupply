<?php $this->load->view('partial/head') ?>


<body>
      <!-- navbar -->
      <?php $this->load->view('partial/navbar') ?>

      <!-- section alamat -->
      <section>
          <div class="container"> 
              <h3 class="text-center">Lengkapi Alamat</h3>
                <div class="row">
                    <div class="col-md-6">

                        <!-- FORM UNTUK MENAMBAHKAN DATA -->

                        <form action="<?php echo base_url('alamat/tambah_aksi'); ?>" method="POST">
                            <!-- String ID PRODUK-->

									<?php
											function id_pembeli($length = 9, $chars = '1234567890abcdefghijklmnopqrstuvwxyz')
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
                            <div class="form-group">
                                <label for="inputAddress">Kontak</label>
								<input type="hidden" name="ip_alamat" value="<?php echo $_SERVER['REMOTE_ADDR'];?>">
                                <input type="hidden" name="id_pembeli" value="<?php echo id_pembeli()?>">
                                <input type="number" name="no_telepon" class="form-control" id="telepon" placeholder="Masukan no.telepon" required>
                            </div>
                            <div class="form-group">
                                <label for="inputAddress">Nama Lengkap</label>
                                <input type="text" name="nama_pembeli" class="form-control" id="nama" placeholder="Masukan nama lengkap" required>
                            </div>
                            
                            <div class="form-row">
                                <div class="form-group col-md-6">
                                <label for="inputCity">Provinsi</label>
                                <select id="provinsi" name="provinsi" class="form-control" required>
                                    <option value="">Pilih Provinsi</option>

                                    <?php foreach($provinsi as $prov){
                                        echo '<option value="'.$prov->id.'">'.$prov->nama.'</option>';
                                    } ?>
                                    
                                </select>
                                </div>

                                <div class="form-group col-md-6">
                                <label for="inputState">Kota</label>
                                <select id="kota" name="kota" class="form-control" required>
                                    <option value="">Pilih kota/kabupaten</option>
                                </select>
                                </div>  
                            </div>
                            <div class="form-row">

                                <div class="form-group col-md-6">
                                <label for="inputCity">Kecamatan</label>
                                <select id="kecamatan" name="kecamatan" class="form-control">
                                    <option selected>Pilih Kecamatan</option>
                                </select>
                                </div>
                                
                                <div class="form-group col-md-6">
                                <label for="inputState">Kode Pos</label>
                                <input type="text" name="kodepos" id="kodepos" class="form-control" id="kodepos" placeholder="Kode Pos">
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="inputAddress">Alamat</label>
                                <textarea value="alamat" name="alamat" id="alamat" cols="30" rows="10" placeholder="Masukan alamat lengkap (Jln,Kelurahan,RT/RW, Kecamatan, kota, provinsi, dan kodepos )" class="form-control"></textarea>
                            </div>
                            <div>
								<button type="submit" name="tambah" class="btn btn-dark" value="tambah">Confirm Alamat</button>
								<a href="<?php echo base_url('pembayaran'); ?>" class="btn btn-outline-dark">Kembali Belanja</a>
                            </div>
                        </form>
                    </div>
                    <div class="col-md-6 p-5 container">
                        <div class="embed-responsive embed-responsive-16by9" >
                            <iframe class="embed-responsive-item" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d15843.40795503574!2d107.61921962399812!3d-6.908295720132798!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e68e7f566e3f7b3%3A0x66f80eea21a7e5b9!2sPT%20.%20Bale%20kreatif%20indonesia!5e0!3m2!1sid!2sid!4v1629952021147!5m2!1sid!2sid"  style="border:0; width:600 px; height:450 px" allowfullscreen="" loading="lazy"></iframe>
                        </div>
        
                    </div>
                </div>
            </div>
      </section>

    
      
      <div class="mt-5">
        <?php $this->load->view('partial/footer') ?>
      </div>
</body>

