<?php 
defined('BASEPATH') OR exit('No direct script access allowed');
    
class M_riwayat extends CI_Model{
    
    public function show_data()
    {
        $this->db->select('*');
        $this->db->from('riwayat');
        $this->db->join('karyawan','karyawan.id_karyawan = riwayat.id_karyawan');
        $this->db->join('jabatan','jabatan.id_jabatan = riwayat.jabatan');
        $this->db->join('divisi','divisi.id_divisi = riwayat.divisi');
        $this->db->join('golongan','golongan.id_golongan = riwayat.golongan');
        $query = $this->db->get();
        return $query;
    }

     public function getKaryawan()
    {
        return $this->db->query('SELECT * FROM karyawan_pribadi');
    }


    public function get_data($table){
        return $this->db->get($table);
    }
    
    public function insert_data($table, $data)
    {
        $this->db->insert($table, $data);
    }

    public function update_data($id)
    {
        return $this->db->get_where('riwayat', ['id_riwayat' => $id])->row_array();
    }
        
    public function delete_data($id_riwayat)
    {
        $this->db->where('id_riwayat', $id_riwayat);
        return $this->db->delete('riwayat');
    }

    public function detail_data($id_riwayat = NULL)
    {
        $query = $this->db->get_where('riwayat',array('id_riwayat'=> $id_riwayat))->row();
        return $query;
    }
}

/* End of file M_Mpp.php */
        