<?php
include_once 'insert_reg.php';
include 'db_connect.php';
$result = mysqli_query($conn,"SELECT * FROM registration");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LOGIN FORM</title>
    <link rel="stylesheet" href="ka.css">
</head>
<body>
    <div class="container">
    <div class="card">
        <div class="inner-box" id="card">
            <div class="card-front">
                <h2>LOGIN</h2>
                <form action="validation.php" method=post>
                   <input type="email" class="input-box" placeholder="your email id" required>
                   <input type="password" class="input-box" placeholder="your password" required>
                   <button type="submit" class="submit-btn"> submit</button>
                   <input type="checkbox" ><span> remember me</span>
               </form>
                <button type="button" class="btn" onclick="openRegister()">IM NEW HERE</button>
                <a href=""> forgot password</a>
         </div>
            <div class="card-back">
            <h2>REGISTER</h2>
                <form action="login.php" method=post>
                    <input type="text" class="input-box" name="username" placeholder="your name" required>
                   <input type="email" class="input-box"  name="email" placeholder="your email id" required>
                   <input type="password" class="input-box"  name="password" placeholder="your password" required>
                   <button type="submit" class="submit-btn"> submit</button>
                   <input type="checkbox"><span>remember me</span>
                </form>
                <button type="button" class="btn" onclick = "openLogin()">I HAVE AN ACCOUNT</button>
                <a href=""> forgot password</a>
                </div>
             </div>
       </div>
 </div>
    <script>
        var card = document.getElementById("card");
        function openRegister(){
           card.style.transform = "rotateY(-180deg)"; 
         }
        function openLogin() {
            card.style.transform = "rotateY(0deg)"; 
         
        }
 </script>
</body>
</html>
