<?php
    include_once "header1.php";
    include_once "connection.php";
?>

<head>
    <link rel="stylesheet" href="../css/request.css">
</head>
<body>
    <div class="form">                
        <h3>Request Goods</h3>
        <form action="" method="post">
            <div class="input_group">
                <div class="label">
                    <label for="email">Email</label>
                </div>
                <div class="input">
                    <input type="email" name="email" id="email">
                </div>
            </div>
            <div id="input_group">
                <div class="label">
                    <label for="mobile">Mobile</label>
                </div>

                <div class="input">
                    <input type="text" name="mobile" id="mobile">
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
                    <label for="region">Region</label>
                </div>
                <div class="input">
                    <input type="text" name="region" id="region"></div>
                </div>
            <div class="description">
                <div class="label">
                    <label for="description">Description</label>
                </div>
                <div class="input">
                <textarea name="description" placeholder="Describe your commodity with brief information." class="description-textarea" id="description"></textarea>
                </div>
            </div><?php

if(isset($_POST['request'])){
    if(isset($_SESSION['username'])){
        $username = $_SESSION['name'];
        $email = mysqli_real_escape_string($conn, $_POST['email']);
        $category = mysqli_real_escape_string($conn, $_POST['category']);
        $phone = mysqli_real_escape_string($conn, $_POST['mobile']);
        $region = mysqli_real_escape_string($conn, $_POST['region']);
        $description = mysqli_real_escape_string($conn, $_POST['description']);
        $commodity = mysqli_real_escape_string($conn, $_POST['commodity']);
        
        $sql = "INSERT INTO orders (username, phone, commodity, email, location, description, category) VALUES('$username','$phone', '$commodity', '$email', '$region', '$description', '$category')";
        $query = mysqli_query($conn, $sql);
        
        if($query){
            echo '<div style="color:dodgerblue; font-size:16px; padding-left:35%; margin-top:20px; padding-bottom:60px">Done. You can view <a href="buy.php">Other goods</a></div>';
        }else{
            echo "error";
        }



    }else{
        echo '<div><a href="login.php">Login First!</a></div>';
    }
}

?>
            <div class="form-footer">
                <button name="request" type="submit">Request</button>
                <span id="or_login">
                    or <a href="buy.php">Buy Goods</a>
                </span>
            </div>


        </form>
    </div>
    
</body>

