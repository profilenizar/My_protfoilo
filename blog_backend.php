<?php

$host ="localhost";
$user = "root";
$password = "";
$dbname ="protfoile";

$conn =mysqli_connect($host,$user,$password,$dbname);



if (isset($_POST['submit'])) {
    $img_name1 = $_FILES["imag1upload"]['name'];
    $button = $_REQUEST['buttondetail'];
    $details = $_REQUEST['detail'];
    // echo $details;
    $img_name2 = $_FILES["minimgupload"]['name'];
    $name = $_REQUEST['namedetail'];




    $query = "INSERT INTO `blog`(`Image1`, `button_details`, `detail`, `min_image`, `name_detail`) VALUES ('$img_name1','$button','$details','$img_name2','$name')";
    
        if (mysqli_query($conn, $query)) {
            header('Location:blog_add.php');
            $img_folder1 = "upload/" . basename($img_name1);
            $img_folder2 = "upload/" . basename($img_name2);


            move_uploaded_file($img_tmp_name1,$img_folder1);
            move_uploaded_file($img_tmp_name1,$img_folder2);

            echo "insert data successfully";

        }

    }


?>