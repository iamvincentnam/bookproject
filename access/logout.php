<?php 
session_start();
session_destroy();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Session Expired</title>
    <style>
   @import url('https://fonts.googleapis.com/css2?family=Roboto+Mono:wght@600&display=swap');
    body{
        height: 100vh;
        background-color: hsl(217,28%,16%);
        font-family: 'Roboto Mono', monospace;
    }
    .container{text-align: center;
   height: 200px;
   display: flex;
   flex-direction: column;
   align-items: center;
   justify-content: center;
margin-top: 4rem;
color:cornsilk ;}
.container h1{color: #666666;}
p{font-size: 1.8rem;
margin: 0;
}
.container span{color: orangered;
    font-size: 2.5rem;}
 </style>
</head>
<body>

    <div class="container">
          <h1> SESSION EXPIRED! </h1>
         <p>YOU WILL BE REDIRECTED TO LOGIN PAGE IN <span id="count_sec"></span>
          SECONDS
        </p>
    </div>
<script>
    const span =document.getElementById   ('count_sec');
    let score =6;
   
   const countdownFunc = ()=>{
    if(score===0){
               clearInterval()
               window.location.href = 'login.php';
        }else{
            score--;            
            // console.log(score);
            span.innerText=score
           }
          
   }
 setInterval(countdownFunc,1000)
</script>
</body>
</html>