<?php

include 'connect.php';
$id = $_GET['updateid'];
$sql = "select * from crud where id = $id";
$result = mysqli_query($conn,$sql);
$row = mysqli_fetch_assoc($result);
$name = $row['name'];
$email = $row['email'];
$mobile = $row['mobile'];
$password = $row['password'];
if(isset($_POST['submit']))
{
    $name = $_POST['name'];
    $email = $_POST['email'];
    $mobile = $_POST['mobile'];
    $password = $_POST['password'];

    $sql = "update crud set id = $id, name = '$name', email = '$email', mobile = '$mobile', password = '$password' where id = $id ";
    $result = mysqli_query($conn,$sql);
    if($result)
    {
        // echo "Updated  successfuly";
        header('location:display.php');
    }
    else
    {
        echo "not updated";
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
    <h1>Update your Info </h1>

    <div class="container">
    <form method="post">
  <div class="form-group">
    <label>Name</label>
    <input type="text" class="form-control" name="name" value = <?php echo $name;?>>
    <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
  </div>
  <div class="form-group">
    <label">Email</label>
    <input type="email" class="form-control" name="email" value = <?php echo $email;?>>
    <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
  </div>
  <div class="form-group">
    <label>Mobile</label>
    <input type="number" class="form-control" name="mobile" value = <?php echo $mobile;?>>
    <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
  </div>
  <div class="form-group">
    <label>Password</label>
    <input type="password" class="form-control" name="password" value = <?php echo $password;?>>
    <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
  </div>

  <button type="submit" class="btn btn-primary" name="submit">Update</button>
</form>
    </div>




  </body>
</html>
