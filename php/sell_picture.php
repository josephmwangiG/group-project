<!DOCTYPE html>
<html lang="en">
<head>
<link rel="stylesheet" href="../css/sell_details.css">
    <?php

        include_once "header.php";
        include_once "connection.php";

        // uploading images

        if (isset($_POST['upload'])){
            $file = $_FILES['file'];
            $fileName = $_FILES['file']['name'];
            $fileTmpName = $_FILES['file']['tmp_name'];
            $fileSize = $_FILES['file']['size'];
            $fileError = $_FILES['file']['error'];
            $fileType = $_FILES['file']['type'];
            $description = mysqli_real_escape_string($conn, $_POST['description']);
            
            if($fileSize == 0){
                echo "<div class='info'>Please select an image</div>";
            }else{
                // checking file extension validity

                $fileEx = explode('.', $fileName);
                $fileExt = strtolower(end($fileEx));
                $allowedExt = array("jpg", "jpeg", "png");

                if (in_array($fileExt, $allowedExt)){
                    if($fileError === 0){
                        // uploading file
                        
                        $newFileName = uniqid("", true).".".$fileExt;
                        $fileDestination = "../uploads/".$newFileName;
                        move_uploaded_file($fileTmpName, $fileDestination);
                        $id = $_SESSION['sale_no'];
                        $sql = "UPDATE sales SET description='$description' WHERE sale_no='$id'";
                        $sql2 = "UPDATE sales SET image = '$newFileName' WHERE sale_no='$id'";
                        mysqli_query($conn, $sql);
                        mysqli_query($conn, $sql2);                      
                        header ("Location: sale_confirm.php");
                    }else{
                    }
                }else{
                    echo "<div class='info'>Your file type is not allowed</div>";
                }
            }
        }
    ?>
  
</head>
<body>
<div class="container">

<div class="form">
<form action="" method="post" enctype = "multipart/form-data">
        <legend>Sale Description</legend>
        <div class="description">
            <textarea name="description" placeholder="Describe your commodity with brief information." class="description-textarea" id="description"></textarea>
        </div>

        <div class="label">
            <label for="upload">Select a Picture to upload</label>
        </div>
        <input type="file" name="file" id="upload">
        <div class="submit">
            <input type="submit" class="btn" name="upload" value="FINISH UP">
        </div>
    
    </form>
</div>



</div>
    
</body>
</html>
<?php
    if(isset($_POST['sell'])){
        $username = $_SESSION["name"];
        $uid = $_SESSION['userid'];
        $location = $_SESSION["located"];
        $category = mysqli_real_escape_string($conn, $_POST['category']);
        $commodity = mysqli_real_escape_string($conn, $_POST['commodity']);
        $email = $_SESSION["mail"];
        $sale_number = uniqid("", true);
        $phone = mysqli_real_escape_string($conn, $_POST['mobile']);
        $sql = "INSERT INTO sales (sale_no, username, uid, email, category, commodity, mobile, location) VALUES('$sale_number', '$username', '$uid', '$email', '$category', '$commodity', '$phone', '$location')";
        $query = mysqli_query($conn, $sql);
        $sql2 = "SELECT * FROM sales where sale_no = '$sale_number'";
        $result = mysqli_query($conn, $sql2);
        if (!$query){
            echo 'usuccessfull';
        }
        else{
            $_SESSION['sale_no'] = $sale_number;            
        }
    }

?>