<?php
ini_set('display_errors', 1);//Atauerror_reporting(E_ALL && ~E_NOTICE);
defined('BASEPATH') OR exit('No direct script access allowed');


class Tambah_produk extends CI_Controller {
	public function __construct()
        {
                parent::__construct();
                $this->load->helper(array('form', 'url'));
        }

	public function index()
	{
		$data['item'] = $this->model_produk->tampil_data()->result();
		$this->load->view('admin/tambah_produk',$data);
	}


	function upload()
    {
        $nama_produk       = $this->input->post('nama_produk');
        $deskripsi         = $this->input->post('deskripsi');
        // $kategori       = $this->input->post('kategori');
        $harga             = $this->input->post('harga');
        $berat             = $this->input->post('berat');
        $foto_utamaa        = $_FILES['foto_utama']['name'];
        $foto_samping      = $_FILES['foto_samping']['name'];
        // $Gambar_atas      = $_files[gambar_atas] ['name'];
       

        
       
        if ($foto_utamaa =''){}else{
            $config ['upload_path'] = '../../assets/gambar_utama/';
            $config ['allowed_types'] = 'jpg|jpeg|png|gif';

            $this->load->library('upload', $config);
            if(!$this->upload->do_upload('gambar_utama')){
				// echo "Gambar gagal di upload";
				echo "<script>console.log('gagal upload')</script>";
            }else{

                // Utama
				echo "<script>console.log('berhasil upload')</script>";
                $foto_utamaa=$this->upload->data('file_nama');
                        
            }
        }
        if ($foto_samping =''){}else{
            $configs ['upload_path'] = './assets/gambar_samping';
            $configs ['allowed_types'] = 'jpg|jpeg|png|gif';

            $this->load->library('upload', $configs);
            if(!$this->upload->do_upload('gambar_samping')){
				// echo "Gambar gagal di upload";
				echo "<script>console.log('Gagal berhasil upload')</script>";
            }else{

                 // Samping
				 echo "<script>console.log('berhasil upload')</script>";
                $foto_samping=$this->upload->data('file_namaa');
                 
            }
        }
        
         $dataa = array(
             'nama_produk'      => $nama_produk,
             'deskripsi'        => $deskripsi,
            //  'kategori'      => $kategori,
             'harga'            => $harga,
             'berat'            => $berat,
             'foto_utama'       => $foto_utamaa,
             'foto_samping'     => $foto_samping,
            //  'gambar_atas'   => $gambar_atas,

         );

         $this->model_barang->input_data($dataa, 'produk');
		//  redirect('tambah_produk');
		echo "<script>console.log('berhasil upload akhir')</script>";
         
        //  akhir tambah aksi
    }
	
		// function hapus
		public function hapuss($brg){
            $this->model_barang->hapus_produk($brg); 
            redirect('admin/tambah_produk');
        }




	public function tester(){
		$nama_produk = $this->input->post('nama_produk');
		$deskripsi = $this->input->post('deskripsi');
		$harga = $this->input->post('harga');
		$berat = $this->input->post('berat');
		// Samping
		$config['upload_path']          = './assets/gambar_samping';
		$config['allowed_types']        = 'png|jpg|gif';
		$config['encrypt_name'] = TRUE; //nama yang terupload nantinya
		$this->upload->initialize($config);
		$this->load->library('upload', $config);

		// 	Foto
		

		for ($i =1;$i <=3 ; $i++){
			
			if( !empty($poto_samping=$_FILES['poto_sampingg'.$i]['name'])){
				echo "<script>console.log('Gagal')</script>";
			}else{
				echo "<script>console.log('Berhasil')</script>";
				// Samping
				// $upload_data = $this->upload->data();
				// $name = $upload_data['file_name'];
				$dataa = array(
					'nama_produk'      => $nama_produk,
					'deskripsi'        => $deskripsi,
				   //  'kategori'      => $kategori,
					'harga'            => $harga,
					'berat'            => $berat,
					// 'foto_utama'       => $nama_utama,
					// 'foto_samping'     => $name,
				);
				   // Redirect
				   $this->model_barang->input_data($dataa, 'produk');
				    // redirect('tambah_produk');
				   var_dump($poto_samping);
				echo "<script>console.log('berhasil upload akhir')</script>";
			}
		}

	}
    public function do_upload(){
					// Iniliasasi
					
					// $gambar_utama = $_FILES['foto_utama']['name'];
					// $foto_samping = $_FILES['foto_sampingg']['name'];

					// Config Foto
					$config['upload_path'] = './assets/foto_utama';
					// $config['max_size'] = '2048';  //2MB max
					// $config['max_width'] = '4480'; // pixel
					// $config['max_height'] = '4480'; // pixel
					$config['file_name'] = $_FILES['foto_sampingg']['name'];
					$this->upload->initialize($config);
					// Akhir
				if (!empty($_FILES['foto_sampingg']['name'])) {
							$foto = $this->upload->data($config);
							
							   //  'gambar_atas'   => $gambar_atas,
							   var_dump($foto);
							
				   
					// $foto_atas = $_FILES['foto_atas']['name'];
					
					
					
		   

					
				}else{
					echo "<script>console.log('Gagal Masuk')</script>";
				}
	} 


	public function tambah_aksi(){
		$nama_produk = $this->input->post('nama_produk');
		$deskripsi = $this->input->post('deskripsi');
		$harga = $this->input->post('harga');
		$berat = $this->input->post('berat');
        // $foto_utama = $_FILES['foto_utama']['name'];
        // $foto_samping = $_FILES['foto_samping']['name'];
		// $foto_atas = $_FILES['foto_atas']['name'];

		
		
		$config['upload_path']          = '././assets/';
		$config['allowed_types']        = 'gif|jpg|png';
		$config['max_size']             = 100;
		$config['max_width']            = 1024;
		$config['max_height']           = 768;

		$this->load->library('upload', $config);

		if ( ! $this->upload->do_upload('foto_utama'))
		{
				$error = array('error' => $this->upload->display_errors());

				
		}
		else
		{
				$data = array('upload_data' => $this->upload->data());

				$this->load->view('upload_success', $data);
		
			
			// if($this->upload->do_upload('foto_utama')) {
			// 	echo "<script>console.log('Gagal Upload')</script>";
				
			// }else{
			// 	$foto_utama=$this->upload->data('file_name');
			// 	echo "<script>console.log('berhasil upload Upload')</script>";
			// 	$data = array(
			// 		'nama_produk' => $nama_produk,
			// 		'deskripsi' => $deskripsi,
			// 		'harga' => $harga,
			// 		'berat'=> $berat,
			// 		'foto_utama'=> $foto_utama,
			// 		'foto_samping' => $foto_samping,
			// 		'foto_atas' => $foto_atas
					
			// 	);
			// 	$this->model_barang->input_data($data,'produk');
			// 	echo "<script>console.log('berhasil simpan gambar') </script>";
			// 	redirect('admin/tambah_produk');
			// }
		}
        echo "<script>console.log('Gagal Upload bersih')</script>";
		
        
		

        
		
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
