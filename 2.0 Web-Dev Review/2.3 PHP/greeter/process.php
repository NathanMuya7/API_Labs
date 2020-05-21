<?php
var_dump($_GET);#superglobal(forms) -- update/create


#stops either
#die();
$all_name = $_GET['full-name'];
$age = $_GET['age'];
$gender = $_GET['gender'];

//Getting the first name if it exists..
$space_position = strpos($all_name,' ');

if(strpos($all_name,' ') == false){
   $first_name = $all_name;
}else {
  $first_name = substr($all_name,0,$space_position);
}

#echo $age;

$greeting = $first_name;

if($age <= 12){
  //redirecting you to another page in php
    header("location:index.php?msg=Child, ${greeting}&greet=yes")
}else if($age >= 13 and $age <= 19 ){
    header("location:index.php?msg=Hello Child, ${greeting} &greet=yes")
}else if($age >= 20 and $age <= 30 ){
  header("location:index.php?msg=Yout, ${greeting}&greet=yes")
}else {
    header("location:index.php?msg=Mzito, ${greeting}&greet=yes")
}











 ?>
