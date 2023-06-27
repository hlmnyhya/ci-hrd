<?php 
    defined('BASEPATH') OR exit('No direct script access allowed');
    
    class M_Headcount extends CI_Model{
    
    public function getHeadcount($id= null)
    {
        if ($id===null) {
            $result = $this->db->get('Headcount')->result();
            return $result;              
        }else {
            $result = $this->db->get_where('Headcount',['id_headcount' => $id])->result();
            return $result;               
        }
    }

    public function addHeadcount($data)
    {
        $result = $this->db->insert('Headcount',$data); 
        return $result;
    }

    public function editHeadcount($data,$id)
    {
        $this->db->where('id_Headcount', $id);
        $this->db->update('Headcount', $data);  
        return $this->db->affected_rows();
    }

    public function deleteHeadcount($id)
    {
        $this->db->where('id_Headcount', $id);
        $this->db->delete('Headcount');  
        return $this->db->affected_rows();
    }

}

/* End of file M_Headcount.php */
        