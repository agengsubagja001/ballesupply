<?php
defined('BASEPATH') OR exit('No direct script access allowed');

// FUnction Tampil Data
class Model_barang extends CI_Model{
    public function tampil_data(){

        return $this->db->get('produk');
    }

    // FUNCTION JOIN TABEL
    public function join_produk(){
        $this->db->select('tbl_user.username,tbl_user.userid,tbl_usercategory.type');
        $this->db->from('tbl_user');
        $this->db->join('tbl_usercategory','tbl_usercategory.usercategoryid=tbl_user.usercategoryid','inner');
        $query=$this->db->get();
    }

    //FUNCTION SEARCH
    public function get_produk_keyword($keyword){
        $this->db->select('*');
        $this->db->from('produk');
        $this->db->like('nama_produk',$keyword);
        return $this->db->get()->result();
    }

    //FUNCTION DETAIL
    public function detail($id){
        $this->db->select('*');
        $this->db->from('produk');
        $this->db->where('produk.id_produk',$id);
        return $this->db->get()->result();
    }

    //FUNCTION CHECKOUT
    public function checkout($id_produk){
                $this->db->where('id_produk',$id_produk);

    }
    // FUNCTION JOIN
    public function join(){
        $data=$this->db->query("SELECT produk.nama_produk,produk.harga,produk.berat,produk.deskripsi,produk.foto_utama,produk.foto_samping,produk.foto_atas,varian.isi_varian FROM produk INNER JOIN varian ON varian.id_produk=produk.id_produk");
        return $data;

    }

    // public function tambah_barang($data,$produk){
	// 	$this->db->insert($produk,$data);
	// }

    // // function input produk
    // function input_data($dataa,$table){
	// 	$this->db->insert($table,$dataa);
	// }

    // // function hapus produk
	// function hapus_produk($brg){
	// 	$this->db->delete('produk','id_produk',$brg);
		
    // }
    
    // function HapusPegawai($id)
    // {
        // $this->db->delete('produk',array('id_produk' => $id));


        function input_data($data,$table){
            $this->db->insert($table, $data);
        }
}