<?php
    include_once "header.php";
    include_once "connection.php";
?>

<head>
    <link rel="stylesheet" href="../css/requests.css">
    <link rel="stylesheet" href="../css/btns.css">
    
</head>
<body>


    <div  class="buy">        <div class="headings">
            <span>Requested Goods</span>
            <a id="request"  href="sell.php">Sell Goods</a>
          
        </div>
        <?php

            $records = 6;

            if(isset($_GET['pageno'])){
                $pageno = $_GET['pageno'];

            }else{
                $pageno = 1;
            }

            $sql2 = "SELECT COUNT(*) FROM orders";
            $result = mysqli_query($conn, $sql2);

            $total_records = mysqli_fetch_array($result)[0];
            $pages = ceil($total_records / $records);

            $offset = ($pageno - 1) * $records;
        
            $sql = "SELECT * FROM orders ORDER BY id desc LIMIT $offset, $records";
            $query = mysqli_query($conn, $sql);

            if (mysqli_num_rows($query) > 0){
                while($row = mysqli_fetch_assoc($query)){
                    $id = $row['id'];
                    echo '
                    <div class="commodity">
                        <div class="information">
                        Commodity: '.$row['commodity'].' <br>
                            <div class="span">Buyer: '.$row['username'].'</div>
                            
                        </div>
                        <div class="image">
                        <h4>Description:</h4>
                        <p>'.substr($row['description'],0,200).'.....</p>
                        </div>
                        <form action="order.php" method="post">
                        <input type="text" style="display:none;" name="order" value="'.$id.'" id="">
                        <button type="submit" name="more_information">MORE INFORMATION</button>
                        </form>
                        
                    </div>
                    ';
                }
            }else{
                echo '
                <div class="commodity">
                <p>NO availabe goods</p>
                </div>
                ';
            }


        
        ?>
    <div></div>
        
    <div class="buttons">
    <a href="?pageno=1"><button>1</button></a>
    <a href="<?php  if( $pageno <= 1){ echo '#'; }else{ echo '?pageno='.($pageno-1); }  ?>"><button>prev</button></a>
    .....
    <a href="<?php echo '?pageno='.ceil($pages / 2); ?>"><button><?php echo ceil($pages / 2); ?></button></a>
    .....
    <a href="<?php if( $pageno >= $pages ){ echo '#'; }else{ echo '?pageno='.( $pageno + 1 ); } ?>"><button>next</button></a>
    <a href="<?php echo '?pageno='.$pages; ?>"><button><?php echo $pages; ?></button></a>
    
    </div>
</body>