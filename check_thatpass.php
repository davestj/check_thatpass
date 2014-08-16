<?php

class ThePassMan{

public      $password = "";    
protected   $desc     = array();
public      $score    = int;
private     $strpass  = string;
   
function check_thatpass($password){

$this->password = $password;

$this->desc[-1] = "Terrible";
$this->desc[0] = "Super Weak";
$this->desc[1] = "Weak";
$this->desc[2] = "Mediocre";
$this->desc[3] = "Sufficient";
$this->desc[4] = "Acceptable";
$this->desc[5] = "Solid";
$this->desc[6] = "Best";


$this->score = 0;
$this->strpass = strlen($this->password);

//if password bigger than 6 give 1 point
if($this->strpass > 6) {
    $this->score++;
    echo "if password bigger than 6 give 1 point<br>";
}

//if password bigger than 8 give 1 point
if($this->strpass > 8) {
    $this->score++;
    echo "if password bigger than 8 give 1 point<br>";
}
//if password bigger than 12 give 1 point
if($this->strpass > 12) {
    $this->score++;
    echo "if password bigger than 12 give 1 point<br>";
}

//if password less than 6 characters take away 1 point
if($this->strpass < 6) {
    $this->score--;
    echo "if password less than 6 characters take away 1 point<br>";
}
//if password has both lower and uppercase characters give 1 point
if(preg_match("/[a-z]/",$this->password) && preg_match("/[A-Z]/",$this->password)){
     $this->score++;
     echo "if password has both lower and uppercase characters give 1 point<br>";
     }

//deduct points for stupid paterns
if(preg_match("/^123/",$this->passwordd) 
    || preg_match("/^1234567/",$this->password)  
    || preg_match("/^changeme/",$this->password) 
    || preg_match("/^6543210/",$this->password)){
    $this->score--;
   echo "deduct points for stupid paterns<br>"; 
}


//if password has at least one number give 1 point
 if(preg_match("/\d+/",$this->password)){
     $this->score++;
     echo "if password has at least one number give 1 point<br>";
     }


//if password has at least one special caracther give 1 point
 if(preg_match("/.[!,@,#,$,%,^,&,*,?,_,~,-,(,)]/",$this->password)){
     $this->score++;
     echo "if password has at least one special caracther give 1 point<br>";
 }

return($this->desc[$this->score]);

}

}


//EXAMPLE CASE USAGE
$_pass  = "sd3asdf#&q4tadfgf34rSFGHadfgwregafw45wfvwrtg4ff";
$passobj = new ThePassMan();
$mypass = $passobj->check_thatpass($_pass);
   
echo 'Your password of '.$_pass.' is '.$mypass.'';

?>
