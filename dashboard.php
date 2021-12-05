<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta2/css/all.min.css" integrity="sha512-YWzhKL2whUzgiheMoBFwW8CKV4qpHQAEuvilg9FAn5VJUDwKZZxkJNuGM4XkWuk94WCrrwslk8yWNGmY1EduTA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
<body>
<nav class="navbar navbar-inverse navbar-fixed-top">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="#">Ammachii...</a>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav">
        <li class="active"><a href="#">Dashboard  <i class="glyphicon glyphicon-th"> </i></a></li>
      
      </ul>
      <ul class="nav navbar-nav navbar-right">
        <li><a href="http://localhost/HealthMS/index.php"><span class="glyphicon glyphicon-user"></span> Goto home page</a></li>
      </ul>
    </div>
  </div>
</nav>
<div class="container" style="margin-top:100px ;">
    <div class="row">
        <div class="col-md-12">
           <h1><i class="	glyphicon glyphicon-th"></i> Dashboard</h1>
           <hr>
        </div>
        <div class="col-md-4">
            <ul class="nav navbar-stacked">
                <li><a href="diet.php"><h3><i class="fa fa-hamburger"></i> Diet Management</a></h3></li>
                <hr>
                <li><a href="fitness.php"><h3><i class="fa fa-child"></i> Fitness Management</a></h3></li>
                <hr>
                <li><a href="doctor.php"><h3><i class="fa fa-stethoscope"></i> Doctors</a></h3></li>    
                <hr>
            </ul>
        </div><br><br>
          <?php
            include_once "css/style.php";
          ?>        
        <div class="col-md-6">
          <div class="hover hover-2 text-white rounded"><img src="img/dashboard.jpg" alt="">
            <div class="hover-overlay"></div>
              <div class="hover-2-content px-5 py-4">
              <h4 class="hover-2-title text-uppercase font-weight-bold mb-0" style="color:white;"> <span class="font-weight-light">Health </span>management</h4>
          </div>
        </div>
        <nav aria-label="Page navigation" align="center">
          <ul class="pagination">
              <li>
                <a href="#" aria-label="Previous">
                  <span aria-hidden="true">&laquo;</span>
                </a>
              </li>
                 <li><a href="#">1</a></li>
                 <li><a href="#">2</a></li>
                 <li><a href="#">3</a></li>
                 <li><a href="#">4</a></li>     
              <li>
                  <a href="#" aria-label="Next">
                      <span aria-hidden="true">&raquo;</span>
                  </a>   
              </li>
          </ul>
          
        </nav>
</div>
</div>    
</div>
</div>
   <script src="js/jquery.min.js"></script>
   <script src="js/bootstrap.min.js"></script>
</body>
</html>