<?php      
    include('config.php');  
    @$username = $_POST['user'];  
    @$password = $_POST['pass'];  
      
        //to prevent from mysqli injection  
        $username = stripcslashes($username);  
        $password = stripcslashes($password);  
        $username = mysqli_real_escape_string($connection, $username);  
        $password = mysqli_real_escape_string($connection, $password);  
      
        $sql = "select *from users where username = '$username' and password = '$password'";  
        $result = mysqli_query($connection, $sql);  
        $row = mysqli_fetch_array($result, MYSQLI_ASSOC);  
        $count = mysqli_num_rows($result);  
          
        if($count==1){
	    header("location: admin-login.php");  
            echo "<h1><center> Login successful </center></h1>";  
        }  
        // else{  
        //     echo " Login failed. Invalid username or password.";  
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
            <h1>Login Form</h1>
            <form  method="post">
                <div class="control">
                    <label>Username</label>
                    <input type="text" name="user" id="user" required/>
                </div>
                <div class="control">
                    <label>Password</label>
                    <input type="password" name="pass" id="pass" required/>
                </div>
                <span><input type="checkbox">Remeber me.</span>
                <div class="control">
                    <a href="biling.php" class="btn"><input type="submit" value="Login"></a>
                </div>
            </form>
            <div class="link">
                <a href="signup.php">Don't have an account?</a>
            </div>

        </div>
    </section>
</body>
</html>