<!doctype html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>AdminLTE</title>
        <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
        <meta name="robots" content="noindex, nofollow">
        <link rel="icon" href="data:image/x-icon;base64,iVBORw0KGgoAAAANSUhEUgAAACAAAAAgCAYAAABzenr0AAAAqElEQVRYR+2WYQ6AIAiF8W7cq7oXd6v5I2eYAw2nbfivYq+vtwcUgB1EPPNbRBR4Tby2qivErYRvaEnPAdyB5AAi7gCwvSUeAA4iis/TkcKl1csBHu3HQXg7KgBUegVA7UW9AJKeA6znQKULoDcDkt46bahdHtZ1Por/54B2xmuz0uwA3wFfd0Y3gDTjhzvgANMdkGb8yAyY/ro1d4H2y7R1DuAOTHfgAn2CtjCe07uwAAAAAElFTkSuQmCC">
    </head>
    <body>

<?php
if (extension_loaded('zip'))
{
    $zip = new ZipArchive;

    if ($zip->open('test.zip') === TRUE)
    {
        $zip->extractTo('./aaa/');
        $zip->close();
    }
    else
    {
        echo 'Erreur ouverture fichier test.zip';
    }
}
else
{





}
?>




    </body>
</html>