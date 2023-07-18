<div class="midde_cont">
    <div class="container-fluid">
        <div class="row column_title">
            <div class="col-lg-12">
                <div class="page_title">
                    <h2>LIST DATA JABATAN</h2>
                </div>
            </div>
        </div>
        <div class="row column1">
            <div class="col-md-12"></div>
            <div class="col-md-12">
                <div class="white_shd full margin_bottom_30">
                    <div class="full graph_head">
                        <div class="heading1 margin_0">
                            <h2>DATA JABATAN</h2>
                            <td><a href="<?php echo base_url('jabatan/addJabatan')?>"><button
                                        class="btn btn-primary btn-xs"><i class="fa fa-plus"> Tambah
                                            Data</i></button></a></td>
                        </div>
                    </div>
                    <div class="table_section padding_infor_info">
                        <div class="table-responsive-sm">
                            <table id="jabatan" class="display" style="width:100%">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>Jabatan</th>
                                        <th>Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php $no=1; foreach($jabatan as $j) : ?>
                                    <tr>
                                        <td><?php echo $no++ ?></td>
                                        <td><?php echo $j->jabatan?></td>
                                        <td>
                                            <a href="<?php echo base_url('jabatan/editJabatan/'.$j-> id_jabatan)?>"
                                                class="btn icon btn-warning"><i class="fa fa-edit"></i></a>
                                            <a href="<?php echo base_url('jabatan/deleteJabatan/'.$j-> id_jabatan)?>"
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