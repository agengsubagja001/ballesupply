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

        
		
		// Konfigurasi Foto
		$configs ['upload_path'] = 'assets/gambar_utama';
		$configs ['upload_path'] = 'assets/gambar_samping';
		$configs ['allowed_types'] = 'jpg|jpeg|png|gif|jfif|WEBP';
		$configs = uniqid();
        $configs .= '.';
		$configs .= $ekstensiGambar;

		// Definisi Gambar

		var_dump($configs);
		
        $data = array(
			'nama_produk' => $nama_produk,
			'deskripsi' => $deskripsi,
			'harga' => $harga,
			'berat'=> $berat,
            'foto_utama'=> $configs,
            'foto_samping' => $foto_samping,
            'foto_atas' => $foto_atas   
		);
		echo "<script>console.log('berhasil tanpa') </script>";
		$this->load->library('upload', $configs);
		$namaFileBaru=$this->upload->data('file_name');


        
		$this->model_barang->input_data($data,'produk');
		echo "<script>console.log('berhasil tanpa gambar') </script>";
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
		$id = $this->input->post('id_produk');
		$nama_produk = $this->input->post('nama_produk');
		$deskripsi = $this->input->post('deskripsi');
		$harga = $this->input->post('harga');
		$berat = $this->input->post('berat');
        $foto_utama = $_FILES['foto_utama']['name'];
        $foto_samping = $_FILES['foto_samping']['name'];

        // Definisi Gambar
        $data = array(
			'id_produk' => $id,
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
