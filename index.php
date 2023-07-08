<?php  include 'inc/header.php'; ?>
<?php 

$query = "SELECT *
          FROM authors
          INNER JOIN books ON authors.id = books.author_table_id
          ORDER BY books.book_id;";
$books = fetch_Data_from_Database($query, 'fetchAll');

?>
<div class="row col-12 bg-primary p-0 m-0">
  <h1 class=" text-center text-light-50 mt-5 "> BOOK CATALOGUE</h1>
</div>

  <div class="row col-12 mx-auto my-5 ">

 <?php if(empty($books)): ?>
  <p class="lead text-primary p-2 text-center fw-bold">
  THERE IS NO Book AVAILABLE
 </p>
 <?php endif; ?>
        <table class="table table-striped table-bordered table-hover table-responsive m-0 p-0">
            <thead class="">
                <tr class="bg-secondary text-white  shadow">
                  <th scope="col" width="5%">S/N</th>
                  <th scope="col"  width="55%" class="text-center">Title</th>
                  <th scope="col"  width="30%" class="text-center">Author</th>
                  <th scope="col"  width="10%">Released Year</th>
                </tr>
              </thead>
              <tbody>
          <?php foreach($books as $book):
                ?>
            <tr class="book_row" name="book_row" onclick="window.location.href='each_book_info.php?book_id=<?=$book['book_id'] ?>'">
              <th scope="row" class="text-center text-black-50"><?Php echo $book['book_id'] ;?>
              </th>
              <td>
                <?Php echo $book['title'] ;?>
               </td>
              <td>
                <?Php echo $book['author_name'] ;?>
              </td>
              <td class="text-center">
                <?Php echo $book['released_year'] ;?>
              </td>
            </tr>
                <?php endforeach ;?>
              </tbody>
            
          </table>
       </div>
      <?php include 'inc/footer.php'; ?>
