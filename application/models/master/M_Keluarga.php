<?php 
    defined('BASEPATH') OR exit('No direct script access allowed');
    
    class M_keluarga extends CI_Model{
        
       public function getKeluarga($id=null, $offset=null)
    {
        if ($id === null) {
            $this->db->select('keluarga.*');
            $this->db->from('keluarga');
            $this->db->limit(15);
            $this->db->offset($offset);

            $result = $this->db->get()->result();

            return $result;
        }else {
            $this->db->select('keluarga.*');
            $this->db->from('keluarga');
            $this->db->where('keluarga', $id);
            
            $result = $this->db->get()->result();

            return $result;
        }
        
    }
        public function getKeluargabyid($id=null)
    {
        if ($id === null) {
            $this->db->select('keluarga.*');
            $this->db->from('keluarga');
            $this->db->limit(15);
            $this->db->offset($offset);

            $result = $this->db->get()->result();

            return $result;
        }else {
            $this->db->select('keluarga.*');
            $this->db->from('keluarga');
            $this->db->where('id_keluarga', $id);
            
            $result = $this->db->get()->result();

            return $result;
        }
        
    }
    
    public function addKeluarga($data)
    {
        $result = $this->db->insert('keluarga',$data); 
        return $result;
    }

    public function editKeluarga($id)
    {
        $this->db->where('id_keluarga',$id);
        $query = $this->db->get('keluarga');
        return $query->row();
    }

    public function ubahKeluarga($id, $data)
    {
        $this->db->where('id_keluarga', $id);
        return $this->db->update('keluarga', $data);  
        return $this->db->affected_rows();
    }

    public function deleteKeluarga($id)
    {
        $this->db->where('id_keluarga', $id);
        $this->db->delete('keluarga');  
        return $this->db->affected_rows();
    }

}
