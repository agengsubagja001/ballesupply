
    
		
		<!-- Navbar Baru -->
		<nav class="navbar navbar-expand-lg navbar-dark" style=" background-color: #0049A8;color:#fff;margin-bottom:20px">
			<a class="navbar-brand" href="<?= base_url() ?>halaman_utama" style="font-weight: bold;font-family:Poppins;font-style:normal;color:#fff">BALESUPPLY</a>
			<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
				<span class="navbar-toggler-icon"></span>
			</button>
			
			<div class="collapse navbar-collapse" id="navbarNav">
				<ul class="navbar-nav ml-auto">
					<li class="nav-item">
						<a class="nav-link" style="color:#fff" href="<?php echo base_url('blog'); ?>">Blog</a>
					</li>
					<li class="nav-item" style="margin-right: 20px;">
			    		<a class="fa fa-shopping-cart" style="color:white; transform: translate(10px, 10px);" href="<?php echo base_url('detail_keranjang'); ?>"></i><span class="badge badge-pill badge-danger" id="hasil" style="transform:translateY(-10px)"> <?php 
						foreach($jml_qty as $row):?>
						     <span> <?php echo ($row->qty) ?></span>
						<?php endforeach ?> </span><input type="text" style="display:none" id="number" value="0"/></a>
					</li>
					<br>
					<li class="nav-item">
						<a class="btn btn-dark" style="color:#fff" href="<?php echo base_url('auth'); ?>">Masuk</a>
					</li>
				</ul>
			</div>
		</nav>
		<!-- Navbar Baru Akhir -->


