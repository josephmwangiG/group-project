<?php

    include_once "header1.php";
    include_once "connection.php";

?>

<head>
    <link rel="stylesheet" href="../css/reset.css">
</head>

<body>
    <div class="container">
        <div class="form">
            <form action="" method="POST">
                <legend>Reset Password</legend>
                <div class="input-group">
                    <div class="label">
                        <label for="email">Enter Email</label>
                    </div>
                    <div class="input">
                        <input type="email" name="email" id="email">
                    </div>
                </div>
                <div class="input-group">
                    <div class="label">
                        <label for="password">New Password</label>
                    </div>
                    <div class="input">
                        <input type="password" name="pwd" id="password">
                    </div>
                </div>
                <div class="input-group">
                    <div class="label">
                        <label for="c_password">Confirm Password</label>
                    </div>
                    <div class="input">
                        <input type="password" name="c_pwd" id="c_password">
                    </div>
                </div>
                <div class="input-group">
                    <button type="submit" name="reset">RESET PASSWORD</button> <a href="login.php">Or Login to your account</a>
                </div>
            </form>
            <?php

                if(isset($_POST['reset'])){
                    $email = mysqli_real_escape_string($conn, $_POST['email']);
                    $pwd = mysqli_real_escape_string($conn, $_POST['pwd']);
                    $c_pwd = mysqli_real_escape_string($conn, $_POST['c_pwd']);
                    $sql = "SELECT * FROM users WHERE email='$email'";

                    

                    $query = mysqli_query($conn, $sql);
                    
                    if(mysqli_num_rows($query)>0){
                        if($pwd == $c_pwd){
                            $en = md5($pwd);
                            $sql1 = "UPDATE users SET pwd = '$en' WHERE email='$email'";
                            $q = mysqli_query($conn, $sql1);
                            echo ' <div class="infors">Password changed <a href="login.php">Login Now</a></div>';
                        }else{
                            echo ' <div class="infors">Password does not match</div>';

                        }
                    }else{

                    }
                }

            ?>
        </div>
    </div>
</body>

