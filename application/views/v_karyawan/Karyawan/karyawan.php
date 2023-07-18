<div class="midde_cont">
    <div class="container-fluid">
        <div class="row column_title">
            <div class="col-lg-12">
                <div class="page_title">
                    <h2>LIST DATA KARYAWAN</h2>
                </div>
            </div>
        </div>
        <div class="row column1">
            <div class="col-md-12"></div>
            <div class="col-md-12">
                <div class="white_shd full margin_bottom_30">
                    <div class="full graph_head">
                        <div class="heading1 margin_0">
                            <h2>DATA KARYAWAN</h2>
                            <td><a href="<?php echo base_url('DataKaryawan/karyawan/tambah')?>"><button
                                        class="btn btn-primary btn-xs"><i class="fa fa-plus"> Tambah
                                            Data</i></button></a></td>
                        </div>
                    </div>
                    <div class="table_section padding_infor_info">
                        <div class="table-responsive-sm">
                            <table class="table table-hover data">
                                <thead>
                                    <tr>
                                        <th>Alamat KTP</th>
                                        <th>Alamat Domisili</th>
                                        <th>Agama</th>
                                        <th>Jenis Kelamin</th>
                                        <th>Pendidikan</th>
                                        <th>Tanggal Lahir</th>
                                        <th>Usia</th>
                                        <th>Tanggal Masuk</th>
                                        <th>Masa Kerja</th>
                                        <th>Divisi</th>
                                        <th>Jabatan</th>
                                        <th>Status Karyawan Terakhir</th>
                                        <th>Golongan</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>John</td>
                                        <td>Doe</td>
                                        <td>john@example.com</td>
                                        <td>A</td>
                                        <td>d</td>
                                        <td>d</td>
                                        <td>d</td>
                                        <td>d</td>
                                        <td>d</td>
                                        <td>d</td>
                                        <td>d</td>
                                        <td>d</td>
                                        <td>d</td>
                                        <td><a href="<?php echo base_url('DataKaryawan/detailkaryawan')?>"><button
                                                    class="btn btn-primary btn-sm"><i class="fa fa-eye">
                                                        Detail</i></button></a>
                                            <a href="<?php echo base_url('DataKaryawan/profil')?>"><button
                                                    class="btn btn-danger btn-sm"><i class="fa fa-trash-o">
                                                        Hapus
                                                    </i></button></a>
                                            <a href="<?php echo base_url('DataKaryawan/editdatakaryawan')?>"><button
                                                    class="btn btn-warning btn-sm"><i class="fa fa-cogs">
                                                        Edit
                                                    </i></button></a>
                                        </td>
                                    </tr>
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