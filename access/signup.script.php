<!-- This section is for the Signup form validation and authentication -->
<?php 
// session_start();

$dsn = "mysql:host=localhost;port=3306;dbname=daniel_krossing;user=root;charset=utf8mb4";
$pdo = new PDO($dsn);

function insert_Data_into_Database($sql_insertion) {
    global $pdo;
    $statement = $pdo->prepare($sql_insertion);
    return $statement->execute();
}
$firstName =$username =$email =$password = $insertion_message = '';
$firstName_error =$username_error= $email_error =$password_error ='';


if(isset($_POST['signup'])){

    // echo $_POST['first_name']. "<br>";
    // echo $_POST['signup_username']. "<br>";
    // echo $_POST['email']. "<br>";
    // echo $_POST['signup_password']. "<br>";

    if(empty($_POST['first_name']))
    // FIRST NAME VALIDATION
    {
        $firstName_error ="<p class='text-danger m-0'>first name  required</p>";  
    }else
    {
        $firstName= filter_input(INPUT_POST,'first_name', FILTER_SANITIZE_FULL_SPECIAL_CHARS);
    }


    //USERNAME VALIDATION
    
    if(empty($_POST['signup_username']))
    
    {
        $username_error ="<p class='text-danger m-0'> Username required </p>";  
    }else
    {
        $username = filter_input(INPUT_POST,'signup_username', FILTER_SANITIZE_FULL_SPECIAL_CHARS);
    }
 //EMAIL  VALIDATION
    
 if(empty($_POST['email']))
    
 {
     $email_error ="<p class='text-danger m-0'> e-mail required </p>";  
 }else
 {
     $email = filter_input(INPUT_POST,'email', FILTER_SANITIZE_EMAIL);
 }

//PASSWORD  VALIDATION
    
if(empty($_POST['signup_password']))
    
{
    $password_error ="<p class='text-danger m-0'> password required</p>"; 
    
    
}elseif(strlen($_POST['signup_password'])>8){
    $password_error ="<p class='text-danger m-0'>Password must be less than 8 characters</p>"; 

}
else{
    $password = filter_input(INPUT_POST,'signup_password', FILTER_SANITIZE_FULL_SPECIAL_CHARS);
}

    if(empty($firstName_error)
     &&
     empty($username_error)
      && 
     empty($email_error) 
     &&
      empty($password_error)){
    
        
      $sql_insertion=  "INSERT INTO users (first_name,username,user_email,pass) VALUES     ('$firstName',
      '$username','$email','$password');";
    
      if(insert_Data_into_Database($sql_insertion)){
        
        $insertion_message ="<p class='text-success fw-bold text-center bg-light p-2 rounded shadow col-lg-6 mx-auto'> Sign-Up  IS Successful </p>";
    
      }else{
        
        $insertion_message ="<p class='text-danger fw-bold text-center bg-warning p-2 rounded shadow col-lg-6 mx-auto'> Sign-Up Not successful </p>";
     
      }
    
    }

}
?>