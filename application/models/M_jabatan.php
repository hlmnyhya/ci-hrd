<?php 
defined('BASEPATH') OR exit('No direct script access allowed');
    
class M_jabatan extends CI_Model{
    
    public function show_data()
    {
        return $this->db->query('SELECT * FROM jabatan');
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
        return $this->db->get_where('jabatan', ['id_jabatan' => $id])->row_array();
    }
        
    public function delete_data($id_jabatan)
    {
        $this->db->where('id_jabatan', $id_jabatan);
        return $this->db->delete('jabatan');
    }

    public function detail_data($id_jabatan = NULL)
    {
        $query = $this->db->get_where('jabatan',array('id_jabatan'=> $id_jabatan))->row();
        return $query;
    }
}

/* End of file M_Mpp.php */
        