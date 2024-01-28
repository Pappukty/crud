<?php
include 'config.php';
//contion
if(isset($_GET['deleteid'])){
  //varible
  $id=$_GET['deleteid'];
  ///connection
$sql="delete from`userdb`where id=$id";

$result=mysqli_query($conn,$sql);
if($result){
  // echo 'successfully delete';  
  header('location:index.php');
}else{
  die(mysqli_error($conn));
}





















}



?>