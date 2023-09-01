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
nav{min-height: 60px !important;}
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
  background-image: linear-gradient(to right, #d2c361e2,#d2c361e2, #055,#d2c361e2);
  /*#d2c361e2 */
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
/* .img_thumbnail {background-color: #343a40 !important; } */
.img_thumbnail img{border-radius: 50% !important; height: 150px !important; width: 150px !important; }
.about_me_img {border-radius: 50% !important; height: 300px !important; width: 300px !important; }
#Book_form_Logo_div{background-color:purple !important; height:150px !important; width: 150px !important; border-radius: 50%; }
.form_input_logo{ width:100% !important; border-radius: 50%; height:150px !important; width: 150px !important; }
.section-form{margin-top: 5rem !important
  ;background-color: #d2c361e2 !important; }

  .add_book_active{background-color: white!important; padding:4px  18px !important; color: #6c757d !important; border-radius: 5px !important;}
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


       
        <li class="nav-item m-0 p-0  me-5 " style="cursor: pointer;">
          <span class="nav-link click_to_add_book_to_database">ADD</span>
         
        </li>
       
      
      </ul>
    </div>
  </div>
</nav>



<script>
   
    
    // add_book_to_database_link.addEventListener('click',()=>{
      
    // });
</script>

<!-- The database script to insert data into the database begins here -->

<?php
// initialize an empty varible to be used to store the $_GET values 
$title_of_book  =$summary = $released_year =  $book_selection = $fileName ='';

//initialize empty error variables to be used later
$title_error =   $summary_error = $released_year_error =  $book_selection_error =$fileupload_error= $fileupload_error2='';

if(isset($_POST['']))

//form Submit 
if(isset($_POST['submit'])){
  //validate TITLE of Book
  if(empty($_POST['title_of_book'])){
    $title_error = "Book Title Required";
  }else{
    $title_of_book =filter_input(INPUT_POST,'title_of_book',FILTER_SANITIZE_FULL_SPECIAL_CHARS);
  }

  //validate  released Year
  if(empty($_POST['released_year'])){
    $released_year_error ="Released Year Required";
  }else{
    $released_year =filter_input(INPUT_POST,'released_year',FILTER_SANITIZE_FULL_SPECIAL_CHARS);
  }
  //validate Selection 
  if(empty($_POST['book_selection'])){
    $book_selection_error ="Select an author Name";
  }else{
    $book_selection = $_POST['book_selection'];
  }

  // validate summary 
  if(empty($_POST['summary'])){
    $summary_error ="summary is Year Required";
  }else{
    $summary =filter_input(INPUT_POST,'summary',FILTER_SANITIZE_FULL_SPECIAL_CHARS);
  }
// validate file upload
if (empty($_FILES['fileupload']['name'])) {
  $fileupload_error = "Please select a file to upload";
} else {
  $allowed_extension =array('png','jpg','jpeg','gif');
  $fileName = $_FILES['fileupload']['name'];
$file_temp = $_FILES['fileupload']['tmp_name'];

$file_ext_array = explode('.',$fileName);
$file_ext = strtolower(array_pop($file_ext_array));
$target_directory = "imgs/uploaded_images/{$fileName}";
if(in_array($file_ext, $allowed_extension) && getimagesize($file_temp)) {
  move_uploaded_file($file_temp, $target_directory);
  $fileupload_error ='';

} else{
  $fileupload_error = "Invalid file format. Please upload an image file (jpg, jpeg, gif, png)";
}

 
  
}


if(empty($title_error) && empty($book_selection_error) && empty($summary_error) && empty ($released_year_error) && empty($fileupload_error )){
  $sql_book_insertion_query = "INSERT INTO BOOKS (
    title,
    author_table_id,
    Summary,
    book_img,
     released_year
     )values(
   '$title_of_book',
   '$book_selection', 
   '$summary',
   '$fileName',
   '$released_year'
   );";
    $statement = $pdo->prepare($sql_book_insertion_query);


if($statement->execute()){
  // echo '<script>window.location.href = "index.php";</script>';
  exit();
}else{echo "Error Inserting data into the database.";  }
}

}

?>


<section class="section col-lg-6  col-sm-12  mx-auto px-4 py-1 shadow bg-success 

 section-form d-none">
  <div class="container-fluid">
<div class="row m-0 ">
            <div class="col-lg-12 mx-auto text-center my-3" id="Book_form_Logo_div">
                <img src="http://localhost/bookProject/imgs/uploaded_images/book_app_logo.png" alt="Book form Logo"  class=" form_input_logo img-fluid m-0">
            </div>
    </div>
       <div class="row">
            <p class="lead text-center fw-bold text-body-tertiary my-3 fs-4">Enter A New Book</p>


<!-- FORM  MARK UP BEGINS HERE-->
        <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" Class="col-md-12 mx-auto" method="POST" enctype="multipart/form-data">
      <!--  title and input goes here -->
      <div class="row mb-4">
      <div class=" col">
        <label for="titel_of_book" class="form-label  text-dark fs-6">Book Title<sup class='text-danger'>*</sup></label>
        <input type="text" class="form-control <?php echo $title_error ? 'is-invalid' : null; ?>" id="title_of_book" name="title_of_book" placeholder="Book Title" autocomplete="off">
      <span class="invalid_span text-danger"> 
        <?php echo $title_error; ?>
      </span>
      </div>


      <div class="col">
      <label for="authors" class="form-label  text-dark fs-6">Choose  An Author </label>
      <select class="form-select <?php echo $book_selection_error ? 'is-invalid' : null; ?>" aria-label="Default select example" name="book_selection">
  <option selected></option>
  <option value="1">Chinua Achebe</option>
  <option value="2">Ben Okri</option>
  <option value="3">Yaa Gyasi</option>
  <option value="4">Mariama Ba</option>
  <option value="5">Lola Shoneyin</option>
  <option value="6">Ngugi wa Thiong'o</option>
  <option value="7">Alan Paton</option>
  <option value="8">Buchi Emecheta</option>
  <option value="9">Jowhor Ile</option>
  <option value="10">Steve Biko</option>
  <option value="11">Ike Vincent</option>
  <option value="12">Elechi Amadi</option>
  <option value="13">Chimamanda Ngozi Adichie</option>
  <option value="14">Brian Tracy</option>
  <option value="15">Napoleon Hill</option>
  <option value="16">Robert Kiyosaki</option>
  <option value="17">Yejide Kilanko</option>
</select>
<span class="invalid_span text-danger"> 
        <?php echo $book_selection_error; ?>
      </span>
      </div>
      </div>

      <!-- div for summary  is here  -->
      <div class="mb-3 col-lg-12">
        <label for="summary" class="form-label  text-dark fs-6">Brief Summary<sup class='text-danger'>*</sup></label>
        <textarea name="summary" id="summary" rows="5" class="form-control px-4 <?php echo $summary_error ? 'is-invalid' : null; ?>" placeholder="SUMMARY"></textarea>
        <span class="invalid_span text-danger"> 
        <?php echo $summary_error; ?>
      </span>
      </div>

      <!-- div forReleased Year and input goes here -->

      <div class="row mb-5">
         <!-- div for Images and input goes here -->
      <div class="col ">
      <label for="fileupload" class="form-label  text-dark fs-6">Please Select an Image</label>
        <input type="file" name="fileupload" class="form-control <?php echo $fileupload_error ? 'is-invalid' : null; ?>">
      <input type="button" value="Upload" name="upload" class="form-control w-25 bg-primary border-none my-2" style="border:none;">
        <span class="invalid_span text-danger"> 
        <?php echo $fileupload_error ; ?>
      </span>
      </div>

      <div class="col">
        <label for="Released Year" class="form-label  text-dark fs-6"> Released Year</label>
        <input type="number" min="1000" max="9999" class="form-control <?php echo $released_year_error ? 'is-invalid' : null; ?>" id="released_year" name="released_year" placeholder="Enter Year Here" autocomplete="off">
        <span class="invalid_span text-danger"> 
        <?php echo $released_year_error; ?>
      </span>
      </div>

     
      </div>
      <div class="m-0 col-lg-4 mx-auto">
        <input type="submit" name="submit" class="form-control btn btn-dark fw-bold shadow" value="SEND">
      </div>
      </form>
      </div>
      </div>
  </section>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
  <script src="http://localhost/bookProject/inc/script.js"></script>


    <section class="section col-lg-12  col-sm-12  mx-auto  m-0 p-0 shadow bg-light mt-5">

        <div class="container-fluid">
    
       <!-- the former nav sits here-->
       