<?php
    include_once "header.php";

?>

<head>
    <link rel="stylesheet" href="../css/plan.css">
</head>
<body>
    <div class="container">
        <div class="inner">
            <legend>Western | Constituency</legend><br>
            <form action="" method="post">
                <label for="region">Specify Constituency of Operation:</label><br>
                <select name="region" id="region">
                    <option value="mumias">Mumias</option>
                    <option value="kakamega">kakamega central</option>
                </select><br>
            <button name="plan2" type="submit">NEXT</button>
            </form> 

        </div>
    </div>
    
</body>

<?php

    if(isset($_POST['plan2'])){
        $place = $_POST['region'];
        if($place == "mumias"){
            header ("Location: western_mumias.php");
        }
        if($place == "kakamega"){
            header ("Location: western_kakamega.php");
        }
    }

?>