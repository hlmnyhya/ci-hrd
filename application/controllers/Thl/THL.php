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
		$data['thl'] = $this->m_thl->show_data()->result();
		$this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar');
        $this->load->view('Thl/thl', $data);
        $this->load->view('templates/footer');
	}
	
	 public function tambah_data()
	{
		$data['title'] = 'Tambah Data THL';
		$data['divisi'] = $this->m_thl->show_divisi()->result();
		$data['jabatan'] = $this->m_thl->show_jabatan()->result();
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

		$this->m_thl->insert_data('thl', $data);

		redirect('Thl/thl');
	}

	public function edit($id)
	{
	    $where = array('id_thl' => $id);
	    $data['thl'] = $this->db->query("SELECT * FROM thl WHERE id_thl = '$id'")->result();
	    $data['divisi'] = $this->m_thl->show_divisi()->result();
	    $data['jabatan'] = $this->m_thl->show_jabatan()->result();
	    $this->load->view('templates/header');
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

		$this->m_thl->update_data('thl', $data, $where);
		redirect('thl/thl');
	}


	public function delete($id = NULL)
    {
    	if($id == null){
			redirect('thl/thl');
		}
    	$where = array('id_thl' => $id);
    	$this->m_thl->delete_data($where, 'thl');
		redirect('thl/thl');
    }

}