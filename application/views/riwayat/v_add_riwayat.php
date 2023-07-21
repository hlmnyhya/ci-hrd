<div class="midde_cont">
    <div class="container-fluid">
        <div class="row column_title">
            <div class="col-md-12">
                <div class="page_title">
                    <h2>TAMBAH DATA RIWAYAT</h2>
                </div>
            </div>
        </div>

            
        <div>
            

        <div id="layoutSidenav_content">

            <main>
                <form action="<?php echo base_url('Riwayat/addRiwayat_proses'); ?>" method="post" role="form">
                
                <label for="formGroupExampleInput2">Nama Karyawan</label>
                <div class="form-control">
                    <select class="col-md-12 select2" aria-label="Default select example" name="id_karyawan">
                        <option selected disabled>Pilih Karyawan</option>
                        <?php foreach($karyawan as $k) { ?>
                        <option value="<?= $k->id_karyawan ?>"><?= $k->nama?></option>
                        <?php } ?>
                    </select>
                </div>

                <hr>

                <label for="formGroupExampleInput2">Divisi</label>
                <div class="form-control">
                    <select class="col-md-12 select2" aria-label="Default select example" name="divisi">
                        <option selected disabled>Pilih Divisi</option>
                        <?php foreach($divisi as $d) { ?>
                        <option value="<?= $d->id_divisi ?>"><?= $d->divisi?></option>
                        <?php } ?>
                    </select>
                </div>

                <div class="form-group">
                    <label for="formGroupExampleInput2">Mulai</label>
                    <input type="date" class="form-control col-md-12" name="divisi_start" id="formGroupExampleInput2" placeholder="">
                </div>

                <div class="form-group">
                    <label for="formGroupExampleInput2">Selesai</label>
                    <input type="date" class="form-control col-md-12" name="divisi_end" id="formGroupExampleInput2" placeholder="">
                </div>

                <hr>

                <label for="formGroupExampleInput2">Jabatan</label>
                <div class="form-control">
                    <select class="form-control col-md-12 select2" aria-label="Default select example" name="jabatan">
                        <option selected disabled>Pilih Jabatan</option>
                        <?php foreach($jabatan as $j) { ?>
                        <option value="<?= $j->id_jabatan ?>"><?= $j->jabatan?></option>
                        <?php } ?>
                    </select>
                </div>

                <div class="form-group">
                    <label for="formGroupExampleInput2">Mulai</label>
                    <input type="date" class="form-control col-md-12" name="jabatan_start" id="formGroupExampleInput2" placeholder="">
                </div>

                <div class="form-group">
                    <label for="formGroupExampleInput2">Selesai</label>
                    <input type="date" class="form-control col-md-12" name="jabatan_end" id="formGroupExampleInput2" placeholder="">
                </div>

                <hr>

                <label for="formGroupExampleInput2">Golongan</label>
                <div class="form-control">
                    <select class=" col-md-12 select2" aria-label="Default select example" name="golongan">
                        <option selected disabled>Pilih Golongan</option>
                        <?php foreach($golongan as $g) { ?>
                        <option value="<?= $g->id_golongan ?>"><?= $g->golongan?></option>
                        <?php } ?>
                    </select>
                </div>

                <div class="form-group">
                    <label for="formGroupExampleInput2">Mulai</label>
                    <input type="date" class="form-control col-md-12" name="golongan_start" id="formGroupExampleInput2" placeholder="">
                </div>

                <div class="form-group">
                    <label for="formGroupExampleInput2">Selesai</label>
                    <input type="date" class="form-control col-md-12" name="golongan_end" id="formGroupExampleInput2" placeholder="">
                </div>

                <hr>

                <label for="formGroupExampleInput2">Status</label>
                <div class="form-control">
                    <select class=" col-md-12 select2" aria-label="Default select example" name="status">
                        <option selected disabled>Pilih Status</option>
                        <option value="PKWT">PKWT</option>
                        <option value="PKWT2">PKWT2</option>
                        <option value="THT">THT</option>
                        <option value="THL">THL</option>
                        <option value="PERCOBAAN 1">PERCOBAAN 1</option>
                    </select>
                </div>

                <div class="form-group">
                    <label for="formGroupExampleInput2">Mulai</label>
                    <input type="date" class="form-control col-md-12" name="status_start" id="formGroupExampleInput2" placeholder="">
                </div>

                <div class="form-group">
                    <label for="formGroupExampleInput2">Selesai</label>
                    <input type="date" class="form-control col-md-12" name="status_end" id="formGroupExampleInput2" placeholder="">
                </div>

                <br>
                <button class="btn btn-primary" type="submit"><i class="fa fa-arrow-circle-right"></i> Simpan</button>
            </form>
            <a href="<?php echo base_url('jabatan')?>"><button class="btn btn-danger btn-"><i
                class="fa fa-arrow-circle-left">
            </i> Back</button></a>
            </main>
        </div>
        </div>