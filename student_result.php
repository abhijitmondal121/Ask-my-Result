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
    height:550px;
    width:620px;
    margin-left:170px;
  }
  h1{
    font-size:58px;
    font-family: Georgia, serif;
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

#lform{
  background:black;
  padding:40px 20px;
  margin-top: 100px;
 
  color:white;
  border-radius:20px;
  box-shadow:15px 20PX 30PX blue;

}
#border{
    box-shadow: -2px 0px 0px blue ;
  }



@media screen and (min-device-width: 501px) and (max-device-width: 1170px){

  #home{
    height:370px; padding:20px 0px; background-image: url('partials/hos4.jpg');background-size: 100%;background-repeat: no-repeat;; 
  }
  #image{
    height:200px;
    width:200px;
  }
  #im{
    height:200px;
    width:200px;
    border-radius: 90px;
  }
  #about-text{
    font-size:18px;
  }
  .contai{
    background-color:#f0f5f5;
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


h1{
  font-size:28px;
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




<div class="container pt-3 ">
<center><h1 class="mb-3 mt-3">Welcome to Student Result</h1></center>

<div class="row py-2 px-3" id="lform">


<div class="col-md-4 pt-5">

<div>
<a href="student_edit.php"><button type="button" class="btn btn-block btn-outline-success py-4 mt-5"style="font-size:18px;">Student Dashbord</button></a>
<!-- <a class="block" href="/Online_Result_System/student_marks.php" ></a> -->
</div>
<div>
<a href="student_info.php"><button type="button" class="btn btn-block btn-outline-light py-4 mt-2"style="font-size:18px;">Student Info</button></a>
<!-- <a class="block" href="/Online_Result_System/student_marks.php" ></a> -->
</div>
<div>

<a href="student_notice.php"><button type="button" class="btn btn-block btn-outline-warning py-4 mt-2"style="font-size:18px;">Notice</button></a>
</div> 
<div>
<!-- <a class="block" href="/Online_Result_System/admin_notice.php" style = "margin-left:3%;"  >Notice</a> -->
<a href="student_result.php"><button type="button" class="btn btn-block btn-outline-primary py-4 mt-2"style="font-size:18px;">Result</button></a>
</div>
</div>

<div class="col-md-2" ></div>
<div class="col-md-1" id="border"></div>
<div class="col-md-5 my-4" >
<div>


<?php

function grade($avg)
{
    if ($avg >= 60)
        $grade = "A";
    else if($avg >= 50)
        $grade = "B";
    else if($avg >= 40)
        $grade = "C";
    else
        $grade = "D";
return $grade;
}

$roll=$_SESSION['roll'];
$name=$_SESSION['name'];
$class=$_SESSION['class'];

$query = "SELECT * FROM marks WHERE roll = '$roll' AND class = '$class'";
$result = mysqli_query($conn,$query);
$count = mysqli_num_rows($result);
?>
<table border = "2" cellspacing = "3" cellpadding = "3" align = "center" width = "300px"  >

        

<?php
if($count > 0) 
{ 
    $row = mysqli_fetch_assoc($result); 
    $sum = $row['c'] + $row['cpp'] + $row['java']+ $row['python']+ $row['javascript']+ $row['react'];
    $avg = $sum / 6;
?>
<b>
<tr>
        <th id="a" colspan="2"> <center>YOUR SCORE</center> </th>  
</tr>

<tr>
        <th id="a"> Name </th>  <td id="b"> <?php echo $row['name'] ?> </td> 
</tr>
<tr>
        <th id="a"> Roll </th>  <td id="b"> <?php echo $row['roll'] ?> </td> 
</tr>
<tr>
        <th id="a"> Class</th>  <td id="b"> <?php echo $row['class'] ?> </td> 
</tr>
<tr>
        <th id="a"> C </th>  <td id="b"> <?php echo $row['c'] ?> </td> 
</tr>
<tr>
        <th id="a"> C++ </th>  <td id="b"> <?php echo $row['cpp'] ?> </td> 
</tr>
<tr>
        <th id="a"> Java </th>  <td id="b"> <?php echo $row['java'] ?> </td> 
</tr>
<tr>
        <th id="a"> Python</th>  <td id="b"> <?php echo $row['python'] ?> </td> 
</tr>
<tr>
        <th id="a"> JavaScript </th>  <td id="b"> <?php echo $row['javascript'] ?> </td> 
</tr>
<tr>
        <th id="a"> React </th>  <td id="b"> <?php echo $row['react'] ?> </td> 
</tr>
<tr>
        <th id="a"> Total</th>  <td id="b"> <?php echo $sum ?> </td> 
</tr>
<tr>
        <th id="a"> Avg </th>  <td id="b"> <?php  echo round($avg) ?> </td> 
</tr>
<tr >
        <th id="a" > Grade </th>  <td id="b"> <?php echo grade($avg) ?> </td> 
</tr>

</b>
</table>
<?php
}
else
{
?>
    <tr align = "center">
        <td colspan = "6"> <b> Result has not been published yet  </b> </td>
    </tr>
</table>
<?php
}
?>














































</div>
</div>
<div class="col-md-1" ></div>
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