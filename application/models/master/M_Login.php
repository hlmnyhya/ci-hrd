<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class M_Login extends CI_Model {

    public function getUserByid($username){
        $this->db->select('user.*, user_group,nama_perusahaan, nama_cabang, nama_lokasi');
        $this->db->from('user');
        $this->db->join('user_group', 'user_group.id_usergroup = user.id_usergroup', 'left');
        $this->db->where('username', $username);
        $this->db->where("status='Aktif'");
        
        
        return $this->db->get()->result();
        
    }

    public function history($data)
    {
        $this->db->insert('history_login', $data);
        return $this->db->affected_rows();
    }

}

/* End of file M_login.php */
