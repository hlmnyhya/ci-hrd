<?php 
    defined('BASEPATH') OR exit('No direct script access allowed');
    
    class M_usergroup extends CI_Model{
    
        public function getUserGroup($id = null,$offset=null)
      {
        if ($id === null&& $offset===null) {
          $result=$this->db->get('usergroup')->result();
          return $result;
        }elseif ($id === null&& $offset!==null) {
          $this->db->limit(15);
          $this->db->offset($offset);
          $result=$this->db->get('usergroup')->result();
          return $result;
        }else{
          $result=$this->db->get_where('usergroup',['id_usergroup'=>$id])->result();
        return $result;
        }
      }
        public function cariUserGroup($id = null)
      {
        if ($id === null) {
          return false;
        }else{
          $this->db->like('usergroup',$id);
            $result=$this->db->get('usergroup')->result();
          return $result;
        }
      }

      public function addUserGroup($data)
      {
          $this->db->insert('usergroup',$data); 
          return $this->db->affected_rows();
      }
  
      public function editUsergroup($id)
      {
          $this->db->where('id_usergroup',$id);
          $query = $this->db->get('usergroup');
          return $query->row();
      }

      public function updateUsergroup($id, $data)
      {
          $this->db->where('id_usergroup', $id);
          $this->db->update('usergroup', $data);
          return $this->db->affected_rows();
      }
  
      public function delUsergroup($id_usergroup)
      {
          $this->db->where('id_usergroup', $id_usergroup);
          $this->db->delete('usergroup');
          return $this->db->affected_rows();
                  
      }

      public function buatkodeUserGroup()
      {
        $this->db->get('user_group');
        return $this->db->affected_rows();
      }

    }
    
    /* End of file Controllername.php */
    
?>