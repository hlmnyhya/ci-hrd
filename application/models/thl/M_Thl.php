<?php 
    defined('BASEPATH') OR exit('No direct script access allowed');
    
    class M_Thl extends CI_Model{
    
 
     public function show_data()
    {
        return $this->db->query("SELECT t.id_thl, t.nama_thl, t.nik, d.divisi, j.jabatan, t.tanggal_masuk, t.tanggal_keluar, t.keterangan, t.status
FROM thl t
JOIN divisi d ON t.id_divisi = d.id_divisi
JOIN jabatan j ON t.id_jabatan = j.id_jabatan;
");
    }

    public function show_divisi()
    {
        return $this->db->query("SELECT * FROM divisi");
    }

    public function show_jabatan()
    {
        return $this->db->query("SELECT * FROM jabatan");
    }

    public function get_data($table)
    {
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

    public function detail_data($id_thl = NULL)
    {
        $query = $this->db->get_where('thl', array('id_thl'=> $id_thl))->row();
        return $query;
    }

}

/* End of file M_thl.php */
        
