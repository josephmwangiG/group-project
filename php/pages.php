<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>pages | php</title>
</head>
<body>
    <?php

        $conn = mysqli_connect("localhost", "root", "", "pagination");

        $sql = "SELECT COUNT(*) FROM paginate";
        $results = mysqli_query($conn, $sql);




        if (isset($_GET['pageno'])){
            $pageno = $_GET['pageno'];
        }else{
            $pageno = 1;
        }

        $limit = 20;

        $offset = ($pageno - 1) * $limit;

        $total_records = mysqli_fetch_array($results)[0];
        $total_pages = ceil ($total_records / $limit );
        $sql1 = "SELECT * FROM paginate LIMIT $offset, $limit";
        $query = mysqli_query($conn, $sql1);
        if(mysqli_num_rows($query)>0){
            while($rows = mysqli_fetch_assoc($query)){
                echo $rows['data'].'<br>';
            }
        }
    
    
    ?>


    <a href="?pageno=1">FIRST</a>
    <a href="<?php if($pageno <= 1 ){ echo '#'; }else{ echo'?pageno='.($pageno - 1); } ?>">PREVIOUS</a>
    <a href="<?php if($pageno >= $total_pages){ echo '#'; }else{ echo '?pageno='.($pageno+1); } ?>">NEXT</a>
    <a href="<?php echo '?pageno='.$total_pages; ?>">LAST</a>


</body>
</html>