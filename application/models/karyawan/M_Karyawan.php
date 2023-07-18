<?php 
    defined('BASEPATH') OR exit('No direct script access allowed');
    
    class M_Karyawan extends CI_Model{
    
    public function getKaryawan($id= null)
    {
        if ($id===null) {
            $result = $this->db->get('karyawan')->result();
            return $result;              
        }else {
            $result = $this->db->get_where('karyawan',['id_karyawan' => $id])->result();
            return $result;               
        }
    }

    public function getKaryawanbyid($id)
    {
        if ($id===null) {
            $result = $this->db->get('karyawan')->result();
            return $result;              
        }else {
            $result = $this->db->get_where('karyawan',['id_karyawan' => $id])->result();
            return $result;               
        }
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
        
