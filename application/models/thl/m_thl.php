<?php 
    defined('BASEPATH') OR exit('No direct script access allowed');
    
    class M_thl extends CI_Model{
    
    public function getThl($id= null)
    {
        if ($id===null) {
            $result = $this->db->get('thl')->result();
            return $result;              
        }else {
            $result = $this->db->get_where('thl',['id_thl' => $id])->result();
            return $result;               
        }
    }

    public function getThlbyid($id)
    {
        if ($id===null) {
            $result = $this->db->get('thl')->result();
            return $result;              
        }else {
            $result = $this->db->get_where('thl',['id_thl' => $id])->result();
            return $result;               
        }
    }

    public function addThl($data)
    {
        $result = $this->db->insert('thl',$data); 
        return $result;
    }

    public function editTHL($id)
    {
        $this->db->where('id_thl',$id);
        $query = $this->db->get('thl');
        return $query->row();
    }

    public function updateThl($id, $data)
    {
        $this->db->where('id_thl', $id);
        $this->db->update('thl', $data);  
        return $this->db->affected_rows();
    }

    public function deleteThl($id)
    {
        $this->db->where('id_thl', $id);
        $this->db->delete('thl');  
        return $this->db->affected_rows();
    }

}

/* End of file M_thl.php */
        