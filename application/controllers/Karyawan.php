<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Karyawan extends CI_Controller {

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
		$data['title'] = 'Data Karyawan';
		$data['karyawan'] = $this->M_karyawan->show_data()->result();
		$this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar');
        $this->load->view('karyawan/v_karyawan', $data);
        $this->load->view('templates/footer');
	}

    public function addKaryawan()
	{
		$data['title'] 		= 'Tambah Data Karyawan';
		$data['divisi'] 	= $this->M_karyawan->getDivisi()->result();
		$data['jabatan'] 	= $this->M_karyawan->getJabatan()->result();
		$data['golongan'] 	= $this->M_karyawan->getGolongan()->result();
		$data['pribadi'] 	= $this->M_karyawan->getPribadi()->result();
		$this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar');
        $this->load->view('karyawan/v_add_karyawan', $data);
        $this->load->view('templates/footer');
	}

	public function addKaryawan_proses()
	{
		$nama 				= $this->input->post('nama');
		$tgl_masuk 			= $this->input->post('tgl_masuk');
		$masa_kerja 		= $this->input->post('masa_kerja');
		$divisi 			= $this->input->post('divisi');
		$jabatan 			= $this->input->post('jabatan');
		$status_terakhir 	= $this->input->post('status_terakhir');
		$golongan 			= $this->input->post('golongan');
		$bpjs_tk 			= $this->input->post('bpjs_tk');
		$bpjs_kes 			= $this->input->post('bpjs_kes');
		$npwp 				= $this->input->post('npwp');
		$status_ptkp 		= $this->input->post('status_ptkp');
		$alamat_ktp 		= $this->input->post('alamat_ktp');
		$alamat_domisili 	= $this->input->post('alamat_domisili');
		$karyawan_pribadi 	= $this->input->post('karyawan_pribadi');

		$data = array(
			'nama' 				=> $nama,
			'tgl_masuk'			=> $tgl_masuk,
			'masa_kerja' 		=> $masa_kerja,
			'divisi'			=> $divisi,
			'jabatan' 			=> $jabatan,
			'status_terakhir'	=> $status_terakhir,
			'golongan' 			=> $golongan,
			'bpjs_tk'			=> $bpjs_tk,
			'bpjs_kes' 			=> $bpjs_kes,
			'npwp'				=> $npwp,
			'status_ptkp' 		=> $status_ptkp,
			'alamat_ktp'		=> $alamat_ktp,
			'alamat_domisili' 	=> $alamat_domisili,
			'karyawan_pribadi' 	=> $karyawan_pribadi,
        );
        
		$this->db->insert('karyawan', $data);
        redirect('karyawan');
	}

    public function editKaryawan($id)
	{
		$data['title'] 		= 'Ubah Data Karyawan';
		$data['divisi'] 	= $this->M_karyawan->getDivisi()->result();
		$data['jabatan'] 	= $this->M_karyawan->getJabatan()->result();
		$data['golongan'] 	= $this->M_karyawan->getGolongan()->result();
		$data['thl'] 		= $this->M_karyawan->getThl()->result();
		$data['pribadi'] 	= $this->M_karyawan->getPribadi()->result();
		$data['karyawan'] 	= $this->M_karyawan->update_data($id);
		$this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar');
        $this->load->view('karyawan/v_edit_karyawan', $data);
        $this->load->view('templates/footer');
	}

	public function editKaryawan_proses($id)
	{
		$id					= $this->input->post('id_karyawan');
		$nama 				= $this->input->post('nama');
		$tgl_masuk 			= $this->input->post('tgl_masuk');
		$masa_kerja 		= $this->input->post('masa_kerja');
		$divisi 			= $this->input->post('divisi');
		$jabatan 			= $this->input->post('jabatan');
		$status_terakhir 	= $this->input->post('status_terakhir');
		$golongan 			= $this->input->post('golongan');
		$bpjs_tk 			= $this->input->post('bpjs_tk');
		$bpjs_kes 			= $this->input->post('bpjs_kes');
		$npwp 				= $this->input->post('npwp');
		$status_ptkp 		= $this->input->post('status_ptkp');
		$alamat_ktp 		= $this->input->post('alamat_ktp');
		$alamat_domisili 	= $this->input->post('alamat_domisili');
		$pkwt_mulai 		= $this->input->post('pkwt_mulai');
		$pkwt_selesai 		= $this->input->post('pkwt_selesai');
		$pkwt2_mulai 		= $this->input->post('pkwt2_mulai');
		$pkwt2_selesai 		= $this->input->post('pkwt2_selesai');
		$tht 				= $this->input->post('tht');
		$thl 				= $this->input->post('thl');
		$percobaan_mulai 	= $this->input->post('percobaan_mulai');
		$percobaan_selesai 	= $this->input->post('percobaan_selesai');
		$karyawan_pribadi 	= $this->input->post('karyawan_pribadi');

		$data = array(
			'nama' 				=> $nama,
			'tgl_masuk'			=> $tgl_masuk,
			'masa_kerja' 		=> $masa_kerja,
			'divisi'			=> $divisi,
			'jabatan' 			=> $jabatan,
			'status_terakhir'	=> $status_terakhir,
			'golongan' 			=> $golongan,
			'bpjs_tk'			=> $bpjs_tk,
			'bpjs_kes' 			=> $bpjs_kes,
			'npwp'				=> $npwp,
			'status_ptkp' 		=> $status_ptkp,
			'alamat_ktp'		=> $alamat_ktp,
			'alamat_domisili' 	=> $alamat_domisili,
			'pkwt_mulai'		=> $pkwt_mulai,
			'pkwt_selesai' 		=> $pkwt_selesai,
			'pkwt2_mulai'		=> $pkwt2_mulai,
			'pkwt2_selesai' 	=> $pkwt2_selesai,
			'tht'				=> $tht,
			'thl' 				=> $thl,
			'percobaan_mulai'	=> $percobaan_mulai,
			'percobaan_selesai' => $percobaan_selesai,
			'percobaan_selesai'	=> $percobaan_selesai,
			'karyawan_pribadi' 	=> $karyawan_pribadi,
        );
        
		$this->db->where('id_karyawan', $id);
		$this->db->update('karyawan', $data);
        redirect('karyawan');
	}

    public function deleteKaryawan($id_karyawan)
	{
		$this->M_karyawan->delete_data($id_karyawan);
        redirect(base_url('karyawan'));
	}
}