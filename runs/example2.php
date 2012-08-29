<?
require_once('../Anti/Mcrypt.php');

$key = 'aXJhbmRvbXNlY3VyZWtleQ=='; //encoded in base64
$key_decode = base64_decode($key);
echo "\n key decoded = ".$key_decode."\n";
echo "\n length of key is ".strlen($key)."\n";
echo "\n length of key after base64_decode ".strlen(base64_decode($key))."\n";
print "\n the number of bytes in $key_decode is ".strlen($key_decode)."\n";
$encrypted_string = '3l6xiNdgRG+PkBw5M0lawvJ/fmuTZPRhEcbtqAmOpDI=';


//$mcrypt = new Anti_Mcrypt("my_secret_password");
$mcrypt = new Anti_Mcrypt($key_decode);
//echo $encryptedText = $mcrypt->encrypt("Fischers Fritz fischt frische Fische");
//echo "\n";
echo $mcrypt->decrypt($encrypted_string); // Fischers Fritz ..
echo "\n";
?>
