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
    <link rel="stylesheet" href="../css/index.css">
    <link rel="stylesheet" href="../css/service.css">

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
    <div class="image">
        <div class="bg">
            <header>
                <div class="navigation">
                    <div class="brand">
                        <brand>
                            <span><img style="padding-top:4px;" src="../images/logo.png" height="50px" alt=""></span>
                        </brand>
                    </div>

                    <div class="nav">
                            
                        <?php
                            if(isset($_SESSION['username'])){
                                echo '<div class="item"><a href="logout.php" class="link">Logout</a></div>';
                            }else{
                                echo '<div class="item"><a href="register.php" class="link">Join Us</a></div>';
                                echo '<div class="item"><a href="login.php" class="link">Login</a></div>';
                            }
                        
                        ?>
                        <div class="items">
                            
                        <ul class="nav-services"><div class="items"><span class="title">SERVICES</span></div>
                            <li class="nav-links paddings"><a href="buy.php">BUY</a></li>
                            <li class="nav-links"><a href="sell.php">SELL</a></li>
                            <li class="nav-links"><a href="learn.php">LEARN</a></li>
                            <li class="nav-links"><a href="my_sales.php">MY SALES</a></li>
                            <li class="nav-links"><a href="create_article.php">CREATE ARTICLE</a></li>
                        </ul>
                    </a></div>

                    </div>
                    </div>
                </div>
                <div class="underline"></div>
            </header>
            <div class="getstarted">
                <div class="content">
                    <span class="easy">Farming made easier</span><br>
                    <div class="border"></div>
                    <div class="knowledge">With knowledge made available at fk-base</div>
                    <div class="text">
                            Plan all about your farming using FK-BASE guidlines and set your pace towards a successfull farming course.
                    </div>
                    <a href="home.php"><button class="btn">BEGIN</button></a>
                </div>
            </div>
        </div>
    </div>
    <div class="options">
        <div class="one">
            <p>In need of farm inputs, products or even machinery</p>

            <a href="buy.php"><button>BUY GOODS</button></a>
        </div>
        <div class="two">
            <p>In need of a place to market and sell your farm goods? FK-BASE gives you an option here</p>
            <a href="sell.php"><button>SELL GOODS</button></a>
            
        </div>
        <div class="three">
            <p>Or may be you are seeking some agricultural knowledge. Learn all you need at FK-BASE</p><br>
            <a href="learn.php"><button>LEARN</button></a>
        </div>
    </div>
    <div class="share">
        <div class="container">
            <div class="inner">
                <div class="heading"><h1>Have knowledge in agricultural field. Help others by creating your own academic article.</h1></div>
                <div><a href="create_article.php"><button>CREATE ARTICLE</button></a></div>
            </div>
        </div>
    </div>
    <div class="heading-authors">
        <h1>AUTHORS</h1>
    </div>
    <div class="outer">
        <div class="authors">
            <div class="slide">

            <div class="author1">
                <h2>WARREN</h2>
                <div class="img">
                    <img src="../images/sofa.jpg" alt="">
                    
                </div>
                <div class="text">
                    <p>A computer science student at Laikipia University</p>
                    <cite><span class="minus">-</span> YEAR 3</cite>                
                </div>
            </div>
            </div>
            <div class="slide">
                <div class="author2">
                    <h2>JOSEPH</h2>
                    <div class="img">
                        <img src="../images/sofa.jpg" alt="">
                        
                    </div>
                    <div class="text">
                        <p>A computer science student at Laikipia University</p>
                        <cite><span class="minus">-</span> YEAR 3</cite>               
                    </div>
                    
                </div>
            </div>
            <div class="slide">

            <div class="author3">
                <h2>FRANK</h2>
                <div class="img">
                    <img src="../images/sofa.jpg" alt="">
                    
                </div>
                <div class="text">
                    <p>A computer science student at Laikipia University</p>
                    <cite><span class="minus">-</span> YEAR 3</cite>               
                </div>
                
            </div>
            </div>
            <div class="slide">
            <div class="author4">
                <h2>ALLAN</h2>
                <div class="img">
                    <img src="../images/sofa.jpg" alt="">
                    
                </div>
                <div class="text">
                    <p>A computer science student at Laikipia University</p>
                    <cite><span class="minus">-</span> YEAR 3</cite>                
                </div>
                
            </div>
            </div>
            <div class="slide">
            <div class="author5">
                <h2>VICTOR</h2>
                <div class="img">
                    <img src="../images/sofa.jpg" alt="">
                    
                </div>
                <div class="text">
                    <p>A computer science student at Laikipia University</p>
                    <cite><span class="minus">-</span> YEAR 3</cite>                
                </div>
                
            </div>

            </div>
        </div>
    
    </div>
        
    <div class="footer">
        <div class="content">
            <div class="about">
                <h1>about</h1>
                <p>
                    The farmers knowledge base is a project to help farmers acquire the needed knowledge to manage their farms

                </p>
            </div>
            <div class="contacts">
                <h1>contacts</h1>
                    <p>
                        email: fkbase@gmail.com <br>
                        phone: +254 708564750

                    </p>
            </div>
            <div class="help">
                <h1>help</h1>
                <p>
                If you need any help you can contact us through our contacts or comment page.

                </p>
            </div>
        </div>
        <div class="socket">
        </div>
        <div class="copyright">
            group 100 &copy; 2020 Laikipia
        </div>
    </div>
    
</body>
</html>