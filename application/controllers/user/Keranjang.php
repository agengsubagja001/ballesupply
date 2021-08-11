<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Keranjang extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */

	 //FUNCTION TAMPIL DATA
	// public function index()
	// {
		// $data['query'] = $this->model_barang->tambah_data()->result();
		// $this->load->view('user/keranjang',$data);
		// echo $_GET['id'];
	// }

	//FUNCTION
	public function cart(){
        $data['produk']=$this->model_barang->detail($id);
        $this->load->view('user/keranjang',$data);
		
    }

	//FUNCTION CHECKOUT
	public function buy(){
        $query['query']=$this->model_barang->tambah_data();
        $this->load->view('user/keranjang',$query);
		
    }

	// function hapus($id)
    // {
        // $this->model_barang->Hapuspegawai($id);
        // redirect('user/keranjang');
	// }
}