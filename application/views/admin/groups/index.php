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
                             <div class="box">
                                <div class="box-header with-border">
                                    <h3 class="box-title"><?php echo anchor('admin/groups/create', '<i class="fa fa-plus"></i> '. lang('groups_create'), array('class' => 'btn btn-block btn-primary btn-flat')); ?></h3>
                                </div>
                                <div class="box-body">
                                    <table class="table table-striped table-hover">
                                        <thead>
                                            <tr>
                                                <th><?php echo lang('groups_name');?></th>
                                                <th><?php echo lang('groups_description');?></th>
                                                <th><?php echo lang('groups_color');?></th>
                                                <th><?php echo lang('groups_action');?></th>
                                            </tr>
                                        </thead>
                                        <tbody>
<?php foreach ($groups as $values):?>
                                            <tr>
                                                <td><?php echo htmlspecialchars($values->name, ENT_QUOTES, 'UTF-8'); ?></td>
                                                <td><?php echo htmlspecialchars($values->description, ENT_QUOTES, 'UTF-8'); ?></td>
                                                <td><i class="fa fa-stop" style="color:<?php echo $values->bgcolor; ?>"></i></td>
                                                <td><?php echo anchor("admin/groups/edit/".$values->id, lang('actions_edit')); ?></td>
                                            </tr>
<?php endforeach;?>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                         </div>
                    </div>
                </section>
            </div>
