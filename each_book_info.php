<?php include_once 'inc/header.php'; ?>

<?php
$data =$_GET['book_id'];

$query= "SELECT * from authors INNER JOIN  books  ON authors.id = books.author_table_id where books.book_id =$data;";
// the file requres a db.php file which has a function fetch_Data_from_Database() created. 
$one_book_data =fetch_Data_from_Database($query,'fetch');

?>

<section id="about" class="about-section-padding bg-light m-0 py-4">
  
        <div class="row">
        <div class="col-lg-3 col-sm-12 col-12 d-flex align-items-center justify-content-center">
            <!--Book Image @ left hand column-->
          <div class="about-img book_title_img text-center shadow border">
            <img src="imgs/uploaded_images/<?php echo $one_book_data['book_img'];?>" alt="" class="img-fluid">
          </div>
        </div>


        <div class="col-lg-9 col-md-12 col-12 ps-lg-0 mt-md-5 shadow">
          <div class="about-text ps-lg-5">

              <!--Book Title Section -->
            <p class="display-6 my-0 each_book_title">
              <?= $one_book_data['title'];?>
            </p>
            <p class="fs-3 text-black-50 my-2 my-lg-0">  <?= $one_book_data['author_name'] ;?></p>
            <p>A novel by <span><?= $one_book_data['author_name'] ;?></span></p>

            <div class="d-flex justify-content-between col-lg-12 flex-column flex-sm-row">
                <p class="text-muted fw-bold mb-2 mb-lg-0">Genre</p>
             
                <!--Genre Section -->
                <div class="mb-2 mb-sm-0 text-left">
                    <!--the value in the genre column of the book table is a comma separated string. each part of the string represent on genre. In order to make the output more dynamic, there is a need to pull the genres sort them using the explode method. -->
                <?php $genre_array=explode(',', $one_book_data['genre']);
                foreach($genre_array as $genre):
                 ?>
                    <span class="badge bg-danger pill py-2"><?php echo $genre ?></span>
                 <?php endforeach; ?>
                   

              </div>
            </div>
            <hr>
              <!--About the book Section -->
            <div class="about_author bg-light">
                <h4 class="text-secondary py-2">About The Book</h4>
                <div class="img_thumbnail col-12 d-inline pe-2 my-2 ">
                <img src="imgs/uploaded_images/<?php echo  $one_book_data['author_img']?>" alt="" class="img-fluid m-0 p-0 rounded">
                </div>
                <h6 class="d-inline each_book_data_author_name" onclick="window.location.href='each_author_info.php?id=<?= $one_book_data['id']?>'"><?= $one_book_data['author_name'];?></h6>
                
            </div>
              <!--Book summary Section -->
            <p class="mt-4 mb-sm-4 mx-2" id="bookdata"><?php echo  $one_book_data['summary'] ;?></p>

            <a href="index.php" class="btn px-2 text-light bg-danger mb-4 shadow-lg go_back_to_home"> Go Back To Home oooo</a>
          </div>
        </div>
    </div>
<script>
  
let bookdata = document.querySelector('#bookdata');
const firstLetter = bookdata.innerHTML.charAt(0);
bookdata.innerHTML = `<span style="font-size: 3rem;" class="m-0 p-0">${firstLetter}</span>${bookdata.innerHTML.slice(1)}`;
bookdata.style.color='#4c4c4c';
bookdata.style.lineHeight='2';

</script>
  </section>

  <?php include_once 'inc/footer.php'; ?>





   
