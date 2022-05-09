<?php
    include_once "header.php";
    include_once "connection.php";



?>
<head>
    <style>
    .container{
        width:100%;
        font-size:20px;
    }
    .inner{
        width: 80%;
        margin:30px auto;
    }
    .inner h2{
        padding:20px 0;
        color: green;
    }
    .inner a{
        color:dodgerblue;
        text-decoration:none;
        font-size:22px;
    }
    </style>

</head>

<body>
    <div class="container">
        <div class="inner">
            <?php
            
            if(isset($_POST['buy'])){
                $sale_no = $_POST['saleid'];
                
                $sql = "SELECT * FROM sales WHERE sale_no='$sale_no'";
                $query = mysqli_query($conn, $sql);
            
                if(mysqli_num_rows($query)>0){
                    while ($goods = mysqli_fetch_assoc($query)){
                        $s_no = $goods["sale_no"];
                        $id = $_SESSION["uid"];
                        $user = $goods["uid"];
                        $phone = $_SESSION["phone"];
                        $email = $_SESSION["email"];
                        $sql2 = "INSERT INTO requests(sale_no, buyer_id, seller_id, buyer_email, phone)VALUES('$s_no', $id, $user, '$email', '$phone')";
                        $query2 = mysqli_query($conn, $sql2);
                        echo '
                        
                        
                    <h2>Thank you!...... Request Successful</h2>
                    <p>You have requested <strong>'.$goods['commodity'].'</strong> From <strong>'.$goods['username'].'</strong><br><br>
                        Communications regarding the order will be made to you soon!!!!

                    </p>
                    <br>
                    <a href="buy.php">View more goods</a>
                    
                        
                        ';
                    }
                }
            }

            
            
            ?>
        </div>
    
    </div>
</body>