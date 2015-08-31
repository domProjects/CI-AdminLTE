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
                        <div class="col-md-12">
                            <div class="nav-tabs-custom">
                                <ul class="nav nav-tabs">
                                    <li><?php echo anchor('admin/prefs/interfaces/admin', lang('menu_int_admin')); ?></li>
                                    <li class="active"><?php echo anchor('admin/prefs/interfaces/public', lang('menu_int_public')); ?></li>
                                </ul>
                                <div class="tab-content">
                                    <div class="tab-pane active" id="tab_public">
                                        <?php echo $message_public; ?>

                                        <?php echo form_open(current_url(), array('class' => 'form-horizontal', 'id' => 'form-interface_public')); ?>
<?php foreach ($public_pref_interface as $value): ?>
                                            <div class="form-group">
                                                <label class="col-sm-2 control-label"><?php echo lang('prefs_transition_page'); ?></label>
                                                <div class="col-sm-10">
                                                    <label class="radio-inline">
                                                        <input type="radio" name="transition_page" id="transition_page1" value="1" <?php echo set_value('transition_page', $value['transition_page']) == 1 ? 'checked' : NULL; ?>> <?php echo strtoupper(lang('actions_yes')); ?>
                                                    </label>
                                                    <label class="radio-inline">
                                                        <input type="radio" name="transition_page" id="transition_page0" value="0" <?php echo set_value('transition_page', $value['transition_page']) == 0 ? 'checked' : NULL; ?>> <?php echo strtoupper(lang('actions_no')); ?>
                                                    </label>
                                                </div>
                                            </div>
<?php endforeach; ?>
                                            <div class="form-group">
                                                <div class="col-sm-offset-2 col-sm-10">
                                                    <div class="btn-group">
                                                        <?php echo form_button(array('type' => 'submit', 'class' => 'btn btn-primary btn-flat', 'content' => lang('actions_submit'))); ?>
                                                        <?php echo anchor('admin/prefs/reset_interfaces_public', lang('actions_default_values'), array('class' => 'btn btn-danger btn-flat')); ?>
                                                    </div>
                                                </div>
                                            </div>
                                        <?php echo form_close();?>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
            </div>
