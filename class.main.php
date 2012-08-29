<?php
require_once('./Anti/Mcrypt.php');

$mcrypt = new Anti_Mcrypt("anotherrandomstring");
echo $encryptedText = $mcrypt->encrypt("Bardia doing a test, it works");
echo "\n";
echo $mcrypt->decrypt($encryptedText);
echo "\n";
?>
