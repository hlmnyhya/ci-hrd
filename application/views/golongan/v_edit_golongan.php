<div class="midde_cont">
    <div class="container-fluid">
        <div class="row column_title">
            <div class="col-md-12">
                <div class="page_title">
                    <h2>UBAH DATA GOLONGAN</h2>
                </div>
            </div>
        </div>

            
        
        <div id="layoutSidenav_content">
            <main>
                <form action="<?php echo base_url('golongan/editGolongan_proses/'.$golongan['id_golongan']); ?>" method="post" role="form">
                
                <input type="hidden" name="id_golongan" value="<?= $golongan['id_golongan'] ?>">
                <div class="form-group">
                    <label for="formGroupExampleInput2">Golongan</label>
                    <input type="text" class="form-control col-md-6" name="golongan" id="formGroupExampleInput2" placeholder="" value="<?= $golongan['golongan'] ?>">
                </div>

                <br>
                <button class="btn btn-primary" type="submit"><i class="fa fa-arrow-circle-right"></i> Simpan</button>
            </form>
            <a href="<?php echo base_url('golongan')?>"><button class="btn btn-danger btn-"><i
                class="fa fa-arrow-circle-left">
            </i> Back</button></a>
            </main>
        </div>
        </div>