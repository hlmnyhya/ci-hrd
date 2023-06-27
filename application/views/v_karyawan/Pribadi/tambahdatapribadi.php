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
                <div class="form-group">
                    <input type="hidden" class=" form-control col-md-6" name="" id="formGroupExampleInput2"
                        placeholder="">
                </div>
                <div class="form-group">
                    <label for="formGroupExampleInput2">Nama</label>
                    <input type="text" class="form-control col-md-6" name="" id="formGroupExampleInput2" placeholder="">
                </div>
                <div class="form-group">
                    <label for="formGroupExampleInput2">Alamat KTP</label>
                    <input type="text" class="form-control col-md-6" name="" id="formGroupExampleInput2" placeholder="">
                </div>
                <div class="form-group">
                    <label for="formGroupExampleInput2">Alamat Domisili</label>
                    <input type="text" class="form-control col-md-6" name="" id="formGroupExampleInput2" placeholder="">
                </div>
                <div class="form-group">
                    <label for="formGroupExampleInput2">Agama</label>
                    <input type="text" class="form-control col-md-6" name="" id="formGroupExampleInput2" placeholder="">
                </div>
                <div class="form-group">
                    <label for="formGroupExampleInput2">Jenis Kelamin</label>
                    <select class="form-control col-md-6" name="asli" require="true">
                        <option selected disabled>--Pilih--</option>
                        <option>Laki-Laki</option>
                        <option>Perempuan</option>
                    </select>
                </div>
                <div class="form-group">
                    <label for="formGroupExampleInput2">Pendidikan</label>
                    <input type="text" class="form-control col-md-6" name="" id="formGroupExampleInput2" placeholder="">
                </div>
                <div class="form-group">
                    <label for="formGroupExampleInput2">Jurusan</label>
                    <input type="number" class="form-control col-md-6" name="" id="formGroupExampleInput2"
                        placeholder="">
                </div>
                <div class="form-group">
                    <label for="formGroupExampleInput2">Tanggal Lahir</label>
                    <input type="date" class="form-control col-md-6" name="" id="formGroupExampleInput2" placeholder="">
                </div>
                <div class="form-group">
                    <label for="formGroupExampleInput2">Usia</label>
                    <input type="text" class="form-control col-md-6" name="" id="formGroupExampleInput2" placeholder="">
                </div>
                <div class="form-group">
                    <label for="formGroupExampleInput2">Tanggal Masuk</label>
                    <input type="date" class="form-control col-md-6" name="" id="formGroupExampleInput2" placeholder="">
                </div>
                <div class="form-group">
                    <label for="formGroupExampleInput2">Masa Kerja</label>
                    <input type="text" class="form-control col-md-6" name="" id="formGroupExampleInput2" placeholder="">
                </div>
                <div class="form-group">
                    <label for="formGroupExampleInput2">Divisi</label>
                    <select class="form-control col-md-6" name="asli" require="true">
                        <option selected disabled>--Pilih--</option>
                        <option>HRD</option>
                        <option>MANAGER</option>
                    </select>
                </div>
                <div class="form-group">
                    <label for="formGroupExampleInput2">Jabatan</label>
                    <input type="text" class="form-control col-md-6" name="" id="formGroupExampleInput2" placeholder="">
                </div>
                <div class="form-group">
                    <label for="formGroupExampleInput2">Status Karyawan Terakhir</label>
                    <select class="form-control col-md-6" name="asli" require="true">
                        <option selected disabled>--Pilih--</option>
                        <option>-</option>
                        <option>-</option>
                        <div class="form-group">
                            <input type="hidden" class=" form-control col-md-6" name="" id="formGroupExampleInput2"
                                placeholder="">
                        </div>
                        <div class="form-group">
                            <input type="hidden" class=" form-control col-md-6" name="" id="formGroupExampleInput2"
                                placeholder="">
                        </div>
                        <div class="form-group">
                            <input type="hidden" class="form-control col-md-6" name="" id="formGroupExampleInput2"
                                placeholder="">
                        </div>
                        <br>
                        <td>
                            <a href="<?php echo base_url('DataKaryawan/pribadi')?>"><button
                                    class="btn btn-danger btn-"><i class="fa fa-arrow-circle-left">
                                    </i> Back</button></a>
                            <a href="<?php echo base_url('DataKaryawan/tambahdatakeluarga')?>"><button
                                    class="btn btn-primary btn-">Next <i class="fa fa-arrow-circle-right">
                                    </i></button></a>
                        </td>
                        </form>
            </main>
        </div>