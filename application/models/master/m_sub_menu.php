<?php 

defined('BASEPATH') OR exit('No direct script access allowed');

class M_Sub_Menu extends CI_Model {

    public function getSubMenu($id = null)
    {
        $aktif=1;
        if ($id === null) {
            $result = $this->db->get('submenu')->result();

        }else {
            $result = $this->db->get_where('submenu',['id_menu' => $id, 'in_aktif'=>$aktif ])->result();
        }

        return $result;
    }

}

/* End of file M_Sub_Menu.php */

?>   