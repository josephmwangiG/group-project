<?php
include_once "header1.php";
?>
<head>
    <link rel="stylesheet" href="../css/register.css">
    <script src="../js/register.js"></script>
</head>
<div id="form">
    <h3>Create an account</h3>
    <form action="" method="post" onsubmit="return registrationFormValidation()">
        <div id="input_group">
            <div class="label">
                <label for="name">User Name</label>
            </div>
            <div class="input-validation">
                <input autocomplete="off" type="text" name="name" id="name">
                </div>            
        </div>
        <div id="input_group">
            <div class="label">
                <label for="email">Email</label>
            </div>
            <div class="input-validation">
                <input type="email" name="email" id="email">
            </div>

        </div>
        <div id="input_group">
            <div class="label">
                <label for="mobile">Mobile</label>
            </div>
            <div class="input-validation">
                <input type="text" name="mobile" id="mobile">
            </div>
            
        </div>
        <div id="input_group">
            <div class="label">
                <label for="region">Region</label>
            </div>
            <div class="input-validation">
                <input type="text" name="region" id="region">
            </div>
        </div>
        <div id="input_group">
            <div class="label">
                <label for="pwd">Password</label>
            </div>
            
            <div class="input-validation">
                <input type="password" name="pwd" id="pwd">
                <div class="validation" id="vpassword"></div>
            </div>
        </div>
        <div id="input_group">
            <div class="label">
                <label for="c_pwd">Confirm Password</label>
            </div>
            <div class="input-validation">
                <input type="password" name="c_pwd" id="c_pwd">
                <div class="validation" id="vc_password"></div>
            </div>
        </div>
        <div class="float-clear"></div>
        <div class="form-footer">
            <button name="register" type="submit">Register</button>
            <span id="or_login">
                Have an account? <a href="login.php">Please Log in</a>
            </span>
        </div>
        <div class="infors" id="infors"></div>
    </form><?php
    $conn = mysqli_connect("localhost","root","","project_database");
    if(!$conn){
        echo 'connection error';
    }
    else{
        if (isset($_POST["register"])){
            $username = mysqli_real_escape_string($conn, $_POST['name']);
            $email = mysqli_real_escape_string($conn, $_POST['email']);
            $mobile = mysqli_real_escape_string($conn, $_POST['mobile']);
            $region = mysqli_real_escape_string($conn, $_POST['region']);
            $pwd = mysqli_real_escape_string($conn, $_POST['pwd']);

            $sql1 = "SELECT *FROM users WHERE email = '$email'";
            $query1 = mysqli_query($conn, $sql1);
            $rows = mysqli_num_rows($query1);
            if (mysqli_num_rows($query1) >0){
                echo "<div style='color:red;'>Email Already exist!.</div>";
            }
            else{
                $en = md5($pwd);
                $sql = "INSERT INTO users (username,email,mobile,region,pwd) VALUES('$username','$email','$mobile','$region','$en')";
                $query = mysqli_query($conn, $sql);
                if(!$query){
                echo "Registration Error";
                }
                else{
                    Header("Location: login.php");
                }
            }            
        }
    }


?>
</div>



<!-- register php -->


