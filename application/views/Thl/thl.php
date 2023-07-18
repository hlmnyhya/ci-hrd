<div class="midde_cont">
    <div class="container-fluid">
        <div class="row column_title">
            <div class="col-lg-12">
                <div class="page_title">
                    <h2>THL</h2>
                </div>
            </div>
        </div>
        <div class="row column1">
            <div class="col-md-12"></div>
            <div class="col-md-12">
            <?php if ($this->session->flashdata('message')): ?>
            <?= $this->session->flashdata('message') ?>
            <?php endif; ?>
                <div class="white_shd full margin_bottom_30">
                    <div class="full graph_head">
                        <div class="heading1 margin_0">
                            <h2>DATA THL</h2>
                            <td>
                                <a href="<?php echo base_url('Thl/thl/tambah_data')?>" class="btn icon btn-primary">
                                    <i class="fa fa-plus"></i> Tambah Data
                                </a>
                            </td>
                        </div>
                    </div>
                    <div class="table_section padding_infor_info">
                        <div class="table-responsive-sm">
                            <table class="table table-hover data">
                                <thead>
                                    <tr>
                                        <th>NO</th>
                                        <th>NAMA</th>
                                        <th>NIK</th>
                                        <th>DIVISI</th>
                                        <th>JABATAN</th>
                                        <th>TANGGAL MASUK</th>
                                        <th>TANGGAL KELUAR</th>
                                        <th>KETERANGAN</th>
                                        <th>STATUS</th>
                                        <th>Aksi</th>
                                    </tr>
                                </thead>
                               <tbody>
                                    <?php $no=1; foreach($thl as $t) : ?>
                                        <tr>
                                            <td><?php echo $no++ ?></td>
                                            <td><?php echo $t->nama?></td>
                                            <td><?php echo $t->nik?></td>
                                            <td><?php echo $t->divisi?></td>
                                            <td><?php echo $t->jabatan?></td>
                                            <td><?php echo $t->tanggal_masuk?></td>
                                            <td><?php echo $t->tanggal_keluar?></td>
                                            <td style="word-wrap: break-word;"><?php echo $t->keterangan?></td>
                                            <td><?php echo $t->status?></td>
                                            <td>
                                            <a href="<?php echo base_url('thl/thl/edit/'.$t-> id_thl)?>"
                                            class="btn icon btn-warning"><i class="fa fa-edit"></i></a>
                                            <a href="<?php echo base_url('thl/thl/delete/'.$t-> id_thl)?>"
                                            class="btn icon btn-danger"><i class="fa fa-trash"></i></a>
                                            </td>
                                        </tr>
                                    <?php endforeach; ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- end topbar -->
<!-- dashboard inner -->