<?php 
    defined('BASEPATH') OR exit('No direct script access allowed');
    
    class M_Jabatan extends CI_Model{
        
       public function getJabatan($id=null, $offset=null)
    {
        if ($id === null) {
            $this->db->select('jabatan.*');
            $this->db->from('jabatan');
            $this->db->limit(15);
            $this->db->offset($offset);

            $result = $this->db->get()->result();

            return $result;
        }else {
            $this->db->select('jabatan.*');
            $this->db->from('jabatan');
            $this->db->where('jabatan', $id);
            
            $result = $this->db->get()->result();

            return $result;
        }
        
    }
        public function getJabatanbyid($id)
    {
        if ($id === null) {
            $this->db->select('jabatan.*');
            $this->db->from('jabatan');
            $this->db->limit(15);
            $this->db->offset($offset);

            $result = $this->db->get()->result();

            return $result;
        }else {
            $this->db->select('jabatan.*');
            $this->db->from('jabatan');
            $this->db->where('id_jabatan', $id);
            
            $result = $this->db->get()->result();

            return $result;
        }
    }
    
    public function addJabatan($data)
    {
        $result = $this->db->insert('jabatan',$data); 
        return $result;
    }

    // public function editJabatan($data,$id)
    // {
    //     $this->db->where('id_jabatan', $id);
    //     $this->db->update('jabatan', $data);  
    //     return $this->db->affected_rows();
    // }

    public function editjabatan($id)
    {
        $this->db->where('id_jabatan',$id);
        $query = $this->db->get('jabatan');
        return $query->row();
    }

    public function updatejabatan($id, $data)
    {
        $this->db->where('id_jabatan', $id);
        return $this->db->update('jabatan', $data);
    }

    public function deletejabatan($id)
    {
        $this->db->where('id_jabatan', $id);
        $this->db->delete('jabatan');  
        return $this->db->affected_rows();
    }

}
