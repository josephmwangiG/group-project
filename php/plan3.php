<?php
    include_once "header.php";

?>

<head>

</head>
<body>
    
    <h3>Constituency:</h3>
    <form action="" method="post">
        <label for="region">Specify Constituency of Operation:</label>
        <select name="region" id="region">
            <option value="">Nakuru</option>
            <option value="">N</option>
            <option value="">N</option>
            <option value="">N</option>
            <option value="">N</option>
            <option value="">N</option>
            <option value="">N</option>
            <option value="">N</option>
            <option value="">N</option>
            <option value="">N</option>
            <option value="">N</option>
            <option value="">N</option>
        </select>
       <button name="plan2" type="submit">NEXT</button>
    </form> 

</body>

<?php

    if(isset($_POST['plan2'])){
        header ("Location: plan3.php");
    }

?>