<?php
$id = $_GET['id'];

include "connect.php";
$sql="SELECT * FROM `user` WHERE id=$id" ;
$set = mysqli_query($conn,$sql);
$col = mysqli_fetch_array($set);


if (isset($_POST['submit'])) {

    $name = $_REQUEST["name"];
    $profile = $_REQUEST["profile"];
    $email = $_REQUEST["email"];
    $phone = $_REQUEST["phone"];
    $education = $_REQUEST["education"];
    $branch = $_REQUEST["branch"];
    $place = $_REQUEST["place"];
    $job = $_REQUEST["job"];
    $About = $_REQUEST["test"];


    $img_name = $_FILES["imagupload"]['name'];

    $img_tmp_name = $_FILES["imagupload"]['tmp_name'];


    if (empty($img_name)) {
        $query = "UPDATE `user` SET `id`='$id',`Name`='$name',`Profile`='$profile',`Email`='$email',`P.no`='$phone',`Education`='$education',`Branch`='$branch',`Place`='$place',`Job type`='$job',`profile_image`='$img_name',`About_Me`='$About' WHERE id = '$id'";
        if (mysqli_query($conn, $query)) {
            header('Location:new.php');
           
        } else {
            echo "not insert";
        }

    } else {

        $query = "UPDATE `user` SET `id`='$id',`Name`='$name',`Profile`='$profile',`Email`='$email',`P.no`='$phone',`Education`='$education',`Branch`='$branch',`Place`='$place',`Job type`='$job', `profile_image`='$img_name',`About_Me`='$About' WHERE id = '$id'";
        if (mysqli_query($conn, $query)) {
            $img_folder = "upload/" .basename($img_name);

            move_uploaded_file($img_tmp_name, $img_folder);


        
        }


    }

}

?>
   
<?php  include "run.html"; ?>

  <form action="edit.php" method="post"  enctype="multipart/form-data" >
        <div class="container-fluid">
            <div class="row h-50 align-items-center justify-content-center" style="min-height: 100vh;">
                <div class="col-12 col-sm-8 col-md-6 col-lg-5 col-xl-4">
                    <div class="bg-secondary rounded p-4 p-sm-5 my-4 mx-3">
                        <div class="d-flex align-items-center justify-content-between mb-3">
                            <a href="index.html" class="">
                                <h3 class="text-primary"><i class="fa fa-user-edit me-2"></i>profile</h3>
                            </a>
                        </div>
                        <div class="form-floating mb-2">
                            <input type="text" class="form-control" id="floatingText" placeholder="jhondoe" name="name" value="<?php echo $col['Name'] ?>">
                            <label for="floatingText">Name</label>
                        </div>
            
                        <div class="form-floating mb-2">
                            <input type="text" class="form-control" id="floatingText" placeholder="profile" name="profile" value="<?php echo $col['Profile'] ?>">
                            <label for="floatingText">profile</label>
                        </div>
            
                        <div class="form-floating mb-2">
                            <input type="email" class="form-control" id="floatingInput" placeholder="name@example.com" name="email" value="<?php echo $col['Email'] ?>">
                            <label for="floatingInput">Email address</label>
                        </div>
                        <div class="form-floating mb-2">
                            <input type="tel" class="form-control" id="floatingnumber" placeholder="phone number" name="phone" value="<?php echo $col['P.no'] ?>">
                            <label for="floatingphonenumber">Phone Number</label>
                        </div>

                        <div class="form-floating mb-2">
                            <input type="text" class="form-control" id="floatingeducation" placeholder="edcucation" name="education" value="<?php echo $col['Education'] ?>">
                            <label for="floatingeducation">Education</label>
                        </div>

                        <div class="form-floating mb-2">
                            <input type="text" class="form-control" id="floatingbranch" placeholder="branch" name="branch" value="<?php echo $col['Branch'] ?>">
                            <label for="floatingbranch">Branch</label>
                        </div>

                        <div class="form-floating mb-2">
                            <input type="text" class="form-control" id="floatingPlace" placeholder="place" name="place" value="<?php echo $col['Place'] ?>">
                            <label for="floatingplace">place</label>
                        </div>

                        <div class="form-floating mb-1">
                            <input type="text" class="form-control" id="floatingjob" placeholder="job catagray" name="job" value="<?php echo $col['Job type'] ?>">
                            <label for="floatingjob">job catagray</label>
                        </div>

                        <div class="form-floating mb-2">
                            <textarea class="form-control" placeholder="Leave a comment here"
                                id="floatingTextarea" name="test"><?php echo $col['About_Me'] ?></textarea>
                            <label for="floatingTextarea">About Me</label>
                        </div>
                      

                        <div class="form-floating mb-1">                         
                                <input type="file" id="uploadfile" name="imagupload"><br><br>
                        </div>

                        <button type="submit" name="submit" class="btn btn-primary py-3 w-100 mb-2">Sign Up</button>
                    </div>
                </div>
            </div>
        </div>
        </form>
        <!-- Sign Up End -->



    


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