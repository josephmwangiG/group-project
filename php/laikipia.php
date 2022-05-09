<?php
    include_once "header.php";

?>

<head>
    <link rel="stylesheet" href="../css/plan.css">
</head>
<body>
    <div class="container">
        <div class="inner">
            <legend>Laikipia | Constituency</legend><br>
            <form action="" method="post">
                <label for="region">Specify Constituency of Operation:</label><br>
                <select name="region" id="region">
                    <option value="nyahururu">Nyahururu</option>
                    <option value="laikipia">Laikipia West</option>
                </select><br>
            <button name="plan2" type="submit">NEXT</button>
            </form> 

        </div>
    </div>
    
</body>

<?php

    if(isset($_POST['plan2'])){
        $place = $_POST['region'];
        if($place == "nyahururu"){
            header ("Location: laikipia_nyahururu.php");
        }
        if($place == "laikipia"){
            header ("Location: laikipia_west.php");
        }
    }

?>