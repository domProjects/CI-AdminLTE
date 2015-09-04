<?php
defined('BASEPATH') OR exit('No direct script access allowed');

?>
            <header class="main-header">
                <a href="<?php echo site_url('admin/dashboard'); ?>" class="logo">
                    <span class="logo-mini"><b>A</b><?php echo $title_mini; ?></span>
                    <span class="logo-lg"><b>Admin</b><?php echo $title_lg; ?></span>
                </a>

                <nav class="navbar navbar-static-top" role="navigation">
                    <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </a>

                    <div class="navbar-custom-menu">
                        <ul class="nav navbar-nav">
<?php if ($admin_prefs['messages_menu'] == TRUE): ?>
                            <!-- Messages -->
                            <li class="dropdown messages-menu">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                    <i class="fa fa-envelope-o"></i>
                                    <span class="label label-success">0</span>
                                </a>
                                <ul class="dropdown-menu">
                                    <li class="header"><?php echo lang('header_you_have'); ?> 0 <?php echo lang('header_message'); ?></li>
                                    <li>
                                        <ul class="menu">
                                            <li><!-- start message -->
                                                <a href="#">
                                                    <div class="pull-left">
                                                        <img src="<?php echo base_url($avatar_dir . '/m_002.png'); ?>" class="img-circle" alt="User Image">
                                                    </div>
                                                    <h4>Support Team<small><i class="fa fa-clock-o"></i> 5 mins</small></h4>
                                                    <p>Why not buy a new awesome theme?</p>
                                                </a>
                                            </li><!-- end message -->
                                        </ul>
                                    </li>
                                    <li class="footer"><a href="#"><?php echo lang('header_view_all'); ?></a></li>
                                </ul>
                            </li>

<?php endif; ?>

<?php echo $header_alert_file_install; ?>

<?php if ($admin_prefs['notifications_menu'] == TRUE): ?>
                            <!-- Notifications -->
                            <li class="dropdown notifications-menu">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                    <i class="fa fa-bell-o"></i>
                                    <span class="label label-warning">0</span>
                                </a>
                                <ul class="dropdown-menu">
                                    <li class="header"><?php echo lang('header_you_have'); ?> 0 <?php echo lang('header_notification'); ?></li>
                                    <li>
                                        <ul class="menu">
                                            <li><!-- start notification -->
                                                <a href="#"><i class="fa fa-users text-aqua"></i> 5 new members joined today</a>
                                            </li><!-- end notification -->
                                        </ul>
                                    </li>
                                    <li class="footer"><a href="#"><?php echo lang('header_view_all'); ?></a></li>
                                </ul>
                            </li>

<?php endif; ?>
<?php if ($admin_prefs['tasks_menu'] == TRUE): ?>
                            <!-- Tasks -->
                            <li class="dropdown tasks-menu">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                    <i class="fa fa-flag-o"></i>
                                    <span class="label label-danger">0</span>
                                </a>
                                <ul class="dropdown-menu">
                                    <li class="header"><?php echo lang('header_you_have'); ?> 0 <?php echo lang('header_task'); ?></li>
                                    <li>
                                        <ul class="menu">
                                            <li><!-- start task -->
                                                <a href="#">
                                                    <h3>Design some buttons<small class="pull-right">20%</small></h3>
                                                    <div class="progress xs">
                                                        <div class="progress-bar progress-bar-aqua" style="width: 20%" role="progressbar" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100">
                                                            <span class="sr-only">20% <?php echo lang('header_complete'); ?></span>
                                                        </div>
                                                    </div>
                                                </a>
                                            </li><!-- end task -->
                                        </ul>
                                    </li>
                                    <li class="footer"><a href="#"><?php echo lang('header_view_all'); ?></a></li>
                                </ul>
                            </li>

<?php endif; ?>
<?php if ($admin_prefs['user_menu'] == TRUE): ?>
                            <!-- User Account -->
                            <li class="dropdown user user-menu">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                    <img src="<?php echo base_url($avatar_dir . '/m_001.png'); ?>" class="user-image" alt="User Image">
                                    <span class="hidden-xs"><?php echo $user_login['username']; ?></span>
                                </a>
                                <ul class="dropdown-menu">
                                    <li class="user-header">
                                        <img src="<?php echo base_url($avatar_dir . '/m_001.png'); ?>" class="img-circle" alt="User Image">
                                        <p><?php echo $user_login['firstname'].$user_login['lastname']; ?><small><?php echo lang('header_member_since'); ?> <?php echo date('d-m-Y', $user_login['created_on']); ?></small></p>
                                    </li>
                                    <li class="user-body">
                                        <div class="row">
                                            <div class="col-xs-4 text-center">
                                                <a href="#"><?php echo lang('header_followers'); ?></a>
                                            </div>
                                            <div class="col-xs-4 text-center">
                                                <a href="#"><?php echo lang('header_sales'); ?></a>
                                            </div>
                                            <div class="col-xs-4 text-center">
                                                <a href="#"><?php echo lang('header_friends'); ?></a>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="user-footer">
                                        <div class="pull-left">
                                            <a href="<?php echo site_url('admin/users/profile/'.$user_login['id']); ?>" class="btn btn-default btn-flat"><?php echo lang('header_profile'); ?></a>
                                        </div>
                                        <div class="pull-right">
                                            <a href="<?php echo site_url('auth/logout/admin'); ?>" class="btn btn-default btn-flat"><?php echo lang('header_sign_out'); ?></a>
                                        </div>
                                    </li>
                                </ul>
                            </li>

<?php endif; ?>
<?php if ($admin_prefs['ctrl_sidebar'] == TRUE): ?>
                            <!-- Control Sidebar Toggle Button -->
                            <li><a href="#" data-toggle="control-sidebar"><i class="fa fa-gears"></i></a></li>
<?php endif; ?>
                        </ul>
                    </div>
                </nav>
            </header>
