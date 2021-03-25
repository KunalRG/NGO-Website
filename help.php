<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <title>Help</title>
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
      font-weight:bold;}
    #logo{
       height:100px;
     }
    #list:hover{
        background-color:rgb(253,174,38);
        color:rgb(0,0,255);
    }
    
    </style>
</head>
<body>

<nav class="navbar navbar-expand-lg navbar-dark bg-primary">
  <img src="img/logo2.jpg" id="logo" alt="">
  
  <h2>ASARA</h2>
  

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item">
        <a class="nav-link" href="/login2/home.php" >Home</a>
      </li>
      <li class="nav-item ">
        <a class="nav-link" href="/login2/signup.php" >Signup</a>
      </li>
      <li class="nav-item ">
        <a class="nav-link" href="/login2/login.php" >Login</a>
      </li>
      <li class="nav-item ">
        <a class="nav-link" href="/login2/register.php" >Register</a>
      </li>
      <li class="nav-item active">
        <a class="nav-link" href="/login2/help.php" >Help </a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="/login2/Reward.php" >Rewards</a>
      </li>
    </ul>
    
  </div>


</nav>

<div class="list-group">
  <a href="#" class="list-group-item list-group-item-action" id="list">
    <div class="d-flex w-100 justify-content-between">
      <h5 class="mb-1">Voluteers required</h5>
      <small>3 days ago</small>
    </div>
    <p class="mb-1">On coming sunday we are planning to organize a camp where we are giving free vaccination to various animals.</p>
    <small>Campaign Timing:10AM-4PM</small>
  </a>
  <a href="#" class="list-group-item list-group-item-action" id="list"> 
    <div class="d-flex w-100 justify-content-between">
      <h5 class="mb-1">Clean MULA,Beatiful Pune!!!</h5>
      <small class="text-muted">1 week ago</small>
    </div>
    <p class="mb-1">On coming sunday we are planning to organize a Mula-Mutha river cleaning campaign</p>
    <small>All gears will be provided</small>
  </a>
  <a href="#" class="list-group-item list-group-item-action" id="list">
    <div class="d-flex w-100 justify-content-between">
      <h5 class="mb-1">Teach India</h5>
      <small class="text-muted">3 days ago</small>
    </div>
    <p class="mb-1">Here we are going to different municipal school.Teach them the current technologies and guide them to toward their career.</p>
    <small>1 month<br>Every weeks Saturday.</small>
  </a>
</div>
</body>
</html>