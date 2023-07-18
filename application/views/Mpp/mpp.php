<div class="midde_cont">
    <div class="container-fluid">
        <div class="row column_title">
            <div class="col-lg-12">
                <div class="page_title">
                    <h2>LIST DATA MPP</h2>
                </div>
            </div>
        </div>
        <div class="row column1">
            <div class="col-md-12"></div>
            <div class="col-md-12">
                <div class="white_shd full margin_bottom_30">
                    <div class="full graph_head">
                        <div class="heading1 margin_0">
                            <h2>DATA MPP</h2>
                            <!-- <td><a href="<?php echo base_url('Mpp/mpp/tambah')?>"><button
                                        class="btn btn-primary"><i class="fa fa-plus"> Tambah
                                            Data</i></button></a></td> -->
                        </div>
                    </div>
                    <div class="table_section padding_infor_info">
                        <div class="table-responsive-sm">
                            <table id="mpp" class="display" style="width:100%">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>Unit</th>
                                        <th>Posisi</th>
                                        <th>Total</th>
                                        <th>Total Karyawan</th>
                                        <th>Vacant</th>
                                        <th>Keterangan</th>
                                        <!-- <th>Aksi</th> -->
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php $no=1; foreach($mpp as $m) : ?>
                                    <tr>
                                        <td><?php echo $no++ ?></td>
                                        <td><?php echo $m->unit?></td>
                                        <td><?php echo $m->posisi?></td>
                                        <td><?php echo $m->total?></td>
                                        <td><?php echo $m->total_karyawan?></td>
                                        <td><?php echo $m->vacant?></td>
                                        <td><?php echo $m->keterangan?></td>
                                            <!-- <td>
                                    <a href="<?php echo base_url('mpp/mpp/edit/'.$m-> id_mpp)?>"
                                        class="btn icon btn-warning"><i class="fa fa-edit"></i></a>
                                    <a href="<?php echo base_url('mpp/mpp/delete/'.$m-> id_mpp)?>"
                                        class="btn icon btn-danger"><i class="fa fa-trash"></i></a>
                                 
                                </td> -->
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