<?php

include_once "connection.php";
include_once "header1.php";

?>
<head>
<link rel="stylesheet" href="../css/details.css">
</head>

<body>
    <div class="container">
        <div class="inner">
            <?php
            if(isset($_POST['details'])){
                $sale_no = $_POST['sale_no'];
                $sql2 = "SELECT COUNT(*) FROM requests WHERE sale_no = '$sale_no' ";
                $query = mysqli_query($conn, $sql2);
                $count = mysqli_fetch_array($query)[0];
                if ($count>0){
                    echo '<div class="requests">Your sale have '.$count.' Requests.</div>';
                    $sql3 = "SELECT * FROM requests WHERE sale_no = '$sale_no' ";
                    $quer2 = mysqli_query($conn, $sql3);
                    echo '
                    <div class="contacts">Buyer\'s contacts.</div>
                    <table>
                    <thead>
                        <tr>
                            <th>Buyer email</th>
                            <th>Buyer phone</th>
                        </tr>
                    </thead>
                    <tbody>
                    ';
                    if(mysqli_num_rows($quer2)>0){
                        while($rows = mysqli_fetch_assoc($quer2)){
                            echo '                            
                                <tr>
                                <td>'.$rows['buyer_email'].'</td>
                                <td>'.$rows['phone'].'</td>
                            </tr>
                            ';
                        }
                        echo '
                        </tbody>
                
                        </table>
                        <div class="infor"><p>You can contact the interested buyer using the above contacts!</p></div>
                        
                        ';
                    }

                }else{
                    echo '<div class="requests">Your sale have no requests yet</div>';
                }
            }
            ?>
        </div>
    </div>
</body>