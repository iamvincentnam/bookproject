
<?php include_once 'inc/header.php'; ?>
<?php 
$author_data_id = $_GET['id'];

$sql="SELECT * from authors INNER JOIN  books  ON authors.id = books.author_table_id where authors.id=$author_data_id;";

$one_author_row = mysqli_query($connection, $sql);
//To Get access to A row of data with the specific ID  associated with one author
if ($one_author_row) {
  $each_author_data = mysqli_fetch_assoc($one_author_row);
} 
?>
<?php
//To fetch all the books that is associated with one author
$other_books_by_an_author = mysqli_fetch_all($one_author_row, MYSQLI_ASSOC);

?>


<div class="largeThumbnail">
   <img src="imgs/ngugiwathiongo1.jpg" 
        alt="Big_image">
 <span id="closeIcon"> <img src="imgs/close_icon.png" alt="closeICon"> </span>
    </div>
    <section id="author" class="author-section-padding bg-white m-0 py-2">

    
     
            <div class="row mb-4">
            <div class="col-lg-3 col-sm-12 col-12 d-flex align-items-center bg-secondary">
              <div class="about-img book_title_img text-center border">
                <img src="imgs/<?=$each_author_data['author_img'];?>" alt="" class="img-fluid ">
              </div>
            </div>
            <div class="col-lg-9 col-md-12 col-12 ps-lg-3 mt-md-5">
              <div class="about-text">
                <p class="display-5 my-0">
                <?= $each_author_data['author_name'];?>
                </p>
                <div class="col-lg-4 my-4">
                <p class="text-muted fw-bold mb-2 mb-lg-0 fs-5">Born in</p>
                <p class=""><?= $each_author_data['born_in'];?></p>
                </div>
                <div class="col-lg-4 my-4">
                <p class="text-muted fw-bold mb-2 mb-lg-0 fs-5">Nationality</p>
                <p class=""><?= $each_author_data['nationality'];?></p>
                </div>
               
               <hr>

               <div class="col-lg-12 col-md-12 col-12 bg-secondary text-light py-1 px-5">
               <p class="fs-3 my-4">
                 Biography
                </p>
                
               
                <p class="text-secondary-50 fs-6" style="font-size:18px !important;"><?= $each_author_data['biography'];?></p>

                <a href="index.php" class="btn px-2 text-light bg-danger mb-4 shadow"> Go Back To Home</a>
               </div>
              </div>
            </div>
        </div>
  <hr>
        <div class="row col-4 mt-5 mx-auto">
          <div class="col-lg-12">
            <p class="lead fs-1 text-center text-white badge bg-secondary pill py-2">
            OTHER  WORKS
            </p>
          </div>
        </div>
      <hr>

        <!--Here Is a HTML Markup which is supposed to display an Image card of other Books by the particular author  -->
       
        <div class="row mb-4 g-4">
          
        <?php foreach($other_books_by_an_author as $book) : ?>
          <div class="col-lg-4 col-6">
            <div class="card custom-card-height">
              <img src="imgs/<?= $book['book_img']; ?>" alt="No longer at ease image" class="card-img-top m-0">
              <div class="card-body my-0 py-2">
                <h5 class="card-title text-danger "><?= $book['title']; ?></h5>
                <div class="card-text m-0">
                <p class="text-muted fw-bold m-0">Released year</p>
                <p><?= $book['released_year']; ?></p>
                </div>
                <a href="index.php" class="btn px-1 text-white bg-danger shadow float-end mb-2 "> Read More</a>
              </div>
            </div>
          </div>
          <?php endforeach ; ?>
        </div>

          <!-- <div class="col-lg-4 col-6">
            <div class="card custom-card-height">
              <img src="imgs/scc.jpg" alt="No longer at ease image" class="card-img-top m-0">
              <div class="card-body my-0 py-2">
                <h5 class="card-title text-danger "> Second Class Citizen</h5>
                <div class="card-text m-0">
                <p class="text-muted fw-bold m-0">Released Year</p>
                <p>1958</p>
                </div>
                <a href="index.php" class="btn px-1 text-white bg-danger shadow float-end mb-2 "> Read More</a>
              </div>
            </div>
          </div>


          <div class="col-lg-4 col-6">
            <div class="card custom-card-height">
              <img src="imgs/scc.jpg" alt="No longer at ease image" class="card-img-top m-0">
              <div class="card-body my-0 py-2">
                <h5 class="card-title text-danger "> Second Class Citizen</h5>
                <div class="card-text m-0">
                <p class="text-muted fw-bold m-0">Released Year</p>
                <p>1958</p>
                </div>
                <a href="index.php" class="btn px-1 text-white bg-danger shadow float-end mb-2 "> Read More</a>
              </div>
            </div>
          </div> -->
       
      </section>

      <?php include_once 'inc/footer.php'; ?>





   
