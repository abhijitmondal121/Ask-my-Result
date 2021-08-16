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
    height:420px;
    width:520px;
    border-radius: 25px;
    box-shadow: 2px 2PX 10PX 15PX rgb(104, 102, 102);
    
  }


  h1{
    font-size:58px;
    font-family: Georgia, serif;
  }


   h2 {
     font-size:32px;
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
#lform{
  background:black;
  padding:30px 20px;
  margin-top: 25px;
 
  color:white;
  border-radius:20px;
  box-shadow: 2px 2PX 15PX 15PX rgb(104, 102, 102);

}





@media screen and (min-device-width: 501px) and (max-device-width: 1170px){

 
  #image{
    height:320px;
    width:490px;
  }

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

#image{
  height:270px;
  width:300px;
  

}
h1{
  font-size:26px;
}

 h2 {
   font-size:16px;
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
  <?php include "partials/dbconnect.php";
  include "partials/header.php";
  ?>




<div class="container my-5 ">
<center><h1 class="my-4">Welcome to Admin Dashbord</h1></center>

<div class="row px-3">


<div class="col-md-4 my-4  " id="lform">
  <center>
<?php

    echo '<h2  >Admin:'.' '. $_SESSION['username'].'</h2>';

?>
</center>
<div>
<!-- <a class="block" href="/Online_Result_System/admin_notice.php" style = "margin-left:3%;"  >Notice</a> -->
<a href="admin_edit.php"><button type="button" class="btn btn-block btn-outline-success py-4 mt-5">Admin Dashbord</button></a>
</div> 
<div>
<a href="admin_marks.php"><button type="button" class="btn btn-block btn-outline-warning py-4 mt-2">Marks</button></a>
<!-- <a class="block" href="/Online_Result_System/student_marks.php" ></a> -->
</div>
<div>
<!-- <a class="block" href="/Online_Result_System/admin_notice.php" style = "margin-left:3%;"  >Notice</a> -->
<a href="admin_notice.php"><button type="button" class="btn btn-block btn-outline-light py-4 mt-2">Notice</button></a>
</div> 
<div>
<!-- <a class="block" href="/Online_Result_System/admin_notice.php" style = "margin-left:3%;"  >Notice</a> -->
<a href="admin_student_edit.php"><button type="button" class="btn btn-block btn-outline-primary py-4 mt-2">Student-Edit</button></a>
</div> 
</div>
<dv class="col-md-3"></dv>
<div class="col-md-3 my-5 " >
<img src="partials/r.jpg" id="image" alt="" srcset="">
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