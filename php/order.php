
<?php
include_once "header.php";
include_once "connection.php";
?>
<head>
    <link rel="stylesheet" href="../css/order.css">
</head>
<body>
 
<?php

if(isset($_POST["more_information"])){   
    $id = $_POST['order'];

    $sql = "SELECT * FROM orders WHERE id='$id'";
    $query = mysqli_query($conn, $sql);

    if(mysqli_num_rows($query) > 0){
        while($row = mysqli_fetch_assoc($query)){
            echo '
                    <div class="commodity">
                        <div class="information">
                        ORDER NO: '.$row['id'].'<br>
                        Commodity: '.$row['commodity'].' <br>
                            <div class="span">Buyer: '.$row['username'].'</div>
                            
                        </div>
                        <div class="image">
                        <h4>Description:</h4>
                        <p>'.$row['description'].'</p>
                        </div>
                        <div class="contacts">
                        Mobile: '.$row['phone'].'<br>
                        Email: '.$row['email'].'<br>
                        Location: '.$row['location'].'<br>
                        </div>
                        <button>CONTACT BUYER</button>
                    </div>
                    ';
        }
    }
}else{
    echo "NONE";
}



?>
</body>