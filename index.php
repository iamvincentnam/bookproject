<?php  include 'inc/header.php'; ?>
<?php 
// $nobooks_table='';
//  $tableName = 'books';


 //Check if the table Exists
// $tableExistsQuery ="SHOW TABLES LIKE 'books';";
// $tableExistsResults = mysqli_query($connection, $tableExistsQuery);

// if(mysqli_num_rows($tableExistsResults) == 0){
//   $nobooks_table='<p class="lead text-danger p-2 text-center fw-bold"> THERE IS NO TABLE AVAILABLE
//   </p>';
// }
// else{
//   $sql = "SELECT *
//   FROM authors
//   INNER JOIN books ON authors.id = books.author_table_id
//   ORDER BY books.book_id;";
//   $result = mysqli_query($connection,$sql);
//   $books= mysqli_fetch_all($result, MYSQLI_ASSOC);
// }

// $books='';
$query = "SELECT *
          FROM authors
          INNER JOIN books ON authors.id = books.author_table_id
          ORDER BY books.book_id;";
$books = fetch_Data_from_Database($query, 'fetchAll');

?>
<div class="row col-12 mt-5 mb-0">
  <h1 class=" text-center text-light-50"> BOOK CATALOGUE</h1>
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
