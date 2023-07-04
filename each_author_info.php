
<?php include_once 'inc/header.php'; ?>
<?php $data='';
$serialize_data = $_GET['data'];
$each_author_data = unserialize(urldecode($serialize_data));
?>

    <section id="author" class="author-section-padding bg-white m-0 py-2">
     
            <div class="row">
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
                <!-- <p class="fs-3 text-black-50 my-2 my-lg-0"> Elechi Amadi</p> -->
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
        <div class="row my-4 g-4">
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
          </div>
        </div>
      </section>

      <?php include_once 'inc/footer.php'; ?>





   
