# ThePassMan PHP Class

The `ThePassMan` PHP class provides functionality for password validation, hashing, encryption, and decryption. It includes methods to check the strength of a password, generate a hash for a password, and encrypt/decrypt passwords using a specified key.

## Usage

To use the `ThePassMan` class, follow these steps:

1. Include the class file in your PHP script.

```php
require_once 'ThePassMan.php';
```

2. Create an instance of the `ThePassMan` class.

```php
$passobj = new ThePassMan();
```

### Checking Password Strength

To check the strength of a password, use the `check_thatpass` method.

```php
$password = 'YourPassword123';
$mypass = $passobj->check_thatpass($password);
echo "Your password is $mypass";
```

### Generating a Password Hash

To generate a hash for a password, use the `gen_thathash` method.

```php
$password = 'YourPassword123';
$hash = $passobj->gen_thathash($password);
echo "Hashed password result: $hash";
```

### Encrypting and Decrypting Passwords

To encrypt a password, use the `crypt_thatpass` method.

```php
$password = 'YourPassword123';
$key = 'YourEncryptionKey';
$crypted = $passobj->crypt_thatpass($key, $password);
echo "Crypted hash with password as key: $crypted";
```

To decrypt a password, use the `decrypt_thatpass` method.

```php
$password = 'YourPassword123';
$key = 'YourEncryptionKey';
$decrypted = $passobj->decrypt_thatpass($key, $password);
echo "Decrypted hash: $decrypted";
```

## Class Details

### Class: ThePassMan

This class provides various methods for password validation, hashing, encryption, and decryption.

#### Properties

- `public $password`: Holds the password.
- `protected $desc`: Holds an array of descriptions for password scores.
- `public $score`: Holds the password score.
- `private $strpass`: Holds the length of the password.
- `public $msg`: Holds additional information about the password.
- `public $key`: Holds the encryption key.

#### Method Details

##### Method: check_thatpass

This method checks the strength of a password and returns a description based on the password score.

###### Parameters

- `$password`: The password to be checked.

###### Return Value

- Returns a string representing the description of the password strength.

##### Method: gen_thathash

This method generates a hash for a given password.

###### Parameters

- `$password`: The password to be hashed.

###### Return Value

- Returns the hashed password as a string.

##### Method: crypt_thatpass

This method encrypts a password using a specified key.

###### Parameters

- `$key`: The encryption key.
- `$password`: The password to be encrypted.

###### Return Value

- Returns the encrypted password as a string.

##### Method: decrypt_thatpass

This method decrypts an encrypted password using a specified key.

###### Parameters

- `$key`: The decryption key.
- `$password`: The password to be decrypted.

###### Return Value

- Returns the decrypted password as a string.

## Example Case Usage

```php
$_pass  = "g#Ti678Kd!l0D";
$passobj = new ThePassMan();
$mypass = $passobj->check_thatpass($_pass);
   
echo "Your password of $_pass is $mypass<br>";
$hashit = $passobj->gen_thathash($_pass);
echo "Hashed password result: $
