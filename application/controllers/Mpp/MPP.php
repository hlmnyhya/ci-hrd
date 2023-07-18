<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Mpp extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
       
    }
    
    public function index()
    {
        $data['title'] = 'Data MPP';
        $data['mpp'] = $this->M_Mpp->show_data()->result();
        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar');
        $this->load->view('Mpp/mpp', $data);
        $this->load->view('templates/footer');
    }

    public function tambah()
    {
        $data['title'] = 'Tambah Data MPP';
        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar');
        $this->load->view('Mpp/tambahdatampp');
        $this->load->view('templates/footer');
    }

    public function edit($id)
    {
		$where = array('id_mpp' => $id);
		$data['mpp'] = $this->db->query("SELECT * FROM mpp WHERE id_mpp = '$id'")->result();
        $data['title'] = 'Edit Data MPP';
        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar');
        $this->load->view('Mpp/editdatampp', $data);
        $this->load->view('templates/footer');
    }

    public function create()
    {
        $id = $this->input->post('id_mpp');
        $unit = $this->input->post('unit');
        $posisi = $this->input->post('posisi');
        $total = $this->input->post('total');
        $total_karyawan = $this->input->post('total_karyawan');
        $vacant = $this->input->post('vacant');
        $keterangan = $this->input->post('keterangan');

        $data = array(
            'id_mpp' => $id,
            'unit' => $unit,
            'posisi' => $posisi,
            'total' => $total,
            'total_karyawan' => $total_karyawan,
            'vacant' => $vacant,
            'keterangan' => $keterangan
        );

        $this->M_Mpp->insert_data('mpp', $data);
        redirect('mpp/mpp');
    }

	public function edit_data()
	{
		$id = $this->input->post('id_mpp');
		$unit = $this->input->post('unit');
		$posisi = $this->input->post('posisi');
		$total = $this->input->post('total');
		$total_karyawan = $this->input->post('total_karyawan');
		$vacant = $this->input->post('vacant');
		$keterangan = $this->input->post('keterangan');

		$data = array(
			'id_mpp' => $id,
			'unit' => $unit,
			'posisi' => $posisi,
			'total' => $total,
			'total_karyawan' => $total_karyawan,
			'vacant' => $vacant,
			'keterangan' => $keterangan
		);

		$where = array(
			'id_mpp' => $id
		);

		$this->M_Mpp->update_data('mpp', $data, $where);
		redirect('mpp/mpp'); // Change 'komoditas' to 'mpp' if that's the correct redirection URL
	}

	public function delete($id = NULL)
    {
    	if($id == null){
			redirect('Mpp/mpp');
		}
    	$where = array('id_mpp' => $id);
    	$this->M_Mpp->delete_data($where, 'mpp');
		redirect('Mpp/mpp');
    }

}
