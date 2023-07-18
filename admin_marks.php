<?php
include "partials/dbconnect.php";

if ($_SERVER['REQUEST_METHOD'] == 'POST'){
    $roll = $_POST['roll'];
    $name = $_POST['name'];
    $class = $_POST['class'];
    $c = $_POST['c'];
    $cpp = $_POST['cpp'];
    $java = $_POST['java'];
    $python = $_POST['python'];
    $js = $_POST['js'];
    $react = $_POST['react'];
    $image=$_FILES['photo']['name'];
    $tmp_name=$_FILES['photo']['tmp_name'];


    
    if ($roll==''||$name==''||$class==''||$c==''||$cpp==''||$java==''||$python==''||$js==''||$react==''){
        echo"<script>alert('Please fill up all details')</script>";
    }
    else{ 
      // Submit these to a database
      // Sql query to be executed 
      move_uploaded_file($tmp_name,"uploads/$image");
      $sql = "INSERT INTO `marks` ( `roll`, `name`,`photo`, `class`, `c`, `cpp`, `java`, `python`, `javascript`, `react`) VALUES ('$roll', '$name', '$image','$class', '$c', '$cpp', '$java', '$python', '$js', '$react')";
      $result = mysqli_query($conn, $sql);

      if($result){
        echo '<div class="alert alert-success alert-dismissible fade show" role="alert">
        <strong>Success!</strong> Your entry has been submitted successfully!
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
          <span aria-hidden="true">×</span>
        </button>
      </div>';
      }
      else{
         
          echo '<div class="alert alert-danger alert-dismissible fade show" role="alert">
        <strong>Error!</strong> We are facing some technical issue and your entry ws not submitted successfully! We regret the inconvinience caused!
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
          <span aria-hidden="true">×</span>
        </button>
      </div>';
      }

    }}




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
    
  h1{
    font-size:58px;
    font-family: Georgia, serif;
  }
   h2 {
     font-size:32px;
     font-family: Georgia, serif;
     text-align:center;
}


#formm{
 
  background:black;
  padding: 30px 30px;
  color:white;
  border-radius:20px;
  box-shadow: 0px 0PX 15PX 0PX rgb(104, 102, 102);

}
#lform{
  background:black;
  padding-top:60px;
  margin-top: 25px;
  /* margin-left: 50px; */
  color:white;
  border-radius:20px;
  box-shadow: 2px 2PX 15PX 15PX rgb(104, 102, 102);

}
#row{
  margin:20px 0px;
}





@media screen and (min-device-width: 501px) and (max-device-width: 1170px){


  h1{
    font-size:35px;
  }

   h2 {
     font-size:35px;
     font-family: Georgia, serif;
  
  overflow: hidden; /* Ensures the content is not revealed until the animation */
  border-right: .15em solid white; /* The typwriter cursor */
  white-space: nowrap; /* Keeps the content on a single line */
  margin: 0 auto;/* Gives that scrolling effect as the typing happens*/
  letter-spacing: .10em; /* Adjust as needed */
  animation: 
    typing 8.5s steps(40,end),
    blink-caret .75s step-end ;
}

/* The typing effect */
@keyframes typing {
  from { width: 0 }
  to { width: 60% }
}

/* The typewriter cursor effect */
@keyframes blink-caret {
  from, to { border-color: transparent }
  50% { border-color: white; }
}



}


@media screen and (min-device-width: 294px) and (max-device-width: 500px){

h1{
  font-size:26px;
}

 h2 {
   font-size:20px;
   font-family: Georgia, serif;

overflow: hidden; /* Ensures the content is not revealed until the animation */
border-right: .15em solid white; /* The typwriter cursor */
white-space: nowrap; /* Keeps the content on a single line */
margin: 0 auto;/* Gives that scrolling effect as the typing happens*/
letter-spacing: .10em; /* Adjust as needed */
animation: 
  typing 8.5s steps(40,end),
  blink-caret .75s step-end ;
}

/* The typing effect */
@keyframes typing {
from { width: 0 }
to { width: 60% }
}

/* The typewriter cursor effect */
@keyframes blink-caret {
from, to { border-color: transparent }
50% { border-color: white; }
}



}


  </style>
  <body>
  <?php include "partials/header.php";  ?>

<div class="container my-5 ">

<div class="row mb-4 mt-2 px-2">
        <div class="col-md-3"><a href="admin_edit.php"><button type="button" class="btn btn-block btn-primary  my-1 py-2">Admin Dashbord</button></a></div>
        <div class="col-md-3"><a href="admin_marks.php"><button type="button" class="btn btn-block btn-success my-1 py-2">Marks</button></a></div>
        <div class="col-md-3"><a href="admin_notice.php"><button type="button" class="btn btn-block btn-warning  my-1 py-2">Notice</button></a></div>
        <div class="col-md-3"><a href="admin_student_edit.php"><button type="button" class="btn btn-block btn-secondary my-1 py-2">Student-Edit</button></a></div>

    </div>



<center><h1 class="mb-2">Welcome to Admin Marks</h1></center>










<div class="row " id="row">
<div class="col-md-12 my-2">
<?php

    echo '<h2  >Admin :'.' '. $_SESSION['username'].'</h2>';

?>

</div>
<div class="col-md-12 my-5">


<form  method="POST" enctype="multipart/form-data" id="formm">



<div>
    <label for="exampleInputEmail1" class="form-label">Student Name</label>
    <input type="text" name="name" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"placeholder="Student Name">
  </div><br>

  <div id="imagepart">
    Upload image:<input type="file"  name="photo">
    </div>  


  <div>
    <label for="exampleInputEmail1" class="form-label">Roll</label>
    <input type="text" name="roll" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"placeholder="Roll">
  </div>

  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Class</label>
    <input type="text" name="class" class="form-control" id="exampleInputPassword1" placeholder="Class">
  </div>


  <div class="row my-2">
      <div class="col-md-4">
        <div>
        <label for="exampleInputEmail1" class="form-label">C Programming</label>
        <input type="text" name="c" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"placeholder="Enter the marks...">
         </div>
      </div>
      <div class="col-md-4">
        <div>
        <label for="exampleInputEmail1" class="form-label">C++</label>
        <input type="text" name="cpp" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"placeholder="Enter the marks...">
         </div>
      </div>
      <div class="col-md-4">
        <div>
        <label for="exampleInputEmail1" class="form-label">Java</label>
        <input type="text" name="java" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"placeholder="Enter the marks...">
         </div>
      </div>
  </div>

  <div class="row my-2">
      <div class="col-md-4">
        <div>
        <label for="exampleInputEmail1" class="form-label">Python</label>
        <input type="text" name="python" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"placeholder="Enter the marks...">
         </div>
      </div>
      <div class="col-md-4">
        <div>
        <label for="exampleInputEmail1" class="form-label">JavaScript</label>
        <input type="text" name="js" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"placeholder="Enter the marks...">
         </div>
      </div>
      <div class="col-md-4">
        <div>
        <label for="exampleInputEmail1" class="form-label">React Js</label>
        <input type="text" name="react" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"placeholder="Enter the marks...">
         </div>
      </div>
  </div>


<div class="row mt-4 mb-2">
<div class="col-md-6">
<button type="submit" class="btn btn-block btn-warning my-2">Add Marks</button>
</div>
<div class="col-md-6">
<button type="reset" class="btn btn-block btn-secondary my-2">Clear</button>
</div>
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