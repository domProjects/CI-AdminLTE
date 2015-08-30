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
                        <div class="col-md-6">
                             <div class="box">
                                <div class="box-header with-border">
                                    <h3 class="box-title">xxxx</h3>
                                </div>
                                <div class="box-body">
                                    <table class="table table-striped table-hover">
                                        <tbody>
<?php foreach ($user_info as $user):?>
                                            <tr>
                                                <th><?php echo lang('users_ip_address'); ?></th>
                                                <td><?php echo $user->ip_address; ?></td>
                                            </tr>
                                            <tr>
                                                <th><?php echo lang('users_firstname'); ?></th>
                                                <td><?php echo htmlspecialchars($user->first_name, ENT_QUOTES, 'UTF-8'); ?></td>
                                            </tr>
                                            <tr>
                                                <th><?php echo lang('users_lastname'); ?></th>
                                                <td><?php echo htmlspecialchars($user->last_name, ENT_QUOTES, 'UTF-8'); ?></td>
                                            </tr>
                                            <tr>
                                                <th><?php echo lang('users_username'); ?></th>
                                                <td><?php echo htmlspecialchars($user->username, ENT_QUOTES, 'UTF-8'); ?></td>
                                            </tr>
                                            <tr>
                                                <th><?php echo lang('users_email'); ?></th>
                                                <td><?php echo htmlspecialchars($user->email, ENT_QUOTES, 'UTF-8'); ?></td>
                                            </tr>
                                            <tr>
                                                <th><?php echo lang('users_created_on'); ?></th>
                                                <td><?php echo date('d-m-Y', $user->created_on); ?></td>
                                            </tr>
                                            <tr>
                                                <th><?php echo lang('users_last_login'); ?></th>
                                                <td><?php echo ( ! empty($user->last_login)) ? date('d-m-Y', $user->last_login) : NULL; ?></td>
                                            </tr>
                                            <tr>
                                                <th><?php echo lang('users_status'); ?></th>
                                                <td><?php echo ($user->active) ? '<span class="label label-success">'.lang('users_active').'</span>' : '<span class="label label-default">'.lang('users_inactive').'</span>'; ?></td>
                                            </tr>
                                            <tr>
                                                <th><?php echo lang('users_company'); ?></th>
                                                <td><?php echo htmlspecialchars($user->company, ENT_QUOTES, 'UTF-8'); ?></td>
                                            </tr>
                                            <tr>
                                                <th><?php echo lang('users_phone'); ?></th>
                                                <td><?php echo $user->phone; ?></td>
                                            </tr>
                                            <tr>
                                                <th><?php echo lang('users_groups'); ?></th>
                                                <td>
<?php foreach ($user->groups as $group):?>
                                                    <?php echo '<span class="label label-primary">'.htmlspecialchars($group->name, ENT_QUOTES, 'UTF-8').'</span>'; ?>
<?php endforeach?>
                                                </td>
                                            </tr>
<?php endforeach;?>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                         </div>

                        <div class="col-md-6">
                             <div class="box">
                                <div class="box-header with-border">
                                    <h3 class="box-title">xxxx</h3>
                                </div>
                                <div class="box-body">

                                    <div id="map" style="height:408px;"></div>

<?php
$ipgeo = $this->ip2geolocation->get('84.97.101.146');
foreach ($ipgeo as $k => $value)
{
    $latitude  = $value['latitude'];
    $longitude = $value['longitude'];
}
?>

<script>
    function initMap() {
        var cairo = {lat: <?php echo $latitude; ?>, lng: <?php echo $longitude; ?>};

        var map = new google.maps.Map(document.getElementById('map'), {
            scaleControl: true,
            center: cairo,
            zoom: 13,
            mapTypeControl: true,
            mapTypeControlOptions: {
                style: google.maps.MapTypeControlStyle.HORIZONTAL_BAR,
                position: google.maps.ControlPosition.TOP_CENTER
            },
            zoomControl: true,
            zoomControlOptions: {
                style: google.maps.ZoomControlStyle.LARGE,
                position: google.maps.ControlPosition.LEFT_CENTER
            },
            scaleControl: true,
            streetViewControl: true,
            streetViewControlOptions: {
                position: google.maps.ControlPosition.LEFT_TOP
            }
        });

        var infowindow = new google.maps.InfoWindow;
        infowindow.setContent('azerty');

        var marker = new google.maps.Marker({map: map, position: cairo});
        marker.addListener('click', function() {
            infowindow.open(map, marker);
        });
    }
</script>

                                </div>
                            </div>
                        </div>
                    </div>
                </section>
            </div>
