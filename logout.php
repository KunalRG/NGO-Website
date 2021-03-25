<?php
session_start();

if(!isset($_SESSION['loggedin']) || $_SESSION['loggedin']!=true){
    header("location: login.php");
    exit;
}


?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

    <title>Profile<?php $_SESSION['username']?></title>
    <style>
    body{
          background-color:rgb(224,224,224);
        }
    .dropdown-item{
      color:red;
      background-color:rgb(51,255,51);
      font-weight:500;
    }
    .card-title{
      font-size:20px;
      font-weight:bold;
      
    }
    .card{
      display: inline-block;
    }
    .card-img-top{
      height:200px;
      width:100%;
    }
    h2{
      margin-left:10px ;margin-right:100px;
      color:rgb(102,0,51);
      font-weight:bold;
    }
    #logo{
       height:100px;
     }
    #msg{
      color:black;
      padding:5px;
      width:500px;
      background-color:rgb(0,255,0);
      font-weight:bold;
    }
    </style>
  </head>
  <body>
  <nav class="navbar navbar-expand-lg navbar-dark bg-primary">
  <img src="img/logo2.jpg" id="logo" alt="">
  <h2>ASARA</h2>
  
  
    <!-- Bootstrap dropdwn-->
  <div class="dropdown">
    <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" 
    style="color:red;background-color:rgb(51,255,51);font-family: Times New Roman, Times, serif;font-size: 20px;margin-left:1000px;font-weight: 900;">
    Welcome <?php echo $_SESSION['username']?> !!
    </button>
    <div class="dropdown-menu" aria-labelledby="dropdownMenuButton" style="margin-left:1000px; background-color:rgb(51,255,51);">
    <a class="dropdown-item" href="login.php" >Logout</a>
    
    </div>
  </div>
  
</nav>     

<!-- Bootstrap cards-->
    
<div class="card" style="width: 18rem;">
  <img src="img/6.jpg" class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title">Raja</h5>
    <p class="card-text">Hi !! <br>I am Raja.I am 2 years old.</p>
    <a href="#" class="btn btn-primary">Adopt</a>
  </div>
</div>
<div class="card" style="width: 18rem;">
  <img src="img/7.jpg" class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title">Alex</h5>
    <p class="card-text">Hi !! <br>I am Alex.I am 1 years old.</p>
    <a href="#" class="btn btn-primary">Adopt</a>
  </div>
</div>
  <div class="card" style="width: 18rem;">
    <img src="img/back.jpg" class="card-img-top" alt="...">
    <div class="card-body">
      <h5 class="card-title">Manju</h5>
      <p class="card-text">Hi !! <br>I am Manju.I am 3 years old.</p>
      <a href="#" class="btn btn-primary">Adopt</a>
    </div>
  </div>
  <div class="card" style="width: 18rem;">
    <img src="img/6.jpg" class="card-img-top" alt="...">
    <div class="card-body">
      <h5 class="card-title">Raja</h5>
      <p class="card-text">Hi !! <br>I am Raja.I am 2 years old.</p>
      <a href="#" class="btn btn-primary">Adopt</a>
    </div>
  </div>
  <p id="msg">Contact officials for further process of Adaptation</p>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
  </body>
</html>
