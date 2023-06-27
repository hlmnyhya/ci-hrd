<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User extends CI_Controller {

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
		$this->load->view('templates/header');
        $this->load->view('templates/sidebar');
        $this->load->view('Menu/user');
        $this->load->view('templates/footer');
	}

	 public function post_user()
    {
        $data = [
			'id_user' => html_escape($this->input->post('id_user')),
            'nama' => html_escape($this->input->post('nama')),
            'username' => html_escape($this->input->post('username')),
            'password' => html_escape($this->input->post('password')),
            'id_usergroup' => html_escape($this->input->post('id_usergroup')),
			'status' =>html_escape( $this->input->post('status')),
        ]
        $id = $data['id_user'];

        $cek = $this->mmasdat->getUserById($id);
        if ($cek) {
            $this->session->set_flashdata('warning', 'sudah ada');

            redirect('master_data/input_user');
        } else {
            $exec = $this->mmasdat->addUser($data);
            if ($exec) {
                $this->session->set_flashdata(
                    'berhasil',
                    'berhasil ditambahkan'
                );
                redirect('master_data/input_user');
            } else {
                $this->session->set_flashdata('gagal', 'gagal ditambahkan');
                redirect('master_data/input_user');
            }
        }
    }

}