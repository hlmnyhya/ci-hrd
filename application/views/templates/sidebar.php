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
                
                        <!--Area Menu Dinamis -->
                <?php
                $userg = $this->session->userdata('usergroup');
                $menu = $this->mmenu->getMenu($userg);
                
                foreach ($menu as $menus) {
                    $a = $menus['id_menu'];
                    $submenu = $this->mmenu->SubMenu($a);
                    echo "<li class='";
                    if ($judul1 == $menus['menu']) {
                        echo 'active';
                    }
                    echo "'><a href='#'><i class='" .
                        $menus['icon'] .
                        " fa-fw'></i>" .
                        $menus['menu'] .
                        " <span class='fa arrow'></span></a>";

                    echo "<ul class='nav nav-second-level collapse'>";
                    foreach ($submenu as $submenus) {
                        echo "<li class='";
                        if ($judul == $submenus['sub_menu']) {
                            echo 'active';
                        }
                        echo "'><a href='" . base_url($submenus['url']) . "'>";
                        echo "<i class='" .
                            $submenus['icon'] .
                            " fa-fw'></i>" .
                            $submenus['sub_menu'] .
                            '</a></li>';
                    }
                    echo '</ul></li>';
                }
                ?>
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