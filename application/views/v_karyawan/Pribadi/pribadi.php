<!-- end topbar -->
<!-- dashboard inner -->
<div class="midde_cont">
    <div class="container-fluid">
        <div class="row column_title">
            <div class="col-md-12">
                <div class="page_title">
                    <h2>DATA PRIBADI</h2>
                </div>
            </div>
        </div>
        <!-- row -->
        <div class="row column1">
            <div class="col-md-12">
                <div class="white_shd full margin_bottom_30">
                    <div class="full graph_head">
                        <div class="heading1 margin_0">
                            <h2>LIST DATA PRIBADI</h2>
                            <td><a href="<?php echo base_url('DataKaryawan/pribadi/tambah_data_pribadi')?>" class="btn icon btn-primary"><i class="fa fa-plus"> Tambah Data</i></a></td>
                        </div>
                    </div>
                    <div class="full price_table padding_infor_info">
                        <div class="row">
                            <!-- column contact -->
                            <div class="col-lg-5 col-md-6 col-sm-6 col-xs-12 profile_details margin_bottom_30">
                                <?php foreach ($pribadi as $p) : ?>
                                <main>
                                    <div class="contact_blog">
                                        <div class="contact_inner">
                                            <div class="left">
                                                <h4><?php echo $p->nama?></h4>
                                                <p><strong>Alamat: </strong><?php echo $p->alamat_ktp?></p>
                                                <ul class="list-unstyled">
                                                    <li>Jenis Kelamin : <?php echo $p->jenis_kelamin?></li>
                                                    <li>Pendidikan : <?php echo $p->pendidikan?></li>
                                                </ul>
                                            </div>
                                            <div class="bottom_list">
                                                <div class="right_button">
                                                <td><a href="<?php echo base_url('DataKaryawan/Pribadi/detail/'.$p->id_karyawan_pribadi)?>"
                                                                class="btn icon btn-primary"><i class="fa fa-user"></i>
                                                                    Detail</a>
                                                    <a href="<?php echo base_url('DataKaryawan/Pribadi/edit/'.$p->id_karyawan_pribadi)?>"
                                                                class="btn icon btn-warning"><i class="fa fa-edit"></i>
                                                                    Edit</a>
                                                    <a href="<?php echo base_url('DataKaryawan/Pribadi/delete_data/'.$p->id_karyawan_pribadi)?>"
                                                                class="btn icon btn-danger"><i class="fa fa-trash"></i>
                                                                    Hapus</a>
                                                    </td>
                                                </div>  
                                            </div>
                                        </div>
                                    </main>
                                    <?php endforeach; ?>
                            </div>
                        </div>