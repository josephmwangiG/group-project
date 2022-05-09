<?php

include_once "header.php";
include_once "connection.php";

?>
<head>
    <link rel="stylesheet" href="../css/onsale.css">
</head>
<body>
    <?php
 
    if(isset($_POST['sales'])){
        $id = $_POST['sale_no'];
        $sql = "SELECT * FROM sales WHERE sale_no='$id'";
        $query = mysqli_query($conn, $sql);

        if(mysqli_num_rows($query)>0){
            while ($goods = mysqli_fetch_assoc($query)){
                echo '<div class="good">';
                echo '<div id="commodity">';
                echo '<br><strong class="number">Sale number:</strong> '.$goods['sale_no'].' <br>';
                echo '<div id="image">';
                $image = $goods["image"];
                echo '<img src="../uploads/'.$image.'" alt="image">';
                echo '</div>';
                echo '<div class="details">';
                echo '<h4>Commodity:</h4> '.$goods['commodity'].' <br>';
                
                echo '<div class="seller" ><h4>Seller:</h4> '.$goods['username'].'</div>';
                echo '<div class="description" ><h4>Description:</h4><br> '.$goods['description'].'</div>';
                echo '            <form action="purchase.php" method="post">
                <input style="display:none;" type="text" name="saleid" value="'.$goods['sale_no'].'" id="">
                <input style="display:none;" type="number" name="id" value="'.$goods['id'].'" id="">
                ';
                if (isset($_SESSION['uid'])){
                    echo '<button class="btn" type="submit" name="buy">Request commodity...</button>';
                }else{
                    echo '<a style="margin: 12px 0;" href="login.php">Login First!</a>';
                }
                echo '
            </form>
                <div class="back"><a href="buy.php">Check for other goods</a></div>
              ';
                echo '</div>';
                echo '</div>';
                echo '</div>';


            }
        }

    }
    else{
        echo "NO SUCH ORDER";
    }
    

    ?>
</body>