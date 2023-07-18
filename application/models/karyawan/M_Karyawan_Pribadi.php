<?php 
    defined('BASEPATH') OR exit('No direct script access allowed');
    
    class M_karyawan_pribadi extends CI_Model{
    
    public function getKaryawanpribadi($id= null)
    {
        if ($id===null) {
            $result = $this->db->get('karyawan_pribadi')->result();
            return $result;              
        }else {
            $result = $this->db->get_where('karyawan_pribadi',['id_karyawan_pribadi' => $id])->result();
            return $result;               
        }
    }

    public function getKaryawanpribadibyid($id)
    {
        if ($id===null) {
            $result = $this->db->get('karyawan_pribadi')->result();
            return $result;              
        }else {
            $result = $this->db->get_where('karyawan_pribadi',['id_karyawan_pribadi' => $id])->result();
            return $result;               
        }
    }

    public function addKaryawanpribadi($data)
    {
        $result = $this->db->insert('karyawan_pribadi',$data); 
        return $result;
    }

    public function editKaryawanpribadi($id)
    {
        $this->db->where('id_karyawan_pribadi',$id);
        $query = $this->db->get('karyawan_pribadi');
        return $query->row();
    }

    public function updateKaryawanpribadi($id, $data)
    {
        $this->db->where('id_karyawan_pribadi', $id);
        $this->db->update('karyawan_pribadi', $data);  
        return $this->db->affected_rows();
    }

    public function deleteKaryawanpribadi($id)
    {
        $this->db->where('id_karyawan_pribadi', $id);
        $this->db->delete('karyawan_pribadi');  
        return $this->db->affected_rows();
    }

}

/* End of file M_karyawan.php */
        
