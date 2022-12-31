<?php
include 'connect.php';


if (isset($_POST['submit'])) {

    // $img1 = $_REQUEST['img1'];
    // $img2 = $_REQUEST['imag2upload'];
    // $img3 = $_REQUEST['imag3upload'];
    $category = $_REQUEST['catagray'];
    $client = $_REQUEST['client'];
    $projectdate = $_REQUEST['projectdata'];
    // $projecturl = $_REQUEST['projecturl'];
    $mindetail = $_REQUEST['mindetail'];
    $maxdetail = $_REQUEST['maxdetail'];

    $img_name1 = $_FILES["imag1upload"]['name'];
    $img_name2 = $_FILES["imag2upload"]['name'];
    $img_name3 = $_FILES["imag3upload"]['name'];

    $img_tmp_name1 = $_FILES["imag1upload"]['tmp_name'];
    $img_tmp_name2 = $_FILES["imag2upload"]['tmp_name'];
    $img_tmp_name3 = $_FILES["imag3upload"]['tmp_name'];
    $id = $_REQUEST['id'];
    //  echo $id;

    if (empty($img_name1) && empty($img_name2) && empty($img_name3)) {
        $query = "UPDATE `work` SET `Category`='$category',`Client`='$client ',
    `Project date`='$projectdate ',`min_detail`='$mindetail ',`max_detail`='$maxdetail ' WHERE `id`='$id'";
        if (mysqli_query($conn,$query)) {
            header('Location:work_dashbord.php');

        } else {
            echo "not insert";
        }

    } else {
        $query = "UPDATE `work` SET `img1`='$img_name1',`img2`='$img_name2 ',`img3`='$img_name3',`Category`='$category',`Client`='$client ',
        `Project date`='$projectdate ',`min_detail`='$mindetail ',`max_detail`='$maxdetail ' WHERE `id`='$id'";
        if (mysqli_query($conn,$query)) {
            header('Location:work_dashbord.php');
            $img_folder1 = 'upload/'.basename($img_name1);
            $img_folder2 = 'upload/'.basename($img_name2);
            $img_folder3 = 'upload/'.basename($img_name3);

            move_uploaded_file($img_tmp_name1,$img_folder1);
            move_uploaded_file($img_tmp_name2,$img_folder2);
            move_uploaded_file($img_tmp_name3,$img_folder3);

        }

    }

}
// mysqli_close($connect);

?>

<?php  include 'work.html';   ?>