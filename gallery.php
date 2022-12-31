<?php
// 29-11-2022

$host ="localhost";
$user = "root";
$password = "";
$dbname ="image";

$conn =mysqli_connect($host,$user,$password,$dbname);

if($conn){

    // echo "successfully connected";
    $sql="SELECT * FROM `photo`";
      $set = mysqli_query($conn,$sql);
      while($col = mysqli_fetch_array($set)){
   ?>
   <img src="<?php echo "upload/",$col['images'] ?>" alt="" height="150px" width="150px">
      <?php  }
    
    }



?>