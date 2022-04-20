<?php

include 'connect.php';
if(isset($_POST['submit']))
{
    $name = $_POST['name'];
    $email = $_POST['email'];
    $mobile = $_POST['mobile'];
    $password = $_POST['password'];

    $sql = "insert into crud (name,email,mobile,password) values ('$name','$email','$mobile','$password')";
    $result = mysqli_query($conn,$sql);
    if($result)
    {
      // echo "Data inserted successfuly";
      header('location:display.php');
    }
}

?>


<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css" integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">

    <title>CRUD OPERATION</title>
  </head>
  <body>
    <h1>Hello, world!</h1>

    <div class="container">
    <form method="post">
  <div class="form-group">
    <label>Name</label>
    <input type="text" class="form-control" name="name">
    <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
  </div>
  <div class="form-group">
    <label">Email</label>
    <input type="email" class="form-control" name="email">
    <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
  </div>
  <div class="form-group">
    <label>Mobile</label>
    <input type="number" class="form-control" name="mobile">
    <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
  </div>
  <div class="form-group">
    <label>Password</label>
    <input type="password" class="form-control" name="password">
    <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
  </div>

  <button type="submit" class="btn btn-primary" name="submit">Submit</button>
</form>
    </div>




  </body>
</html>
