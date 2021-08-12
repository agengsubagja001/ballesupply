<?php $this->load->view('admin/partial/head') ?>

<!-- CDN DATA TABLES -->


<!-- JS DATA TABLES -->

<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">

        <!-- Sidebar -->
        <?php $this->load->view('admin/partial/sidebar') ?>
        <!-- End of Sidebar -->

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">

                <!-- Topbar -->

                <nav class="navbar navbar-expand navbar-light bg-primary topbar mb-4 static-top shadow" style="background: #0049A8;">
                    <?php $this->load->view('admin/partial/topbar')  ?>
                </nav>

                <!-- End of Topbar -->

                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- DataTales Example -->
                    <nav class="navbar navbar-light bg-light justify-content-between">
                        <a class="navbar-brand"><b style=" left: 439px; top: 128px; font-family: Poppins; font-style: normal; font-weight: 500; font-size: 25px; line-height: 37px; display: flex; align-items: center; color: #222222;">Tambah Produk</b></a>
                            <a href="" class="" data-toggle="modal" data-target="#tambah_baru">
                            <button class="btn btn-primary " style="width: 180px;">Tambah Baru</button></a>
                    </nav>
                    <div class="card shadow mb-4">
                        <div class="card-body">

                            <div class="table-responsive">
                                <table class="table table-bordered" id="table_id" width="100%">
                                        <thead>
                                            <tr>
                                                <th scope="col">No</th>
                                                <th scope="col">Produk</th>
                                                <th scope="col">Nama Produk</th>
                                                <th scope="col">Harga</th>
                                                <th scope="col">Berat</th>
                                                <th scope="col">Aksi</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                        <?php foreach ($barang as $brg) :?>
                                            <tr>
                                                <td><?php echo $brg->id_produk ?></td>
                                                <td><img src="<?php echo base_url().'assets/gambar_utama/'. $brg->foto_utama ?>" class="img-fluid" style="width: 100px; left: px; top: 454px" alt=""></td>
                                                <td><?php echo $brg->nama_produk ?> </td>
                                                <td><?php echo $brg->harga ?></td>
                                                <td><?php echo $brg->berat ?></td>
                                                <td>
                                                    <div class="row">
                                                        <div class="col-md-2" style="padding:5px;">
                                                                <button type="button" class="btn btn-small" style="background: #FFFFFF; box-shadow: 0px 23px 80px rgba(0, 0, 0, 0.12), 0px 9.60885px 33.4221px rgba(0, 0, 0, 0.0862625), 0px 5.13735px 17.869px rgba(0, 0, 0, 0.0715329), 0px 2.87996px 10.0172px rgba(0, 0, 0, 0.06), 0px 1.52952px 5.32008px rgba(0, 0, 0, 0.0484671), 0px 0.636469px 2.21381px rgba(0, 0, 0, 0.0337375);"><i class="fa fa-pencil-square-o" style="color:#FDD922;" aria-hidden="true"></i></button>
                                                        </div>
                                                        <div class="col-md-2" style="padding:5px;">
                                                        <button type="button" class="btn btn-small" style="background: #FFFFFF; box-shadow: 0px 23px 80px rgba(0, 0, 0, 0.12), 0px 9.60885px 33.4221px rgba(0, 0, 0, 0.0862625), 0px 5.13735px 17.869px rgba(0, 0, 0, 0.0715329), 0px 2.87996px 10.0172px rgba(0, 0, 0, 0.06), 0px 1.52952px 5.32008px rgba(0, 0, 0, 0.0484671), 0px 0.636469px 2.21381px rgba(0, 0, 0, 0.0337375);"><i class="fa fa-trash" style="color:#FC185A;" aria-hidden="true"></i></button>
                                                        </div>
                                                    </div>                           
                                                </td>
                                            </tr>
                                        <?php endforeach ?>
                                        </tbody>
                                </table>
                                <script type="text/javascript">
                                    $(document).ready( function () {
                                        $('#table_id').DataTable();
                                    } );
                                </script>
                            </div>
                            <!-- End of Main Content -->

                            <!-- Footer -->
                            <?php $this->load->view('admin/partial/footer') ?>
                            <!-- End of Footer -->

                        </div>
                        <!-- End of Content Wrapper -->

                    </div>
                    <!-- End of Page Wrapper -->

                    <!-- Scroll to Top Button-->
                    <a class="scroll-to-top rounded" href="#page-top">
                        <i class="fas fa-angle-up"></i>
                    </a>

                    <!-- Logout Modal-->
                    <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
                                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">×</span>
                                    </button>
                                </div>
                                <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
                                <div class="modal-footer">
                                    <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                                    <a class="btn btn-primary" href="login.html">Logout</a>
                                </div>
                            </div>
                        </div>
                    </div>


                    <!-- Modal Card -->
                    <div class="modal fade" id="tambah_baru" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">Input Produk</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <form action="<?php echo base_url(). 'admin/data_barang/tambah_aksi'?>" method="post" enctype="multipart/form-data">
                                
                                <div class="form-group">
                                    <label>Nama barang</label>
                                    <input type="text" name="nama_brg" class="form-control">
                                </div>

                                <div class="form-group">
                                    <label>Keterangan</label>
                                    <input type="text" name="keterangan" class="form-control">
                                </div>

                                <div class="form-group">
                                    <label>Kategori</label>
                                    <select class="form-control" name="kategori">
                                <option>Aksesoris</option>
                                <option>Pakan Ikan</option>
                                <option>Senar Pancing</option>
                                <option>Jaring</option>
                                <option>Joran Pancing</option>
                                <option>Kail Pancing</option>  
                                </select>
                                </div>	

                                <div class="form-group">
                                    <label>Harga</label>
                                    <input type="text" name="harga" class="form-control">
                                </div>

                                <div class="form-group">
                                    <label>Stok</label>
                                    <input type="text" name="stok" class="form-control">
                                </div>

                                <div class="form-group">
                                    <label>Gambar produk</label>
                                    <input type="file" name="gambar" class="form-control">
                                </div>

                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                            <button type="submit" class="btn btn-primary">Simpan</button>
                        </div>

                        </form>
                        
                        </div>
                    </div>
                    </div>
                    <!-- akhir modal card -->

                    <!-- FUNCTION DATA TABLE -->
                   

                    <!-- CDN JQUERY DATA TABLES -->
                    

                    <!-- Bootstrap core JavaScript-->
                    
                    <script src="<?= base_url() ?>template_admin/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

                    <!-- Core plugin JavaScript-->
                    

                    <!--font awesome  -->
                    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

                    <!-- Custom scripts for all pages-->
                    <script src="<?= base_url() ?>template_admin/js/sb-admin-2.min.js"></script>

                </div>
            </div>
        </div>
    </div>

</body>
