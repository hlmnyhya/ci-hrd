<?php 
    defined('BASEPATH') OR exit('No direct script access allowed');
    
    class M_Karyawan extends CI_Model{

       
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
    
    public function addKaryawan($data)
    {
        $result = $this->db->insert('karyawan',$data); 
        return $result;
    }

    public function editKaryawan($id)
    {
        $this->db->where('id_karyawan',$id);
        $query = $this->db->get('karyawan');
        return $query->row();
    }

    public function updateKaryawan($id, $data)
    {
        $this->db->where('id_karyawan', $id);
        $this->db->update('karyawan', $data);  
        return $this->db->affected_rows();
    }

    public function deleteKaryawan($id)
    {
        $this->db->where('id_karyawan', $id);
        $this->db->delete('karyawan');  
        return $this->db->affected_rows();
    }

}

/* End of file M_karyawan.php */
        
