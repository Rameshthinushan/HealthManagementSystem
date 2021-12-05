<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta2/css/all.min.css" integrity="sha512-YWzhKL2whUzgiheMoBFwW8CKV4qpHQAEuvilg9FAn5VJUDwKZZxkJNuGM4XkWuk94WCrrwslk8yWNGmY1EduTA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <title>Document</title>
</head>
<body >
 
<nav class="navbar navbar-inverse navbar-fixed-top" style="padding: 10px;">
  <div class="container-fluid">
    
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="#"  style=" font-size:2.5rem;">Ammachii..</a>
    </div>

    
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
     
      <ul class="nav navbar-nav navbar-right" >
         <li><a href="#" style=" font-size:2.5rem;">Home</a></li>
         <li><a href="#Services" style=" font-size:2.5rem;">Services</a></li>
         <li><a href="#contact" style=" font-size:2.5rem;">Contact US</a></li>
     
      </ul>
    </div>
  </div>
</nav>
<header style="background:url('img/background.jpg');
                        background-position: center;
                        background-size: cover;
                        background-repeat: no-repeat;
                        height:100vh;
                        ">
<div class="container" >
    <div class="row">
        <div class="col-md-7">
            <h1 style=" font-size:5rem;margin-top:250px;">Get Better Healthcare,<br><hr>Make Life Beautiful.. <i class=" fa fa-stethoscope"></i></h1><hr>
            <h4> We are best leading meadical services providers of your<br> city we always ensure patients satisfactions </h4><br>
           
            <a class="btn btn-success" href="dashboard.php" role="button" style="width:250px"><h5><i class=" fa fa-stethoscope"></i> Get started</h5></a><br>
        </div>  
    </div>    
</div>
</header>

<!-- --------------Services---------------------- -->
<?php
include_once "css/style.php";
?>                           
<div id="Services">
<div style="text-align: center; " class="container ">
        <h1 style="font-size:4rem; color:black;">At Your Service</h1><br>
        <hr><br><br>
    
  <div class="col-lg-4">
        <div class="hover hover-2 text-white rounded"><img src="img/health.jpg" alt="">
          <div class="hover-overlay"></div>
          <div class="hover-2-content px-5 py-4">
            <h4 class="hover-2-title text-uppercase font-weight-bold mb-0" style="color:white;"> <span class="font-weight-light">Health </span>management</h4>
          </div>
        </div>
      </div>
      <div class="col-lg-4">
        <div class="hover hover-2 text-white rounded"><img src="img/diet.jpg" alt="">
          <div class="hover-overlay"></div>
          <div class="hover-2-content px-5 py-4">
            <h4 class="hover-2-title text-uppercase font-weight-bold mb-0" style="color:white;"> <span class="font-weight-light">diet </span>management</h4>
          </div>
        </div>
      </div>
      <div class="col-lg-4">
        <div class="hover hover-2 text-white rounded"><img src="img/fitness.jpg" alt="">
          <div class="hover-overlay"></div>
          <div class="hover-2-content px-5 py-4">
            <h4 class="hover-2-title text-uppercase font-weight-bold mb-0"style="color:white;"> <span class="font-weight-light">Fitness </span>management</h4>
          </div>
        </div>
      </div>
      
</div>
</div><br><br><br><br>

<!-- -------------------------contact------------------- !-->
<div id="contact" style="background: linear-gradient(to bottom, rgba(92, 77, 66, 0.8) 0%, rgba(92, 77, 66, 0.8) 100%),
                            url('img/services.jpg');
                            height:70vh;
                            background-size:cover;
                            background-position:center center; 
                            background-repeat:no-repeat;">

<div class="container ">

    <div class="row  ">

        <div class="col-lg-12 text-center">

            <h2 style="color : white; font-size : 4rem;">contact</h2>

            <hr>
<div class="form">

<form action="section/signup.php" method="post">
  <div class="row">
    <div class="form-group col-md-12">
      <input type="text" name="name" class="form-control" id="name" placeholder="Your Name">
    </div>
    <div class="form-group col-md-12 ">
      <input type="text" class="form-control" name="email" id="email" placeholder="Your Email">
    </div>
    <div class="form-group col-md-12">
          <input type="text" name="phone_num" class="form-control" id="username" placeholder="Your Phone Number">
      </div>
    <div class="form-group col-md-12 ">
          <textarea class="form-control" id="message" type="text" placeholder="Enter your message here..." style="height: 10rem" data-sb-validations="required"></textarea>
      </div>
  </div>
  <div class="cd-md-6"style="text-align: center;">
      <input type="submit" name="submit" class="btn btn-default "style="width: 200px;border-radius: 30px;" value="CONTACT US !">
  </div>
</form><br><br><br><br>
</div>

          
        </div>
    </div>
</div>
</div>
   <script src="js/bootstrap.min.js"></script>
   <script src="js/jquery.min.js"></script> 
</body>
</html>