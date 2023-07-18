<div class="midde_cont">
    <div class="container-fluid">
        <div class="row column_title">
            <div class="col-md-12">
                <div class="page_title">
                    <h2>TAMBAH DATA PELAMAR</h2>
                </div>
            </div>
        </div>
        <div id="layoutSidenav_content">
            <main>
               <form action="<?php echo base_url('DataPelamar/datapelamar/create'); ?>" method="post" role="form" enctype="multipart/form-data">
    <div class="form-group">
        <input type="hidden" class="form-control col-md-6" name="id_pelamar" id="formGroupExampleInput2" placeholder="">
    </div>
    <div class="form-group">
        <label for="formGroupExampleInput2">Nama</label>
        <input type="text" class="form-control col-md-6" name="nama" id="formGroupExampleInput2" placeholder="">
    </div>
    <div class="form-group">
        <label for="formGroupExampleInput2">Alamat</label>
        <input type="text" class="form-control col-md-6" name="alamat" id="formGroupExampleInput2" placeholder="">
    </div>
    <div class="form-group">
        <label for="formGroupExampleInput2">Tanggal Lahir</label>
        <input type="date" class="form-control col-md-6" name="tanggal_lahir" id="formGroupExampleInput2" placeholder="">
    </div>
    <div class="form-group">
        <label for="formGroupExampleInput2">Jenis Kelamin</label>
        <select class="form-control col-md-6" name="jenis_kelamin" required>
            <option selected disabled>--Pilih Jenis Kelamin--</option>
            <option value="Laki-Laki">Laki-Laki</option>
            <option value="Perempuan">Perempuan</option>
        </select>
    </div>
    <div class="form-group">
        <label for="formGroupExampleInput2">Nomor Telepon</label>
        <input type="number" class="form-control col-md-6" name="no_telp" id="formGroupExampleInput2" placeholder="">
    </div>
    <div class="form-group">
        <label for="formGroupExampleInput2">Email</label>
        <input type="email" class="form-control col-md-6" name="email" id="formGroupExampleInput2" placeholder="">
    </div>
    <div class="form-group">
        <label for="formGroupExampleInput2">File</label>
        <input type="file" class="form-control col-md-6" name="file" id="formGroupExampleInput2" placeholder="">
    </div>
    <div class="form-group">
        <button type="submit" class="btn btn-primary">Simpan <i class="fa fa-arrow-circle-right"></i></button>
    </div>
</form>

            </main>
        </div>