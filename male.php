<?php
error_reporting(0);

$Dbcon = new mysqli("localhost","root","","HMS");

?>

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
        <h2><i class="fa fa-dumbbell"></i> Work Out</h2><hr>
    </div>
    <div class="col-md-2">
        <ul class="nav navbar-stacked" >
            <li><a href="#"><h4><i class="fa fa-hand-point-right"></i> Chest</h4></a></li>
            <li><a href="male.php"><h4><i class="fa fa-hand-point-right"></i> Back</h4></a></li>
            <li><a href="#"><h4><i class="fa fa-hand-point-right"></i> Leg</h4></a></li><hr>
            <li><a href="#"><h4><i class="fa fa-hand-point-right"></i> Shoulder</h4></a></li>
            <li><a href="male.php"><h4><i class="fa fa-hand-point-right"></i> Arm</h4></a></li>
            <li><a href="#"><h4><i class="fa fa-hand-point-right"></i> Forarms</h4></a></li>
        </ul>
    </div>

<div class="row">
 <form action="" method="POST">
  <div class="col-md-2">
    <div class="thumbnail">
      <img src="img/chest_workout.jpg" alt="...">
      <div class="caption">
        <h3>Chest</h3>
        <p><h3><button class="btn btn-success" type="submit" name="chest">Click <i class="fa fa-hand-pointer"></i> </button></h3></p>
      </div>
    </div>
  </div>

  <div class="col-md-2">
    <div class="thumbnail">
      <img src="img/backWork.jpg" alt="...">
      <div class="caption">
        <h3>Back</h3>
        <p><h3><button class="btn btn-success" type="submit" name="back">Click <i class="fa fa-hand-pointer"></i> </button></h3></p>
      </div>
    </div>
  </div>

  <div class="col-md-2">
    <div class="thumbnail">
      <img src="img/shoulder.jpg" alt="...">
      <div class="caption">
        <h3>Shoulder</h3>
        <p><h3><button class="btn btn-success" type="submit" name="shoulder">Click <i class="fa fa-hand-pointer"></i> </button></h3></p>
      </div>
    </div>
  </div>

  <div class="col-md-2">
    <div class="thumbnail">
      <img src="img/leg.jpg" alt="...">
      <div class="caption">
        <h3>Leg</h3>
        <p><h3><button class="btn btn-success" type="submit" name="leg">Click <i class="fa fa-hand-pointer"></i> </button></h3></p>
      </div>
    </div>
  </div>
  <div class="col-md-9">
<?php


  if(isset($_POST['chest'])){
    $sql = "SELECT * FROM chest";

    $result = $Dbcon->query($sql);
    
        echo"<br><br><div class='col-md-12'>

        <table class='table table-striped table-hover table-responsive'>
            <tr>

                <th>No</th>
                <th>Muscle Name</th>
                <th>Workout</th>
                <th>Reps</th>
                <th>Times</th>

          </tr>";

       while($rows = $result->fetch_assoc()){

          echo"
          <tr>
              <td>". $rows['id'] ."</td>
              <td>". $rows['muscleName'] ."</td>
              <td>". $rows['workout'] ."</td>
              <td>". $rows['reps'] ."</td>
              <td>". $rows['times'] ."</td>
          </tr>";


    }    

      echo "</table>";

  }

  if(isset($_POST['back'])){
    $sql = "SELECT * FROM back";

    $result = $Dbcon->query($sql);
    
        echo"<br><br><div class='col-md-12'>

        <table class='table table-striped table-hover table-responsive'>
            <tr>

                <th>No</th>
                <th>Muscle Name</th>
                <th>Workout</th>
                <th>Reps</th>
                <th>Times</th>

          </tr>";

       while($rows = $result->fetch_assoc()){

          echo"
          <tr>
              <td>". $rows['id'] ."</td>
              <td>". $rows['muscleName'] ."</td>
              <td>". $rows['workout'] ."</td>
              <td>". $rows['reps'] ."</td>
              <td>". $rows['times'] ."</td>
          </tr>";


    }    

      echo "</table>";

  }

  if(isset($_POST['shoulder'])){
    $sql = "SELECT * FROM shoulder";

    $result = $Dbcon->query($sql);
    
        echo"<br><br><div class='col-md-12'>

        <table class='table table-striped table-hover table-responsive'>
            <tr>

                <th>No</th>
                <th>Muscle Name</th>
                <th>Workout</th>
                <th>Reps</th>
                <th>Times</th>

          </tr>";

       while($rows = $result->fetch_assoc()){

          echo"
          <tr>
              <td>". $rows['id'] ."</td>
              <td>". $rows['muscleName'] ."</td>
              <td>". $rows['workout'] ."</td>
              <td>". $rows['reps'] ."</td>
              <td>". $rows['times'] ."</td>
          </tr>";


    }    

      echo "</table>";

  }

  if(isset($_POST['leg'])){
    $sql = "SELECT * FROM leg";

    $result = $Dbcon->query($sql);
    
        echo"<br><br><div class='col-md-12'>

        <table class='table table-striped table-hover table-responsive'>
            <tr>

                <th>No</th>
                <th>Muscle Name</th>
                <th>Workout</th>
                <th>Reps</th>
                <th>Times</th>

          </tr>";

       while($rows = $result->fetch_assoc()){

          echo"
          <tr>
              <td>". $rows['id'] ."</td>
              <td>". $rows['muscleName'] ."</td>
              <td>". $rows['workout'] ."</td>
              <td>". $rows['reps'] ."</td>
              <td>". $rows['times'] ."</td>
          </tr>";


    }    

      echo "</table>";

  }
?>
</div>
</form> 
</div>
</div>
</div>
<script src="js/jquery.min.js"></script>
<script src="js/bootstrap.min.js"></script>
</body>
</html>