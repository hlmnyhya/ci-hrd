<?php 
    defined('BASEPATH') OR exit('No direct script access allowed');
    
    class M_Pelamar extends CI_Model{
    
    public function show_data()
{
    return $this->db->query('SELECT * FROM pelamar');
}

public function count_data()
{
    return $this->db->count_all('pelamar'); // Gantikan 'nama_tabel' dengan nama tabel yang sesuai
}

public function get_data($limit, $offset)
{
    return $this->db->get('pelamar', $limit, $offset); // Gantikan 'nama_tabel' dengan nama tabel yang sesuai
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

// public function delete_data($where1, $table1, $where2, $table2)
// {
//     $this->db->where($where1);
//     $this->db->delete($table1);

//     $this->db->where($where2);
//     $this->db->delete($table2);
// }


public function detail_data($id_pelamar = NULL)
{
    $query = $this->db->get_where('pelamar',array('id_pelamar'=> $id_pelamar))->row();
    return $query;
}

}

/* End of file M_Pelamar.php */
        