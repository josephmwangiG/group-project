<?php
    session_start();
    if (isset($_SESSION['username'])){
        $_SESSION["name"] = $_SESSION["username"];
        $_SESSION["located"] = $_SESSION["location"];
        $_SESSION["mail"] = $_SESSION["email"];
        $_SESSION["phone"] = $_SESSION["mobile"];
        $_SESSION['userid'] = $_SESSION['uid'];
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Farmers-KB</title>
    <link rel="stylesheet" href="../css/head.css">
    <style>    
    ::-webkit-scrollbar{
    border:none;
    height: 6px;
    width:10px;
    margin: 10px;
}
::-webkit-scrollbar-thumb{
    background: rgb(143, 167, 138);
    border-radius: 3px;
}
    
    </style>
</head>
<body>
    <div id="header">
        <div id="navigation">
        <div class="nav">
        <div class="homes">
        <a href="">FK-BASE</a>

        </div></div>
        <div class="nav">
        <div class="homes">
        <a href="index.php">Home</a>

        </div></div>
        <div class="nav">
        <ul class="nav-services">SERVICES
            <li class="nav-link"><a href="buy.php">BUY</a></li>
            <li class="nav-link"><a href="sell.php">SELL</a></li>
            <li class="nav-link"><a href="learn.php">LEARN</a></li>
            <li class="nav-link"><a href="my_sales.php">MY SALES</a></li>
            <li class="nav-link"><a href="requested.php">REQUESTS</a></li>
            <li class="nav-link"><a href="create_article.php">Create Article</a></li>
        </ul></div>
        <div class="nav">
            
        <?php
            if(isset($_SESSION['username'])){
                echo '<span id="login"><a href="logout.php">Logout</a></span>';
            }else{
                echo '                
                <a href="login.php"><span id="login">Login</span></a>';
            }
        
        ?>
        </div>
        
        </div>
         
    </div>
</body>
</html>