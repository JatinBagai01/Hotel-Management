<?php
$myfilebin = fopen("bin.txt", "r") or die("Unable to open file!");
if (fread($myfilebin, filesize("bin.txt")) == "1") {
    $txt = "0";
    }
$myfile = fopen("bin.txt", "w") or die("Unable to open file!");
fwrite($myfile, $txt);
fclose($myfile);
fclose($myfilebin);
header('Location: admin-login.php');
?>