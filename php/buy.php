<?php
    include_once "header.php";
    include_once "connection.php";
?>

<head>
    <link rel="stylesheet" href="../css/buy.css">
</head>
<body>
    <div id="buy">
        <div id="headings">
            <span>Available Goods</span>
            <form action="" method="post">
             <select class="filter-select" name="category" id="category">
                <option value="1">Filter by</option>
                <option value="inputs">Farm Inputs</option>
                <option value="products">Farm Products</option>
                <option value="machinery">Machinery</option>
            </select>
            <a id="request" href="request.php">Request Specific Goods</a>
            <button class="filter-btn" name="filter" type="submit">Filter</button>
            </form>
        </div>
        


        <?php 

            $filter = 1;
            if (isset($_POST['filter'])){if(isset($_GET['pageno'])){
                $pageno = $_GET['pageno'];
            }else{
                $pageno = 1;
            }

            $records = 12;
            $sql1 = "SELECT COUNT(*) FROM sales";
            $result = mysqli_query($conn, $sql1);

            $total_records = mysqli_fetch_array($result)[0];
            $pages = ceil($total_records / $records);

            $offset = ($pageno - 1) * $records;
            $filter = $_POST['category'];
            if ($filter == 1){
                $sql = "SELECT * FROM sales ORDER BY id desc LIMIT $offset, $records";
            }else{
                $sql = "SELECT * FROM sales WHERE category = '$filter' ORDER BY id desc LIMIT $offset, $records";
            }
            $query = mysqli_query($conn, $sql);



            
            $query = mysqli_query($conn, $sql);

            if (mysqli_num_rows($query) > 0){
                while ($goods = mysqli_fetch_assoc($query)){
                    echo '<div class="good">';
                    echo '<div id="commodity">';
                    echo '<div id="image">';
                    $image = $goods["image"];
                    echo '<img src="../uploads/'.$image.'" alt="image">';
                    echo '</div>';
                    echo '<div class="details">';
                    echo 'Commodity: '.$goods['commodity'].' <br>';
                    
                    echo '<div class="seller" >Seller: '.$goods['username'].'</div>';
                    echo '
                    <form action="onsale.php" method="post">
                        <input style="display:none;" type="text" name="sale_no" 
                         value="';
                    echo  $goods['sale_no'];
                    echo'" id=""> <br><button class="btn" type="submit" name="sales">MORE INFORMATION</button>
                    </form>';
                    echo '</div>';
                    echo '</div>';
                    echo '</div>';
                }
            }

            else{
                echo '<div id="commodity">';
                echo 'No available goods';
                echo '</div>';
                
            }
            }else{

            if(isset($_GET['pageno'])){
                $pageno = $_GET['pageno'];
            }else{
                $pageno = 1;
            }

            $records = 12;
            $sql1 = "SELECT COUNT(*) FROM sales";
            $result = mysqli_query($conn, $sql1);

            $total_records = mysqli_fetch_array($result)[0];
            $pages = ceil($total_records / $records);

            $offset = ($pageno - 1) * $records;



            $sql = "SELECT * FROM sales ORDER BY id desc LIMIT $offset, $records";
            
            $query = mysqli_query($conn, $sql);

            if (mysqli_num_rows($query) > 0){
                while ($goods = mysqli_fetch_assoc($query)){
                    echo '<div class="good">';
                    echo '<div id="commodity">';
                    echo '<div id="image">';
                    $image = $goods["image"];
                    echo '<img src="../uploads/'.$image.'" alt="image">';
                    echo '</div>';
                    echo '<div class="details">';
                    echo 'Commodity: '.$goods['commodity'].' <br>';
                    
                    echo '<div class="seller" >Seller: '.$goods['username'].'</div>';
                    echo '
                    <form action="onsale.php" method="post">
                        <input style="display:none;" type="text" name="sale_no" 
                         value="';
                    echo  $goods['sale_no'];
                    echo'" id=""> <br><button class="btn" type="submit" name="sales">MORE INFORMATION</button>
                    </form>';
                    echo '</div>';
                    echo '</div>';
                    echo '</div>';
                }
            }

            else{
                echo '<div id="commodity">';
                echo 'No available goods';
                echo '</div>';
                
            }
        

            }

            
        
        
        ?>
            


        </div>
    </div>
    <div></div>
    <div class="buttons">
        <a href="?pageno=1"><button>1</button></a> 
        <a href="<?php if($pageno <=1){ echo "#"; }else{ echo '?pageno='.($pageno-1); } ?>"><button>prev</button></a> 
        <a href="<?php if($pageno >= $pages){ echo '#'; }else{ echo'?pageno='.( $pageno + 1 ); } ?>"><button>next</button></a> 
        <a href="<?php echo '?pageno='.$pages ?>"><button><?php echo $pages ?></button></a> 
    </div>
    <?php
        include_once "footer.php"
    ?>
</body>