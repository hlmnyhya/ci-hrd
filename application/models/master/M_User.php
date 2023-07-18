<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class M_User extends CI_Model {

    public function getUser($id=null, $offset=null)
    {
        if ($id === null) {
            $this->db->select('user.*, usergroup');
            $this->db->from('user');
            $this->db->join('usergroup', 'user.id_usergroup = usergroup.id_usergroup', 'left');
            $this->db->limit(15);
            $this->db->offset($offset);
            
            
            
            $result = $this->db->get()->result();

            return $result;
        }else {
            $this->db->select('user.*, usergroup');
            $this->db->from('user');
            $this->db->join('usergroup', 'user.id_usergroup = usergroup.id_usergroup', 'left');
            $this->db->where('id_user', $id);
            
            $result = $this->db->get()->result();

            return $result;
        }
        
    }
    public function getUserPass($id,$pass)
    {
            $this->db->select('user.*, user_group, nama_perusahaan, nama_cabang, nama_gudang ');
            $this->db->from('user');
            $this->db->join('user_group', 'user.id_usergroup = user_group.id_usergroup', 'left');
            $this->db->where('id_user', $id);
            $this->db->where('password', $pass);
            
            $result = $this->db->get()->result();

            return $result;
        
    }

    public function addUser($data)
    {
        $result = $this->db->insert('user',$data); 
        return $result;
    }

    public function editUser($nik)
    {
        $this->db->where('id_user',$nik);
        $query = $this->db->get('user');
        return $query->row();
    }

    public function updateUser($nik, $data)
    {
        $this->db->where('id_user', $nik);
        $this->db->update('user', $data);  
        return $this->db->affected_rows();
    }
    public function editUserPass($nik,$data)
    {
        $this->db->where('id_user', $nik);
        $this->db->update('user', $data);  
        return $this->db->affected_rows();
    }

    public function delUser($nik)
    {
        $this->db->where('id_user', $nik);
        $this->db->delete('user');
        return $this->db->affected_rows();
        
    }

}

/* End of file M_user.php */
