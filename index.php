<?php  include 'inc/header.php'; ?>
<?php  
$sql = "SELECT * FROM books;";
$result = mysqli_query($connection,$sql);
$schoolFinder= mysqli_fetch_all($result, MYSQLI_ASSOC);
$books=$schoolFinder;
// to locate a specific book

// $id ='';
// if(isset($_GET['book_row'])){
//   $id =$_GET['book_row'];
//   echo $id;
// }
$clickedBookId ='';
if (isset($_GET['book_id'])) {
  $clickedBookId = $_GET['book_id'];
  // Do something with the clicked book ID
  echo "Clicked book ID: " . $clickedBookId;

  //select a row of  a particular book
  $each_book_query = "SELECT * FROM books WHERE id = '$clickedBookId';";
  $each_book_result = mysqli_query($connection, $each_book_query);

if($each_book_result){
  $each_book_data = mysqli_fetch_assoc ($each_book_result);
  $clickedBooktitle =$each_book_data['title'];

  $serialize_data = serialize($each_book_data);
  $url = 'http://localhost/bookProject/each_book_info.php?data='. urldecode($serialize_data);
  header('Location:' . $url); 
  exit();
}
else{echo 'ERROR'. mysqli_error($connection);}
}
?>
<div class="row col-12 mt-5 mb-0">
  <h1 class=" text-center text-light-50"> BOOK CATALOGUE</h1>
</div>

       <div class="row col-12 mx-auto my-5 ">

       <?php if(empty($books)): ?>
  <p class="lead text-danger p-2 text-center fw-bold">
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
            <tr class="book_row" name="book_row" onclick="window.location.href='?book_id=<?php echo $book['id']; ?>'">
              <th scope="row" class="text-center text-black-50"><?Php echo $book['id'] ;?>
              </th>
              <td>
                <?Php echo $book['title'] ;?>
               </td>
              <td>
                <?Php echo $book['author'] ;?>
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