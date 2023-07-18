<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {

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

	public function __construct() {
        parent::__construct();
        // is_logged_in();

        $this->load->model('M_Menu','menu');
        $this->load->model('M_Sub_Menu');
    }

	public function index()
	{
		$data['title'] 			= 'Dashboard | PT. Candi Artha';
        $data['menu'] 			= $this->db->get('user_menu')->result_array();
		$data['subMenu'] 		= $this->menu->getSubMenu();

		$data['jumlah_jk'] 		= $this->M_dashboard->getJumlahKaryawanPerJenisKelamin();
		$data['jumlah_pend'] 	= $this->M_dashboard->getJumlahKaryawanPerPendidikan();

		$data['jumlah_1825'] 	= $this->M_dashboard->getJumlahKaryawanUsia1825();
		$data['jumlah_2635'] 	= $this->M_dashboard->getJumlahKaryawanUsia2635();
		$data['jumlah_3646'] 	= $this->M_dashboard->getJumlahKaryawanUsia3646();
		$data['jumlah_4756'] 	= $this->M_dashboard->getJumlahKaryawanUsia4756();
		$data['jumlah_56'] 		= $this->M_dashboard->getJumlahKaryawanUsia56();

		$this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('dashboard', $data);
        $this->load->view('templates/footer');
	}
}