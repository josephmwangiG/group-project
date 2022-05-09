<?php

include_once "header.php";
include_once "connection.php";



?>

<head>
<link rel="stylesheet" href="../css/l.css">

</head>

<body>
    

    <div class="container">
        <div class="inner">
            <div class="heading">
                <h1>Read | <a href="create_article.php">Create article</a></h1>
            </div>
            <div class="search">
                <form action="search.php" method="POST">
                <input type="search" placeholder="Search article" name="searches" id="search">
                <button type="submit" name="search">SEARCH</button></div></form>
            <?php

                $sql = "SELECT * FROM articles ORDER BY id desc ";

                $query = mysqli_query($conn, $sql);

                if(mysqli_num_rows($query)>0){
                    while($rows = mysqli_fetch_assoc($query)){
                        echo '
                        <div class="articles">
                            <form action="article.php" method="POST">
                            <input style="display:none;" name="id" type="number" value="'.$rows['id'].'">
                            <span class="title"><button type="submit" name="article">'.$rows['title'].'</button></span> | <span class="author">'.$rows['userid'].'</span></form>
                            <p>'.substr($rows['content'], 0,200).'........</p>
                            
                        </div>
                        
                        ';
                    }
                }
            
            ?>
        </div>
    </div>
    
    

</body>
