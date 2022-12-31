<?php
include 'work.html';
include 'connect.php';

?>

<form action="work_dashbord.php">
  <div class="container-fluid pt-4 px-4">
                <div class="bg-secondary text-center rounded p-4">
                    <?php
                  
                    // print_r($col);
                    // if (isset($col) == null) { ?>    
                    <!-- // <div class="d-flex align-items-center justify-content-flex-end mb-4"> -->
                    <!-- //      <a href="work_add.php">Add</a> -->
                        <!-- <a href="service_add.php"><button class= "btn btn-sm btn-primary">Add <i class="fa fa-plus" aria-hidden="true"></i></button></a> -->
                    <!-- // </div> -->
                     <!-- <div class="table-responsive">
                    //     <table class="table text-start align-middle table-bordered table-hover mb-0">
                    //         <thead>
                    //             <tr class="text-white">
                    //                 <th scope="col">img1</th>
                    //                 <th scope="col">img2</th>
                    //                 <th scope="col">img3</th>
                    //                 <th scope="col">categroy</th>
                    //                 <th scope="col">client</th>
                    //                 <th scope="col">projectdate</th>
                    //                 <th scope="col">min detail</th>
                    //                 <th scope="col">max detail</th>
                    //                 <th scope="col">Action</th>
                                   -->
                                  <!-- </tr>
                             </thead>
                             </table>
                     </div> -->

                    <!-- //         
                    // } else {
                        // echo $col['id'];
                            ?> -->

                            <div class="d-flex align-items-center justify-content-flex-end mb-4"> 
                          <a href="work_add.php">Add</a> 
                         <!-- <a href="service_add.php"><button class= "btn btn-sm btn-primary">Add <i class="fa fa-plus" aria-hidden="true"></i></button></a>  -->
                         </div>
                         <div class="table-responsive">
                             <table class="table text-start align-middle table-bordered table-hover mb-0">
                            <thead>
                                <tr class="text-white">
                                     <th scope="col">img1</th>
                                    <th scope="col">img2</th>
                                    <th scope="col">img3</th>
                                    <th scope="col">categroy</th>
                                    <th scope="col">client</th>
                                    <th scope="col">projectdate</th> 
                                    <th scope="col">min detail</th>
                                    <th scope="col">max detail</th>
                                    <th scope="col">Action</th>
                                  
                                </tr>
                            </thead>
                            <tbody>

                              <?php
                                include 'connect.php';
                                $sql="SELECT * FROM `work` ORDER BY 'id' ASC";
                                $set = mysqli_query($conn,$sql);
                                // $col = mysqli_fetch_array($set);
                                 while($col = mysqli_fetch_array($set)) {
                            // echo $col['id'];
                                    ?>
                                <tr>
                                    <!-- <td><input class="form-check-input" type="checkbox"></td> -->
                                    <td><img src="<?php echo "upload/", $col['img1']; ?>" height="100px"width="100px"></td>
                                    <td><img src="<?php echo "upload/", $col['img2']; ?>" height="100px"width="100px"></td>
                                    <td><img src="<?php echo "upload/", $col['img3']; ?>" height="100px"width="100px"></td>
                                    <!-- <td><img src=" //echo "upload/", $col['img3'];" height="100px"width="100px"></td> -->
                                    <td><?php echo $col['Category']; ?></td>
                                    <td><?php echo $col['Client']; ?></td>
                                    <td><?php echo $col['Project date']; ?></td>
                                    <td><?php echo $col['min_detail']; ?></td>
                                    <td><?php echo $col['max_detail']; ?></td>
                                    <!-- <button class= "btn btn-sm btn-primary"> -->
                                    <td><a class="btn btn-sm btn-primary" href="work_edit_page.php?id=<?php echo $col['id'] ?>">edit</a>
                                    <button class= "btn btn-sm btn-primary" id="delete" data-id="<?php echo $col['id'] ?>">trash</button>
                                   </td>
                                 </tr>
                                <?php } ?>
                            </tbody>
                        </table>
                    </div>
                   <?php// } ?>
                </div>
            </div>
            </form>


            <?php

          
?>
    