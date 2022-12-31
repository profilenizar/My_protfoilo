
<?php
include "run.html";

include "connect.php";
$sql="SELECT * FROM ``";
$set = mysqli_query($conn,$sql);
$col = mysqli_fetch_array($set);

?>


<form action="service_dashborad.php" method="post"  enctype="multipart/form-data" >
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
                            <input type="text" class="form-control" id="floatingText" placeholder="jhondoe" name="name">
                            <label for="floatingText">Name</label>
                        </div>
            
                        <div class="form-floating mb-2">
                            <input type="text" class="form-control" id="floatingText" placeholder="profile" name="profile">
                            <label for="floatingText">profile</label>
                        </div>
            
                        <div class="form-floating mb-2">
                            <input type="email" class="form-control" id="floatingInput" placeholder="name@example.com" name="email">
                            <label for="floatingInput">Email address</label>
                        </div>
                        <div class="form-floating mb-2">
                            <input type="tel" class="form-control" id="floatingnumber" placeholder="phone number" name="phone">
                            <label for="floatingphonenumber">Phone Number</label>
                        </div>

                        <div class="form-floating mb-2">
                            <input type="text" class="form-control" id="floatingeducation" placeholder="edcucation" name="education">
                            <label for="floatingeducation">Education</label>
                        </div>

                        <div class="form-floating mb-2">
                            <input type="text" class="form-control" id="floatingbranch" placeholder="branch" name="branch">
                            <label for="floatingbranch">Branch</label>
                        </div>

                        <div class="form-floating mb-2">
                            <input type="text" class="form-control" id="floatingPlace" placeholder="place" name="place">
                            <label for="floatingplace">place</label>
                        </div>

                        <div class="form-floating mb-1">
                            <input type="text" class="form-control" id="floatingjob" placeholder="job catagray" name="job">
                            <label for="floatingjob">job catagray</label>
                        </div>

                        <div class="form-floating mb-2">
                            <textarea class="form-control" placeholder="Leave a comment here"
                                id="floatingTextarea" name="test"></textarea>
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

