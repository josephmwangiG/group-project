<?php
    include_once "header1.php";
?>
<head>
<link rel="stylesheet" href="../css/register.css">
<script src="../js/register.js"></script>

</head>

<div id="login_form">
    <div id="form">
        <h3>LOGIN</h3>
        <form action="#" method="post" onsubmit="return loginFormValidation()">
        <div id="input_group">
            <div class="label">
                <label for="email">Email</label>
            </div>
            <div class="input-validation">
                <input type="email" name="email" id="email">
                <div class="validation" id="mail"></div>
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
        <div class="float-clear"></div>
        <div class="form-footer">
            <button name="login" type="submit">Login</button>
            <span id="or_login">
                Have no account? <a href="register.php">Please Join us</a>
            </span>
        </div>
            <div class="forget">                
                <a href="reset_password.php">Forgot password?</a>
            </div>
        </form>   
    </div>
</div>


<!--Login php-->

<?php
    $conn = mysqli_connect("localhost","root","","project_database");
    if(!$conn){
        echo 'connection error';
    }
    else{
        if (isset($_POST["login"])){
            $email = mysqli_real_escape_string($conn, $_POST['email']);
            $pwd = mysqli_real_escape_string($conn, $_POST['pwd']);

            $sql1 = "SELECT *FROM users WHERE email = '$email'";
            $query1 = mysqli_query($conn, $sql1);
            $rows = mysqli_num_rows($query1);
            $creditentials = mysqli_fetch_assoc($query1);
            if ($rows >0){
                $en = md5($pwd);
                if($en == $creditentials["pwd"] && $email == $creditentials["email"]){
                    $_SESSION["username"] = $creditentials["username"];
                    $_SESSION["email"] = $creditentials["email"];
                    $_SESSION["location"] = $creditentials["region"];
                    $_SESSION["mobile"] = $creditentials["mobile"];
                    $_SESSION['uid'] = $creditentials["id"];
                    Header("Location: index.php");
                }
            }
            else{
                Header("Location: login.php");
            }            
        }
    }


?>