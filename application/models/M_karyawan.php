<?php 
defined('BASEPATH') OR exit('No direct script access allowed');
    
class M_karyawan extends CI_Model{
    
    public function show_data()
    {
        $this->db->select('*');
        $this->db->from('karyawan');
        $this->db->join('karyawan_pribadi','karyawan_pribadi.id_karyawan_pribadi = karyawan.karyawan_pribadi');
        $this->db->join('golongan','golongan.id_golongan = karyawan.golongan');
        $this->db->join('jabatan','jabatan.id_jabatan = karyawan.jabatan');
        $this->db->join('divisi','divisi.id_divisi = karyawan.divisi');
        $query = $this->db->get();
        return $query;
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
        return $this->db->get_where('karyawan', ['id_karyawan' => $id])->row_array();
    }
        
    public function delete_data($id_karyawan)
    {
        $this->db->where('id_karyawan', $id_karyawan);
        return $this->db->delete('karyawan');
    }

    public function detail_data($id_karyawan = NULL)
    {
        $query = $this->db->get_where('karyawan',array('id_karyawan'=> $id_karyawan))->row();
        return $query;
    }

    public function getKaryawan()
    {
        return $this->db->query('SELECT * FROM karyawan');
    }

    public function getDivisi()
    {
        return $this->db->query('SELECT * FROM divisi');
    }

    public function getJabatan()
    {
        return $this->db->query('SELECT * FROM jabatan');
    }

    public function getGolongan()
    {
        return $this->db->query('SELECT * FROM golongan');
    }

    public function getThl()
    {
        return $this->db->query('SELECT * FROM thl');
    }

    public function getPribadi()
    {
        return $this->db->query('SELECT * FROM karyawan_pribadi');
    }
}

/* End of file M_Mpp.php */
        