<?php 
defined('BASEPATH') OR exit('No direct script access allowed');
    
class M_dashboard extends CI_Model{
    
    public function getJumlahKaryawanPerJenisKelamin()
    {
        // Mendapatkan jumlah data karyawan dengan jenis kelamin laki-laki
        $this->db->where('jenis_kelamin', 'laki-laki');
        $lakiLakiCount = $this->db->count_all_results('karyawan_pribadi');

        // Mendapatkan jumlah data karyawan dengan jenis kelamin perempuan
        $this->db->where('jenis_kelamin', 'perempuan');
        $perempuanCount = $this->db->count_all_results('karyawan_pribadi');

        return [
            'laki-laki' => $lakiLakiCount,
            'perempuan' => $perempuanCount
        ];
    }

    public function getJumlahKaryawanUsia1825()
    {
        $this->db->select('COUNT(*) as total_karyawan');
        $this->db->from('karyawan_pribadi');
        $this->db->where('usia >=', 18);
        $this->db->where('usia <=', 25);
        $query = $this->db->get();

        return $query->row()->total_karyawan;
    }

    public function getJumlahKaryawanUsia2635()
    {
        $this->db->select('COUNT(*) as total_karyawan');
        $this->db->from('karyawan_pribadi');
        $this->db->where('usia >=', 26);
        $this->db->where('usia <=', 35);
        $query = $this->db->get();

        return $query->row()->total_karyawan;
    }

    public function getJumlahKaryawanUsia3646()
    {
        $this->db->select('COUNT(*) as total_karyawan');
        $this->db->from('karyawan_pribadi');
        $this->db->where('usia >=', 36);
        $this->db->where('usia <=', 46);
        $query = $this->db->get();

        return $query->row()->total_karyawan;
    }

    public function getJumlahKaryawanUsia4756()
    {
        $this->db->select('COUNT(*) as total_karyawan');
        $this->db->from('karyawan_pribadi');
        $this->db->where('usia >=', 47);
        $this->db->where('usia <=', 56);
        $query = $this->db->get();

        return $query->row()->total_karyawan;
    }

    public function getJumlahKaryawanUsia56()
    {
        $this->db->select('COUNT(*) as total_karyawan');
        $this->db->from('karyawan_pribadi');
        $this->db->where('usia >=', 56);
        $query = $this->db->get();

        return $query->row()->total_karyawan;
    }

    public function getJumlahKaryawanPerPendidikan()
    {
        // $this->db->select('pendidikan, COUNT(*) as total_karyawan');
        // $this->db->from('karyawan_pribadi');
        $this->db->where('pendidikan', 'S2');
        $s2Count = $this->db->count_all_results('karyawan_pribadi');

        $this->db->where('pendidikan', 'S1');
        $s1Count = $this->db->count_all_results('karyawan_pribadi');

        $this->db->where_in('pendidikan', ['D1', 'D2', 'D3']);
        $dCount = $this->db->count_all_results('karyawan_pribadi');

        $this->db->where_in('pendidikan', ['SMA', 'SMK', 'MA']);
        $smaCount = $this->db->count_all_results('karyawan_pribadi');

        $this->db->where_in('pendidikan', ['SMP', 'MTS']);
        $smpCount = $this->db->count_all_results('karyawan_pribadi');

        $this->db->where('pendidikan', 'SD');
        $sdCount = $this->db->count_all_results('karyawan_pribadi');

        $this->db->where('pendidikan', 'TIDAK SEKOLAH');
        $tidakSekolahCount = $this->db->count_all_results('karyawan_pribadi');

        return [
            'S2' => $s2Count,
            'S1' => $s1Count,
            'D1/D2/D3' => $dCount,
            'SMA/SMK/MA' => $smaCount,
            'SMP/MTS' => $smpCount,
            'SD' => $sdCount,
            'TIDAK SEKOLAH' => $tidakSekolahCount
        ];
    }
    
}

/* End of file M_Mpp.php */
        