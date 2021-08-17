<?php $this->load->view('partial/head') ?>

    <body>
    <?php $this->load->view('partial/navbar') ?>

        <h5 class="text-center">KONFIRMASI PEMBAYARAN</h5>


        <div>

        </div>

        
        <?php if(isset($_POST['test'])){
            $nama_produk=$_POST['nama_pdk'];
            $kuantyty=$_POST['cek'];
            $harga=$_POST['harga'];
            var_dump($harga);
            var_dump($kuantyty);

            $jumlah=$harga*$kuantyty;
            var_dump($jumlah);

            $warna=$_POST['warna'];
            
            echo ($kuantyty);
            

        } ?>


        <div class="text-center">
        <?php 
        foreach ($query as $pdk) : ?>
        <?php endforeach ?>

        <a href="https://api.whatsapp.com/send?phone=62895354997040&text=Saya%20membeli : <?php echo $nama_produk ?>%20%0ADengan%20Jumlah : <?php echo $kuantyty ?> %0AVarian : %0Aukuran : <?php  ?> %20%0Adengan%20harga :Rp. <?php echo number_format($jumlah) ?> %0A"  class=" btn btn-warning" name ="submit" type="submit" aria-hidden="true"?></i>Beli Sekarang</a>
         
        </div>

        
            
    </body>
    

    
   