<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Golongan extends CI_Controller {

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
	public function index()
	{
		$data['title'] = 'Data Golongan';
		$data['golongan'] = $this->M_golongan->show_data()->result();
		$this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar');
        $this->load->view('golongan/v_golongan', $data);
        $this->load->view('templates/footer');
	}

    public function addgolongan()
	{
		$data['title'] 		= 'Tambah Data golongan';
		$this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar');
        $this->load->view('golongan/v_add_golongan');
        $this->load->view('templates/footer');
	}

	public function addgolongan_proses()
	{
		$golongan = $this->input->post('golongan');

		$data = array(
			'golongan' => $golongan,
        );
        
		$this->db->insert('golongan', $data);
        redirect('golongan');
	}

    public function editgolongan($id)
	{
		$data['golongan'] 	= $this->M_golongan->update_data($id);
		$this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar');
        $this->load->view('golongan/v_edit_golongan', $data);
        $this->load->view('templates/footer');
	}

	public function editgolongan_proses($id)
	{
		$id			= $this->input->post('id_golongan');
		$golongan 	= $this->input->post('golongan');

		$data = array(
			'golongan' 	=> $golongan,
        );
        
		$this->db->where('id_golongan', $id);
		$this->db->update('golongan', $data);
        redirect('golongan');
	}

    public function deletegolongan($id_golongan)
	{
		$this->M_golongan->delete_data($id_golongan);
        redirect(base_url('golongan'));
	}
}