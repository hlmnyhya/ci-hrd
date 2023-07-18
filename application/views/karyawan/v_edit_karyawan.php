<div class="midde_cont">
    <div class="container-fluid">
        <div class="row column_title">
            <div class="col-md-12">
                <div class="page_title">
                    <h2>UBAH DATA KARYAWAN</h2>
                </div>
            </div>
        </div>

            
        
        <div id="layoutSidenav_content">
            <main>
                <form action="<?php echo base_url('karyawan/editKaryawan_proses/' . $karyawan['id_karyawan']); ?>" method="post" role="form">
                
                <input type="hidden" name="id_karyawan" value="<?= $karyawan['id_karyawan'] ?>">

                <div class="form-group">
                    <label for="formGroupExampleInput2">Nama</label>
                    <input type="text" class="form-control col-md-6" name="nama" id="formGroupExampleInput2" placeholder="" value="<?= $karyawan['nama'] ?>">
                </div>
                <div class="form-group">
                    <label for="formGroupExampleInput2">Tanggal Masuk</label>
                    <input type="date" class="form-control col-md-6" name="tgl_masuk" id="formGroupExampleInput2" placeholder="" value="<?= $karyawan['tgl_masuk'] ?>">
                </div>
                <div class="form-group">
                    <label for="formGroupExampleInput2">Masa Kerja</label>
                    <input type="date" class="form-control col-md-6" name="masa_kerja" id="formGroupExampleInput2" placeholder="" value="<?= $karyawan['masa_kerja'] ?>">
                </div>

                <div class="form-group">
                    <label for="formGroupExampleInput2">Divisi</label>
                    <select class="form-control col-md-6" aria-label="Default select example" name="divisi">
                        <option selected disabled>Pilih Divisi</option>
                        <?php foreach($divisi as $d) { ?>
                        <option value="<?= $d->id_divisi ?>" <?php if ($karyawan['divisi'] == "$d->id_divisi") echo "selected"; ?>><?= $d->divisi?></option>
                        <?php } ?>
                    </select>
                </div>

                <div class="form-group">
                    <label for="formGroupExampleInput2">Jabatan</label>
                    <select class="form-control col-md-6" aria-label="Default select example" name="jabatan">
                        <option selected disabled>Pilih Jabatan</option>
                        <?php foreach($jabatan as $j) { ?>
                        <option value="<?= $j->id_jabatan ?>" <?php if ($karyawan['jabatan'] == "$j->id_jabatan") echo "selected"; ?>><?= $j->jabatan?></option>
                        <?php } ?>
                    </select>
                </div>

                <div class="form-group">
                    <label for="formGroupExampleInput2">Status Terakhir</label>
                    <input type="text" class="form-control col-md-6" name="status_terakhir" id="formGroupExampleInput2" placeholder="" value="<?= $karyawan['status_terakhir'] ?>">
                </div>

                <div class="form-group">
                    <label for="formGroupExampleInput2">Golongan</label>
                    <select class="form-control col-md-6" aria-label="Default select example" name="golongan">
                        <option selected disabled>Pilih Golongan</option>
                        <?php foreach($golongan as $g) { ?>
                        <option value="<?= $g->id_golongan ?>" <?php if ($karyawan['golongan'] == "$g->id_golongan") echo "selected"; ?>><?= $g->golongan?></option>
                        <?php } ?>
                    </select>
                </div>

                <div class="form-group">
                    <label for="formGroupExampleInput2">BPJS Tenaga Kerja</label>
                    <input type="text" class="form-control col-md-6" name="bpjs_tk" id="formGroupExampleInput2" placeholder="" value="<?= $karyawan['bpjs_tk'] ?>">
                </div>
                <div class="form-group">
                    <label for="formGroupExampleInput2">BPJS Kesehatan</label>
                    <input type="text" class="form-control col-md-6" name="bpjs_kes" id="formGroupExampleInput2" placeholder="" value="<?= $karyawan['bpjs_kes'] ?>">
                </div>
                <div class="form-group">
                    <label for="formGroupExampleInput2">NPWP</label>
                    <input type="text" class="form-control col-md-6" name="npwp" id="formGroupExampleInput2" placeholder="" value="<?= $karyawan['npwp'] ?>">
                </div>
                <div class="form-group">
                    <label for="formGroupExampleInput2">Status PTKP</label>
                    <input type="text" class="form-control col-md-6" name="status_ptkp" id="formGroupExampleInput2" placeholder="" value="<?= $karyawan['status_ptkp'] ?>">
                </div>
                <div class="form-group">
                    <label for="formGroupExampleInput2">Alamat KTP</label>
                    <input type="text" class="form-control col-md-6" name="alamat_ktp" id="formGroupExampleInput2" placeholder="" value="<?= $karyawan['alamat_ktp'] ?>">
                </div>
                <div class="form-group">
                    <label for="formGroupExampleInput2">Alamat Domisili</label>
                    <input type="text" class="form-control col-md-6" name="alamat_domisili" id="formGroupExampleInput2" placeholder="" value="<?= $karyawan['alamat_domisili'] ?>">
                </div>
                <div class="form-group">
                    <label for="formGroupExampleInput2">PKWT-Mulai</label>
                    <input type="date" class="form-control col-md-6" name="pkwt_mulai" id="formGroupExampleInput2" placeholder="" value="<?= $karyawan['pkwt_mulai'] ?>">
                </div>
                <div class="form-group">
                    <label for="formGroupExampleInp ut2">PKWT-Selesai</label>
                    <input type="date" class="form-control col-md-6" name="pkwt_selesai" id="formGroupExampleInput2" placeholder="" value="<?= $karyawan['pkwt_selesai'] ?>">
                </div>
                <div class="form-group">
                    <label for="formGroupExampleInput2">PKWT2-Mulai</label>
                    <input type="date" class="form-control col-md-6" name="pkwt2_mulai" id="formGroupExampleInput2" placeholder="" value="<?= $karyawan['pkwt2_mulai'] ?>">
                </div>
                <div class="form-group">
                    <label for="formGroupExampleInput2">PKWT2-Selesai</label>
                    <input type="date" class="form-control col-md-6" name="pkwt2_selesai" id="formGroupExampleInput2" placeholder="" value="<?= $karyawan['pkwt2_selesai'] ?>">
                </div>
                <div class="form-group">
                    <label for="formGroupExampleInput2">THT</label>
                    <input type="date" class="form-control col-md-6" name="tht" id="formGroupExampleInput2" placeholder="" value="<?= $karyawan['tht'] ?>">
                </div>

                <div class="form-group">
                    <label for="formGroupExampleInput2">THL</label>
                    <select class="form-control col-md-6" aria-label="Default select example" name="thl">
                        <option selected disabled>Pilih THL</option>
                        <?php foreach($thl as $t) { ?>
                        <option value="<?= $t->id_thl ?>" <?php if ($karyawan['thl'] == "$t->id_thl") echo "selected"; ?>><?= $t->nama?></option>
                        <?php } ?>
                    </select>
                </div>

                <div class="form-group">
                    <label for="formGroupExampleInput2">Percobaan-Mulai</label>
                    <input type="date" class="form-control col-md-6" name="percobaan_mulai" id="formGroupExampleInput2" placeholder="" value="<?= $karyawan['percobaan_mulai'] ?>">
                </div>
                <div class="form-group">
                    <label for="formGroupExampleInput2">Percobaan-Selesai</label>
                    <input type="date" class="form-control col-md-6" name="percobaan_selesai" id="formGroupExampleInput2" placeholder="" value="<?= $karyawan['percobaan_selesai'] ?>">
                </div>

                <div class="form-group">
                    <label for="formGroupExampleInput2">Data Pribadi</label>
                    <select class="form-control col-md-6" aria-label="Default select example" name="karyawan_pribadi">
                        <option selected disabled>Pilih Data Pribadi</option>
                        <?php foreach($pribadi as $p) { ?>
                        <option value="<?= $p->id_karyawan_pribadi ?>" <?php if ($karyawan['karyawan_pribadi'] == "$p->id_karyawan_pribadi") echo "selected"; ?>><?= $p->nama?></option>
                        <?php } ?>
                    </select>
                </div>

                <br>
                <button class="btn btn-primary" type="submit"><i class="fa fa-arrow-circle-right"></i> Simpan</button>
            </form>
            <a href="<?php echo base_url('karyawan')?>"><button class="btn btn-danger btn-"><i
                class="fa fa-arrow-circle-left">
            </i> Back</button></a>
            </main>
        </div>
        </div>