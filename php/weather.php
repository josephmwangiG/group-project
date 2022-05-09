<?php
    include_once "header.php";

?>
<head>
    <link rel="stylesheet" href="../css/plan.css">
</head>
<body>
    <div class="container">
        <div class="inner">        
            <h3>Weather</h3>
            <p>
                A farmer can avoid unpredictable weather conditions by practising greenhousing or irrigation farming. Else farmers have to be aware of the weather patterns of their area of operation. Irrigation and greenhousing is comparatively expensive as compared to relying on natural weather for farmnig.
            </p>
            <form action="" method="post">
                <legend>How do you want to cope up with tgis situation?</legend>
                <select name="weather" id="weather">
                    <option value="greenhouse">greenhousing</option>
                    <option value="irrigation">irrigation</option>
                    <option value="livestock">Livestock keeping</option>
                    <option value="nature">Natural weather</option>
                </select><br>
            <button name='plan1' type="submit">NEXT</button>
            </form> 
        </div>
    </div>


</body>
<?php

    if(isset($_POST['plan1'])){
        $condition = $_POST['weather'];
        if( $condition == "greenhouse" ){
            header ("Location: greenhouse.php");
        }
        else if( $condition == "irrigation" ){
            header ("Location: irrigation.php");
        }
        else if( $condition == "nature" ){
            header ("Location: region.php");
        }
        else if( $condition == "nature" ){
            header ("Location: livestock.php");
        }
    }

?>