<div class="midde_cont">
    <div class="container-fluid">
        <div class="row column_title">
            <div class="col-md-12">
                <div class="page_title">
                    <h2>EDIT DATA PRIBADI</h2>
                </div>
            </div>
        </div>
        <div id="layoutSidenav_content">
            <main>
                <?php foreach ($karyawan_pribadi as $kp) : ?>
                <form action="<?php echo base_url('DataKaryawan/pribadi/edit_data_pribadi'); ?>" method="post" role="form">
                <div class="form-group">
                    <input type="hidden" class=" form-control col-md-6" name="id_karyawan_pribadi" id="formGroupExampleInput2"
                        placeholder="" value="<?php echo $kp->id_karyawan_pribadi; ?>">
                </div>
                <div class="form-group">
                    <label for="formGroupExampleInput2">Nama</label>
                    <input type="text" class="form-control col-md-6" name="nama" id="formGroupExampleInput2" placeholder="" value="<?php echo $kp->nama?>">
                </div>
                <div class="form-group">
                    <label for="formGroupExampleInput2">Alamat KTP</label>
                    <input type="text" class="form-control col-md-6" name="alamat_ktp" id="formGroupExampleInput2" placeholder="" value="<?php echo $kp->alamat_ktp?>">
                </div>
                <div class="form-group">
                    <label for="formGroupExampleInput2">Alamat Domisili</label>
                    <input type="text" class="form-control col-md-6" name="alamat_domisili" id="formGroupExampleInput2" placeholder="" value="<?php echo $kp->alamat_domisili?>">
                </div>
                <div class="form-group">
                    <label for="formGroupExampleInput2">Agama</label>
                    <select class="form-control col-md-6" name="agama" require="true" value="<?php echo $kp->agama?>">
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
                    <select class="form-control col-md-6" name="jenis_kelamin" require="true" value="<?php echo $kp->jenis_kelamin?>">
                        <option selected disabled>--Pilih Jenis Kelamin--</option>
                        <option value="Laki-Laki">Laki-Laki</option>
                        <option value="Perempuan">Perempuan</option>
                    </select>
                </div>
                <div class="form-group">
                    <label for="formGroupExampleInput2">Pendidikan</label>
                    <select class="form-control col-md-6" name="pendidikan" require="true" value="<?php echo $kp->pendidikan?>">
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
                        placeholder="" value="<?php echo $kp->jurusan?>">
                </div>
                <div class="form-group">
                    <label for="formGroupExampleInput2">Tanggal Lahir</label>
                    <input type="date" class="form-control col-md-6" name="tanggal_lahir" id="formGroupExampleInput2" placeholder="" value="<?php echo $kp->tanggal_lahir?>">
                </div>
                <div class="form-group">
                    <label for="formGroupExampleInput2">Usia</label>
                    <input type="text" class="form-control col-md-6" name="usia" id="formGroupExampleInput2" placeholder="" value="<?php echo $kp->usia?>">
                </div>
                <div class="form-group">
                    <label for="formGroupExampleInput2">Keluarga</label>
                    <input type="text" class="form-control col-md-6" name="keluarga" id="formGroupExampleInput2" placeholder="" value="<?php echo $kp->keluarga?>">
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
            <?php endforeach; ?>
        </div>