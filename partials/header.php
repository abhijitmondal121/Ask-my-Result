<?php

session_start();
if(isset($_SESSION['loggedin']) && $_SESSION['loggedin'] = true){
echo'
  <nav class="navbar fixed-top navbar-expand-sm navbar-light mt-0" style="position: sticky;top: 0px; background-color:black;	" >
    <!-- <a class="navbar-brand" href="#"><img src="partials/n3.png"style="height:70px;width:320px;" alt="" srcset=""></a> -->
    <a class="navbar-brand" href="#" style="font-family: serif;font-size:30px;font-weight:bold;color:white;">Ask-My-Result</a>
  
    <button class="navbar-toggler" type="button"style="background-color:white;" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon" ></span>
    </button>
  
    <div class="collapse navbar-collapse" id="navbarSupportedContent" >
    
  
  
  
        <ul class="navbar-nav ml-auto">

        <li class="nav-item">
          <a class="nav-link " href="logout.php" style="font-family: serif;font-size:20px;color:white;font-weight:bold;"> Logout</a>
        </li>
      </ul>
     
    </div>
  </nav>';
}


else{
  echo'
  <nav class="navbar fixed-top navbar-expand-sm navbar-light mt-0" style="position: sticky;top: 0px; background-color:black;	" >
    <!-- <a class="navbar-brand" href="#"><img src="partials/n3.png"style="height:70px;width:320px;" alt="" srcset=""></a> -->
    <a class="navbar-brand" href="#" style="font-family: serif;font-size:30px;font-weight:bold;color:white;">Ask-My-Result</a>
  
    <button class="navbar-toggler" type="button" style="background-color:white;" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
  
    <div class="collapse navbar-collapse" id="navbarSupportedContent" >
    
  
  
  
        <ul class="navbar-nav ml-auto">
        <li class="nav-item active">
          <a class="nav-link " href="index.php"style="font-family: serif;font-size:20px;color:white;font-weight:bold;" >Home <span class="sr-only">(current)</span></a>
        </li>
        <!-- <li class="nav-item">
          <a class="nav-link" href="show.php">Check Availability(current)</a>
        </li> -->
        <li class="nav-item active">
          <a class="nav-link" href="index.php#about_section" style="font-family: serif;font-size:20px;color:white;font-weight:bold;">About Us <span class="sr-only">(current)</span></a>
        </li>
  
        <li class="nav-item">
          <a class="nav-link " href="adminLogin.php" style="font-family: serif;font-size:20px;color:white;font-weight:bold;">Admin </a>
        </li>
        <li class="nav-item">
          <a class="nav-link " href="studentLogin.php" style="font-family: serif;font-size:20px;color:white;font-weight:bold;">Student </a>
        </li>
      </ul>
     
    </div>
  </nav>';
}


  ?>

