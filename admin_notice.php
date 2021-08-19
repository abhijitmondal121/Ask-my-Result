<?php
include "partials/dbconnect.php";

if(isset($_GET['delete'])){
  $sno = $_GET['delete'];
  $delete = true;
  $sql = "DELETE FROM `notice` WHERE `slno` = $sno";
  $result = mysqli_query($conn, $sql);
}

if ($_SERVER['REQUEST_METHOD'] == 'POST'){
    $notice = $_POST['notice'];

    if ($notice==''){
        echo"<script>alert('Please fill up all details')</script>";
    }
    else{ 
      $sql = "INSERT INTO `notice` (`desc`) VALUES ( '$notice');";
      $result = mysqli_query($conn, $sql);

      if($result){
        echo '<div class="alert alert-success alert-dismissible fade show" role="alert">
        <strong>Success!</strong> Your entry has been submitted successfully!
        <button type="button" class="close mb-0" data-dismiss="alert" aria-label="Close">
          <span aria-hidden="true">×</span>
        </button>
      </div>';
      }
      else{
          // echo "The record was not inserted successfully because of this error ---> ". mysqli_error($conn);
          echo '<div class="alert alert-danger alert-dismissible fade show" role="alert">
        <strong>Error!</strong> We are facing some technical issue and your entry ws not submitted successfully! We regret the inconvinience caused!
        <button type="button" class="close mb-0" data-dismiss="alert" aria-label="Close">
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
  
  overflow: hidden; /* Ensures the content is not revealed until the animation */
  border-right: .15em solid white; /* The typwriter cursor */
  white-space: nowrap; /* Keeps the content on a single line */
  margin: 0 auto;/* Gives that scrolling effect as the typing happens*/
  letter-spacing: .10em; /* Adjust as needed */
  animation: 
    typing 8.5s steps(40,end),
    blink-caret .75s step-end ;
}
td{
  color:white;
}
th{
  color:white;
}

#lform{
  background:black;
  padding:40px 20px;
  margin-top: 50px;
 
  color:white;
  border-radius:20px;
  box-shadow: 2px 2PX 15PX 15PX rgb(104, 102, 102);

}
#lforml{
  background:black;
  padding:50px 20px;
  margin-top: 50px;
 
  color:white;
  border-radius:20px;
  box-shadow: 2px 2PX 15PX 15PX rgb(104, 102, 102);

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
  <?php include "partials/header.php";  ?>

<div class="container my-5 ">
<div class="row mb-4 mt-1 px-2">
        <div class="col-md-3"><a href="admin_edit.php"><button type="button" class="btn btn-block btn-primary  my-1 py-2">Admin Dashbord</button></a></div>
        <div class="col-md-3"><a href="admin_marks.php"><button type="button" class="btn btn-block btn-success my-1 py-2">Marks</button></a></div>
        <div class="col-md-3"><a href="admin_notice.php"><button type="button" class="btn btn-block btn-warning  my-1 py-2">Notice</button></a></div>
        <div class="col-md-3"><a href="admin_student_edit.php"><button type="button" class="btn btn-block btn-secondary my-1 py-2">Student-Edit</button></a></div>

    </div>


<center><h1 class="mb-4 mt-5">Welcome to Admin Notice</h1></center>

<div class="row px-3">

<div class="col-md-5 " id="lforml">

<form  method="POST">

<div class="form-group my-2">
    <label for="exampleFormControlTextarea1">Add Notice :</label>
    <textarea class="form-control" name="notice" id="exampleFormControlTextarea1" rows="3" style="height:160px;"></textarea>
  </div>


<div class="row mt-4 mb-2">
<div class="col-md-6">
<button type="submit" class="btn btn-block btn-success my-2">Add Notice</button>
</div>
<div class="col-md-6">
<button type="reset" class="btn btn-block btn-secondary my-2">Clear</button>
</div>
</div>
</form>
</div>
<div class="col-md-2"></div>
<div class="col-md-5" id="lform">


<table class="table" id="myTable">
      <thead>
        <tr>
          <th scope="col">S.No</th>
          <th scope="col">Roll</th>
         
          <th scope="col">Actions</th>
        </tr>
      </thead>
      <tbody>
        <?php 
          $sql = "SELECT * FROM `notice`";
          $result = mysqli_query($conn, $sql);
          $sno = 0;
          while($row = mysqli_fetch_assoc($result)){
            $sno = $sno + 1;
            echo "<tr>
            <th scope='row'>". $sno . "</th>
            <td>". $row['desc'] . "</td>
            <td> <button class='delete btn btn-sm btn-warning' id=d".$row['slno'].">Delete</button>  </td>
          </tr>";
        } 
          ?>


      </tbody>
    </table>

</div>

      </div>
</div>






<?php include "partials/footer.php";  ?>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  
    <script>
    
    deletes = document.getElementsByClassName('delete');
    Array.from(deletes).forEach((element) => {
      element.addEventListener("click", (e) => {
        console.log("edit ");
        sno = e.target.id.substr(1);

        if (confirm("Are you sure you want to delete this note!")) {
          console.log("yes");
          window.location = `/ask_my_result/admin_notice.php?delete=${sno}`;
          // TODO: Create a form and use post request to submit a form
        }
        else {
          console.log("no");
        }
      })
    })
  </script>
 
  
  
  
  </body>
</html>
