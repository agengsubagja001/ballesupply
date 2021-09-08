<?php $this->load->view('partial/head'); ?>


<body >

  <div class="container">
    
    <!-- Outer Row -->
    <div class="row justify-content-center">

      <div class="col-xl-5 col-lg-12 col-md-9">

        <div class="card border-2 shawdow-lg my-5">
          <div class="card-body p-0">
          <div  class="alert alert-primary"role="alert"><center>Form ini hanya untuk Admin!</center></div>
            <!-- Nested Row within Card Body -->
            <div class="row">
              <div class="col-lg-12">
                <div class="p-5">
                  <div class="text-center">
                    <h1 class="h4 text-gray-900 mb-4"> Form Login</h1>
                    </div>
                    <?php echo $this->session->flashdata('pesan') ?>
                    <form method="post" action="<?php echo base_url('auth/aksi_login') ?>" class="user">
                      <div class="form-group">
                        <input type="text" class="form-control form-control-user" id="exampleInputEmail" aria-describedby="emailHelp" placeholder="Masukkan Username Anda" name="username">
                        <?php echo form_error('username', '<div class="text-danger small ml-2">','</div'); ?>
                      </div>
                      <div class="form-group">
                        <input type="password" class="form-control form-control-user" id="exampleInputPassword" placeholder="Masukkan Password Anda" name="password">
                        <?php echo form_error('password', '<div class="text-danger small ml-2">','</div'); ?>
                      </div>
                      <button type="submit" value="login" class="btn btn-info form-control">Login</button>
                    </form>
                    <br>
                    <a href="<?= base_url() ?>halaman_utama">
                     <button type="submit" value="login" class="btn btn-outline-info form-control">kembali</button>
                    </a>
                    <!-- <button class="btn btn-outline-dark "><span style="color=ffff;">Kembali belanja</span></button> -->
                    <hr>

                    <!-- <div class="text-center">
                      <a class="small" href="<?php echo base_url('registrasi/index'); ?>"> Belum Punya Akun? Daftar!</a>
                    </div> -->
                  </div>
                </div>
              </div>
            </div>
          </div>

        </div>

      </div>

    </div>



















<!-- <?php

    $text="berenang,menggambar,mendengarkan musik,Belanja,Liburan";

 

    echo "text awal = '$text'";

 

    $hobi=explode(",", $text);

 

    echo "<p>Hasilnya Ketika Menggunakan fungsi Explode</p><pre>";

    print_r($hobi);

    echo "</pre>";


    foreach ($hobi as $key => $data) {

        echo "$key. $data<br/>";
    }
?> -->
