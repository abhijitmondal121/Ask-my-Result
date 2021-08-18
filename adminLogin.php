<?php

include "partials/dbconnect.php";
$showError="false";
if($_SERVER["REQUEST_METHOD"] == "POST"){
 
  $username = $_POST["username"];
  $password = $_POST["password"]; 
  
   
  $sql = "SELECT * FROM `admin` WHERE `username`='$username' AND `password`='$password'";
  
  $result = mysqli_query($conn, $sql);
  $num = mysqli_num_rows($result);
  if ($num == 1){
      $login = true;
      session_start();
      $_SESSION['loggedin'] = true;
      $_SESSION['username'] = $username;
      
      header("location:admin_edit.php");
     
      
  } 
  else{
    echo'<div class="alert alert-danger alert-dismissible fade show" role="alert">
    <strong>Unable to Admin Login!</strong> You should check your User name && Password .
    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
      <span aria-hidden="true">&times;</span>
    </button>
  </div>';
   
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
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <title>Ask My Result!</title>
  </head>
  <style>
     body{
      background: #292C35;
      color:white;
    }
  #image{
    height:450px;
    width:320px;

    
  }
 
  h1{
    margin: 60px 0px;
    font-size:58px;
    font-family: Georgia, serif;
    text-align:center;
  }
  #lform{
    margin-top:110px;
  }



  @media screen and (min-device-width: 501px) and (max-device-width: 750px){

    #image{
    height:340px;
    width:260px;
  }
  h2{
    font-size:30px;
  }
   
  h1{
    margin: 30px 0px;
    font-size:38px;
    font-family: Georgia, serif;
    text-align:center;
  }
  }

  @media screen and (min-device-width: 290px) and (max-device-width: 500px){

  #image{
  height:300px;
  width:250px;
  margin-left:38px;
  }
  h2{
    font-size:23px;
  }
  h1{
    margin: 30px 0px;
    font-size:28px;
    font-family: Georgia, serif;
    text-align:center;
  }

}


  </style>
  <body>
  <?php include "partials/header.php"; ?>







<div class="container my-2 ">

<h1>Welcome to Ask My Result Community</h1>
<div class="row">
<div class="col-md-4" >
<img src="partials/admin.png" id="image" alt="" srcset="">
</div>
<div class="col-md-4"></div>
<div class="col-md-4 " id="lform">
<h2>Admin Login</h2>
<form  method="POST">

<div>
    <label for="exampleInputEmail1" class="form-label">Admin Name</label>
    <input type="text" name="username" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"placeholder="Student Name">
  </div>
  <div>
    <label for="exampleInputEmail1" class="form-label">Password</label>
    <input type="password" name="password" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"placeholder="Password">
  </div>



<div class="row">
<div class="col-md-12">
<button type="submit" class="btn btn-block btn-primary mt-4">Login</button>

</div>
</form>
</div>




</div>
</div>
</div>














<?php include "partials/footer.php";  ?>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  </body>
</html>
