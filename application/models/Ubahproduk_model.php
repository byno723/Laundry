<?php 

class Ubahproduk_model extends CI_model {
   
    public function getprodukbyid($id)
    {
        return $this->db->get_where('produk', ['id_produk' => $id])->row_array();
    }
   
    public function ubahdata($where, $data, $table)
    {
        $this->db->where($where);
        $this->db->update($table, $data);
    }
}