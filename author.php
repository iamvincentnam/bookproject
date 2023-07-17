<?php  include 'inc/header.php'; ?>

<?php 
$clicked_author_id = '';
$query = "SELECT *
  FROM authors;";
  $authors =fetch_Data_from_Database($query,'fetchAll')
  ?>
  <div class="container">
<div class="row my-0 g-1">
  <?php  foreach($authors as $author):?>
          <div class="col-lg-3 col-6">
            <div class="card custom-card-height author_card shadow">
              <img src="imgs/uploaded_images/<?= $author['author_img']; ?>" alt="No longer at ease image" class="card-img-top m-0 rounded-circle author_img mx-auto my-2">
              <div class="card-body my-0 py-2">
                <h5 class="card-title text-danger "><?= $author['author_name']; ?></h5>
                <div class="card-text m-0">
                <p class="text-muted fw-bold m-0">Born In</p>
                <p><?= $author['born_in']; ?></p>
                </div>
                <a href="each_author_info.php?id=<?=$author['id'];?>" class="btn px-1 text-white bg-danger shadow float-end mb-2" name="author"> Read More</a>


              </div>
            </div>
          </div>
          <?php endforeach; ?>

        </div>
        </div>
<?php  include 'inc/footer.php'; ?>