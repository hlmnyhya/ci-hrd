<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class DataPelamar extends CI_Controller {

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
		$config['base_url'] = base_url('DataPelamar/Pelamar/index');
    	$config['total_rows'] = $this->M_Pelamar->count_data();
    	$config['per_page'] = 3;
    	$config['uri_segment'] = 4;
		
    	$this->load->library('pagination');
    	$this->pagination->initialize($config);
		
    	$offset = $this->uri->segment(4) ? $this->uri->segment(4) : 1;
    	$data['pelamar'] = $this->M_Pelamar->get_data($config['per_page'], $offset)->result();
    	$data['pagination'] = $this->pagination->create_links();
		
    	// Periksa apakah properti nomor_halaman ada dalam data pribadi
    	$data['pelamar_with_pagination'] = [];
    	foreach ($data['pelamar'] as $p) {
    	    $p->nomor_halaman = $offset; // Menggunakan offset sebagai nomor halaman
    	    $data['pelamar_with_pagination'][] = $p;
    	    $offset++;
    	}
		
		$data['title'] = 'Data Pelamar';
		$data['pelamar'] = $this->M_Pelamar->show_data()->result();
		$this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar');
        $this->load->view('v_karyawan/pelamar/datapelamar', $data);
        $this->load->view('templates/footer');
	}

	public function tambah_data_pelamar()
	{
		$data['title'] = 'Tambah Data Pelamar';
		$this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar');
        $this->load->view('v_karyawan/pelamar/tambahdatapelamar');
        $this->load->view('templates/footer');
	}

public function create()
{
     	$config['upload_path'] = './assets/uploads/pelamar/';
        $config['allowed_types'] = 'gif|jpg|png|PNG|pdf';
        $config['max_size'] = 10000;
        $config['max_width'] = 10000;
        $config['max_height'] = 10000;

        $this->load->library('upload', $config);

        if (!$this->upload->do_upload('file')) {
            echo "Gagal Tambah";
        } else {
            $file = $this->upload->data('file_name');
		    $id = $this->input->post('id_pelamar');
    		$nama = $this->input->post('nama');
    		$alamat = $this->input->post('alamat');
    		$tanggal_lahir = $this->input->post('tanggal_lahir');
    		$jenis_kelamin = $this->input->post('jenis_kelamin');
    		$no_telp = $this->input->post('no_telp');
    		$email = $this->input->post('email');
    		$created_at = date('Y-m-d');

			$data = array(
				'id_pelamar' => $id,
				'nama' => $nama,
				'alamat' => $alamat,
				'tanggal_lahir' => $tanggal_lahir,
				'jenis_kelamin' => $jenis_kelamin,
				'no_telp' => $no_telp,
				'email' => $email,
				'file' => $file,
				'created_at' => $created_at
			);


            $this->M_Pelamar->insert_data('pelamar', $data);
			$this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Data Pelamar Berhasil Ditambahkan</div>');
            redirect('DataPelamar/DataPelamar');
    }
}

	public function edit($id)
	{
		$data['title'] = 'Edit Data Pelamar';
		$where = array('id_pelamar' => $id);
		$data['pelamar'] = $this->db->query("SELECT * FROM pelamar WHERE id_pelamar = '$id'")->result();
		$this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar');
        $this->load->view('v_karyawan/pelamar/editdatapelamar', $data);
        $this->load->view('templates/footer');
	}

	public function edit_data()
	{
    // Mendapatkan input data dari form
    $nama = $this->input->post('nama');
    $alamat = $this->input->post('alamat');
    $tanggal_lahir = $this->input->post('tanggal_lahir');
    $jenis_kelamin = $this->input->post('jenis_kelamin');
    $no_telp = $this->input->post('no_telp');
    $email = $this->input->post('email');

    // Cek apakah ada file yang diunggah
    if ($_FILES['file']['name'] != '') {
        // Konfigurasi upload file
        $config['upload_path'] = './assets/uploads/pelamar/';
        $config['allowed_types'] = 'gif|jpg|png|PNG|pdf';
        $config['max_size'] = 10000;
        $config['max_width'] = 10000;
        $config['max_height'] = 10000;

        $this->load->library('upload', $config);

        if (!$this->upload->do_upload('file')) {
            echo "Gagal Edit";
            return;
        }

        // Jika upload berhasil, dapatkan informasi file yang diunggah
        $file_data = $this->upload->data();
        $file = $file_data['file_name'];
    } else {
        // Jika tidak ada file yang diunggah, gunakan file yang sudah ada sebelumnya
        $file = $this->input->post('old_file');
    }

    // Siapkan data untuk diupdate
    $data = array(
        'nama' => $nama,
        'alamat' => $alamat,
        'tanggal_lahir' => $tanggal_lahir,
        'jenis_kelamin' => $jenis_kelamin,
        'no_telp' => $no_telp,
        'email' => $email,
        'file' => $file
    );

	$where = array(
		'id_pelamar' => $id
	);

    // Panggil model untuk melakukan update data ke database
    $this->M_Pelamar->update_data('pelamar',$data,$id);
	$this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Data Pelamar Berhasil Diubah</div>');
    redirect('DataPelamar/DataPelamar');
	}

	public function delete($id = NULL)
    {
    	if($id == null){
			redirect('DataPelamar/DataPelamar');
		}
    	$where = array('id_pelamar' => $id);
    	$this->M_Pelamar->delete_data($where, 'pelamar');
		$this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Data Pelamar Berhasil Dihapus</div>');
		redirect('DataPelamar/DataPelamar');
    }
}





