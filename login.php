

<?php
session_start();
$dsn = "mysql:host=localhost; port=3306; dbname=daniel_krossing; user=root; charset=utf8mb4";

$pdo = new PDO($dsn);
function fetch_Data_from_Database($query){

    global $pdo;
    $statement = $pdo->prepare($query);
    $statement ->execute();
    $user = $statement ->fetch(PDO::FETCH_ASSOC);
    return $user;
}


$username_error= $password_error ='';
if(isset($_POST['login'])){
    
    if(!empty( $_POST['username_login'] )){
        $username =filter_input(INPUT_POST,'username_login',FILTER_SANITIZE_FULL_SPECIAL_CHARS);

    }else{
$username_error ="<span class='text-danger'> username is required </span>";
    }
//validate password input
if(!empty( $_POST['password_login'] )){
    $password =filter_input(INPUT_POST,'password_login',FILTER_SANITIZE_FULL_SPECIAL_CHARS);

}else{
$password_error ="<span class='text-danger'>Password is required </span>";
}
if(empty($username_error) && empty($password_error)){
    $query = "SELECT * FROM USERS WHERE username ='$username' AND pass ='$password';"; 
   $user =fetch_Data_from_Database($query);
//     echo "<pre>";
//    var_dump($user);
//    echo "<pre>";

if($user){
$_SESSION['id']= $user['user_id'];
$_SESSION['username']= $user['username'];
$_SESSION['name']= $user['name'];
$_SESSION['login_time']= time();


header("Location: welcome.php");
exit();
}else{$error_message ="Username or Password is incorrect";}
}
   
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">

    <title>Login Page</title>
</head>
<body>
   <div class="container border my-4 p-4">
    <div class="row">
    <form action="<?php echo $_SERVER['PHP_SELF'] ?>" class="bg-dark col-lg-4 mx-auto p-4 rounded" method="post">
    <h1 class="text-center text-light fw-normal">Login</h1>
    <div class="form_div my-4">
   <?php if(isset($error_message)): ?>
    <p class="bg-white text-danger text-center p-2 fw-bold"> <?= $error_message ;?></p>
    <?php endif; ?>
    <label for="username_login" class="text-light fw-bold"> Username</label>
    <input type="text" class="form-control px-2 rounded" name="username_login" id="username_login"> 
    <?= $username_error ;?>
    </div>


    <div class="form_div my-4">
    <label for="username_login" class="text-light  fw-bold"> Password</label>
    <input type="password" class="form-control px-2 rounded" name="password_login" id="password_login"> 
    <?= $password_error ?>
    </div>

    <div class="form_div my-4 col-lg-6 mx-auto border-0">
    <input type="submit" class="form-control px-2 rounded bg-success text-center border-0 fw-bold text-muted" name="login"> 
    </div>

    </form>
    </div>
   </div>
</body>
</html>