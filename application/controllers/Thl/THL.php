<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class THL extends CI_Controller {

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
		$data['title'] = 'Data THL';
		$data['thl'] = $this->M_Thl->show_data()->result();
		$this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar');
        $this->load->view('Thl/thl', $data);
        $this->load->view('templates/footer');
	}
	
	 public function tambah_data()
	{
		$data['title'] = 'Tambah Data THL';
		$data['divisi'] = $this->M_Thl->show_divisi()->result();
		$data['jabatan'] = $this->M_Thl->show_jabatan()->result();
		$this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar');
        $this->load->view('Thl/tambahdatathl', $data);
        $this->load->view('templates/footer');
	}

	public function create()
	{
		$id = $this->input->post('id_thl');
		$nama = $this->input->post('nama');
		$nik = $this->input->post('nik');
		$id_divisi = $this->input->post('id_divisi');
		$id_jabatan = $this->input->post('id_jabatan');
		$tanggal_masuk = $this->input->post('tanggal_masuk');
		$tanggal_keluar = $this->input->post('tanggal_keluar');
		$keterangan = $this->input->post('keterangan');
		$status = $this->input->post('status');

		$data = array(
			'id_thl' => $id,
			'nama' => $nama,
			'nik' => $nik,
			'id_divisi' => $id_divisi,
			'id_jabatan' => $id_jabatan,
			'tanggal_masuk' => $tanggal_masuk,
			'tanggal_keluar' => $tanggal_keluar,
			'keterangan' => $keterangan,
			'status' => $status
		);

		$this->M_Thl->insert_data('thl', $data);
		 $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">' . html_escape('Data THL Berhasil ditambah') . '</div>');
		redirect('Thl/thl');
	}

	public function edit($id)
	{
	    $where = array('id_thl' => $id);
		$data['title'] = 'Edit Data THL';
	    $data['thl'] = $this->db->query("SELECT * FROM thl WHERE id_thl = '$id'")->result();
	    $data['divisi'] = $this->M_Thl->show_divisi()->result();
	    $data['jabatan'] = $this->M_Thl->show_jabatan()->result();
	    $this->load->view('templates/header', $data);
	    $this->load->view('templates/sidebar');
	    $this->load->view('thl/editdatathl', $data);
	    $this->load->view('templates/footer');
	}

	public function edit_data()
	{
		$id = $this->input->post('id_thl');
		$nama = $this->input->post('nama');
		$nik = $this->input->post('nik');
		$id_divisi = $this->input->post('id_divisi');
		$id_jabatan = $this->input->post('id_jabatan');
		$tanggal_masuk = $this->input->post('tanggal_masuk');
		$tanggal_keluar = $this->input->post('tanggal_keluar');
		$keterangan = $this->input->post('keterangan');
		$status = $this->input->post('status');

		$data = array(
			'id_thl' => $id,
			'nama' => $nama,
			'nik' => $nik,
			'id_divisi' => $id_divisi,
			'id_jabatan' => $id_jabatan,
			'tanggal_masuk' => $tanggal_masuk,
			'tanggal_keluar' => $tanggal_keluar,
			'keterangan' => $keterangan,
			'status' => $status
		);

		$where = array(
			'id_thl' => $id
		);

		$this->M_Thl->update_data('thl', $data, $where);
		 $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">' . html_escape('Data THL Berhasil diubah') . '</div>');
		redirect('thl/thl');
	}


	public function delete($id = NULL)
    {
    	if($id == null){
			redirect('thl/thl');
		}
    	$where = array('id_thl' => $id);
    	$this->M_Thl->delete_data($where, 'thl');
        $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">' . html_escape('Data THL Berhasil dihapus') . '</div>');
		redirect('thl/thl');
    }

}