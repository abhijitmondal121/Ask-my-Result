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

  .container{
    min-height:350px;
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
     text-align:center;
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
     font-size:32px;
     font-family: Georgia, serif;
     text-align:center;
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
     font-size:32px;
     font-family: Georgia, serif;
     text-align:center;
}




}


  </style>
  <body>
  <?php include "partials/dbconnect.php";
  include "partials/header.php";
  ?>




<div class="container my-5 pb-4">

<div class="row mb-4 mt-2 px-2">

        <div class="col-md-3"><a href="admin_edit.php"><button type="button" class="btn btn-block btn-primary  my-1 py-2">Admin Dashbord</button></a></div>
        <div class="col-md-3"><a href="admin_marks.php"><button type="button" class="btn btn-block btn-success my-1 py-2">Marks</button></a></div>
        <div class="col-md-3"><a href="admin_notice.php"><button type="button" class="btn btn-block btn-warning  my-1 py-2">Notice</button></a></div>
        <div class="col-md-3"><a href="admin_student_edit.php"><button type="button" class="btn btn-block btn-secondary my-1 py-2">Student-Edit</button></a></div>

    </div>



<center><h1 class="my-4">Welcome to Admin Dashbord</h1></center>


<div class="row px-3">
<div class="col-md-4 my-2"></div>
<div class="col-md-4 my-2">
<?php

echo '<h2  >Admin :'.' '. $_SESSION['username'].'</h2>';

?>
</div>
<div class="col-md-4 my-2"></div>

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