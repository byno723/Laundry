<?php 

class Ubahselesai_model extends CI_model {
    public function ubahDataSelesai($where, $data, $table)
    {
        $this->db->where($where);
        $this->db->update($table, $data);
    }
}