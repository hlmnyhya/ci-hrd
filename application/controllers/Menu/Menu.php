<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Menu extends CI_Controller {

      public function __construct() {
        parent::__construct();
		is_logged_in();

        $this->load->model('M_Menu');
        $this->load->model('M_Sub_Menu');
    }

    // menu
    public function index() {
        $data['title'] = 'Menu Management';
        $data['user'] = $this->db->get_where('user', ['username' => $this->session->userdata('username')])->row_array();

        $data['menu'] = $this->db->get('user_menu')->result_array();

        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('menu/index', $data);
        $this->load->view('templates/footer');

    }

    // add new menu
    public function addMenu() {
        $menu = $this->M_Menu	;

        $validation = $this->form_validation->set_rules('menu', 'Menu', 'required');

        if ($validation->run() == false) {
            $this->session->set_flashdata('message_error_addmenu', '<div class="alert alert-danger" role="alert">
            New menu dont added!</div>');
        } else {
            $menu->saveMenu();
            $this->session->set_flashdata('message_success_addmenu', '<div class="alert alert-success" role="alert">
            New menu added!</div>');
        }

        redirect('menu');
    }

    // edit menu
    function editMenu($id = null) {
        $data['title'] = "Edit Menu";
        $data['user'] = $this->db->get_where('user', ['username' => $this->session->userdata('username')])->row_array();;
        $data['menu'] = $this->db->get('user_menu')->result_array();

        if (!isset($id)) redirect('menu');

        $menu = $this->m_menu;
        $validation = $this->form_validation->set_rules('menu', 'Menu', 'required');

        $data['menu'] = $menu->getByIdMenu($id);
        if (!$data['menu']) show_404();

        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('menu/edit_menu', $data);
        $this->load->view('templates/footer');

        if ($validation->run() == false) {
            $this->session->set_flashdata('message_error_editmenu', '<div class="alert alert-danger" role="alert">
            Data failed to edit!</div>');
        } else {
            $menu->updateMenu();
            $this->session->set_flashdata('message_success_editmenu', '<div class="alert alert-success" role="alert">
            Data edited successfully!</div>');
            redirect('menu');
        }
    }

    // delete menu
    public function deleteMenu($id = null) {
        if ($this->menu_model->deleteMenu($id)) {
            $this->session->set_flashdata('message_delete_menu', '<div class="alert alert-success" role="alert">
            Data successfully deleted!</div>');
            redirect('menu');
        }
    }

    // submenu
  public function submenu() {
    $data['title'] = "Submenu Management";

    $data['subMenu'] = $this->M_Menu->getSubMenu();

    $data['menu'] = $this->db->get('user_menu')->result_array();

    $validation = $this->form_validation->set_rules('submenu', 'Submenu', 'required');
    $validation = $this->form_validation->set_rules('menu_id', 'Menu', 'required');
    $validation = $this->form_validation->set_rules('url', 'Url', 'required');
    $validation = $this->form_validation->set_rules('icon', 'Icon', 'required');

    if ($this->form_validation->run() == false) {
        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('menu/submenu', $data);
        $this->load->view('templates/footer');
    } else {
        // add menu
        $data = [
            'submenu' => $this->input->post('submenu'),
            'menu_id' => $this->input->post('menu_id'),
            'url' => $this->input->post('url'),
            'icon' => $this->input->post('icon'),
            'is_active' => $this->input->post('is_active')
        ];
        $this->db->insert('user_sub_menu', $data);
        $this->session->set_flashdata('message_success_addsubmenu', '<div class="alert alert-success" role="alert">
            New sub menu added!</div>');
        redirect('menu/menu/submenu');
    }
}



    // editsubmenu
    public function editSubmenu($id = null) {
        $data['title'] = "Edit Sub Menu";
        $data['user'] = $this->db->get_where('user', ['username' => $this->session->userdata('username')])->row_array();
        $data['subMenu'] = $this->db->get('user_sub_menu')->result_array();

        $this->load->model('m_menu', 'menu');

        $data['subMenu'] = $this->m_menu->getSubMenu();
        $data['menu'] = $this->db->get('user_menu')->result_array();

        if (!isset($id)) redirect('menu');

        $menu = $this->m_sub_menu;
        $validation = $this->form_validation->set_rules('title', 'Title', 'required');
        $validation = $this->form_validation->set_rules('menu_id', 'Menu', 'required');
        $validation = $this->form_validation->set_rules('url', 'Url', 'required');
        $validation = $this->form_validation->set_rules('icon', 'Icon', 'required');

        $data['subMenu'] = $menu->getByIdSubmenu($id);
        if (!$data['subMenu']) show_404();

        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('menu/edit_submenu', $data);
        $this->load->view('templates/footer');

        if ($validation->run() == false) {
            $this->session->set_flashdata('message_error_editsubmenu', '<div class="alert alert-danger" role="alert">
            Data failed to edit!</div>');
        } else {
            $menu->updateSubmenu();
            $this->session->set_flashdata('message_success_editsubmenu', '<div class="alert alert-success" role="alert">
            Data edited successfully!</div>');
            redirect('menu/submenu');
        }
    }

    // delete submenu
    public function deleteSubmenu($id = null) {
        if ($this->m_sub_menu->deleteSubmenu($id)) {
            $this->session->set_flashdata('message_delete_submenu', '<div class="alert alert-success" role="alert">
            Data successfully deleted!</div>');
            redirect('menu/submenu');
        }
    }
}

		// $this->load->view('templates/header');
        // $this->load->view('templates/sidebar');
        // $this->load->view('Menu/menu');
        // $this->load->view('templates/footer');
