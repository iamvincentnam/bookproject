<?php 
$dsn ="mysql:host=localhost;port=3306;dbname=daniel_krossing;user=root;charset=utf8mb4";
$pdo = new PDO($dsn);

function fetch_Data_from_Database($query, $fetchmethod = 'fetchALL') {
    global $pdo;
    $statement = $pdo->prepare($query);
    $statement->execute();
    if($fetchmethod ==='fetchAll'){
    $books = $statement->fetchAll(PDO::FETCH_ASSOC);
    } else{$books = $statement->fetch(PDO::FETCH_ASSOC);}
    return $books;
}
?>