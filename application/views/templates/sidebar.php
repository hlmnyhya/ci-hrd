            <!-- Sidebar  -->
            <nav id="sidebar">
                <div class="sidebar_blog_1">
                    <div class="sidebar-header">
                        <div class="logo_section">
                            <a href="index.html"><img class="logo_icon img-responsive"
                                    src="<?php echo base_url();?>assets/images/CA BARU.png" alt="#" /></a>
                        </div>
                    </div>
                    <div class="sidebar_user_info">
                        <div class="icon_setting"></div>
                        <div class="user_profle_side">
                            <div class="user_img"><img class="img-responsive"
                                    src="<?php echo base_url();?>assets/images/CA BARU.png" alt="#" />
                            </div>
                            <div class="user_info">
                                <h6>admin</h6>
                                <p><span class="online_animation"></span> Online</p>
                            </div>
                        </div>
                    </div>
                </div>
             
                    
                
<!-- sidebar -->
<div class="sidebar_blog_2">
    <ul class="list-unstyled components">

        <!-- QUERY user_menu JOIN user_access menu -->
        <?php
        $role_id = $this->session->userdata['role_id'];
        $queryMenu =    "SELECT `user_menu`.`id`,`menu`,`icon`,`url`
                        FROM `user_menu` JOIN `user_access_menu`
                        ON `user_menu`.`id` = `user_access_menu`.`menu_id`
                        WHERE `user_access_menu`.`role_id` = $role_id
                        ORDER BY `user_access_menu`.`menu_id` ASC
                        ";
        $menu = $this->db->query($queryMenu)->result_array();
        ?>

        <!-- LOOPING MENU -->
        <?php foreach ($menu as $m) : ?>
            <?php
            $menuId = $m['id'];
            $querySubMenu = "SELECT `user_sub_menu`.`id`,`submenu`,`user_sub_menu`.`icon`,`user_sub_menu`.`url` FROM `user_sub_menu` JOIN `user_menu`
                                ON `user_sub_menu`.`menu_id` = `user_menu`.`id`
                                WHERE `user_sub_menu`.`menu_id` = $menuId
                                AND `user_sub_menu`.`is_active` = 1
                                ";
            $subMenu = $this->db->query($querySubMenu)->result_array();
            ?>

            <?php if (count($subMenu) > 0) : ?>
                <li>
                    <a data-toggle="collapse" href="#menu<?= $m['id'] ?>">
                        <i class="<?= $m['icon'] ?>"></i>
                        <span><?= $m['menu'] ?></span> <span>></span>
                    </a>
                    <ul class="collapse list-unstyled" id="menu<?= $m['id'] ?>">
                        <!-- LOOPING SUB MENU -->
                        <?php foreach ($subMenu as $sm) : ?>
                            <li>
                                <a href="<?= base_url($sm['url']) ?>">
                                    <span> > </span>
                                    <span><?= $sm['submenu'] ?></span>
                                </a>
                            </li>
                        <?php endforeach; ?>
                    </ul>
                </li>
            <?php else : ?>
                <li>
                    <a href="<?= base_url($m['url']) ?>">
                        <i class="<?= $m['icon'] ?>"></i>
                        <span><?= $m['menu'] ?></span>
                    </a>
                </li>
            <?php endif; ?>

            <!-- LOOPING DIVIDER HR -->
            <hr class="sidebar-divider mt-3">
        <?php endforeach; ?>
    </ul>
</div>
<!-- end sidebar -->
</div>
            </div>
                <!-- end of sidebar -->
            <!-- right content -->
            <div id="content">
                <!-- topbar -->
                <div class="topbar">
                    <nav class="navbar navbar-expand-lg navbar-light">
                        <div class="full">
                            <div class="right_topbar">
                                <div class="icon_info">
                                    <ul class="user_profile_dd">
                                        <li>
                                            <a class="dropdown-toggle" data-toggle="dropdown"><img
                                                    class="img-responsive rounded-circle"
                                                    src="<?php echo base_url();?>assets/images/CA BARU.png"
                                                    alt="#" /><span class="name_user"> <?php echo $this->session->userdata('username'); ?></a>
                                            <div class="dropdown-menu">
                                                <!-- <a class="dropdown-item" href="<?php echo base_url('myprofile');?>">My
                                                    Profile</a>
                                                <a class="dropdown-item"
                                                    href="<?php echo base_url('settings');?>">Settings</a>
                                                <a class="dropdown-item" href="<?php echo base_url('help');?>">Help</a> -->
                                                <a class="dropdown-item"
                                                    href="<?php echo base_url('auth/logout');?>"><span>Log Out</span> <i
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