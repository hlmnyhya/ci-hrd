<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Menu extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/userguide3/general/urls.html
	 */

	 public function __construct()
    {
        parent::__construct();
        ini_set('max_execution_time', 0);
        $this->load->model('m_master_data', 'mmasdat');
        $this->load->model('m_menu', 'mmenu');
        if (!$this->session->userdata('username')) {
            $this->session->set_flashdata('pesan', '<div class="alert alert-danger">Login Dulu!</div>');
            redirect('login/sima_login');
        } else {
            if ($this->session->userdata('usergroup') == 'UG005') {
            } else {
                redirect('error');
            }
        }
    }

	public function index()
	{
		$this->load->view('templates/header');
        $this->load->view('templates/sidebar');
        $this->load->view('Menu/menu');
        $this->load->view('templates/footer');

	}
}