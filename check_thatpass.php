<?php


function check_thatpass($password){

$desc = array();
$desc[-1] = "Terrible";
$desc[1] = "Weak";
$desc[2] = "Sufficient";
$desc[3] = "Solid";



$score = 0;

//if password bigger than 6 give 1 point
if($password > 6) {
    return($score++);
    
}


//if password has both lower and uppercase characters give 1 point
if(preg_match("/[a-z]/",$password) && preg_match("/[A-Z]/",$password)){
     $score++;
     
     }

//deduct points for stupid paterns  and lengths
if(preg_match("/^123/",$password) || preg_match("/^123456/",$password) || preg_match("/^changeme/",$password) || preg_match("/^654321/",$password)){
    $score--;
    
}
if($password < 6){
    $score--;
    
}


//if password has at least one number give 1 point
 if(preg_match("/\d+/",$password)){
     $score++;
     
     }


//if password has at least one special caracther give 1 point
 if(preg_match("/.[!,@,#,$,%,^,&,*,?,_,~,-,(,)]/",$password)){
     $score++;
     
 }


//if password bigger than 8 give another 1 point
if($password > 8){
    $score++;
    
}

return($desc[$score]);

}


//EXAMPLE CASE USAGE
$_pass  = "5243wrvNN";
$mypass = check_thatpass($_pass);
   
echo 'Your password of '.$_pass.' is '.$mypass.'';

?>