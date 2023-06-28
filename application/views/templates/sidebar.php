            <!-- Sidebar  -->
            <nav id="sidebar">
                <div class="sidebar_blog_1">
                    <div class="sidebar-header">
                        <div class="logo_section">
                            <a href="index.html"><img class="logo_icon img-responsive"
                                    src="<?php echo base_url();?>assets/images/logo/logo_icon.png" alt="#" /></a>
                        </div>
                    </div>
                    <div class="sidebar_user_info">
                        <div class="icon_setting"></div>
                        <div class="user_profle_side">
                            <div class="user_img"><img class="img-responsive"
                                    src="<?php echo base_url();?>assets/images/layout_img/sicartha.png" alt="#" />
                            </div>
                            <div class="user_info">
                                <h6>admin</h6>
                                <p><span class="online_animation"></span> Online</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="sidebar_blog_2">
                    <ul class="list-unstyled components">
                        <li><a href="<?php echo base_url('dashboard')?>"><i class="fa fa-dashboard yellow_color"></i>
                                <span>Dashboard</span></a>
                        </li>
                        <!-- <li>
                            <a href="#element12" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle"><i
                                    class="fa fa-bars  purple_color"></i> <span>Master Data</span></a>
                            <ul class="collapse list-unstyled" id="element12">
                                <li><a href="<?php echo base_url('Menu/menu')?>">> <span>Menu</span></a></li>
                                <li><a href="<?php echo base_url('Menu/submenu')?>">> <span>Sub Menu</span></a></li>
                                <li><a href="<?php echo base_url('Menu/user')?>">> <span>User</span></a></li>
                                <li><a href="<?php echo base_url('Menu/usergroup')?>">> <span>User Group</span></a></li>
                            </ul>
                        </li> -->
                        <li><a href="<?php echo base_url('mpp/mpp')?>"><i class="fa fa-search blue2_color"></i>
                                <span>MPP</span></a>
                        </li>
                        <li><a href="<?php echo base_url('Thl/thl')?>"><i class="fa fa-exchange yellow_color"></i>
                                <span>THL</span></a>
                        </li>
                        <li>
                            <a href="#element" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle"><i
                                    class="fa fa-user purple_color"></i> <span>Data Karyawan</span></a>
                            <ul class="collapse list-unstyled" id="element">
                                <li><a href="<?php echo base_url('DataKaryawan/pribadi')?>">> <span>Pribadi</span></a>
                                </li>
                                <li><a href="<?php echo base_url('DataKaryawan/karyawan')?>">> <span>Karyawan</span></a>
                                </li>
                            </ul>
                        </li>
                        <li class="active">
                            <a href="#additional_page" data-toggle="collapse" aria-expanded="false"
                                class="dropdown-toggle"><i class="fa fa-area-chart yellow_color"></i> <span>Riwayat
                                    Golongan</span></a>
                            <ul class="collapse list-unstyled" id="additional_page">
                                <li>
                                    <a href="<?php echo base_url('RiwayatGolongan/trackrecord')?>">> <span>Track Record
                                            Golongan</span></a>
                                </li>
                                <li>
                                    <a href="<?php echo base_url('RiwayatGolongan/datagolongan')?>">> <span>Data
                                            Golongan</span></a>
                                </li>
                            </ul>
                        </li>
                        <li>
                            <a href="#apps" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle"><i
                                    class="fa fa-briefcase blue2_color"></i> <span>Riwayat Jabatan</span></a>
                            <ul class="collapse list-unstyled" id="apps">
                                <!-- <li><a href="<?php echo base_url('trackrecordjabatan')?>">> <span>Track Ricord Jabatan By Name</span></a></li> -->
                                <li>
                                    <a href="<?php echo base_url('RiwayatJabatan/datajabatan')?>">> <span>
                                            Data Jabatan
                                        </span></a>
                                </li>
                                <li>
                                    <a href="<?php echo base_url('RiwayatJabatan/trackrecordjabatan')?>">> <span>Track
                                            Record Jabatan
                                        </span></a>
                                </li>
                                <li>
                                    <a href="<?php echo base_url('RiwayatJabatan/datamutasi')?>">> <span>Data Mutasi
                                            Kerja</span></a>
                                </li>
                            </ul>
                        </li>
                        <li>
                            <a href="#apps1" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle"><i
                                    class="fa fa-users purple_color"></i> <span>Data Pelamar</span></a>
                            <ul class="collapse list-unstyled" id="apps1">
                                <li><a href="<?php echo base_url('DataPelamar/datapelamar')?>">> <span>Data </span></a>
                                </li>
                            </ul>
                        </li>
                        <!-- <li>
                            <a href="#element13" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle"><i
                                    class="fa fa-gear"></i> <span>Menu Rules</span></a>
                            <ul class="collapse list-unstyled" id="element13">
                                <li><a href="<?php echo base_url('Rules/menuakses')?>">> <span>Menu Akses</span></a>
                                </li>
                            </ul>
                        </li> -->
                    </ul>
                </div>
            </nav>
            <!-- end sidebar -->
            <!-- right content -->
            <div id="content">
                <!-- topbar -->
                <div class="topbar">
                    <nav class="navbar navbar-expand-lg navbar-light">
                        <div class="full">
                            <button type="button" id="sidebarCollapse" class="sidebar_toggle"><i
                                    class="fa fa-bars"></i></button>
                            <div class="logo_section">
                                <a href="index.html"><img class="img-responsive" />PT CANDI ARTHA</a>
                            </div>
                            <div class="right_topbar">
                                <div class="icon_info">
                                    <ul class="user_profile_dd">
                                        <li>
                                            <a class="dropdown-toggle" data-toggle="dropdown"><img
                                                    class="img-responsive rounded-circle"
                                                    src="<?php echo base_url();?>assets/images/layout_img/sicartha.png"
                                                    alt="#" /><span class="name_user">Admin</a>
                                            <div class="dropdown-menu">
                                                <a class="dropdown-item" href="<?php echo base_url('myprofile');?>">My
                                                    Profile</a>
                                                <a class="dropdown-item"
                                                    href="<?php echo base_url('settings');?>">Settings</a>
                                                <a class="dropdown-item" href="<?php echo base_url('help');?>">Help</a>
                                                <a class="dropdown-item"
                                                    href="<?php echo base_url('login');?>"><span>Log Out</span> <i
                                                        class="fa fa-sign-out"></i></a>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </nav>
                </div>
                <!-- end topbar -->