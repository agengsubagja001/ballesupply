
<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Alamat extends CI_Controller {

	function __construct() {
		parent::__construct();
		
		$this->load->helper(array('url','html'));
		$this->load->model('model_pembeli');
		$this->load->database();
	}

	// FUNCTION UNTUK MENAMPILKAN PROVINSI
	function index() {
		$data['berat'] = $this->model_keranjang->tampil_detail_pesanan()->result();
		$data['jml_qty'] = $this->model_keranjang->tampil_qty_pesanan()->result();
		$data['provinsi']=$this->model_pembeli->get_all_provinsi();
			
		$data['path'] = base_url('assets');
		
		$this->load->view('alamat', $data);
	}

	// FUNCTION UNTUK MENAMPILKAN KABUPATEN	
	function add_ajax_kab($id_prov){
		$query = $this->db->get_where('wilayah_kabupaten',array('provinsi_id'=>$id_prov));
		$data = "<option value=''>- Pilih Kabupaten/Kota -</option>";
		foreach ($query->result() as $value) {
			$data .= "<option value='".$value->id."'>".$value->nama."</option>";
		}
		echo $data;
	}

	// FUNCTION UNTUK MENAMPILKAN KECAMATAN
	function add_ajax_kec($id_kab){
		$query = $this->db->get_where('wilayah_kecamatan',array('kabupaten_id'=>$id_kab));
		$data = "<option value=''> - Pilih Kecamatan - </option>";
		foreach ($query->result() as $value) {
			$data .= "<option value='".$value->id."'>".$value->nama."</option>";
		}
		echo $data;
	}

	// FUNCTION UNTUK MENAMPILKAN DESA
	function add_ajax_des($id_kec){
		$query = $this->db->get_where('wilayah_desa',array('kecamatan_id'=>$id_kec));
		$data = "<option value=''> - Pilih Desa - </option>";
		foreach ($query->result() as $value) {
			$data .= "<option value='".$value->id."'>".$value->nama."</option>";
		}
		echo $data;
	}
	

	// FUNCTION TAMBAH DATA
	public function tambah_aksi(){
		// Deklrasi Manual
		$destination = 'Kota Bandung';
		$berat = $this->input->post('total_berat');
		// Akhir Deklrasi Manual
		// Deklarasi Varible
		$ip_alamat = $this->input->post('ip_alamat');
		$id_pembeli = $this->input->post('id_pembeli');
		$no_telepon = $this->input->post('no_telepon');
		$nama_pembeli = $this->input->post('nama_pembeli');
		$alamat = $this->input->post('alamat');
		$provinsi = $this->input->post('provinsi');
		$kota = $this->input->post('kota');
		$kecamatan = $this->input->post('kecamatan');
		$kodepos = $this->input->post('kodepos');
		// Akhir Deklarasi
		// Cetak Ongkir Otomatis
		$curl = curl_init();

		curl_setopt_array($curl, array(
		CURLOPT_URL => "https://api.rajaongkir.com/starter/cost",
		CURLOPT_RETURNTRANSFER => true,
		CURLOPT_ENCODING => "",
		CURLOPT_MAXREDIRS => 10,
		CURLOPT_TIMEOUT => 30,
		CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
		CURLOPT_CUSTOMREQUEST => "POST",
		CURLOPT_POSTFIELDS => "origin=501&destination=114&weight=1700&courier=jne",
		CURLOPT_HTTPHEADER => array(
			"content-type: application/x-www-form-urlencoded",
			"key: 489a7ec53f6372dc09e2d1e0821e0598"
		),
		));

		$response = curl_exec($curl);
		$err = curl_error($curl);

		curl_close($curl);

		if ($err) {
		echo "cURL Error #:" . $err;
		} else {
		var_dump($response);
		}
		// Akhir Cek Ongkir Otomatis
		
 
		$data = array(
			'ip'         =>$ip_alamat,
			'id_pembeli' => $id_pembeli,
			'no_telepon' => $no_telepon,
			'nama_pembeli' => $nama_pembeli,
			'alamat' => $alamat,
			'id_provinsi' => $provinsi,
			'id_kota'=>$kota,
			'id_kecamatan'=>$kecamatan,
			'kodepos'=>$kodepos
			);

			// data provinsi
			$data2 = array(
				
				'id_provinsi' => $provinsi,
				'id_pembeli' => $id_pembeli
				
				);

				// data kabupaten
				$data3 = array(
					'id_pembeli' => $id_pembeli,
					'id_kota'=>$kota
					);

					// data kecamatan
					$data4 = array(
						'id_pembeli' => $id_pembeli,
						'id_kecamatan'=>$kecamatan,
						);


		$this->model_pembeli->input_data($data,'pembeli');
		$this->model_pembeli->input_data($data2,'tb_provinsi');
		$this->model_pembeli->input_data($data3,'tb_kota');
		$this->model_pembeli->input_data($data4,'tb_kecamatan');
		echo "<script>console.log('data berhasil di simpan') </script>";
		// redirect('confirm_cart');
	}

}
