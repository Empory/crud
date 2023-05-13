<?php 
include "connect.php";
if(isset($_POST["submit"])){
    $name = $_POST["name"];
    $email = $_POST["email"];
    $mobile = $_POST["mobile"];
    $password = $_POST["password"];

    $sql = "INSERT INTO crud (name,email,mobile,password) VALUES('$name', '$email', '$mobile','$password')";
    $result = mysqli_query($con,$sql);
    if ($result) {
        echo "data inserted";
    }
    else{
        die(mysqli_error($con));
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
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css">

    <title>Crud operation</title>
  </head>
  <body>
    <div class="container my-5">
    <form method="post" action="">
        <div class="form-group">
            <label>Name</label>
            <input type="text" class="form-control" autocomplete="off" name="name" placeholder="Enter your name">
        </div>
        <div class="form-group">
            <label>Email</label>
            <input type="email" class="form-control" autocomplete="off" name="email" placeholder="Enter your email">
        </div>
        <div class="form-group">
            <label>Mobile</label>
            <input type="text" class="form-control" autocomplete="off" name="mobile" placeholder="Enter your mobile number">
        </div>
        <div class="form-group">
            <label>Password</label>
            <input type="password" class="form-control" autocomplete="off" name="password" placeholder="Enter your password">
        </div>
        <button type="submit" class="btn btn-primary" name="submit">Submit</button>
    </form>
    </div>

   
  </body>
</html>