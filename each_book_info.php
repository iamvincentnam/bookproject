<?php include_once 'inc/header.php'; ?>

<?php
$data =$_GET['book_id'];

$query= "SELECT * from authors INNER JOIN  books  ON authors.id = books.author_table_id where books.book_id =$data;";

$one_book_data =fetch_Data_from_Database($query,'fetch');

?>

<section id="about" class="about-section-padding bg-light m-0 py-4">
  
        <div class="row">
        <div class="col-lg-3 col-sm-12 col-12 d-flex align-items-center justify-content-center">
          <div class="about-img book_title_img text-center shadow">
            <img src="imgs/<?php echo $one_book_data['book_img'];?>" alt="" class="img-fluid">
          </div>
        </div>
        <div class="col-lg-9 col-md-12 col-12 ps-lg-5 mt-md-5">
          <div class="about-text">
            <p class="display-6 my-0 each_book_title">
              <?= $one_book_data['title'];?>
            </p>
            <p class="fs-3 text-black-50 my-2 my-lg-0">  <?= $one_book_data['author_name'] ;?></p>
            <p>A novel by <span><?= $one_book_data['author_name'] ;?></span></p>

            <div class="d-flex justify-content-between col-lg-12 flex-column flex-sm-row">
                <p class="text-muted fw-bold mb-2 mb-lg-0">Genre</p>
                <div class="mb-2 mb-sm-0 text-left">
                    <span class="badge bg-secondary pill py-2">History</span>
                    <span class="badge bg-secondary pill py-2">Fiction</span>
                    <span class="badge bg-secondary pill py-2">African Literature</span>

              </div>
            </div>
            <hr>
            <div class="about_author bg-gradient-primary">
                <h4 class="text-secondary py-2">About The Book</h4>
                <div class="img_thumbnail col-12 d-inline-block pe-2 my-2">
                <img src="imgs/<?php echo  $one_book_data['author_img']?>" alt="" class="img-fluid m-0 p-0">
                </div>
                <h6 class="d-inline-block each_book_data_author_name" onclick="window.location.href='each_author_info.php?id=<?= $one_book_data['id']?>'"><?= $one_book_data['author_name'] ;?></h6>
                
            </div>
            <p class="text-black- mt-4 mb-sm-4"><?php echo  $one_book_data['summary'] ;?></p>

            <a href="index.php" class="btn px-2 text-light bg-secondary mb-4 shadow-lg go_back_to_home"> Go Back To Home</a>
          </div>
        </div>
    </div>

  </section>

  <?php include_once 'inc/footer.php'; ?>





   
