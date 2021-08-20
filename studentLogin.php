
<?php

 include "partials/dbconnect.php"; 
$login = false;
$showError = false;
if($_SERVER["REQUEST_METHOD"] == "POST"){
   
    $roll = $_POST["roll"];
    $name = $_POST["name"];
    $class = $_POST["class"]; 
    
     
    $sql = "SELECT * FROM `marks` WHERE `name`='$name' AND `roll`='$roll' AND `class`='$class'";
    
    // SELECT * FROM `marks` WHERE `roll`='$roll'AND `name`='$name' AND `class`='$class'";
    
    $result = mysqli_query($conn, $sql);
    $num = mysqli_num_rows($result);
    if ($num == 1){
        $login = true;
        session_start();
        $_SESSION['loggedin'] = true;
        $_SESSION['roll'] = $roll;
        $_SESSION['name'] = $name;
        $_SESSION['class'] = $class;
       
        header("location:student_edit.php");
        
        
    } 
    else{
      // header("location:studentLogin.php");
      echo'<div class="alert alert-danger alert-dismissible fade show" role="alert">
      <strong>Unable to Student Login!</strong> You should check your User name && Password && Class .
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
    height:500px;
    width:620px;
    border-radius: 25px;
  }

  h1{
    margin: 60px 0px;
    font-size:58px;
    font-family: Georgia, serif;
    text-align:center;
  }

  @media screen and (min-device-width: 501px) and (max-device-width: 750px){

    #image{
    height:500px;
    width:500px;
  }
  h2{
    font-size:30px;
  }
  h1{
    margin: 28px 0px;
    font-size:38px;
    font-family: Georgia, serif;
    text-align:center;
  }


  }

  @media screen and (min-device-width: 290px) and (max-device-width: 500px){

  #image{
  height:300px;
  width:290px;
  }
  h2{
    font-size:25px;
  }
  h1{
    margin: 28px 0px;
    font-size:28px;
    font-family: Georgia, serif;
    text-align:center;
  }


}


  </style>
  <body>
  <?php include "partials/header.php"; ?>




<div class="container my-5 ">


<h1>Welcome to Ask My Result Community</h1>
<div class="row px-3">
<div class="col-md-8" >
<img src="partials/stu1.png" id="image" alt="" srcset="">
</div>

<div class="col-md-4 mt-5 pt-5 px-2">
<h2>Student Login</h2>
<form  method="POST">

<div>
    <label for="exampleInputEmail1" class="form-label">Student Name</label>
    <input type="text" name="name" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"placeholder="Student Name">
  </div>
  <div>
    <label for="exampleInputEmail1" class="form-label">Roll</label>
    <input type="text" name="roll" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"placeholder="Roll">
  </div>

  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Class</label>
    <input type="text" name="class" class="form-control" id="exampleInputPassword1" placeholder="Class">
  </div>

<div class="row">
<div class="col-md-12">
<button type="submit" class="btn btn-block btn-primary my-2">Login</button>

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
