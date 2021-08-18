<?php
defined('BASEPATH') OR exit('No direct script access allowed');

// FUnction Tampil Data
class Model_barang extends CI_Model{
    public function tampil_data(){

        return $this->db->get('produk');
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
    
    
    // function HapusPegawai($id)
    // {
        // $this->db->delete('produk',array('id_produk' => $id));


        function input_data($data,$table){
            $this->db->insert($table, $data);
        }

        //FUNCTION HAPUS
        public function hapus_data($where, $table){

            $this->db->where($where);
            $this->db->delete($table);
        }




        // FUNCTION EDIT
        // public function edit_barang($where,$table){
        //     return $this->db->get_where($table,$where);
        // }
        
        // // FUNCTION UPDATE
        // public function update_data($where,$data,$table)
        // {
        //     $this->db->where($where);
        //     $this->db->update($table,$data);
        // }
}