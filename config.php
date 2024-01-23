<?php
 

$conn=new mysqli('localhost','root','');

$db=mysqli_select_db($conn,'crud');

if($conn){
  echo "connection successfully";
}
else{
  die (mysqli_error($conn));
}

?>