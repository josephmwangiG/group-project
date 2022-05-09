<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src="../js/register.js"></script>
    <style>
        #one{
            width:100%;
            height:fit-content;
        }
    </style>
</head>
<body>
    <form action="" method="POST" onsubmit="return forms()">
    <input type="text" id="name" name="name">
    <div id="one"></div>
    <input type="text" id="names" name="name">
    <div id="two"></div>
    <input type="text" id="namess" name="name">
    <div id="three"></div>
    <button type="submit" name="send">Send</button>
    </form>

</body>
</html>


<?php

        include_once "connection.php";

        $sql = "SELECT * FROM sales";
        $query = mysqli_query($conn, $sql);

        if (mysqli_num_rows($query) > 0){
            while ($row = mysqli_fetch_assoc($query)){
                echo $row['sale_no']."<br>";
            }
        }

?>