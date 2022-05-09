<?php
    include_once "header.php";

?>

<head>
    <link rel="stylesheet" href="../css/plan.css">
</head>
<body>
    <div class="container">
        <div class="inner">
            <legend>Constituency</legend><br>
            <form action="" method="post">
                <label for="region">Specify Constituency of Operation:</label><br>
                <select name="region" id="region">
                    <option value="molo">MOLO</option>
                    <option value="njoro">Njoro</option>
                    <option value="">N</option>
                    <option value="">N</option>
                    <option value="">N</option>
                    <option value="">N</option>
                </select><br>
            <button name="plan2" type="submit">NEXT</button>
            </form> 

        </div>
    </div>
    
</body>

<?php

    if(isset($_POST['plan2'])){
        $place = $_POST['region'];
        if($place == "molo"){
            header ("Location: nakuru_molo.php");
        }
        if($place == "njoro"){
            header ("Location: nakuru_njoro.php");
        }
    }

?>