<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css"> 
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins">
 <style>
*{
    margin:0;
    padding:0
    font-family:"Poppins",sans-serif;
}   
body{
    height:100vh;
    display:flex;
    justify-content:center;
    align-items:center;
    flex-direction:column;
    background:#151820 /**shade of blue */;
    overflow:hidden;
}
.text-container h3{
    color:#fff;
    font-size:100px;
    font-weight:900;
    text-align:center;
    line-height:80px;
}
.text-container h3 span{
    font-size:80px;
    text-transform:uppercase;
    letter-spacing:2px;
}
.text-container .animated-text{
    position:relative;
    background:#4285F4;
    margin-top:15px;
    width:570px;
    height:75px;
    box-shadow:0 0 10px #4285F4,0 0 120px #4285F4;
    overflow:hidden;
    margin-left:430px;
}    
.text-container .animated-text:before{
content:'';
background:rgba(255,255,255,0.1);
position:absolute;
width:55%;
height:100%;
transform:skew(25deg) translate(-20px);
}
.text-container .animated-text h2{
    color:#fff;
    font-size:45px;
    text-transform:uppercase;
    text-align:center;
    line-height:75px;
}
.text-container .animated-text h2:nth-child(1){
    animation:text-move 22s infinite;
}
@keyframes text-move{
    0%{
        margin-top:0;
    }
    10%{
        margin-top:-75px;
    }
    20%{
        margin-top:-150px;
    }
    30%{
        margin-top:-225px;
    }
    40%{
        margin-top:-300px;
    }
    50%{
        margin-top:-375px;
    }
    60%{
        margin-top:-300px;
    }
    70%{
        margin-top:-225px;
    }
    80%{
        margin-top:-150px;
    }
    90%{
        margin-top:-75px;
    }
    100%{
        margin-top:-0;
    }
}
.animated-text{
    -webkit-box-reflect:below 1px linear-gradient(transparent,rgba(255,255,0.5));
}
.btn {
        display: inline-block;
        /* background: #; */
        background:rgba(255,255,255,0.1);
        /* sunset orange */
        color: #fff;
        /* white */
        padding: 8px 30px;
        margin: 30px 0;
        border-radius: 30px;
        transition: background 0.5s;
        margin-top:100px;
    }

    .btn:hover {
        background: #563434;
        /* medium dark shade of red */
    }
 </style>



</head>
<body>
    <div class="text-container">
         <h3>THANK YOU! <br> <span>YOUR PAYMENT WAS SUCCESSFUL</span></h3>
          <div class="animated-text text-center">
            <h2>THANK YOU!</h2>
            <h2>OBRIGADO!</h2>
            <h2>धन्यवाद</h2>
            <h2>मंडळ आभारी</h2>
            <h2>ధన్యవాదాలు</h2>
          </div>
        </div>
    <form action="receptionist.php" method="POST">
        
    <input type="submit" name="submit1" placeholder="submit" value="GO BACK &#8594" class="btn">
    
    </form>
</body>
</html>