<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pagination | php</title>
</head>
<body>
    <?php
    
        $conn = mysqli_connect("localhost", "root", "", "project_database");
        
        $limit = 20;

        // if(isset($_GET['pageno'])){
        //     $pageno = $_GET['pageno'];
        // }else{
        //     $pageno = 1;
        // }
        // $offset = ($pageno - 1) * $limit;

        // $pages = "SELECT COUNT(*) FROM paginate";
        // $result = mysqli_query($conn, $pages);
        // $total_rows = mysqli_fetch_array($result)[0];
        // $totalpages = ceil($total_rows / $limit);
        // $sql1 = "SELECT * FROM paginate LIMIT $offset, $limit";
        // $query = mysqli_query($conn, $sql1);
        // if(mysqli_num_rows($query)>0){
        //     while($rows = mysqli_fetch_assoc($query)){
        //         echo $rows['data'].'<br>';
        //     }
        // }
        $sql2 = "SELECT COUNT(*) FROM requests WHERE sale_no = '5f9494636ebbb3.96148' ";
        $query2 = mysqli_query($conn, $sql2);
        $count = mysqli_fetch_array($query2)[0];
        echo $count;
    
    ?>
    <ul>
        
        <!-- <li><a href="?pageno=1">FIRST</a></li>
        <li><a href="<?php if($pageno <= 1) { echo '#'; }else{ echo '?pageno='.($pageno - 1 ); } ?>">PREV</a></li>
        <li><a href="<?php if($pageno >= $totalpages){ echo '#'; }else{ echo '?pageno='.($pageno+1); } ?>">Next</a></li>
        <li><a href="<?php if($pageno == $totalpages){ echo '#'; }else{ echo '?pageno='.$totalpages; } ?>">Last</a></li> -->
    </ul>
</body>
</html>