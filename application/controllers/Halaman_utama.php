<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Halaman_utama extends CI_Controller {

	public function __construct(){
		parent::__construct();		
		$this->load->model('model_barang');
                $this->load->helper('url');
	}

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
	public function index()
	{
		$data['gabung']=$this->model_barang->join()->result();
		$data['card'] = $this->model_barang->tampil_data()->result();
		$this->load->view('halaman_utama',$data);
		
		// $join['query'] = $this->model_barang->join()->result();
        // $this->load->view('landing_page',$join);

		// MENAMPILKAN DENGAN SINTAX VALUE QUERY
		// $data['query'] = $this->model_barang->tampil_data()->result();
	}
	public function search(){
        $keyword = $this->input->post('keyword');
        $data['query']=$this->model_barang->get_produk_keyword($keyword);
        $this->load->view('halaman_utama',$data);
		
    }
	public function buy(){
         $this->load->view('halaman_utama',$data);
		
    }
}