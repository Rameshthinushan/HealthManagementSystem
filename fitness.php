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
   
        <li class=""><a href="diet.php">Diet  <i class="fa fa-hamburger"> </i></a></li>
        <li class=""><a href="fitness.php">Fitness  <i class="fa fa-child"> </i></a></li>
        <li class=""><a href="Doctor.php">Doctors  <i class="fa fa-stethoscope"> </i></a></li>
      
      </ul>
      <ul class="nav navbar-nav navbar-right">
        <li><a href="http://localhost/HealthMS/index.php"><span class="glyphicon glyphicon-user"></span> Goto home page</a></li>
      </ul>
    </div>
  </div>
</nav>

<div class="container" style="margin-top:70px">
<div class="row">
    <div class="col-md-12">
        <h2><i class="fa fa-child"></i> Fitness</h2><hr>
    </div>
    <div class="col-md-4">
        <ul class="nav navbar-stacked"style="margin-top:60px" >
            <li><a href="#"><h3><i class="fa fa-dumbbell"></i> BMI</h3></a></li><hr>
            <li><a href="male.php"><h3><i class="fa fa-male"></i> Male</h3></a></li><hr>
            <li><a href="female.php"><h3><i class="fa fa-female"></i> Female</h3></a></li><hr>
        </ul>
    </div><h3></h3>
    <div class="col-md-4">
        <form action="" method="POST">
            <h3><i class="fa fa-book-medical"></i> Calculate BMI</h3><hr>
            <div class="form-group">
                <label for="height"><h4><i class="fa fa-child"></i> Height</h4></label>
                <input type="text" name="height" class="form-control" placeholder="Enter Your Height">
            </div>
            <div class="form-group">
                <label for="Weight"><h4><i class="fa fa-weight"></i> Weight</h4></label>
                <input type="text" name="Weight" class="form-control" placeholder="Enter Your Weight">
            </div>
            <button class="btn btn-success" name="btn"><i class="fa fa-calculator"></i> Calculate</button><br><br>
        </form>
        <?php
        if(isset($_POST['btn'])){
            $height=$_POST['height'];
            $weight=$_POST['Weight'];
            $bmi=0;
            
            if(empty($height)||empty($weight)){
               echo' <div class="alert alert-danger" role="alert">Fill in all fields!</div>';
            }else{
                $bmi =($weight/($height*$height))*10000;
                echo ' <div class="alert alert-success" role="alert">Your BMI IS  '.$bmi.'</div>';
            }
           
        }           
        ?>
    </div>
    <div class="col-md-4" style="padding-top:70px ;">
        <img src="img/bmi.png" alt="..." class="img-thumbnail">
    </div>
 
    </div>
</div>
</div>
<script src="js/jquery.min.js"></script>
<script src="js/bootstrap.min.js"></script>
</body>
</html>