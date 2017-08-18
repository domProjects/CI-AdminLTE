<?php
defined('BASEPATH') OR exit('No direct script access allowed');

?>

            <div class="content-wrapper">
                <section class="content-header">
                    <?php echo $pagetitle; ?>
                    <?php echo $breadcrumb; ?>
                </section>

                <section class="content">
                    <div class="row">
                        <div class="col-md-3">
                             <div class="box box-primary">
                                <div class="box-body box-profile">
                                    <img class="profile-user-img img-responsive img-circle" src="/upload/avatar/<?=$user_info[0]->avatar;?>" alt="User profile picture">
                                    <h3 class="profile-username text-center">
                                        <?=$user_info[0]->first_name;?> <?=$user_info[0]->last_name;?>
                                    </h3>
                                    <p class="text-muted text-center"><?=$user_info[0]->username;?></p>
                                    <ul class="list-group list-group-unbordered">
                                        <?php foreach ($user_info as $user):?>
                                        <li class="list-group-item">
                                            <b><?php echo lang('users_ip_address'); ?></b>
                                            <a class="pull-right"><?php echo $user->ip_address; ?></a>
                                        </li>
                                        <li class="list-group-item">
                                            <b><?php echo lang('users_firstname'); ?></b>
                                            <a class="pull-right"><?php echo htmlspecialchars($user->first_name, ENT_QUOTES, 'UTF-8'); ?></a>
                                        </li>
                                        <li class="list-group-item">
                                            <b><?php echo lang('users_lastname'); ?></b>
                                            <a class="pull-right"><?php echo htmlspecialchars($user->last_name, ENT_QUOTES, 'UTF-8'); ?></a>
                                        </li>
                                        <li class="list-group-item">
                                            <b><?php echo lang('users_username'); ?></b>
                                            <a class="pull-right"><?php echo htmlspecialchars($user->username, ENT_QUOTES, 'UTF-8'); ?></a>
                                        </li>
                                        <li class="list-group-item">
                                            <b><?php echo lang('users_email'); ?></b>
                                            <a class="pull-right"><?php echo htmlspecialchars($user->email, ENT_QUOTES, 'UTF-8'); ?></a>
                                        </li>
                                        <li class="list-group-item">
                                            <b><?php echo lang('users_created_on'); ?></b>
                                            <a class="pull-right"><?php echo date('d-m-Y', $user->created_on); ?></a>
                                        </li>
                                        <li class="list-group-item">
                                            <b><?php echo lang('users_last_login'); ?></b>
                                            <a class="pull-right"><?php echo ( ! empty($user->last_login)) ? date('d-m-Y', $user->last_login) : NULL; ?></a>
                                        </li>
                                        <li class="list-group-item">
                                            <b><?php echo lang('users_status'); ?></b>
                                            <a class="pull-right"><?php echo ($user->active) ? '<span class="label label-success">'.lang('users_active').'</span>' : '<span class="label label-default">'.lang('users_inactive').'</span>'; ?></a>
                                        </li>
                                        <li class="list-group-item">
                                            <b><?php echo lang('users_company'); ?></b>
                                            <a class="pull-right"><?php echo htmlspecialchars($user->company, ENT_QUOTES, 'UTF-8'); ?></a>
                                        </li>
                                        <li class="list-group-item">
                                            <b><?php echo lang('users_phone'); ?></b>
                                            <a class="pull-right"><?php echo $user->phone; ?></a>
                                        </li>
                                        <li class="list-group-item">
                                            <b><?php echo lang('users_groups'); ?></b>
                                            <a class="pull-right">
                                                <?php foreach ($user->groups as $group):?>
                                                <?php echo '<span class="label" style="background:'.$group->bgcolor.'">'.htmlspecialchars($group->name, ENT_QUOTES, 'UTF-8').'</span>'; ?>
                                                <?php endforeach?>
                                            </a>
                                        </li>
                                        <?php endforeach;?>
                                    </ul>
                                </div>
                            </div>
                         </div>
                         <div class="col-md-9">
                             <div class="nav-tabs-custom">
                                 <ul class="nav nav-tabs">
                                     <li class="active"><a href="#settings" data-toggle="tab" aria-expanded="true"><?php echo lang('users_settings');?></a></li>
                                 </ul>
                                 <div class="tab-content">
                                     <div class="tab-pane active" id="settings">
                                         <?php echo $upload_message;?>

                                         <?php echo form_open_multipart(uri_string(), array('class' => 'form-horizontal', 'id' => 'form-edit_user')); ?>
                                         <div class="form-group">
                                             <?php echo lang('users_upload', 'userfile', array('class' => 'col-sm-2 control-label')); ?>
                                             <div class="col-sm-10">
                                                 <?php echo form_upload($userfile);?>
                                             </div>
                                         </div>

                                         <div class="form-group">
                                             <div class="col-sm-offset-2 col-sm-10">
                                                 <?php echo form_hidden('id', $user->id);?>
                                                 <div class="btn-group">
                                                     <?php echo form_button(array('type' => 'submit', 'class' => 'btn btn-primary btn-flat', 'content' => lang('actions_submit'))); ?>
                                                     <?php echo anchor('admin/users', lang('actions_cancel'), array('class' => 'btn btn-default btn-flat')); ?>
                                                 </div>
                                             </div>
                                         </div>
                                         <?php echo form_close();?>
                                     </div>
                                     <!-- /.tab-pane -->
                                 </div>
                                 <!-- /.tab-content -->
                             </div>
                             <!-- /.nav-tabs-custom -->
                         </div>
                    </div>
                </section>
            </div>
