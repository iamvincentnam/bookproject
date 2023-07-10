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
     /* Body */
body {
  --bs-body-font-family: var(--bs-font-monospace);
  --bs-body-line-height: 1.4;
  --bs-body-bg: var(--bs-gray-100);
  position: relative;
}

/* Navigation */
nav .logo:hover {
  transform: translate(.5rem) !important;
}

nav .logo {
  transition: .4s;
  cursor: pointer;
}

/* Input */
input::placeholder {
  color: #5f5f5f95 !important;
}

/* Carousel */
.carousel-inner::before {
  content: '';
  position: absolute;
  width: 100%;
  height: 100%;
  top: 0;
  left: 0;
  background-color: rgba(0, 0, 0, 0.7);
  z-index: 2;
}

.carousel-item img {
  max-width: 100% !important;
  height: auto !important;
  margin: 0 !important;
  padding: 0 !important;
}

/* Navigation Links */
nav ul a {
  text-decoration: none;
  color: #d9d8da !important;
  font-weight: 600;
}

nav ul a:hover {
  border-bottom: 1px solid orangered;
  color: #8e8e8e;
}

/* Form Label */
form label {
  font-size: 85%;
  font-weight: bold;
  color: rgb(61, 61, 61);
}

/* Book Catalogue */
.book_catalogue {
  margin-top: 5rem !important;
  max-height: auto;
}

/* Miscellaneous */
.material-symbols-outlined {
  font-variation-settings: 'FILL' 0, 'wght' 400, 'GRAD' 0, 'opsz' 48;
}

.delete-icon span {
  cursor: pointer;
}

.delete-icon span a {
  text-decoration: none;
  color: lightslategray;
}

.delete-icon span:hover {
  scale: 1.1;
}

.container-fluid .row {
  margin-bottom: 5rem;
}

/* Table */
table {
  min-height: auto;
}

table tr {
  height: 50px;
  transition: all .2s;
}

table td,
table th {
  cursor: pointer;
}

table tr:nth-of-type(even) {
  background-color: #d2c361e2;
}

/* Custom Card */
.custom-card-height {
  height: 420px;
  max-width: 300px;
}

.custom-card-height h5 {
  cursor: pointer;
}

.custom-card-height h5:hover,
.each_book_title:hover {
  text-decoration: underline;
  color: purple !important;
}

.each_book_title {
  cursor: grab;
}

.custom-card-height .card-img-top {
  max-height: 250px;
  /* Adjust the max-height of the image to prevent overflow */
  object-fit: '';
}

/* Author Card */
.author_card {
  height: 370px;
  max-width: 250px;
}

/* Navigation Logo */
.nav_logo {
  text-decoration: none;
  letter-spacing: 2px;
}

/* Author Image */
.author_img {
  width: 180px;
  height: 180px;
}

/* Go Back Button */
.go_back_to_home {
  cursor: pointer;
  transition: .3s ease-in-out all;
}

.go_back_to_home:hover {
  background-color: #7f7f7f !important;
  font-weight: bold !important;
}

/* Each Book Data */
.each_book_data_author_name {
  transition: .2s ease-in-out all;
  cursor: pointer;
}

.each_book_data_author_name:hover {
  text-decoration: underline;
  font-weight: bold;
}

    </style>
  <link rel="icon" href="imgs/icons8-book-96.png" type="image/icon type">
    <title>MyBook CATALOGUE
    </title>
</head>
<body>



<nav class="navbar fixed-top  navbar-expand-md navbar-dark bg-dark">
  <div class="container-fluid">
  <a href="http://localhost/bookProject/index.php" class="lead text-white fw-bold m-0 p-0 nav_logo logo">Book<i class="bi bi-book text-danger"></i></a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse " id="navbarNav">
        <!-- <div class="mx-auto"></div> -->
      <ul class="navbar-nav ms-auto d-flex justify-content-center align-items-center">
      <li class="nav-item m-0 p-0 me-5  ">
          <a href="http://localhost/bookProject/index.php" class="nav-link  <?= $_SERVER["REQUEST_URI"] == "/bookProject/index.php" ? "bg-light text-secondary py-1 px-2 rounded" : ''; ?>"> Home </a>
        </li>

        <li class="nav-item  m-0 p-0  me-5 ">
          <a href="http://localhost/bookProject/about.php" class="nav-link <?= $_SERVER["REQUEST_URI"] == "/bookProject/about.php" ? "bg-light text-secondary py-1 px-2 rounded" : ''; ?>">About</a>
        </li>

        <li class="nav-item m-0 p-0  me-5">
          <a href="http://localhost/bookProject/author.php" class="nav-link <?= $_SERVER["REQUEST_URI"] == "/bookProject/author.php" ? "bg-light text-secondary py-1 px-2 rounded" : ''; ?>">Authors</a>
        </li>


        <li class="nav-item m-0 p-0  me-0">
          <a href="#" class="nav-link d-none d-md-inline <?= $_SERVER["REQUEST_URI"] == "/bookProject/add_to_book.php" ? "bg-light text-secondary py-1 px-2 rounded" : ''; ?>"><i class="bi bi-person-fill-add"></i> <i class="bi bi-book-half"></i></a>
        </li>
       
        <li class="nav-item m-0 p-0  me-5">
          <a href="#" class="nav-link  d-md-none <?= $_SERVER["REQUEST_URI"] == "/bookProject/add_to_book.php" ? "bg-light text-secondary py-1 px-2 rounded" : ''; ?>">ADD</a>
        </li>
       
      
      </ul>
    </div>
  </div>
</nav>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
<script>
    const nav = document.querySelector('nav');
    window.addEventListener('scroll',()=>{
        if(window.pageYOffset >100){
            // alert("window.pageYOffset >100")
            // nav.classList.remove('bg-dark' )
            nav.classList.add('bg-opacity-75')
        }else{
            // nav.classList.add('bg-dark')
            nav.classList.remove('bg-opacity-75')
        }
    }); 
</script>

    <section class="section col-lg-12  col-sm-12  mx-auto  m-0 p-0 shadow bg-light mt-5">

        <div class="container-fluid">
       <!-- the former nav sits here-->
      

    