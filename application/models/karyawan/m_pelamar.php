<?php 
    defined('BASEPATH') OR exit('No direct script access allowed');
    
    class M_Pelamar extends CI_Model{
    
    public function getPelamar($id= null)
    {
        if ($id===null) {
            $result = $this->db->get('pelamar')->result();
            return $result;              
        }else {
            $result = $this->db->get_where('pelamar',['id_pelamar' => $id])->result();
            return $result;               
        }
    }

    public function getPelamarbyid($id)
    {
        if ($id===null) {
            $result = $this->db->get('pelamar')->result();
            return $result;              
        }else {
            $result = $this->db->get_where('pelamar',['id_pelamar' => $id])->result();
            return $result;               
        }
    }

    public function addPelamar($data)
    {
        $result = $this->db->insert('pelamar',$data); 
        return $result;
    }

    public function editPelamar($id)
    {
        $this->db->where('id_pelamar',$id);
        $query = $this->db->get('pelamar');
        return $query->row();
    }

    public function updatePelamar($id, $data)
    {
        $this->db->where('id_pelamar', $id);
        $this->db->update('pelamar', $data);  
        return $this->db->affected_rows();
    }

    public function deletePelamar($id)
    {
        $this->db->where('id_pelamar', $id);
        $this->db->delete('pelamar');  
        return $this->db->affected_rows();
    }

}

/* End of file M_Pelamar.php */
        