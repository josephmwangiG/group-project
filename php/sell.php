<?php
    include_once "header1.php";
    include_once "connection.php";
?>

<head>
    <link rel="stylesheet" href="../css/sell.css">
</head>
<body>
    <div id="form">
        <div class="head"><h3>Sell Goods Form</h3></div>
        <div class="link"><a href="requested.php">View Requested Goods</a></div>
        <form action="sell_picture.php" method="post" enctype="multipart/form-data">
            <div id="input_group">
                <div class="label">
                    <label for="email">Email</label>
                </div>
                <div class="input">
                    <input type="email" value="<?php 
                    if (isset($_SESSION['mail'])){
                        echo $_SESSION['mail'];
                    }
                
                
                ?>" name="email" id="email">
                </div>
            </div>
            <div id="input_group">
                <div class="label">
                    <label for="mobile">Mobile</label>
                </div>
                <div class="input">
                <input value="<?php 
                if(isset($_SESSION['phone'])){            
                    echo $_SESSION['phone'];
                }
            ?>" type="text" name="mobile" id="mobile">
            </div>
            </div>
            
            <div id="input_group">
                <div class="label">
                    <label for="commodity">commodity</label>
                </div>
                <div class="input">
                    <input autocomplete="off" type="text" name="commodity" id="commodity">
                </div>
            </div>
            <div id="input_group">
                <div class="label">                    
                    <label for="category">category</label>
                </div>
                <div class="input">
                    <select name="category" id="category">
                    <option value="">--select--</option>        
                    <option value="machinery">Machinery</option>        
                    <option value="inputs">Farm Inputs</option>        
                    <option value="products">Farm Products</option>        
                    <option value="">Others</option>                
                    </select>
                </div>
            </div>
            <div id="input_group">
                <div class="label">
                    <label for="amount">Approximate value</label>
                </div>
                <div class="input">
                    <input autocomplete="off" type="text" placeholder="In Ksh" name="amount" id="amount">
                </div>
            </div>
            <div class="input-group" id="input_group">
                <div class="label">
                    <label for="region">Region</label>
                </div>
                <div class="input">
                    <input type="text"value="<?php 
                    if(isset($_SESSION['located'])){            
                        echo $_SESSION['located'];
                    }
                ?>" name="region" id="region">
                </div>
            </div>
            <div class="buttons">
                <?php
                
                if (isset($_SESSION['uid'])){
                    echo '
                    <button name="sell" class="btn" type="submit">NEXT</button>';
                }
                else{
                    echo '
                    <a href="login.php">Login First!</a>';
                }
                ?>
            </div>
        </form>
    </div>



</body>
</html>