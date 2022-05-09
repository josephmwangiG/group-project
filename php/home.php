<?php
include_once "header.php";

?>
<head>
    <link rel="stylesheet" href="../css/homes.css">
</head>

<body>
    <div class="container">
        <div class="inner">
            <div class="make-plan">
                <h3>Make a plan for your farm</h3>
                <p>
                    At all cost, a wise farmer looks for neccessary information before taking neccesary tools for farming. A farmer has to consider various factors affecticting agriculture and herebelow we list some of them.
                </p>
            </div>
            <div class="factors">
                <h4>Factors affecting agriculture</h4>
                <ul>
                    <li>Weather and climatic conditions</li>
                    <li>Region of operation</li>
                    <li>Cost of production and market patterns</li>
                    <li>Soil condition and content</li>
                </ul>
                <p>LIMA helps you come up with a more relevant plan for your farm having consider the most influential factors in agriculture.</p>
            </div>
            <div class="form"><h3>Weather</h3>
                <p>
                    A farmer can avoid unpredictable weather conditions by practising greenhousing or irrigation farming. Else farmers have to be aware of the weather patterns of their area of operation. Irrigation and greenhousing is comparatively expensive as compared to relying on natural weather for farmnig.
                </p>
                <form action="home.php" method="POST">
                    <legend>How do you want to cope up with this situation?</legend>
                    <select name="weather" id="weather">
                        <option value="greenhouse">greenhousing</option>
                        <option value="irrigation">irrigation</option>
                        <option value="livestock">Livestock keeping</option>
                        <option value="nature">Natural weather</option>
                    </select><br>
                    <button name='plans' type="submit">NEXT</button>
                </form> 
            </div>
        </div>
    </div>

    <?php
        
        if(isset($_POST['plans'])){
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
            else if( $condition == "livestock" ){
                header ("Location: livestock.php");
            }
        }
    ?>
        <?php
        include_once "footer.php";
    ?>
</body>
