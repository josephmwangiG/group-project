<?php

include_once "connection.php";
include_once "header.php";

?>
<head>
    <link rel="stylesheet" href="../css/mysales.css">
</head>

<body>

    <div class="container">
        <div class="inner">
            <br><h3 style="color:dodgerblue;">My sales</h3><br>
            <table>
                <thead>
                    <tr>
                        <th>serial no</th>
                        <th>sale number</th>
                        <th>commodity</th>
                        <th>View Details</th>
                    </tr>
                </thead>
                <tbody>
                    <?php

                if(isset($_SESSION['uid'])){
                    $id = $_SESSION['uid'];
                    $sql = "SELECT * FROM sales WHERE uid='$id' ORDER BY id desc";
                    $query = mysqli_query($conn, $sql);

                    if(mysqli_num_rows($query)){
                        while($rows = mysqli_fetch_assoc($query)){
                            $num = 1;
                            echo '
                            <tr>
                                <td>'.$num.'</td>
                                <td>'.$rows['sale_no'].'</td>
                                <td>'.$rows['commodity'].'</td>
                                <td>    <form action="details.php" method="post">
                                <input style="display:none;" type="text" value="'.$rows['sale_no'].'" name="sale_no">
                                <button style="background:none;border:none;color:dodgerblue;outline:none;" name="details" type="submit">Details</button>
                            </form></td>
                            </tr>
                            ';
                            $num = $num + 1;
                        }
                    }else{
                        echo '<div><a>You have 0 sales </div>';
                    }
                }else{
                    echo '<div><a href="login.php">Login first <a/>to view your sales</div>';

                }



                    
                    ?>
                       
                </tbody>
            </table>
        </div>
    </div>
</body>