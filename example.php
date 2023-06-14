<?
require_once 'ThePassMan.php';

//EXAMPLE CASE USAGE
$_pass  = "g#Ti678Kd!l0D";
$passobj = new ThePassMan();
$mypass = $passobj->check_thatpass($_pass);
   
echo 'Your password of '.$_pass.' is '.$mypass.'  <br>';
$hashit = $passobj->gen_thathash($_pass);
echo "Hashed password result: $hashit <br>";

$crypted = $passobj->crypt_thatpass($_pass,$hashit);
echo "Crypted hash with password as key: $crypted<br>";

$decrypted = $passobj->decrypt_thatpass($_pass,$crypted);
echo "decrypted hash: $decrypted<br>";

//Check the password strength
$password = 'YourPassword123';
$mypass = $passobj->check_thatpass($password);
echo "Your password is $mypass";

//Encrypting and Decrypting Passwords
//To encrypt a password, use the crypt_thatpass method.
$password = 'YourPassword123';
$key = 'YourEncryptionKey';
$crypted = $passobj->crypt_thatpass($key, $password);
echo "Crypted hash with password as key: $crypted";

//To decrypt a password, use the decrypt_thatpass method.
$password = 'YourPassword123';
$key = 'YourEncryptionKey';
$decrypted = $passobj->decrypt_thatpass($key, $password);
echo "Decrypted hash: $decrypted";


?>
