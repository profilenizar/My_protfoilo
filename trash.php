<?php
include 'connect.php';
$id = $_REQUEST['id'];

// print $id;


if (isset($_POST['id'])) {
    // $col = $post['col'];DELETE FROM `user` WHERE 0
    $sql = "DELETE FROM `user` WHERE id ='$id'";
    if (mysqli_query($conn, $sql)) {


        echo 1;
        exit();

    }

}

?>