<?php

class Model_kategori extends CI_Model{

     public function data_laptop(){
        return $this->db->get_where("tb_barang",array('kategori' => 'laptop'));
    }
    
    public function data_smartphone(){
        return $this->db->get_where("tb_barang",array('kategori' => 'smartphone'));
    }

    public function data_tablet(){
        return $this->db->get_where("tb_barang",array('kategori' => 'tablet'));
    }

    public function data_kamera(){
        return $this->db->get_where("tb_barang",array('kategori' => 'kamera'));
    }
   
}