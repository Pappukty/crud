


<?php
include('config.php');
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
            <button class="btn btn-success">
              <a href="add.php" class="text-light">add</a>
            </button>
            <br />
            <br />
            <table class="table">
              <thead>
                <tr>
                  <th scope="col">#</th>
                  <th scope="col">username</th>
                  <th scope="col">number</th>
                  <th scope="col">address</th>
                  <th scope="col">email</th>
                </tr>
              </thead>
              <tbody>
                <?php
                $sql="SELECT *FROM userdb";
                $result =mysqli_query($conn,$sql);
                if($result){
                while($row=mysqli_fetch_assoc($result)){
 $id=$row['id'];
 $username=$row['username'];
$number=$row['number'];
$address=$row['address'];
$email=$row['email'];
echo '<tr>
<th scope="col">'.$id.'</th>
<th scope="col">'.$username.'</th>
<th scope="col">'.$number.'</th>
<th scope="col">'.$address.'</th>
<th scope="col">'.$email.'</th>
<th><button class="btn btn-primary"><a  href="update.php?updateid='.$id.'" class="text-light">update</a></button></th>
<th><button class="btn btn-danger text-light"><a href="delete.php?deleteid='.$id.'" class="text-light">delete</a></button></th>
</tr>';
}
}
?>
             <a ></a>
              </tbody>
            </table>
            <a href="#" class="btn btn-primary">Go somewhere</a>
          </div>
        </div>
      </div>
    </div>
  </body>
</html>

