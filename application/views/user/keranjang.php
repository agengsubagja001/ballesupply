<?php $this->load->view('user/partial/head');

$id_produk=$_GET['id'];

?>

<body>
      <!-- navbar -->
      <?php $this->load->view('user/partial/navbar') ?>

    <!-- Section card bayar -->
    <!-- awal tabel keranjang -->
    <div class="card shadow container-fluid" style="top: 135px; margin-bottom: 250px;"> 
        <div class="card" >
            <div class="col-md-12 mt-2">
                <div class="card-header">
                    <h5>Detail Pesananmu</h5>
                </div>
                <div class="table-responsive">
                    <table class="table ">
                        <thead>
                            <tr>
                            <th scope="col">Produk</th>
                            <th scope="col">Nama</th>
                            <th scope="col">qty</th>
                            <th scope="col">Harga</th>
                            <th scope="col">Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                        <?php foreach ($query as $pdk) : ?>
                            <tr>
                                <td scope="row"><img src="<?php echo base_url('assets/img/gambar4.jpg') ?>" class="img-fluid" style="width: 100px; left: px; top: 454px" alt=""></td>
                                <td><?php echo $pdk->nama_produk ?></td>
                                <td>1</td>
                                <td><b>RP 500.000</b></td>
                                <td><button type="button" class="btn" style="background: #FFFFFF; box-shadow: 0px 23px 80px rgba(0, 0, 0, 0.12), 0px 9.60885px 33.4221px rgba(0, 0, 0, 0.0862625), 0px 5.13735px 17.869px rgba(0, 0, 0, 0.0715329), 0px 2.87996px 10.0172px rgba(0, 0, 0, 0.06), 0px 1.52952px 5.32008px rgba(0, 0, 0, 0.0484671), 0px 0.636469px 2.21381px rgba(0, 0, 0, 0.0337375);"><i class="fa fa-trash" style="color:#FC185A;" aria-hidden="true"></i></button></td>
                            </tr>
                        <?php endforeach ?>
                            
                        </tbody>
                    </table>
                </div>
            </div>
                <div class="col-md-12 text-right">
                    <span>Harga Total:  <b>Rp.1000.000</b></span>
                </div>
                    <div class="col-md-12 text-right">
                        <a href="https://wa.me/qr/YDSUT42WOEMUE1">
                        <button class="btn btn-dark mt-3" style="width: 180px;">Bayar</button></a>
                    </div>
                <div class="col-md-12 text-right">
                    <p class="font-italic mt-3" style="color:#FC185A;">Ini Belum Termasuk Ongkir</p>
                </div>
        </div>
    </div>   
    <!-- akhir tabel keranjang -->
    
    <!-- section footer  -->
    <?php $this->load->view('user/partial/footer') ?>
    
    <!-- section tentang perusahaan  -->
    <!-- Optional JavaScript; choose one of the two! -->

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
