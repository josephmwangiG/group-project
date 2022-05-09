<?php

include_once "header1.php";
include_once "connection.php";

?>
<head>
    <link rel="stylesheet" href="../css/articles.css">
</head>
<body>
    <div class="container">
        <div class="inner">
            <h2>FKB | Create Article</h2>
            <form action="" method="post">
                    <?php


                        if(isset($_SESSION['username'])){

                        }else{
                            echo '<div class="warning">You must <a href="login.php">Login first</a></div>';

                        }?>
                <div class="inputgroup">
                    <label for="title">Title</label>
                    <input type="text" name="title" required id="title">
                </div>
                <div class="inputgroup">
                    <label for="content">Content</label>
                    <textarea required name="content" id="content"></textarea>
                </div>
                <div class="inputgroup">
                    <button type="submit" name="save">Save Article</button>
                </div>
            </form>
            <?php
                if(isset($_POST['save'])){
                if(isset($_SESSION['username'])){
                    $title = mysqli_real_escape_string($conn, $_POST['title']);
                    $content = mysqli_real_escape_string($conn, $_POST['content']);
                    $userid = $_SESSION['username'];

                    $sql = "INSERT INTO articles (title, userid, content) VALUES ('$title', '$userid', '$content')";
                    $query = mysqli_query($conn, $sql);
                    echo '<div class="success">Article Created. <a href="learn.php">View articles</a></div>';



                }else{
                    echo '<div class="warning">You must <a href="login.php">Login first</a></div>';
                }
            }

            ?>
        </div>
    </div>
</body>
</html>
<?php

