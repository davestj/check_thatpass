check_thatpass
==============
2014 Update
Added new methods for hashing and encrypting passwords.

check_thatpass is a function to check the strength of passwords from form submissions or other.

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
