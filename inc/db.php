<?php 
$databaseServerName = 'localhost';
$databaseUserName ='root';
$databasePassword ='';
$databaseName ='daniel_krossing';
//create a connection
$connection = mysqli_connect($databaseServerName,$databaseUserName,$databasePassword,$databaseName);
 
//To Check connection if it has connected to the database

if($connection->connect_error){
    die('connection to the database has failed'. $connection->connect_error);
}
echo "CONNECTED";
?>