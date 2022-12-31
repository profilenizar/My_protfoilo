<?php
include 'connect.php';
$id = $_REQUEST['id'];


// print $id;

if (isset($_POST['id'])) {
    $sql = "DELETE FROM `work` WHERE id ='$id'";
    if (mysqli_query($conn, $sql)) {


        echo 1;
        exit();

    }

}
?>