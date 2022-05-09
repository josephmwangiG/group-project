
<?php

include_once "header.php";


?>
<head>
    <link rel="stylesheet" href="../css/learn.css">
    <style>   
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

            <?php
            include_once "connection.php";

            if(isset($_POST['article'])){
                $value = $_POST['id'];
                $sql = "SELECT * FROM articles WHERE id='$value'";

                $query = mysqli_query($conn, $sql);

                if(mysqli_num_rows($query)>0){
                    while($rows = mysqli_fetch_assoc($query)){
                        echo '
                        <div style="margin-top:20px;" class="articles">
                            <span class="title">'.$rows['title'].'</span> | <span class="author">'.$rows['userid'].'</span>
                            <p style="border:none;">'.$rows['content'].'</p>
                            
                        </div>
                        
                        ';
                        
                    }
                }
            }

            ?>
            <div class="back">
                <a style="padding-bottom:60px;" href="learn.php">go back</a>
            </div>
        </div>
    </div>
    
</body>