<?php 
defined('BASEPATH') OR exit('No direct script access allowed');
    
class M_golongan extends CI_Model{
    
    public function show_data()
    {
        return $this->db->query('SELECT * FROM golongan');
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
        return $this->db->get_where('golongan', ['id_golongan' => $id])->row_array();
    }
        
    public function delete_data($id_golongan)
    {
        $this->db->where('id_golongan', $id_golongan);
        return $this->db->delete('golongan');
    }

    public function detail_data($id_golongan = NULL)
    {
        $query = $this->db->get_where('golongan',array('id_golongan'=> $id_golongan))->row();
        return $query;
    }
}

/* End of file M_Mpp.php */
        