<?php require('inc/header.php'); ?>


<?php
$empty_file_message = $file_valid_message =$invalid_file_type_message ='';

echo "<h4> FILE UPLOAD </h4>";
if(isset($_POST['upload_image'])){
    if(!empty($_FILES['upload']['name'])){
       
        $allowed_extension = array('png', 'jpg','jpeg','gif');
        $fileName = $_FILES['upload']['name'];
        $filePath = $_FILES['upload']['full_path'];
        $fileType = $_FILES['upload']['type'];
        $file_temp = $_FILES['upload']['tmp_name'];
         $file_ext_array =explode('.', $fileName);
         $file_ext = strtolower(array_pop($file_ext_array));
         $target_directory = "imgs/uploaded_images/{$fileName}";
         if(in_array($file_ext, $allowed_extension)){
        move_uploaded_file($file_temp, $target_directory);
$file_valid_message= "<p class='lead text-success fw-bold p-2 text-center bg-light'> File Is Valid!  <span class='spinner-grow spinner-grow-sm text-info' role='status' aria-hidden='true'></span></p>";


         }
         else{ $invalid_file_type_message ="<p class='lead text-danger fw-bold p-2 text-center'> file is not an Image. </p>";}
    }
    else{
        $empty_file_message ="<p class='lead text-danger fw-bold p-2 text-center'>Please Select an Image </p>";
    }
// print_r($_FILES);

// print_r($file_ext);


}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div class="container">
        <div class="row bg-dark my-3 p-3">
    <div class=" col-lg-9">
    <form action= "<?php echo $_SERVER['PHP_SELF'] ?>" method="post" enctype="multipart/form-data" >
    <h4 class="text-center text-light"> FILE UPLOAD </h4>
    <?php if($empty_file_message){
        echo $empty_file_message ;} 
        elseif($invalid_file_type_message) {
            echo $invalid_file_type_message; 
        } elseif($file_valid_message) {
            echo $file_valid_message ;
        }
        else { echo "<p class='lead text-warning text-center'>Select an image to upload:</p>"; }
     ?>
    <div class="mb-3 mx-auto">
    <input type="file" name="upload" class="form-control">
    </div>
   <div class="mb-3 col-lg-4 mx-auto ">
    <input type="submit" value="upload" name="upload_image" class="form-control bg-secondary text-light">
    </div>


    </form>
    </div>
    <div class="image_div col-lg-3">
        <img src="<?php echo $target_directory ;?>" alt="file Upload" class="rounded img-fluid text-light" width="auto">
    </div>
    </div>
    </div>
    </div>
</body>
</html>