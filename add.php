<?php
//first step 
// connection in local host and name and pass values
$connection=mysqli_connect("localhost","root","");
$db = mysqli_select_db($connection,"crud");

if(isset($_POST['submit']))
{
  $name=$_POST('name');
$number=$_POST('number');
$address=$_POST('address');
$email=$_POST('email');


//
$sql= "insert into userdb(name,number,address,email)values('$name','$number','$address','$email')";


if(mysqli_query($connection,$sql))
{
    echo'<script> location.replace("index.php")</script>';
}
else{
echo'some thing error'.$connection->error;
}
}
?>




<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN"
      crossorigin="anonymous"
    />
    <title>Document</title>
  </head>
  <body>
    <div class="container">
      <div class="row">
        <div class="card">
          <div class="card-header">Featured</div>

          <div class="card-body">
          <form  action="add.php" method="post">
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Name</label>
    <input type="text" class="form-control"  aria-describedby="emailHelp" name="name">
   
  </div>
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Number</label>
    <input type="number" class="form-control"  aria-describedby="emailHelp" name="number">
   
  </div>
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label"> address</label>
    <input type="text" class="form-control"  aria-describedby="emailHelp" name='address'>
   
  </div>
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Email address</label>
    <input type="email" class="form-control"  aria-describedby="emailHelp" name="email">
   
  </div>


  <button type="submit" class="btn btn-primary" value="Regsiter">Submit</button>
</form>
            
          </div>
        </div>
      </div>
    </div>
   
  </body>
</html>
