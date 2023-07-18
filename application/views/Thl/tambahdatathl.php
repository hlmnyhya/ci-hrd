<div class="midde_cont">
    <div class="container-fluid">
        <div class="row column_title">
            <div class="col-md-12">
                <div class="page_title">
                    <h2>TAMBAH DATA THL</h2>
                </div>
            </div>
        </div>
        
        <div id="layoutSidenav_content">
            <main>
              <form action="<?php echo base_url('thl/thl/create'); ?>" method="post" role="form">
                <div class="form-group">
                    <input type="hidden" class=" form-control col-md-6" name="id_thl" id="formGroupExampleInput2"
                        placeholder="">
                </div>
                <div class="form-group">
                    <label for="formGroupExampleInput2">Nama</label>
                    <input type="text" class="form-control col-md-6" name="nama_thl" id="formGroupExampleInput2" placeholder="">
                </div>
                <div class="form-group">
                    <label for="formGroupExampleInput2">NIK</label>
                    <input type="text" class="form-control col-md-6" name="nik" id="formGroupExampleInput2" placeholder="">
                </div>
                <div class="form-group">
                    <label for="divisi">Divisi</label>
                    <select class="form-control col-md-6" name="id_divisi" id="divisi">
                        <?php foreach ($divisi as $d) : ?>
                            <option value="<?php echo $d->id_divisi; ?>"><?php echo $d->divisi; ?></option>
                        <?php endforeach; ?>
                    </select>
                </div>
                <div class="form-group">
                    <label for="jabatan">Jabatan</label>
                    <select class="form-control col-md-6" name="id_jabatan" id="jabatan">
                        <?php foreach ($jabatan as $j) : ?>
                            <option value="<?php echo $j->id_jabatan; ?>"><?php echo $j->jabatan; ?></option>
                        <?php endforeach; ?>
                    </select>
                </div>
                <div class="form-group">
                    <label for="formGroupExampleInput2">Tanggal Masuk</label>
                    <input type="date" class="form-control col-md-6" name="tanggal_masuk" id="formGroupExampleInput2" placeholder="">
                </div>
                <div class="form-group">
                    <label for="formGroupExampleInput2">Tanggal Keluar</label>
                    <input type="date" class="form-control col-md-6" name="tanggal_keluar" id="formGroupExampleInput2" placeholder="">
                </div>
                <div class="form-group">
                    <label for="formGroupExampleInput2">Keterangan</label>
                    <input type="text" class="form-control col-md-6" name="keterangan" id="formGroupExampleInput2" placeholder="">
                </div>
                <div class="form-group">
                    <label for="formGroupExampleInput2">Status</label>
                    <input type="text" class="form-control col-md-6" name="status" id="formGroupExampleInput2" placeholder="">
                </div>
                <br>
                <td>
                    <a href="<?php echo base_url('Thl/thl')?>"><button class="btn btn-primary btn-">Back<i
                    class="fa fa-arrow-circle-left">
                </i></button></a>
                <button type="submit" class="btn btn-danger btn-"><i class="fa fa-arrow-circle-right"></i>Submit</button>
                </td>
                </form>
            </main>
        </div>
    </div>
</div>