<?php
defined('BASEPATH') OR exit('No direct script access allowed');

// FUnction Tampil Data
class Model_produk extends CI_Model{
    public function tampil_data(){
        // $this->db->order_by('id_produk', 'ASC');
        return $this->db->get('produk');
    }
  //   public function tambah_produk($data, $table){
	// 	$this->db->insert($table, $data);
	// }
  //   function input_data($dataa,$table){
	// 	$this->db->insert($table,$dataa);
	// }
}