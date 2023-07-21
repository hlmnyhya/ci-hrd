<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pribadi extends CI_Controller {

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
    $config['base_url'] = base_url('DataKaryawan/Pribadi/index');
    $config['total_rows'] = $this->M_Karyawan_Pribadi->count_data();
    $config['per_page'] = 4;
    $config['uri_segment'] = 3;

    $this->load->library('pagination');
    $this->pagination->initialize($config);

    $offset = $this->uri->segment(4) ? $this->uri->segment(4) : 0;
    $data['pribadi'] = $this->M_Karyawan_Pribadi->get_data($config['per_page'], $offset)->result();
    $data['pagination'] = $this->pagination->create_links();

    // Periksa apakah properti nomor_halaman ada dalam data pribadi
    $data['pribadi_with_pagination'] = [];
    foreach ($data['pribadi'] as $p) {
        $p->nomor_halaman = $offset; // Menggunakan offset sebagai nomor halaman
        $data['pribadi_with_pagination'][] = $p;
        $offset++;
    }

    $data['title'] = 'Data Pribadi Karyawan';
    $data['keluarga'] = $this->M_Keluarga->show_data()->result();

    $this->load->view('templates/header', $data);
    $this->load->view('templates/sidebar');
    $this->load->view('v_karyawan/pribadi/pribadi', $data);
    $this->load->view('templates/footer');
}



	public function tambah_data_pribadi()
	{
		$data['title'] = 'Tambah Data Pribadi Karyawan';
		$this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar');
        $this->load->view('v_karyawan/pribadi/tambahdatapribadi');
        $this->load->view('templates/footer');
		$this->load->view('v_karyawan/pribadi/_partials/footer2');
	}

	public function create_pribadi()
	{
		$id = $this->input->post('id_karyawan_pribadi');
		$nama = $this->input->post('nama');
		$alamat_ktp = $this->input->post('alamat_ktp');
		$alamat_domisili = $this->input->post('alamat_domisili');
		$agama = $this->input->post('agama');
		$jenis_kelamin = $this->input->post('jenis_kelamin');
		$pendidikan = $this->input->post('pendidikan');
		$jurusan = $this->input->post('jurusan');
		$tanggal_lahir = $this->input->post('tanggal_lahir');
		$usia = $this->input->post('usia');
		$goldar = $this->input->post('golongan_darah');
		$keluarga = $this->input->post('keluarga');

        $data = array(
			'id_karyawan_pribadi' => $id,
			'nama' => $nama,
			'alamat_ktp' => $alamat_ktp,
			'alamat_domisili' => $alamat_domisili,
			'agama' => $agama,
			'jenis_kelamin' => $jenis_kelamin,
			'pendidikan' => $pendidikan,
			'jurusan' => $jurusan,
			'tanggal_lahir' => $tanggal_lahir,
			'usia' => $usia,
			'golongan_darah' => $goldar,
			'keluarga' => $keluarga
        );

        $this->M_Karyawan_Pribadi->insert_data('karyawan_pribadi', $data);
        redirect('DataKaryawan/Pribadi/tambah_data_keluarga');
	}

	public function edit_pribadi($id)
	{
		$data['title'] = 'Edit Data Pribadi Karyawan';
		$where = array('id_karyawan_pribadi' => $id);
		$data['karyawan_pribadi'] = $this->db->query("SELECT * FROM karyawan_pribadi WHERE id_karyawan_pribadi = '$id'")->result();
		$this->load->view('templates/header', $data);
		$this->load->view('templates/sidebar');
		$this->load->view('v_karyawan/pribadi/editdatapribadi', $data);
		$this->load->view('templates/footer');
        $this->load->view('v_karyawan/karyawan/_partials/footer2');
	}

	public function edit_data_pribadi()
	{
		$id = $this->input->post('id_karyawan_pribadi');
		$nama = $this->input->post('nama');
		$alamat_ktp = $this->input->post('alamat_ktp');
		$alamat_domisili = $this->input->post('alamat_domisili');
		$agama = $this->input->post('agama');
		$jenis_kelamin = $this->input->post('jenis_kelamin');
		$pendidikan = $this->input->post('pendidikan');
		$jurusan = $this->input->post('jurusan');
		$tanggal_lahir = $this->input->post('tanggal_lahir');
		$usia = $this->input->post('usia');
		$goldar = $this->input->post('golongan_darah');
		$keluarga = $this->input->post('keluarga');

		$data = array(
			'id_karyawan_pribadi' => $id,
			'nama' => $nama,
			'alamat_ktp' => $alamat_ktp,
			'alamat_domisili' => $alamat_domisili,
			'agama' => $agama,
			'jenis_kelamin' => $jenis_kelamin,
			'pendidikan' => $pendidikan,
			'jurusan' => $jurusan,
			'tanggal_lahir' => $tanggal_lahir,
			'usia' => $usia,
			'golongan_darah' => $goldar,
			'keluarga' => $keluarga
		);

		$where = array(
			'id_karyawan_pribadi' => $id
		);

		$this->M_Karyawan_Pribadi->update_data('karyawan_pribadi', $data, $where);
		redirect('DataKaryawan/Pribadi');
	}

	public function delete_data($id = NULL)
	{
		$where1 = array('id_karyawan_pribadi' => $id);
		$table1 = 'karyawan_pribadi';
		$where2 = array('id_keluarga' => $id);
		$table2 = 'keluarga';
		$this->M_Karyawan_Pribadi->delete_data($where1, $table1, $where2, $table2);
		redirect('DataKaryawan/Pribadi');
	}
// -------------------------------------------------------------------------------------//
	
	public function tambah_data_keluarga()
	{
		$data['title'] = 'Tambah Data Keluarga Karyawan';
		$this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar');
        $this->load->view('Master/Keluarga/tambahdatakeluarga');
        $this->load->view('templates/footer');
	}

	public function create_keluarga()
	{
		$id = $this->input->post('id_keluarga');
		$istri = $this->input->post('istri_suami');
		$anak1 = $this->input->post('anak1');
		$anak2 = $this->input->post('anak2');
		$anak3 = $this->input->post('anak3');

		$data = array(
			'id_keluarga' => $id,
			'istri_suami' => $istri,
			'anak1' => $anak1,
			'anak2' => $anak2,
			'anak3' => $anak3
		);

		$this->M_Keluarga->insert_data('keluarga', $data);
		redirect('DataKaryawan/Pribadi');
	}

	public function edit_keluarga($id)
	{
		$data['title'] = 'Edit Data Keluarga Karyawan';
		$where = array('id_keluarga' => $id);
		$data['keluarga'] = $this->db->query("SELECT * FROM keluarga WHERE id_keluarga = '$id'")->result();
		$this->load->view('templates/header', $data);
		$this->load->view('templates/sidebar');
		$this->load->view('master/keluarga/editdatakeluarga', $data);
		$this->load->view('templates/footer');
	}

	public function edit_data_keluarga()
	{
		$id = $this->input->post('id_keluarga');
		$istri = $this->input->post('istri_suami');
		$anak1 = $this->input->post('anak1');
		$anak2 = $this->input->post('anak2');
		$anak3 = $this->input->post('anak3');

		$data = array(
			'id_keluarga' => $id,
			'istri_suami' => $istri,
			'anak1' => $anak1,
			'anak2' => $anak2,
			'anak3' => $anak3
		);

		$where = array(
			'id_keluarga' => $id
		);

		$this->M_Keluarga->update_data('keluarga', $data, $where);
		redirect('DataKaryawan/Keluarga');
	}

	public function delete_data_keluarga($id = NULL)
	{
		$where = array('id_keluarga' => $id);
		$this->M_Keluarga->delete_data($where, 'keluarga');
		redirect('DataKaryawan/Keluarga');
	}

// -------------------------------------------------------------------------------------//
	

}