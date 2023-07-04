<?php  include 'db.php';?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
    <style>
          
.img_thumbnail{width: 90px; height: 90px;}
 .img_thumbnail img{border-radius: 50%;
    border:none;
    width: 90px; height: 90px;}


        body {
  --bs-body-font-family: var(--bs-font-monospace);
  --bs-body-line-height: 1.4;
  --bs-body-bg: var(--bs-gray-100);
        }
section .logo:hover{transform: translate(.5rem);}
section .logo{transition:.4s; cursor: pointer;}
        input::placeholder{color: #5f5f5f95 !important;}
.nav{ height: 60px;}
            .nav ul {
        list-style: none;
    }
    .nav ul li{display: inline-block;
        }
        .nav ul a{
            text-decoration: none;
             color: #d9d8da; 
                 font-weight:600;}
        .nav ul a:hover{border-bottom: 2px groove orangered;
        color: #8e8e8e;}
        /* section{background-color: #efb680;} */
        /* section{min-height: 100vh;} */
    /* the 100vh for section is not practicable since i'd including the same header file in other php pages*/
        form label{font-size: 85%; font-weight: bold; color: rgb(61, 61, 61);} 
        
.material-symbols-outlined {
  font-variation-settings:
  'FILL' 0,
  'wght' 400,
  'GRAD' 0,
  'opsz' 48
}

    .delete-icon span{cursor: pointer; }
    .delete-icon span a{text-decoration: none; color: lightslategray;}
    .delete-icon span:hover{scale: 1.1;}


    table{min-height:auto; }
    /* table tr:nth-of-type(n+2):hover{scale: 1.01;} */
    /* table tr:nth-of-type(1):hover{scale: 1 } */
    table tr{height: 50px;transition: all .2s;}
      table td, table th{cursor: pointer;}
      table tr:nth-of-type(even){background-color: #d2c361e2;}
      
      .custom-card-height{ height: 420px;
        max-width: 300px;}
        .custom-card-height h5{cursor: pointer;}
        .custom-card-height h5:hover{text-decoration: underline; color: purple !important; }
      .custom-card-height .card-img-top{ max-height: 250px; /* Adjust the max-height of the image to prevent overflow */
  object-fit:'';}
  .author_card{height: 370px;
        max-width: 250px;}
  .author_img{width: 180px; height: 180px;}
    </style>
    <title>MyBook CATALOGUE
    </title>
</head>
<body>
    <section class="section col-lg-10  col-sm-12  mx-auto  m-0 p-0 shadow bg-light">

        <div class="container ">
        <div class="row ">
        
       <div class="col-md-12 nav d-flex justify-content-between align-items-center px-3 bg-dark shadow-lg" >
        <div class="logo col-6 ">
            <p class="lead text-white fw-bold m-0 p-0 ">Book<i class="bi bi-book text-danger"></i></i></p>
        </div>
        <div id="links" class="col-lg-6 flex-wrap">
            <ul class="d-flex  justify-content-around align-items-center m-0 p-0 ">
                <li><a href="http://localhost/bookProject/index.php" class="<?= $_SERVER["REQUEST_URI"] == "/bookProject/index.php" ? "bg-light text-secondary py-1 px-3 rounded" : ''; ?>"> Home </a></li>
                <li><a href="http://localhost/bookProject/about.php" class="<?= $_SERVER["REQUEST_URI"] == "/bookProject/about.php" ? "bg-light text-secondary py-1 px-3 rounded" : ''; ?>">About</a></li>
               
                <li><a href="http://localhost/bookProject/author.php" class="<?= $_SERVER["REQUEST_URI"] == "/bookProject/author.php" ? "bg-light text-secondary py-1 px-3 rounded" : ''; ?>">Authors</a></li>
            </ul>

        </div>
       </div>
       </div>

    