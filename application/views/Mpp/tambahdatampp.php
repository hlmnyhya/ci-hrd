<div class="midde_cont">
    <div class="container-fluid">
        <div class="row column_title">
            <div class="col-md-12">
                <div class="page_title">
                    <h2>TAMBAH DATA MPP</h2>
                </div>
            </div>
        </div>

            
        
        <div id="layoutSidenav_content">
            <main>
                <form action="<?php echo base_url('mpp/mpp/create'); ?>" method="post" role="form">
                
                <div class="form-group">
                    <label for="formGroupExampleInput2">Unit</label>
                    <input type="hidden" class="form-control col-md-6" name="id_mpp" id="formGroupExampleInput2" placeholder="">
                    <input type="text" class="form-control col-md-6" name="unit" id="formGroupExampleInput2" placeholder="">
                </div>
                <div class="form-group">
                    <label for="formGroupExampleInput2">Posisi</label>
                    <input type="text" class="form-control col-md-6" name="posisi" id="formGroupExampleInput2" placeholder="">
                </div>
                <div class="form-group">
                    <label for="formGroupExampleInput2">Total</label>
                    <input type="text" class="form-control col-md-6" name="total" id="formGroupExampleInput2" placeholder="">
                </div>
                <div class="form-group">
                    <label for="formGroupExampleInput2">Total Karyawan</label>
                    <input type="text" class="form-control col-md-6" name="total_karyawan" id="formGroupExampleInput2" placeholder="">
                </div>
                <div class="form-group">
                    <label for="formGroupExampleInput2">Vacant</label>
                    <input type="text" class="form-control col-md-6" name="vacant" id="formGroupExampleInput2" placeholder="">
                </div>
                <div class="form-group">
                    <label for="formGroupExampleInput2">Keterangan</label>
                    <input type="text" class="form-control col-md-6" name="keterangan" id="formGroupExampleInput2" placeholder="">
                </div>
                <br>
                <button class="btn btn-primary" type="submit"><i class="fa fa-arrow-circle-right"></i> Simpan</button>
            </form>
            <a href="<?php echo base_url('Mpp/mpp')?>"><button class="btn btn-danger btn-"><i
                class="fa fa-arrow-circle-left">
            </i> Back</button></a>
            </main>
        </div>
        </div>