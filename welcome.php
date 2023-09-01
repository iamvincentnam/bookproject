<?php
 session_start(); 
if(!isset($_SESSION['id'])  ||  !isset($_SESSION['username'])){
    header("Location: login.php"); 
    exit();

}

if(isset($_SESSION['login_time']) && (time() -$_SESSION['login_time'] > 61)){
    header("Location: login.php");
}

if(isset($_GET['logout'])){
//clear all session Data
session_unset();
session_destroy();
//Redirect to the login Page
header("Location: login.php"); 
exit();
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
<style>
    
    body{background-color: hsl(217,28%,16%);}
    .container{
      
        height: 100vh;
    border: 1px solid #7f7f7f;
        display: grid;
        place-items: center;
        align-self: center;
    }

  .container .welcome_message
  {
display: flex;
flex-direction: column;
justify-content: space-evenly;
align-items: center;}
    .container h1{font-size: 3rem;
    color: #ffff;
    letter-spacing: 2px;}

    .welcome_message h1 span{text-transform: capitalize;}
    @media (max-width:630px) {
        .welcome_message h1{font-size: 2.3rem;}
    }
</style>
    <title>Welcome <?=  $_SESSION['name'] ;?></title>
</head>
<body>
<?php if(isset($_SESSION['id'])  && isset($_SESSION['username'])): ?>
   <div class="container my-5 p-4 ">
    <div class="row">
        <div class="welcome_message">
        <h1 class="text-center">You are Welcome, <span><?=  $_SESSION['name'] ;?></span> </h1>
<button class="btn px-3 mx-auto btn-success shadow my-4" name="logout">  Logout  Now</button>
        </div>
    
    </div>
   </div>
   
    <?php endif ; ?>
</body>
</html>


