<?php 
defined('BASEPATH') OR exit('No direct script access allowed');
    
class M_MPPp extends CI_Model{
    
    public function show_data()
    {
        return $this->db->query('SELECT * FROM mpp');
    }

    public function get_data($table){
        return $this->db->get($table);
    }
    
 public function insert_data($table, $data)
{
    $this->db->insert($table, $data);
}

    public function update_data($table, $data, $where)
    {
        $this->db->update($table, $data, $where);
    }
        
    public function delete_data($where,$table)
    {
        $this->db->where($where);
        $this->db->delete($table);
    }

    public function detail_data($id_mpp = NULL)
    {
        $query = $this->db->get_where('mpp',array('id_mpp'=> $id_mpp))->row();
        return $query;
    }
   
}

/* End of file M_Mpp.php */
        
