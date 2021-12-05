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
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta2/css/all.min.css" integrity="sha512-YWzhKL2whUzgiheMoBFwW8CKV4qpHQAEuvilg9FAn5VJUDwKZZxkJNuGM4XkWuk94WCrrwslk8yWNGmY1EduTA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <title>Document</title>
</head>
<body >
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

<div class="container" style="margin-top:70px ;">
    <div class="row">
        <div class="col-md-12">
           <h1><i class="fa fa-stethoscope"></i> Doctors</h1>
           <hr>
        </div>
        <div class="col-md-3">
            <ul class="nav navbar-stacked">
                <li><a href="Doctor.php"><h4><i class="fa fa-heartbeat"></i> CARDIOLOGIST</a></h4></li>
                <hr>
                <li><a href="Doctor.php"><h4><i class="fa fa-brain"></i> NEURO SURGEON</a></h4></li>
                <hr>
                <li><a href="Doctor.php"><h4><i class="fa fa-tooth"></i> DENTIST</a></h4></li>
                <hr>
                <li><a href="Doctor.php"><h4><i class="fa fa-eye"></i> OPHTHALMOLOGIST</a></h4></li>    
                <hr>
                <li><a href="Doctor.php"><h4><i class="fa fa-walking"></i> PHYSICIAN</a></h4></li>    
                <hr>
            </ul>

        </div><br><br>
    

      
        <div class="col-md-9">
            <form action="" method="POST">
                <button class="btn btn-success" name="btn1" type="submit"><i class="fa fa-heartbeat"></i> Cardiologist</button>
                <button class="btn btn-success" name="btn2" type="submit"><i class="fa fa-brain"></i> Neuro Surgen</button>
                <button class="btn btn-success" name="btn3" type="submit"><i class="fa fa-tooth"></i> dentists</button>
                <button class="btn btn-success" name="btn4" type="submit"><i class="fa fa-eye"></i> Ophthalmologist</button>
                <button class="btn btn-success" name="btn5" type="submit"><i class="fa fa-walking"></i> Physician</button>
                
            </form>


        <?php

          if(isset($_POST['btn1'])){

            $sql = "SELECT * FROM cardio";

            $result = $Dbcon->query($sql);
            
                echo"<br><br><div class='col-md-12'>

                <table class='table table-striped table-hover table-responsive'>
                    <tr>

                        <th>No</th>
                        <th>Doctor Name</th>
                        <th>Degree</th>
                        <th>SLMC No</th>
                        <th>Visiting Hospithal</th>

                  </tr>";

            while($rows = $result->fetch_assoc()){

            echo"
            <tr>
                <td>". $rows['ID'] ."</td>
                <td>". $rows['Name'] ."</td>
                <td>". $rows['Degree'] ."</td>
                <td>". $rows['slmc'] ."</td>
                <td>". $rows['hospital'] ."</td>
            </tr>";


            }    

            echo "</table>";

      }

      if(isset($_POST['btn2'])){

        $sql = "SELECT * FROM neuro";

        $result = $Dbcon->query($sql);

            echo"<br><br><div class='col-md-12'>

            <table class='table table-striped table-hover table-responsive'>
                <tr>
                    <th>No</th>
                    <th>Doctor Name</th>
                    <th>Degree</th>
                    <th>SLMC No</th>
                    <th>Visiting Hospithal</th>

              </tr>";

        while($rows = $result->fetch_assoc()){

        echo"
        <tr>
            <td>". $rows['ID'] ."</td>
            <td>". $rows['Name'] ."</td>
            <td>". $rows['Degree'] ."</td>
            <td>". $rows['slmc'] ."</td>
            <td>". $rows['hospital'] ."</td>
        </tr>";


        }    

        echo "</table>";


      }

      if(isset($_POST['btn3'])){

        $sql = "SELECT * FROM dentists";

        $result = $Dbcon->query($sql);
        
            echo"<br><br><div class='col-md-12'>

            <table class='table table-striped table-hover table-responsive'>
                <tr>

                    <th>No</th>
                    <th>Doctor Name</th>
                    <th>Degree</th>
                    <th>SLMC No</th>
                    <th>Visiting Hospithal</th>

              </tr>";

        while($rows = $result->fetch_assoc()){

        echo"
        <tr>
            <td>". $rows['ID'] ."</td>
            <td>". $rows['Name'] ."</td>
            <td>". $rows['Degree'] ."</td>
            <td>". $rows['slmc'] ."</td>
            <td>". $rows['hospital'] ."</td>
        </tr>";


        }    

        echo "</table>";

  }




  if(isset($_POST['btn4'])){

    $sql = "SELECT * FROM Ophthalmologist";

    $result = $Dbcon->query($sql);
    
        echo"<br><br><div class='col-md-12'>

        <table class='table table-striped table-hover table-responsive'>
            <tr>

                <th>No</th>
                <th>Doctor Name</th>
                <th>Degree</th>
                <th>SLMC No</th>
                <th>Visiting Hospithal</th>

          </tr>";

    while($rows = $result->fetch_assoc()){

        echo"
        <tr>
            <td>". $rows['ID'] ."</td>
            <td>". $rows['Name'] ."</td>
            <td>". $rows['Degree'] ."</td>
            <td>". $rows['slmc'] ."</td>
            <td>". $rows['hospital'] ."</td>
        </tr>";


        }    

        echo "</table>";

}



if(isset($_POST['btn5'])){

  $sql = "SELECT * FROM Physician";

  $result = $Dbcon->query($sql);
  
      echo"<br><br><div class='col-md-12'>

      <table class='table table-striped table-hover table-responsive'>
          <tr>

              <th>No</th>
              <th>Doctor Name</th>
              <th>Degree</th>
              <th>SLMC No</th>
              <th>Visiting Hospithal</th>

        </tr>";

  while($rows = $result->fetch_assoc()){

      echo"
      <tr>
          <td>". $rows['ID'] ."</td>
          <td>". $rows['Name'] ."</td>
          <td>". $rows['Degree'] ."</td>
          <td>". $rows['slmc'] ."</td>
          <td>". $rows['hospital'] ."</td>
      </tr>";


      }    

      echo "</table>";

}




        ?>

        </div>     

   
   <script src="js/jquery.min.js"></script> 
   <script src="js/bootstrap.min.js"></script>
</body>
</html>