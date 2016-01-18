<?php
defined('BASEPATH') OR exit('No direct script access allowed');

header('X-Powered-By: Prod-domProjects.com');
header('X-XSS-Protection: 1');
header('X-Frame-Options: SAMEORIGIN');
header('X-Content-Type-Options: nosniff');
header('Vary: Accept-Encoding');

?>
<!doctype html>
    <html lang="<?php echo $lang; ?>">
        <head prefix="og: http://ogp.me/ns#">
        <meta charset="<?php echo $charset; ?>">
        <title>HOME</title>
        <meta name="description" content="">
<?php if ($mobile === FALSE): ?>
        <!--[if IE 8]>
            <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <![endif]-->
<?php else: ?>
        <meta name="HandheldFriendly" content="true">
<?php endif; ?>
<?php if ($mobile == TRUE && $mobile_ie == TRUE): ?>
        <meta http-equiv="cleartype" content="on">
<?php endif; ?>
        <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
        <meta property="og:title" content="HOME">
        <meta property="og:type" content="article">
        <meta property="og:image" content="">
        <meta property="og:url" content="">
        <meta property="og:site_name" content="domProjects">
    </head>
    <body>
        <article>
            <h1>HOME</h1>
<?php if ($admin_link): ?>
            <p><a href="<?php echo site_url('admin'); ?>">Admin</a></p>
<?php endif; ?>

<?php if ($logout_link): ?>
            <p><a href="<?php echo site_url('auth/logout/public'); ?>">Logout</a></p>
<?php else: ?>
            <p><a href="<?php echo site_url('auth/login'); ?>">Login</a></p>
<?php endif; ?>
        </article>

        <footer>

        </footer>
    </body>
</html>