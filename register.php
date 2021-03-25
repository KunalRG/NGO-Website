<?php
$showAlert = false;
$showError = false;
$errorN = false;
$errorT = false;
$errorA = false;
$errorC = false;
$errorS = false;
if($_SERVER["REQUEST_METHOD"] == "POST"){
    include 'db2.php';
    $result=false;
    $name = $_POST["name"];
    $type = $_POST["type"];
    $address = $_POST["address"];
    $city = $_POST["city"];
    $state = $_POST["state"];
    if($name==""){
      $errorN = true;
    }
    if($type==""){
      $errorT = true;
    }
    if($address==""){
      $errorA = true;
    }
    if($city==""){
      $errorC = true;
    }
    if($state==""){
      $errorS = true;
    }
    
    if($name!="" && $type!="" && $address!="" && $city!="" && $state!="" )
    {
    $sql = "INSERT INTO `cases`(`name`, `type`, `address`, `city`, `state`, `date`) VALUES ('$name', '$type', '$address','$city','$state', current_timestamp())";
    $result = mysqli_query($conn, $sql);
    }
    if ($result){
      $showAlert = true;
  }
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

    <title>Register</title>
    <style>
    body{
          background-color:rgb(224,224,224);
        }
    .nav-link{
      font-size:20px;
      margin-right:15px;
    }
    h2{
      margin-left:10px ;margin-right:100px;color:rgb(102,0,51);
      font-weight:bold;
    }
    #logo{
       height:100px;
     }
    </style>
  </head>
  <body>
  <nav class="navbar navbar-expand-lg navbar-dark bg-primary">
  <img src="img/logo2.jpg" id="logo" alt="">
  <h2>ASARA</h2>
  

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item ">
        <a class="nav-link" href="/login2/home.php" >Home</a>
      </li>
      <li class="nav-item ">
        <a class="nav-link" href="/login2/signup.php" >Signup</a>
      </li>
      <li class="nav-item ">
        <a class="nav-link" href="/login2/login.php" >Login </a>
      </li>
      <li class="nav-item active">
        <a class="nav-link" href="/login2/register.php" >Register <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item ">
        <a class="nav-link" href="/login2/help.php" >Help</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="/login2/Reward.php" >Rewards</a>
      </li>
    </ul>
    <!--<form class="form-inline my-2 my-lg-0">
      <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
      <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
    </form>-->
  </div>
</nav>

    <?php
    if($errorN){
      echo ' <div class="alert alert-danger alert-dismissible fade show" role="alert">
        <strong>Error!</strong> Please enter your Name.
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">×</span>
        </button>
    </div> ';
    }
    if($errorT){
      echo ' <div class="alert alert-danger alert-dismissible fade show" role="alert">
        <strong>Error!</strong> Please enter type of animal.
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">×</span>
        </button>
    </div> ';
    }
    if($errorA){
      echo ' <div class="alert alert-danger alert-dismissible fade show" role="alert">
        <strong>Error!</strong> Please enter Address.
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">×</span>
        </button>
    </div> ';
    }
    if($errorC){
      echo ' <div class="alert alert-danger alert-dismissible fade show" role="alert">
        <strong>Error!</strong> Please enter City.
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">×</span>
        </button>
    </div> ';
    }
    if($errorS){
      echo ' <div class="alert alert-danger alert-dismissible fade show" role="alert">
        <strong>Error!</strong> Please enter State.
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">×</span>
        </button>
    </div> ';
    }
    if($showAlert){
    echo ' <div class="alert alert-success alert-dismissible fade show" role="alert">
        <strong>Success!</strong> You have successfully help a needy animal.Thank you for your kind gesture.
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">×</span>
        </button>
    </div> ';
    }
    if($showError){
    echo ' <div class="alert alert-danger alert-dismissible fade show" role="alert">
        <strong>Error!</strong> '. $showError.'
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">×</span>
        </button>
    </div> ';
    }
    ?>

    <div class="container my-4">
     <h1 class="text-center">Register needy animal here</h1>
     <!--Form of registration-->
     <form action="/login2/register.php" method="post">
     <div class="form-row">
    <div class="form-group col-md-6">
      <label for="name">Name</label>
      <input type="text" class="form-control" id="name" name="name">
    </div>
    <div class="form-group col-md-6">
      <label for="type">Type of animal</label>
      <input type="text" class="form-control" id="type" name="type" placeholder="Eg.Dog,cat etc.">
    </div>
  </div>
  <div class="form-group">
    <label for="address">Address</label>
    <input type="text" class="form-control" id="address" name="address" placeholder="Street no.___,Plot no.___">
  </div>
  <div class="form-row">
    <div class="form-group col-md-6">
      <label for="city">City</label>
      <input type="text" class="form-control" id="city" name="city">
    </div>
    <div class="form-group col-md-4">
      <label for="state">State</label>
      <select id="state" class="form-control" name="state">
        <option selected>Choose...</option>
        <option>Maharashtra</option>
        <option>Gujrat</option>
        <option>Goa</option>
        <option>Rajasthan</option>
      </select>
    </div>
    
  </div>
  
  <button type="submit" class="btn btn-primary">Register</button>
     </form>
    </div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
  </body>
</html>