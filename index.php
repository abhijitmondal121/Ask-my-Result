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
   .containe{
      background: #292C35;
      color:white;
    }
    #home{
    height:630px; 
  }
  #image{
    height:350px;
    width:320px;
  }
  #im{
    height:250px;
    width:220px;
    border-radius: 90px;
  }
  #about-text{
    font-size:20px;
  }
  .contai{
    background-color:#f0f5f5;
  }
   h2 {
     font-size:45px;
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


@media screen and (min-device-width: 501px) and (max-device-width: 1170px){

  #home{
    height:470px; 
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

  #home{
  height:320px;
}
#image{
  height:320px;
  width:250px;
  margin-left:20px;
  

}

#about-text{
  font-size:15px;
  padding:10px;
  font-family: Georgia, serif;
}
#about_section{
  mergin-top:30px;
}
.contai{
  background-color:#f0f5f5;
}
h1{
  font-size:30px;
}

 h2 {
   font-size:16px;
   font-family: Georgia, serif;
   margin-top:20px;
overflow: hidden; /* Ensures the content is not revealed until the animation */
border-right: .15em solid #f0f5f5; /* The typwriter cursor */
white-space: nowrap; /* Keeps the content on a single line */
/* Gives that scrolling effect as the typing happens*/
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
50% { border-color:#f0f5f5; }
}
}


  </style>
  <body>
  <?php include "partials/dbconnect.php";
  include "partials/header.php";
  ?>

<!-- <div class=" jumbo-bg jumbotron jumbotron-fluid mb-0" id="home"style="" > -->



<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
  <ol class="carousel-indicators">
    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
  </ol>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img class="d-block w-100 "id="home" src="partials/b1.jpg" alt="First slide">
    </div>
    <div class="carousel-item">
      <img class="d-block w-100 " id="home" src="partials/b3.jpg" alt="Second slide">
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" id="home" src="partials/ab.jpg" alt="Third slide" >
    </div>


  </div>
  <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>







</div>
<div class="containe">
<center><h2 class="py-2">The success gives student better future</h2></center>
<div class="container  " id="about_section">
<center><h1 class=" mt-3 mb-2 pt-4">About Us</h1></center>

<div class="row my-4">

<div class="col-md-4" >
<img src="partials/about.png" id="image" alt="" srcset="">
</div>

<div class="col-md-8">
<p id="about-text">Are students taking their end-of-course evaluation responsibilities seriously? Many institutions ask them to evaluate every course and to do so at a time when they’re busy with final assignments and stressed about upcoming exams. Response rates have also fallen at many places that now have students provide their feedback online. And who hasn’t gotten one or two undeserved low ratings—say, on a question about instructor availability when the instructor regularly came early to class, never missed a class, and faithfully kept office hours? Are students even reading the questions?

There’s some comfort to be found in a survey of almost 600 students enrolled in a wide range of degree programs at four different kinds of institutions. “We found that the majority of students generally held positive views about their role in the evaluation process and that they reported taking the evaluation process seriously.” (p. 311). A bit over 66 percent agreed or strongly agreed that student evaluations of teachers were useful, and 95 percent indicated that they often or very often honestly assessed the instructor’s teaching ability. .</p>
</div>

</div>
</div>


<?php include "partials/footer.php";  ?>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    </div>
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

  </body>
</html>
