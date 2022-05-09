<?php
    include_once "header.php";

?>

<head>
    <link rel="stylesheet" href="../css/plan.css">
</head>
<body>
    <div class="container">
        <div class="inner">
            <h3>Difference reagions have different climatic conditions</h3>
            <form action="" method="post">
                <legend>Specify Location of Operation:</legend>
                <select name="region" id="region">
                    <option value="nakuru">Nakuru</option>
                    <option value="western">Western</option>
                    <option value="laikipia">Laikipia</option>
                </select><br>
            <button name='plan1' type="submit">NEXT</button>
            </form>
        </div>
    </div>
    

</body>
<?php

    if(isset($_POST['plan1'])){
        $region = $_POST['region'];
        if($region == "nakuru"){
            header ("Location: nakuru.php");            
        }
        if($region == "western"){
            header ("Location: western.php");            
        }
        if($region == "laikipia"){
            header ("Location: laikipia.php");            
        }
    }

?>