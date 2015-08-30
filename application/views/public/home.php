<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>

<h1>Home</h1>

<?php if ($admin_link): ?>
<p><a href="<?php echo site_url('admin'); ?>">Admin</a></p>
<?php endif; ?>

<?php if ($logout_link): ?>
<p><a href="<?php echo site_url('auth/logout/public'); ?>">Logout</a></p>
<?php else: ?>
<p><a href="<?php echo site_url('auth/login'); ?>">Login</a></p>
<?php endif; ?>
