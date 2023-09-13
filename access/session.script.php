<?php 
session_start();
if(!isset($_SESSION['id']) || !isset($_SESSION['name'])){
    header('Location: http://localhost/bookproject/access/logout.php');
    exit();
}

if(isset($_SESSION['time']) && time() - $_SESSION['time']> 240){
session_unset();
session_destroy();
header('Location: http://localhost/bookproject/access/logout.php');
}
?>