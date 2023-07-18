<?php 
    defined('BASEPATH') OR exit('No direct script access allowed');
    
    class M_Golongan extends CI_Model{
    
    public function getGolongan($id= null)
    {
        if ($id===null) {
            $result = $this->db->get('golongan')->result();
            return $result;              
        }else {
            $result = $this->db->get_where('golongan',['id_golongan' => $id])->result();
            return $result;               
        }
    }

    public function getGolonganbyid($id)
    {
        if ($id===null) {
            $result = $this->db->get('golongan')->result();
            return $result;              
        }else {
            $result = $this->db->get_where('golongan',['id_golongan' => $id])->result();
            return $result;               
        }
    }

    public function addGolongan($data)
    {
        $result = $this->db->insert('golongan',$data); 
        return $result;
    }

    public function editGolongan($id)
    {
        $this->db->where('id_golongan',$id);
        $query = $this->db->get('golongan');
        return $query->row();
    }

    public function updateGolongan($id, $data)
    {
        $this->db->where('id_golongan', $id);
        $this->db->update('golongan', $data);  
        return $this->db->affected_rows();
    }

    public function deletegolongan($id)
    {
        $this->db->where('id_golongan', $id);
        $this->db->delete('golongan');  
        return $this->db->affected_rows();
    }

}

/* End of file M_thl.php */
        
