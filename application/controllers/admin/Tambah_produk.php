<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Tambah_produk extends CI_Controller {

	public function index()
	{
		$data['item'] = $this->model_produk->tampil_data()->result();
		$this->load->view('admin/tambah_produk',$data);
	}


	// function tambah_aksi()
    // {
    //     $nama_produk       = $this->input->post('Nama_produk');
    //     $deskripsi         = $this->input->post('Deskripsi');
    //     // $kategori       = $this->input->post('kategori');
    //     $harga             = $this->input->post('Harga');
    //     $berat             = $this->input->post('Berat');
    //     $foto_utama        = $_FILES['gambar_utama']['name'];
    //     $foto_samping      = $_FILES['gambar_samping']['name'];
    //     // $Gambar_atas      = $_files[gambar_atas] ['name'];
       

        
       
    //     if ($foto_utama =''){}else{
    //         $config ['upload_path'] = './assets/gambar_utama/';
    //         $config ['allowed_types'] = 'jpg|jpeg|png|gif';

    //         $this->load->library('upload', $config);
    //         if(!$this->upload->do_upload('gambar_utama')){
    //             echo "Gambar gagal di upload";
    //         }else{

    //             // Utama
    //             move_uploaded_file($upload, "$uploads_path/gambar_utama");
    //             $gambar_utama=$this->upload->data('file_nama');
                        
    //         }
    //     }
    //     if ($foto_samping =''){}else{
    //         $configs ['upload_path'] = './assets/gambar_samping';
    //         $configs ['allowed_types'] = 'jpg|jpeg|png|gif';

    //         $this->load->library('upload', $configs);
    //         if(!$this->upload->do_upload('gambar_samping')){
    //             echo "Gambar gagal di upload";
    //         }else{

    //              // Samping
    //             move_uploaded_file($upload, "$uploads_path/gambar_samping");
    //             $gambar_samping=$this->upload->data('file_namaa');
                 
    //         }
    //     }
        
    //      $dataa = array(
    //          'nama_produk'      => $nama_produk,
    //          'deskripsi'        => $deskripsi,
    //         //  'kategori'      => $kategori,
    //          'harga'            => $harga,
    //          'berat'            => $berat,
    //          'foto_utama'       => $foto_utama,
    //          'foto_samping'     => $foto_samping,
    //         //  'gambar_atas'   => $gambar_atas,

    //      );

    //      $this->model_barang->input_data($dataa, 'produk');
    //      redirect('tambah_produk');
         
    //     //  akhir tambah aksi
    // }
	
	// 	// function hapus
		// public function hapus($brg){
        //     $this->model_barang->hapus_produk($brg); 
        //     redirect('admin/tambah_produk');
        // }





        


	function tambah_aksi(){
		$nama_produk = $this->input->post('nama_produk');
		$deskripsi = $this->input->post('deskripsi');
		$harga = $this->input->post('harga');
		$berat = $this->input->post('berat');
        $foto_utama = $_FILES['foto_utama']['name'];
        $foto_samping = $_FILES['foto_samping']['name'];
        $foto_atas = $_FILES['foto_atas']['name'];



        $ekstensiGambarValid =['jpg','jpeg','png'];
        $ekstensiGambar =explode('.', $foto_utama);
        $ekstensiGambar = strtolower(end($ekstensiGambar));
        if(!in_array($ekstensiGambar, $ekstensiGambarValid)) {
            echo "<script>
                    allert('test')';
                    <script>";
            return false;
        }

        $namaFileBaru = uniqid();
        $namaFileBaru .= '.';
        $namaFileBaru .= $ekstensiGambar;

        // Definisi Gambar
        $data = array(
			'nama_produk' => $nama_produk,
			'deskripsi' => $deskripsi,
			'harga' => $harga,
			'berat'=> $berat,
            'foto_utama'=> $namaFileBaru,
            'foto_samping' => $foto_samping,
            'foto_atas' => $foto_atas   
		);

        

        echo "<script>console ('berhasil tanpa gambar') </script>";

        if ($foto_utama=''){
            echo "<script>alert('berhasil') </script>";

        }else{
            $config ['upload_path'] = 'assets/gambar_utama';
            $config ['allowed_types'] = 'jpg|jpeg|png|gif|jfif|WEBP';

            $this->load->library('upload', $config);
            
            $namaFileBaru=$this->upload->data('file_name');

            move_uploaded_file($upload, "$uploads_path/gambar_utama");
            echo "<script>alert('berhasil utama') </script>";
            
        }

        if ($foto_samping=''){
            echo "<script>console.log('berhasil samping if') </script>";

        }else{
            $configs ['upload_path'] = 'assets/gambar_samping';
            $configs ['allowed_types'] = 'jpg|jpeg|png|gif|jfif|WEBP';

            $this->load->library('upload', $configs);
            // $foto_samping=$this->upload->data('file_name');
            echo "<script>console.log('berhasil samping') </script>";
        }

        if ($foto_atas=''){


        }else{
            $configss ['upload_path'] = 'assets/gambar_atas';
            $configss ['allowed_types'] = 'jpg|jpeg|png|gif|jfif|WEBP';

            $this->load->library('upload', $configss);
            if(!$this->upload->do_upload('foto_atas')){
                echo "Gambar gagal di upload";
            }else{

                 // Samping
                move_uploaded_file($upload, "$uploads_path/gambar_atas");
                $foto_atas=$this->upload->data('file_name');
            }
            // $foto_samping=$this->upload->data('file_name');
            // echo "<script>console.log('berhasil samping') </script>";
        }



		$this->model_barang->input_data($data,'produk');
		redirect('admin/tambah_produk');
	}


        // FUNCTION HAPUS
        public function hapus ($brg)
        {
            $where = array('id_produk' => $brg);
            $this->model_barang->hapus_data($where, 'produk');
            redirect('admin/tambah_produk');
        }




    // function hapus(){
    //     $this->model_barang->hapus_produk($brg); 
    //     redirect('admin/tambah_produk');
    // }











    // FUNCTION UPDATE
    public function edit ($brg)
	{
		$where = array('id_produk' =>$brg);
		$data['barang'] = $this->model_barang->edit_barang($where, 'produk')->result();
		$this->load->view('templates_admin/header');
		$this->load->view('templates_admin/sidebar');
		$this->load->view('admin/edit_barang', $data);
		$this->load->view('templates_admin/footer');
	}

    // FUNCTION UPDATE
	public function update(){
		$nama_produk = $this->input->post('nama_produk');
		$deskripsi = $this->input->post('deskripsi');
		$harga = $this->input->post('harga');
		$berat = $this->input->post('berat');
        $foto_utama = $_FILES['foto_utama']['name'];
        $foto_samping = $_FILES['foto_samping']['name'];

        // Definisi Gambar
        $data = array(
			'nama_produk' => $nama_produk,
			'deskripsi' => $deskripsi,
			'harga' => $harga,
			'berat'=> $berat,
            'foto_utama'=> $foto_utama,
            'foto_samping' => $foto_samping  
		);

		$where = array(
			'id_produk' => $id
		);

		$this->model_barang->update_data($where,$data, 'produk');
		redirect('admin/tambah_produk');
	}
}