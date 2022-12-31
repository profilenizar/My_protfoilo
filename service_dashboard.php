<?php
include 'run.html';
include 'connect.php';

?>
        
  <!-- Recent Sales Start -->
  <form action="service_dashbord.php">
  <div class="container-fluid pt-4 px-4">
                <div class="bg-secondary text-center rounded p-4">
                    <?php
                    include 'connect.php';
                    $sql="SELECT * FROM `service`";
                    $set = mysqli_query($conn,$sql);
                    $col = mysqli_fetch_array($set);
                    if (isset($col['ID']) == null) { ?>    
                    <div class="d-flex align-items-center justify-content-flex-end mb-4">
                         <a href="service_add.php">add</a>
                        <!-- <a href="service_add.php"><button class= "btn btn-sm btn-primary">Add <i class="fa fa-plus" aria-hidden="true"></i></button></a> -->
                    </div>
                    <div class="table-responsive">
                        <table class="table text-start align-middle table-bordered table-hover mb-0">
                            <thead>
                                <tr class="text-white">
                                    <th scope="col">service</th>
                                    <th scope="col">detail</th>
                                    <th scope="col">icon</th>
                                    <th scope="col">Action</th>
                                  
                                </tr>
                            </thead>
                            </table>
                    </div>
                            <?php
                    } else {
                            ?>
                           <div class="d-flex align-items-center justify-content-flex-end mb-4">
                         <a href="service_add.php">add</a>
                         <!-- <a href="service_add.php"><button class= "btn btn-sm btn-primary">Add <i class="fa fa-plus" aria-hidden="true"></i></button></a> -->
                         </div>
                         <div class="table-responsive">
                             <table class="table text-start align-middle table-bordered table-hover mb-0">
                            <thead>
                                <tr class="text-white">
                                    <th scope="col">service</th>
                                    <th scope="col">detail</th>
                                    <th scope="col">icon</th>
                                    <th scope="col">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php while($col = mysqli_fetch_array($set)){?>
                                <tr>
                                    <!-- <td><input class="form-check-input" type="checkbox"></td> -->
                                    <td><?php echo $col['Name'];?></td>
                                    <td><?php echo $col['Detail'];?></td>
                                    <td><?php echo $col['icon'];?></td>
                                    <!-- <button class= "btn btn-sm btn-primary"> -->
                                    <td><a class="btn btn-sm btn-primary" href="service_edit_page.php?id=<?php echo $col['ID'] ?>">edit</a>
                                    <button class= "btn btn-sm btn-primary" id="delete" data-id="<?php echo $col['ID'] ?>">trash</button>
                                   </td>
                                 </tr>
                                <?php } ?>
                            </tbody>
                        </table>
                    </div>
                    <?php }?>
                </div>
            </div>
            </form>
            <!-- Recent Sales End -->















  
