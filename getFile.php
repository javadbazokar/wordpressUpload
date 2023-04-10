<?php
    $data = file_get_contents('https://fa.wordpress.org/latest-fa_IR.zip');
    $file = fopen("Wordpress.zip", "w+");
    fputs($file, $data);
    fclose($file);
    if (file_exists('Wordpress.zip')){
        echo '<h1 style="text-align:center;">Wordpress.zip Upload OK</h1>';
        $zip = new ZipArchive;
        $res = $zip->open('Wordpress.zip');
        if ($res === TRUE) {
          $zip->extractTo('./');
          $zip->close();
          echo '<h1 style="text-align:center;">Wordpress.zip extract OK</h1>';
          unlink("Wordpress.zip");
          echo '<h1 style="text-align:center;">Wordpress.zip delete OK</h1>';
        } else {
          echo '<h1 style="text-align:center;">Error</h1>';
        }
    }
?>
