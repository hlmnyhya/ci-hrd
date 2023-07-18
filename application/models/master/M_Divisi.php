<?php 
    defined('BASEPATH') OR exit('No direct script access allowed');
    
    class M_Divisi extends CI_Model{
        
       public function getDivisi($id=null, $offset=null)
    {
        if ($id === null) {
            $this->db->select('divisi.*');
            $this->db->from('divisi');
            $this->db->limit(15);
            $this->db->offset($offset);

            $result = $this->db->get()->result();

            return $result;
        }else {
            $this->db->select('divisi.*');
            $this->db->from('divisi');
            $this->db->where('divisi', $id);
            
            $result = $this->db->get()->result();

            return $result;
        }
        
    }
        public function getDivisibyid($id)
    {
        if ($id === null) {
            $this->db->select('divisi.*');
            $this->db->from('divisi');
            $this->db->limit(15);
            $this->db->offset($offset);

            $result = $this->db->get()->result();

            return $result;
        }else {
            $this->db->select('divisi.*');
            $this->db->from('divisi');
            $this->db->where('id_divisi', $id);
            
            $result = $this->db->get()->result();

            return $result;
        }
        
    }
    
    public function addDivisi($data)
    {
        $result = $this->db->insert('divisi',$data); 
        return $result;
    }

    public function editdivisi($id)
    {
        $this->db->where('id_divisi',$id);
        $query = $this->db->get('divisi');
        return $query->row();
    }

    public function ubahDivisi($id, $data)
    {
        $this->db->where('id_divisi', $id);
        return $this->db->update('divisi', $data);  
        return $this->db->affected_rows();
    }

    public function deleteDivisi($id)
    {
        $this->db->where('id_divisi', $id);
        $this->db->delete('divisi');  
        return $this->db->affected_rows();
    }

}
