<?php
 $servername = "localhost";
 $username = "root";
 $password = "";
 $database="crud";

$conn=new mysqli($servername,$username,$password,$database);

if($conn->connect_error){
  die('connection not working'.$conn->connect_error);

}else{
  echo 'connection successfully';
}

?>