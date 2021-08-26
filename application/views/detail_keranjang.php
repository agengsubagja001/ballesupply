<?php $this->load->view('partial/head'); ?>
<?php $this->load->view('partial/navbar'); ?>

<body>
  <!-- Id Generate -->
  <?php
    function id_detail_keranjang($length = 9, $chars = '1234567890abcdefghijklmnopqrstuvwxyz')
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
  <!-- Akhir Id Generate -->
        
      <!-- awal detail keranjang -->
      <div class="card shadow mt-5 container-fluid ">
    <div class="card">
        <div class="col-md-12">
          <div class="card-header">
          <h5>Detail Pesananmu</h5>
          </div>
          <div class="table-responsive">
          <table class="table">    
           <thead>
              <tr>   
                    <th style="text-align: -webkit-auto;" scope="col">Nama Produk</th>
                    <th scope="col">Berat</th>
                    <th scope="col">Harga</th>
                    <th scope="col">QTY</th>
                    <th scope="col">Ukuran</th>
                    <th scope="col">warna</th>
                    
              </tr>
            </thead>
             <tbody>
                <?php $no=1; ?>
                <?php foreach ($query as $kjr) : ?>
                  <tr> 
                        <td><?php echo $kjr->nama_produk ?></td>
                        <td><?php echo $kjr->berat ?> Gram</td>
                        <td><?php echo $kjr->harga ?></td> 
                        <td><?php echo $kjr->qty ?></td>
                        <td><?php echo $kjr->ukuran  ?></td>
                        <td><?php echo $kjr->warna  ?></td>
                    </tr>
                <?php endforeach ?>    
             </tbody>
            </table>
          </div>
          </div>
          <div class="col-md-12 text-right">
          <form action="<?php echo base_url('detail_keranjang/add_detail_cart');?>" method="post">
          <?php foreach ($total as $tot) : ?>
               <span style="font-weight:bold"> Harga Total: <?php echo number_format($tot->harga) ?></span>
                <input type="hidden" name="id_detail_keranjang" value="<?php echo id_detail_keranjang()?>">
                <input type="hidden" name="ip_detail" value="<?php echo $ip= $_SERVER['REMOTE_ADDR']; ?>">
               <input type="hidden" name="tot_harga" value="<?php echo ($tot->harga) ?>">
            <?php endforeach ?>
            <?php 
              foreach($jml_qty as $row):?>
              <input type="hidden" name="jml_qty" value="<?php echo ($row->qty) ?>">
            <?php endforeach ?> 
            <?php 
              foreach($jml_brt as $brt):?>
              <input type="hidden" name="total_berat" value="<?php echo ($brt->berat) ?>">
               
            <?php endforeach ?> 
                 
          </div>
        <div class="col-md-12 text-right">
          <button class="btn btn-dark mt-3" name="buy_detail_cart" type="submit" style="width: 180px;"><span style="color=ffff;">Bayar</span></button>
        </div>
        <div class="col-md-12 text-right">
        <p class="font-italic" style="color:#FC185A;">Ini Belum Termasuk Ongkir</p>
        </div>
        <div class="col-md-12">
        <button class="btn btn-light " ><span style="color=ffff;">Kembali belanja</span></button>
        </div>
        </form>
        <br>
      </div>
      </div>  
      <!-- akhir detail keranjang -->
          
      
       <div class="mt-4">
           <!-- footer -->
        <?php $this->load->view('partial/footer') ?>       
       </div>
       
</body>
