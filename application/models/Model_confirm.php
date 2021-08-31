<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Model_confirm extends CI_Model{
     public function tampil_data(){
           $ip= $_SERVER['REMOTE_ADDR'];
           $this->db->from('keranjang');
           $this->db->where('ip',$ip);
           return $this->db->get(); 
        //    return $this->db->get()->result();
           
	 }   
	 public function tampil_data_pembeli(){
		$ip= $_SERVER['REMOTE_ADDR'];
		$this->db->from('pembeli');
		$this->db->where('ip',$ip);
		return $this->db->get(); 
	 //    return $this->db->get()->result();
		
	} 
	public function tampil_data_detail_keranjang(){
		$ip= $_SERVER['REMOTE_ADDR'];
		$this->db->from('detail_keranjang');
		$this->db->where('ip',$ip);
		return $this->db->get(); 
	 //    return $this->db->get()->result();
		
  }     
  public function input_data($data,$table){
	$this->db->insert($table, $data);
  }
}    
