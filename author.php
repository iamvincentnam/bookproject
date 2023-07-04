<?php  include 'inc/header.php'; ?>

<?php 
$clicked_author_id = '';

// if(isset($_GET['author_id'])){
//     $clicked_author_id = $_GET['author_id'];
//     echo $clicked_author_id; 
    
//     $each_author_query ="SELECT *
//     FROM authors WHERE id =$clicked_author_id ;";
//     $each_author_result = mysqli_query($connection,$each_author_query);

//     $each_author_data =mysqli_fetch_assoc($each_author_result);
//     $serialize_data = serialize($each_author_data);
//   $url = 'http://localhost/bookProject/each_author_info.php?data='. urldecode($serialize_data);
//   header('Location:' . $url); 
//   exit();
//   }

$sql = "SELECT *
  FROM authors;";
  $result = mysqli_query($connection,$sql);
  $authors= mysqli_fetch_all($result, MYSQLI_ASSOC);
  ?>
<div class="row my-4 g-2">
  <?php  foreach($authors as $author):?>
          <div class="col-lg-3 col-6">
            <div class="card custom-card-height author_card shadow">
              <img src="imgs/<?= $author['author_img']; ?>" alt="No longer at ease image" class="card-img-top m-0 rounded-circle author_img mx-auto my-2">
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
<?php  include 'inc/footer.php'; ?>