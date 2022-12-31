<?php

$host ="localhost";
$user = "root";
$password = "";
$dbname ="protfoile";

$conn =mysqli_connect($host,$user,$password,$dbname);

// if($conn){

// $imagupload = $_REQUEST["imagupload"];

if(isset($_POST['submit']))
{
//  echo "hi";

    // $name1=$_REQUEST['name1'];
    
    //  echo '<pre>';
    // print_r($_FILES["imagupload"]);
    //  echo '</pre>';

//      Array
// (
//     [name] => 3a5fc2856102a33dd6022262468a94b8 3.jpg
//     [full_path] => 3a5fc2856102a33dd6022262468a94b8 3.jpg
//     [type] => image/jpeg
//     [tmp_name] => C:\xampp\tmp\php42B8.tmp
//     [error] => 0
//     [size] => 113767
// )

$name = $_REQUEST["name"];
$profile =$_REQUEST["profile"];
$email = $_REQUEST["email"];
$phone = $_REQUEST["phone"];
$education = $_REQUEST["education"];
$branch = $_REQUEST["branch"];
$place = $_REQUEST["place"];
$job = $_REQUEST["job"];
$About =$_REQUEST["test"];

// echo $About;
    $img_name =$_FILES["imagupload"]['name'];

    $img_tmp_name = $_FILES["imagupload"]['tmp_name'];

    // echo $img_tmp_name;

    $query = " INSERT INTO `user`(`Name`,`profile`,`Email`, `P.no`, `Education`, `Branch`, `Place`, `Job type`, `profile_image`,`About_Me`) VALUES
     (  '$name','$profile','$email','$phone','$education','$branch','$place','$job','$img_name','$About')";
    if(mysqli_query($conn,$query)){
        header('Location:new.php');
      $img_folder ="upload/".basename($img_name);

      move_uploaded_file($img_tmp_name,$img_folder);
     
        

  
    }
 
}



?>