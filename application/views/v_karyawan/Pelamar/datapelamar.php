<div class="midde_cont">
    <div class="container-fluid">
        <div class="row column_title">
            <div class="col-md-12">
                <div class="page_title">
                    <h2>DATA PELAMAR</h2>
                </div>
            </div>
        </div>
        <!-- row -->
        <div class="row column1">
            <div class="col-md-12">
                <div class="white_shd full margin_bottom_30">
                    <div class="full graph_head">
                        <div class="heading1 margin_0">
                            <h2>LIST DATA PELAMAR</h2>
                            <td>
                                <a href="<?php echo base_url('DataPelamar/datapelamar/tambah_data_pelamar')?>" class="btn icon btn-primary">
                                    <i class="fa fa-plus"></i> Tambah Data
                                </a>
                            </td>
                        </div>
                    </div>
                    <div class="full price_table padding_infor_info">
                        <div class="row">    
                            <!-- column contact -->
                            <div class="col-lg-5 col-md-6 col-sm-6 col-xs-12 profile_details margin_bottom_30">
                                <?php foreach ($pelamar as $p) : ?>
                                    <main>
                                        <div class="contact_blog">
                                            <div class="contact_inner">
                                                <div class="left">
                                                    <h4><?php echo $p->nama?></h4>
                                                    <ul class="list-unstyled">
                                                        <li>Alamat : <?php echo $p->alamat?></li>
                                                        <li>Jenis Kelamin : <?php echo $p->jenis_kelamin?></li>
                                                        <li>No Telepon : <?php echo $p->no_telp?></li>
                                                        <li>Email : <?php echo $p->email?></li>
                                                        <li>File: <a href="<?= base_url('assets/uploads/pelamar/' . $p->file)?>"><button class="btn btn-primary"> <i class="fa fa-file"></i> Lihat File</button></a></li>
                                                    </ul>
                                                </div>
                                                <div class="bottom_list">
                                                    <div class="right_button">
                                                        <td>
                                                            <a href="<?php echo base_url('DataPelamar/datapelamar/detail/'.$p->id_pelamar)?>" class="btn icon btn-primary">
                                                                <i class="fa fa-user"></i> Detail
                                                            </a>
                                                            <a href="<?php echo base_url('DataPelamar/datapelamar/edit/'.$p->id_pelamar)?>" class="btn icon btn-warning">
                                                                <i class="fa fa-edit"></i> Edit Data Pelamar
                                                            </a>
                                                            <a href="<?php echo base_url('DataPelamar/datapelamar/delete/'.$p->id_pelamar)?>" class="btn icon btn-danger">
                                                                <i class="fa fa-trash"></i> Hapus
                                                            </a>
                                                        </td>
                                                    </div>  
                                                </div>
                                            </div>
                                        </div>
                                    </main>
                                <?php endforeach; ?>
                            </div>
                        </div>
            <div class="pagination">
            <ul class="pagination justify-content-center">
                <!-- <?php echo $pagination; ?> -->
                <li class="page-item <?php echo $this->uri->segment(4) == 1 ?>">
                    <a class="page-link btn btn-primary <?php echo $this->uri->segment(4) == 1 ?>" href="<?php echo base_url('DataPelamar/datapelamar/index/1'); ?>"><</a>
                </li>
                <?php foreach ($pelamar_with_pagination as $p) : ?>
                    <li class="page-item">
                        <a class="page-link btn btn-primary <?php echo $this->uri->segment(4) == $p->nomor_halaman?>" href="<?php echo base_url('DataPelamar/datapelamar/index/' . $p->nomor_halaman); ?>">
                            <?php echo $p->nomor_halaman; ?>
                        </a>
                    </li>
                <?php endforeach; ?>
            </li>
            <li class="page-item <?php echo $this->uri->segment(4) == count($pelamar_with_pagination) ? 'disabled' : ''; ?>">
                    <a class="page-link btn btn-primary <?php echo $this->uri->segment(4) == count($pelamar_with_pagination) ? 'disabled' :                  ''; ?>" href="<?php echo base_url('DataPelamar/datapelamar/index/' . count($pelamar_with_pagination)); ?>">></a>
                </li>
            </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

