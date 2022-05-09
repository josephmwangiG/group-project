<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Farmers-KB</title>
    <link rel="stylesheet" href="../css/index.css">
    <style>    ::-webkit-scrollbar{
    border:none;
    height: 6px;
    width:10px;
    margin: 10px;
}
::-webkit-scrollbar-thumb{
    background: rgb(143, 167, 138);
    border-radius: 3px;
}
    
        #header{
            height:70px;
            width:100%;
            background-color:#333;
        }
        #navigation{
            width:50%;
            margin:0 auto;
        }
        .brand{
            height:100%;
            width:150px;
            color:white;
            float:left;
            font-weight:bold;
            margin-top:15px;
            font-size:1.6rem;
        }
        .nav-link{
            height:100%;
            width:160px;
            margin-top:20px;
            float:left;
            font-size:1rem;
        }
        .nav-link a:hover{
            color:dodgerblue;
        }
        .nav-link a{
            text-decoration:none;
            color:white;
            font-weight:bold;
        }
        .brand{
            width:300px;
        }
        .brand img{

            margin-bottom:10px;
        }
    </style>
</head>
<body>
    <div id="header">
        <div id="navigation">
            <div class="brand"><img src="../images/logo.png" height="50px" alt=""></div>
            <div class="nav-link"><a href="index.php">HOME</a></div>
        
        
        </div>

    </div>

</body>
</html>
