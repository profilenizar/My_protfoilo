<?php

$host ="localhost";
$user = "root";
$password = "";
$dbname ="protfoile";

$conn =mysqli_connect($host,$user,$password,$dbname);

// echo $icon;
// $imagupload = $_REQUEST['imagupload'];

if(isset($_POST['submit']))
{
   
// $img1=$_REQUEST['img1'];
// $img2=$_REQUEST['img2'];
// $img3=$_REQUEST['img3'];
$category=$_REQUEST['catagray'];
  
$client=$_REQUEST['client'];
$projectdate=$_REQUEST['projectdata'];
// $projecturl=$_REQUEST['project_URL'];
$mindetail=$_REQUEST['mindetail'];
$maxdetail=$_REQUEST['maxdetail'];

$img_name1 =$_FILES["imag1upload"]['name'];
$img_name2 =$_FILES["imag2upload"]['name'];
$img_name3 =$_FILES["imag3upload"]['name'];

$img_tmp_name1 = $_FILES["imag1upload"]['tmp_name'];
$img_tmp_name2 = $_FILES["imag2upload"]['tmp_name'];
$img_tmp_name3 = $_FILES["imag3upload"]['tmp_name'];
   echo $img_tmp_name3;

// echo $img_name1;



   $query = "INSERT INTO `work`( `img1`, `img2`, `img3`, `Category`, `Client`, `Project date`, `min_detail`, `max_detail`) VALUES ('$img_name1 ','$img_name2 ','$img_name3','$category',' $client',' $projectdate','$mindetail ','$maxdetail')";


if(mysqli_query($conn,$query)){
    header('Location:work_add.php');
      $img_folder1 ="upload/".basename($img_name1);
      $img_folder2 ="upload/".basename($img_name2);
      $img_folder3 ="upload/".basename($img_name3);

      move_uploaded_file($img_tmp_name1,$img_folder1);
      move_uploaded_file($img_tmp_name2,$img_folder2);
      move_uploaded_file($img_tmp_name3,$img_folder3);
     
   echo "insert data successfully";

}

}

mysqli_close($conn);
?>