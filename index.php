<?php include 'inc/header.php'; ?>
<?php 

$query = "SELECT *
          FROM authors
          INNER JOIN books ON authors.id = books.author_table_id
          ORDER BY books.book_id";
$books = fetch_Data_from_Database($query, 'fetchAll');

$carousel_img_query = "SELECT * 
                       FROM books 
                       WHERE book_img IN ('ttayn.jpg', 'ph.jpg', 'scc.jpg', 'tpw.jpg', 'tc.jpg', 'aamd.jpg') 
                       ORDER BY book_id";
$carousel_img_data = fetch_Data_from_Database($carousel_img_query, 'fetchAll');

?>

<div class="row col-lg-8 p-0 m-0 book_catalogue mx-auto">
  <div id="carouselExampleAutoplaying" class="carousel slide col-lg-4 mx-auto" data-bs-ride="carousel">
    <div class="carousel-inner">
      <?php foreach($carousel_img_data as $index => $each_image): ?>
        <div class="carousel-item <?php echo ($index === 0) ? 'active' : ''; ?>">
          <img src="imgs/<?php echo $each_image['book_img']; ?>" class="d-block m-0 p-0 img-fluid" alt="first_book_image">
        </div>
      <?php endforeach; ?>
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleAutoplaying" data-bs-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleAutoplaying" data-bs-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Next</span>
    </button>
  </div>
</div>

<div class="row col-12 mx-auto mt-4 mb-0">
  <?php if(empty($books)): ?>
    <p class="lead text-primary p-2 text-center fw-bold">
      THERE IS NO Book AVAILABLE
    </p>
  <?php endif; ?>
  <table class="table table-striped table-bordered table-hover table-responsive m-0 p-0">
    <thead class="">
      <tr class="bg-secondary text-white shadow">
        <th scope="col" width="5%">S/N</th>
        <th scope="col" width="55%" class="text-center">Title</th>
        <th scope="col" width="30%" class="text-center">Author</th>
        <th scope="col" width="10%">Released Year</th>
      </tr>
    </thead>
    <tbody>
      <?php foreach($books as $book): ?>
        <tr class="book_row" name="book_row" onclick="window.location.href='each_book_info.php?book_id=<?=$book['book_id'] ?>'">
          <th scope="row" class="text-center text-black-50"><?php echo $book['book_id']; ?></th>
          <td><?php echo $book['title']; ?></td>
          <td><?php echo $book['author_name']; ?></td>
          <td class="text-center"><?php echo $book['released_year']; ?></td>
        </tr>
      <?php endforeach; ?>
    </tbody>
  </table>
</div>
<?php include 'inc/footer.php'; ?>
