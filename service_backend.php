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
   
$name=$_REQUEST['name'];
// echo $name;
$detail =$_REQUEST['detail'];
// echo $detail;
$icon =$_REQUEST['icon'];
   // echo $icon;



$query = "INSERT INTO `service`(`Name`,`Detail`,`icon`)  VALUES ('$name','$detail','$icon')";

// INSERT INTO `service`(`ID`, `Name`, `Detail`, `icon`) VALUES ('[value-1]','[value-2]','[value-3]','[value-4]');

if(mysqli_query($conn, $query)){

   echo "insert data successfully";

}

}

?>