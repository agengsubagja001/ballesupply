<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Cetak extends CI_Controller {
    public function __construct()
        {
                parent::__construct();
				$data['item'] = $this->model_produk->tampil_data()->result();
				if ($this->session->userdata('status') != "login") {
					redirect(base_url('auth'));
				}
				
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
		$data['campur'] = $this->model_invoice->tampil_data()->result();
        // $data['query'] = $this->model_barang->tampil_data()->result();
		$this->load->view('admin/print',$data);
		
	}
}

