<?php
// $id = $_GET['id'];
// echo $id;

include "connect.php";
// $sql="SELECT * FROM `service` WHERE ID=$id" ;
// $set = mysqli_query($conn,$sql);
// $col = mysqli_fetch_array($set);


if (isset($_POST['submit'])) {
    $name = $_REQUEST["name"];
    $detail = $_REQUEST['detail'];
    $icon = $_REQUEST['icon'];
    $id = $_REQUEST['id'];
     echo $id;


    $query = "UPDATE `service` SET `Name`='$name',`Detail`='$detail',`icon`='$icon' WHERE `id`='$id'";
    if (mysqli_query($conn, $query)) {
        header('Location:service_dashboard.php');

    } else {
        echo "not insert";
    }

}
mysqli_close($connect);

?>
   
<?php  include "run.html"; ?>



    


    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="lib/chart/chart.min.js"></script>
    <script src="lib/easing/easing.min.js"></script>
    <script src="lib/waypoints/waypoints.min.js"></script>
    <script src="lib/owlcarousel/owl.carousel.min.js"></script>
    <script src="lib/tempusdominus/js/moment.min.js"></script>
    <script src="lib/tempusdominus/js/moment-timezone.min.js"></script>
    <script src="lib/tempusdominus/js/tempusdominus-bootstrap-4.min.js"></script>

    <!-- Template Javascript -->
    <script src="js/main.js"></script>
</body>

</html>