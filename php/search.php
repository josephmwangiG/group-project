    
    <?php

        include_once "connection.php";
        include_once "header.php";


    ?>
    <head>
    <link rel="stylesheet" href="../css/learn.css">
    <style>
    .inner h2{
        color:blue;
        padding:12px 0;
    }
    .back a{
        color:dodgerblue;
        font-size:16px;
        letter-spacing:1px;
    }
    </style>
    </head>


    <body>
        <div class="container">
            <div class="inner">
            <h2>Search results</h2>
            <?php
                    if(isset($_POST['search'])){
                        $search = $_POST['searches'];
            
                        $sql = "SELECT * FROM articles WHERE title LIKE '%$search%' OR content LIKE '%$search%' ";
                        $query = mysqli_query($conn, $sql);
                        if(mysqli_num_rows($query)>0){
                            while($rows = mysqli_fetch_assoc($query)){
                                echo '       
                                <div class="articles">         
                                <form action="article.php" method="POST">
                                <input style="display:none;" name="id" type="number" value="'.$rows['id'].'">
                                <span class="title"><button type="submit" name="article">'.$rows['title'].'</button></span> | <span class="author">'.$rows['userid'].'</span></form>
                                <p>'.substr($rows['content'], 0,200).'........</p></div>';
                                
            
                            }
                        }else{
                            echo '       
                            <div class="articles">         
                            <p>No results found</p></div>';
                        }
                    }
            
            ?>
            <div class="back">
                <a href="learn.php">go back</a>
            </div>
            </div>
        </div>
    </body>