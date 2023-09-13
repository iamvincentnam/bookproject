<?php
require_once('login.script.php');
require_once('signup.script.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Mulish:wght@200&display=swap">
    
<style>
body{
    background-color: hsl(217,28%,16%);
    /* background-color: #fff; */
}
#login_form{margin: 2rem auto;
border-radius: 10px;
display: none;

}

.show_signup_form #login_form
{
    display: block;
}
.show_signup_form #signup_form
{
    display: none;
}
.container
{
margin: 4rem auto;
outline: none !important;
position: relative;
}

.error
{
  display: block !important;  
}

.signup_display
{
    display: block;
}

.insertion_message
{
    background-color: white;
    padding: 5px 10px;
    margin: 0 auto;
    font-size: 16px;
    border-radius: 8px;
    width: 30%;
    color:green;
    text-align: center;
    font-weight: 600;
}

.dont_have_an_account .badge
{
    cursor: pointer;
}
</style>
    <title>Login Page</title>
</head>
<body class="">
   <div class="container">
    <div class="row">
    <form action="<?= htmlspecialchars($_SERVER['PHP_SELF']); ?>" class="col-lg-8 mx-auto my-4 shadow-lg signup_form <?php if(isset($_GET['message'])){echo 'signup_display'; } ?>"  id="signup_form" method="post">
    <div class="row">
        <div class="formdiv my-4">
        <h3 class="text-center text-light">SIGNUP FORM</h3>
        </div>
        <?= $insertion_message ?>
    </div>

  <div class="row">
    <div class="formdiv mb-4 col">
       <label for="first_name" class="my-2 fs-6    text-light">
        First Name

       </label>
        <input type="text" name="first_name"    class="form-control py-2 shadow"> 
        <?php  echo $firstName_error;?>
    </div>
    <div class="formdiv mb-4 col">
    <label for="username" class="my-2 fs-6 text-light">Username

    </label>
     <input type="text" name="signup_username" class="form-control py-2 shadow">
        <?php echo $username_error; ?>
                    
  </div>
  </div>

  <div class="row">
     <div class="formdiv mb-4 col">
        <label for="email" class="my-2 fs-6 text-light">Email

        </label>
         <input type="email" name="email" class="form-control py-2 shadow">
                      
        <?php echo $email_error; ?>
    </div>

                    
     <div class="formdiv mb-4 col">
     <label for="Password" class="my-2 fs-6 text-light">Password</label>
     <input type="password" name="signup_password" class="form-control py-2 shadow"> 
     <?php echo $password_error;?>
                       
     </div>
</div>
<div class="row">
  <div class="formdiv mb-4 pt-2 d-flex align-items-center justify-content-evenly">
    <div class="col-lg-4">
    <input type="submit" name="signup" class="form-control text-light text-center fw-bold border-0 bg-success" id="signup_btn" value="SIGN UP">
    </div>
                    
    <div class="col-lg-4">
      <p class="text-light fw-bold text-center my-4">Already have an account ?

      </p>
    </div>
                   
     <div class="col-lg-4">
    <button type="button" class="btn btn-outline-success fw-bold w-100 rounded" id="signup_login_link">
                Login Here
    </button> 
     </div>
                   
    </div>
    </div>

    </form>
    </div>


     <!-- Login form section begins here-->
    <div class="row login_form_row">
    
            <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>"  class="col-lg-6 mx-auto my-4 p-4 shadow-lg login_form <?php echo (!empty($password_error_login) || !empty($username_error_login)) || !empty($error_message)  ? 'error' : ''; ?>" id="login_form" method="post">
                <div class="formdiv my-4">
                    <h3 class="text-center text-light m-0 p-0">LOG IN</h3>
                </div>
                 <?= $error_message ?>
                 

                <div class="formdiv mb-4">
                    <label for="username" class="my-2 fs-6 text-light">UserName</label>
                    <input type="text" name="username" class="form-control py-2 shadow">
                    
                         <?= $username_error_login ?>
               
                    
                 
                </div>
                <div class="formdiv mb-4">
                    <label for="username" class="my-2 fs-6 text-light">Password</label>
                    <input type="password" name="password" class="form-control py-2 shadow">
                      <?= $password_error_login ?>

           
                 
                </div>
                <div class="formdiv mb-4 col-4 mx-auto">
                    <input type="submit" name="submit" class="form-control text-light text-center fw-bold border-0 bg-success" value="LOGIN">
                </div>

                     <div class="dont_have_an_account d-flex align-items-center justify-content-center gap-2">
                    <p class="text-secondary fw-bold text-center my-2">Don't have an account?  </p>
                    <span class="badge rounded-pill text-bg-secondary" id="sign_up_link">SIGN UP</span>
                    </div>


            </form>
        </div>
   </div>
   <script>
    const signup_form = document.querySelector('#signup_form');
    const login_form = document.querySelector('#login_form');
    const sign_up_link = document.querySelector('#sign_up_link');
    const login_link = document.querySelector('#signup_login_link');
   
   
    if(login_form.classList.contains('error')){
    document.body.classList.toggle('show_signup_form');  
   
 }
 

login_link.addEventListener('click',()=>{
        document.body.classList.add('show_signup_form');
      
    });
    sign_up_link.addEventListener('click',()=>{
        if(login_form.classList.contains('error')){
            login_form.classList.remove('error');
    login_form.classList.remove('xxx')
 }
        document.body.classList.remove('show_signup_form');
  
      
       
    });
</script>
</body>
</html>