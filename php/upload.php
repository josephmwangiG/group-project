<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="post" enctype="multipart/form-data">
    <input type="file" name="file" id="file">
    <input type="submit" value="Upload" name="upload">
    </form>




</body>
</html>

<?php

    if(isset($_POST['upload'])){
        $file = $_FILES['file'];
        $filename = $_FILES['file']['name'];
        $fileTmpName = $_FILES['file']['tmp_name'];
        $fileSize = $_FILES['file']['size'];
        $fileError = $_FILES['file']['error'];
        $fileType = $_FILES['file']['type'];

        if ($fileSize == 0){
            echo "Please select an image to upload ";
        }else{
            $allowedExt = array("jpg", "jpeg", "png");
            $fileEx = explode('.', $filename);
            $fileExt = strtolower(end($fileEx));
            if (in_array($fileExt, $allowedExt)){
                if($fileError === 0){
                    $fileNewName = uniqid('',true).".".$fileExt;
                    $fileDestination = "../uploads/".$fileNewName;
                    move_uploaded_file($fileTmpName, $fileDestination);
                    echo "File uploaded";
                }else{
                    echo "There was an error uploading your image. Please try again";
                }
            }else{
                echo "file not allowed";
            }
        }
    }


?>