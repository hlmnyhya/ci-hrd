<div class="midde_cont">
    <div class="container-fluid">
        <div class="row column_title">
            <div class="col-md-12">
                <div class="page_title">
                    <h2>TAMBAH DATA PRIBADI</h2>
                </div>
            </div>
        </div>
        <div id="layoutSidenav_content">
            <main>
                <form action="<?php echo base_url('DataKaryawan/Pribadi/create_pribadi'); ?>" method="post" role="form">
                <div class="form-group">
                    <input type="hidden" class=" form-control col-md-6" name="id_karyawan_pribadi" id="formGroupExampleInput2"
                        placeholder="">
                </div>
                <div class="form-group">
                    <label for="formGroupExampleInput2">Nama</label>
                    <input type="text" class="form-control col-md-6" name="nama" id="formGroupExampleInput2" placeholder="">
                </div>
                <div class="form-group">
                    <label for="formGroupExampleInput2">Alamat KTP</label>
                    <input type="text" class="form-control col-md-6" name="alamat_ktp" id="formGroupExampleInput2" placeholder="">
                </div>
                <div class="form-group">
                    <label for="formGroupExampleInput2">Alamat Domisili</label>
                    <input type="text" class="form-control col-md-6" name="alamat_domisili" id="formGroupExampleInput2" placeholder="">
                </div>
                <div class="form-group">
                    <label for="formGroupExampleInput2">Agama</label>
                    <select class="form-control col-md-6" name="agama" require="true">
                        <option selected disabled>--Pilih Agama--</option>
                        <option value="Islam">Islam</option>
                        <option value="Kristen">Kristen</option>
                        <option value="Katolik">Katolik</option>
                        <option value="Hindu">Hindu</option>
                        <option value="Budha">Budha</option>
                        <option value="Konghucu">Konghucu</option>
                    </select>
                </div>
                <div class="form-group">
                    <label for="formGroupExampleInput2">Jenis Kelamin</label>
                    <select class="form-control col-md-6" name="jenis_kelamin" require="true">
                        <option selected disabled>--Pilih Jenis Kelamin--</option>
                        <option value="Laki-Laki">Laki-Laki</option>
                        <option value="Perempuan">Perempuan</option>
                    </select>
                </div>
                <div class="form-group">
                    <label for="formGroupExampleInput2">Pendidikan</label>
                    <select class="form-control col-md-6" name="pendidikan" require="true">
                        <option selected disabled>--Pilih Pendidikan--</option>
                        <option value="SMA/SLTA Sederajat">SMA/SLTA Sederajat</option>
                        <option value="D3">D3</option>
                        <option value="S1">S1</option>
                        <option value="S2">S2</option>
                        <option value="S3">S3</option>
                    </select>
                </div>
                <div class="form-group">
                    <label for="formGroupExampleInput2">Jurusan</label>
                    <input type="text" class="form-control col-md-6" name="jurusan" id="formGroupExampleInput2"
                        placeholder="">
                </div>
                <div class="form-group">
                    <label for="formGroupExampleInput2">Tanggal Lahir</label>
                    <input type="date" class="form-control col-md-6" name="tanggal_lahir" id="tglLahir" placeholder="">
                </div>
                <div class="form-group">
                    <label for="formGroupExampleInput2">Usia</label>
                    <input type="text" class="form-control col-md-6" name="usia" id="usia" placeholder="" readonly>
                </div>
                <div class="form-group">
                    <label for="formGroupExampleInput2">Golongan Darah</label>
                    <select class="form-control col-md-6" name="golongan_darah" require="true">
                        <option selected disabled>--Pilih Golongan Darah--</option>
                        <option value="A">A</option>
                        <option value="B">B</option>
                        <option value="AB">AB</option>
                        <option value="O">O</option>
                    </select>
                </div>
                <div class="form-group">
                    <label for="formGroupExampleInput2">Keluarga</label>
                    <input type="text" class="form-control col-md-6" name="keluarga" id="formGroupExampleInput2" placeholder="">
                </div>
                        <br>
                        <td>
                            <a href="<?php echo base_url('DataKaryawan/pribadi')?>"><button
                                    class="btn btn-danger btn-"><i class="fa fa-arrow-circle-left">
                                    </i> Back</button></a>
                         <button type="submit" class="btn btn-primary btn-">Next <i class="fa fa-arrow-circle-right"></i></button>
                        </td>
                        </form>
            </main>
        </div>