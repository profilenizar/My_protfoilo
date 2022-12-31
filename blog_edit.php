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
    $img_name2 = $_FILES["minimgupload"]['name'];
    $name = $_REQUEST['name_detail'];
    $id = $_REQUEST['id'];


    
    if (empty($img_name1) && empty($img_name2)) {
        $query = "UPDATE `blog` SET `Image1`='$img_name1',`button_details`='$button',`detail`=' $details',`min_image`='$img_name2',`name_detail`='$name' WHERE  `id`='$id'";
        if (mysqli_query($conn,$query)) {
            header('Location:work_dashbord.php');

        } else {
            echo "not insert";
        }

    } else {
        $query = "UPDATE `blog` SET `Image1`='$img_name1',`button_details`='$button',`detail`=' $details',`min_image`='$img_name2',`name_detail`='$name' WHERE  `id`='$id'";
        if (mysqli_query($conn,$query)) {
            header('Location:blog_dashbord.php');
            $img_folder1 = 'upload/'.basename($img_name1);
           
            move_uploaded_file($img_tmp_name1,$img_folder1);
           

        }

    }


    }


?>