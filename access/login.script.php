<?php
session_start();

$dsn = "mysql:host=localhost;port=3306;dbname=daniel_krossing;user=root;charset=utf8mb4";
$pdo = new PDO($dsn);

function fetch_Data_from_Database($query, $fetchmethod = 'fetchALL') {
    global $pdo;
    $statement = $pdo->prepare($query);
    $statement->execute();
    if ($fetchmethod === 'fetchAll') {
        $user = $statement->fetchAll(PDO::FETCH_ASSOC);
    } else {
        $user = $statement->fetch(PDO::FETCH_ASSOC);
    }
    return $user;
}


// This section is for the log-in form validation and authentication
$username_error_login = $password_error_login = $error_message= '';

if (isset($_POST['submit'])) {
    
    $username = filter_input(INPUT_POST, 'username', FILTER_SANITIZE_FULL_SPECIAL_CHARS);
    $password = filter_input(INPUT_POST, 'password', FILTER_SANITIZE_FULL_SPECIAL_CHARS);
    if (empty($username)) {
        $username_error_login = "<p class='text-danger m-0'>Username is required</p>";
        // header("Location: login.php?username_error=Username is required");
    }
    if (empty($password)) {
        $password_error_login = "<p class='text-danger m-0'>Password is required</p>";
        // header("Location: login.php?password_error= Password is required");
    }

    if (empty( $username_error_login) && empty( $password_error_login)) {
        $query = "SELECT * FROM users WHERE username='$username' AND Pass='$password'";
        $user = fetch_Data_from_Database($query, 'fetch');

        if ($user) {
            $_SESSION['name'] = $user['first_name'];
            $_SESSION['password'] = $user['pass'];
            $_SESSION['id'] = $user['user_id'];
            $_SESSION['time'] = time();
            header("Location: welcome.php");
            exit();
        } else {
            $error_message = "<p class='text-center text-danger px-2 fw-bold rounded bg-light'>Incorrect Password or Username</p>";
            // header("Location: login.php?error_message=Incorrect Password or Username");
        }
    }
}
?>










