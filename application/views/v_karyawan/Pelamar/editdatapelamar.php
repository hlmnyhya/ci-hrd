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
            <?php foreach ($pelamar as $p) : ?>
            <main>
               <form action="<?php echo base_url('DataPelamar/datapelamar/edit_data'); ?>" method="post" role="form" enctype="multipart/form-data">
    <div class="form-group">
        <input type="hidden" class="form-control col-md-6" name="id_pelamar" id="formGroupExampleInput2" placeholder="" value="<?php echo $p->id_pelamar; ?>">
    </div>
    <div class="form-group">
        <label for="formGroupExampleInput2">Nama</label>
        <input type="text" class="form-control col-md-6" name="nama" id="formGroupExampleInput2" placeholder="" value="<?php echo $p->nama; ?>">
    </div>
    <div class="form-group">
        <label for="formGroupExampleInput2">Alamat</label>
        <input type="text" class="form-control col-md-6" name="alamat" id="formGroupExampleInput2" placeholder="" value="<?php echo $p->alamat; ?>">
    </div>
    <div class="form-group">
        <label for="formGroupExampleInput2">Tanggal Lahir</label>
        <input type="date" class="form-control col-md-6" name="tanggal_lahir" id="formGroupExampleInput2" placeholder="" value="<?php echo $p->tanggal_lahir; ?>">
    </div>
    <div class="form-group">
        <label for="formGroupExampleInput2">Jenis Kelamin</label>
        <select class="form-control col-md-6" name="jenis_kelamin" required value="<?php echo $p->jenis_kelamin; ?>">
            <option selected disabled>--Pilih Jenis Kelamin--</option>
            <option value="Laki-Laki">Laki-Laki</option>
            <option value="Perempuan">Perempuan</option>
        </select>
    </div>
    <div class="form-group">
        <label for="formGroupExampleInput2">Nomor Telepon</label>
        <input type="number" class="form-control col-md-6" name="no_telp" id="formGroupExampleInput2" placeholder="" value="<?php echo $p->no_telp; ?>">
    </div>
    <div class="form-group">
        <label for="formGroupExampleInput2">Email</label>
        <input type="email" class="form-control col-md-6" name="email" id="formGroupExampleInput2" placeholder="" value="<?php echo $p->email; ?>">
    </div>
    <div class="form-group">
        <label for="formGroupExampleInput2">File</label>
        <input type="file" class="form-control col-md-6" name="file" id="formGroupExampleInput2" placeholder="" value="<?php echo $p->file; ?>">
    </div>
    <div class="form-group">
        <button type="submit" class="btn btn-primary">Simpan <i class="fa fa-arrow-circle-right"></i></button>
    </div>
</form>
<?php endforeach; ?>

            </main>
        </div>