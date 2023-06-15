<?php

// include 'config.php';
// //issest is used to see a variable is set or not
// if(isset($_REQUEST["submit"])){
//     $username=$_REQUEST["username"];
//     $password=$_REQUEST["password"];
   

//     $ins="INSERT INTO users(username,password) VALUES ('$username','$password')";
//     $query1=mysqli_query($connection,$ins);
    
// }
	
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <style>
        *{
            margin:0;
            padding:0;
            box-sizing:border-box;
        }
        body{
            font-family:"Open Sans";
            color:white;
        }
        section{
            position:relative;
            height:100vh;
            width:100%;
            background:url("loginbg.jpg");
            background-size:cover;
            background-position:center center;
        }
        .form-container{
            position:absolute;
            top:50%;
            left:50%;
            transform:translate(-50%,-50%);
            background:linear-gradient(rgba(0,0,0,0.3),rgba(0,0,0,0.3))
            width: 380px;
            padding:70px 50px;
            border-radius:10px;
            box-shadow:7px 7px 60px #000;
        }
        h1{
            text-transform:uppercase;
            font-size:2em;
            text-align:center;
            margin-bottom:2em;
        }
        .control input{
            width:100%;
            display:block;
            padding:10px;
            color:#222;
            border:none;
            outline:none;
            margin:1em 0;
        }
        .control input[type="submit"]{
            background:crimson;
            color:white;
            text-transform:uppercase;
            font-size:1.2em;
            opacity: .8;
        }
        .control input[type="submit"]:hover{
            opacity:1;
        }
        .link{
            text-align:center;
        }
        .link a{
            text-decoration:none;
            color:white;
            transition:opacity .3s ease;
        }
        .link a:hover{
            opacity:1;
        }
        
    </style>
</head>
<body>
    <section>
        <div class="form-container">
            <h1>Signup Form</h1>
            <form action="admin-login.php" method="POST">
                <div class="control">
                    <label for="name">Name</label>
                    <input type="text" name="username" id="username" required>
                </div>
                <div class="control">
                    <label for="name">Set Password</label>
                    <input type="password" name="" id="" required>
                </div>
                <div class="control">
                    <label for="name">Confirm Password</label>
                    <input type="password" name="password" id="password" required>
                </div>
                
                
                <span><input type="checkbox">Remember me.</span>
                <!-- <div class="control">
                    <a href="biling.php" class="btn"><input type="submit" value="Signup"></a>
                </div> -->
                <div class="control">
                  <br>
                <div class="g-recaptcha" data-sitekey="6LdGlO0iAAAAAEds0TciXRN9qQlkUMKGbA_Y_ZfN" ></div>
                <input type="submit" class="form-control"  id="inputAddress2" name="submit" placeholder="submit" Value="submit">
                
                </div>
            </form>
            <div class="link">
                <a href="login.php">Already have an account ?</a>
            </div>
            
        </div>
    </section>
</body>
</html>






































<script src="https://www.google.com/recaptcha/api.js" async defer></script>