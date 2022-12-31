<?php
include 'blog.html';
include 'connect.php';

?>



<form action="blog_dashbord.php">
  <div class="container-fluid pt-4 px-4">
                <div class="bg-secondary text-center rounded p-4">
                            <div class="d-flex align-items-center justify-content-flex-end mb-4"> 
                          <a href="blog_add.php">Add</a> 
                         <!-- <a href="service_add.php"><button class= "btn btn-sm btn-primary">Add <i class="fa fa-plus" aria-hidden="true"></i></button></a>  -->
                         </div>
                          <div class="table-responsive">
                             <table class="table text-start align-middle table-bordered table-hover mb-0">
                             <thead>
                                <tr class="text-white">
                                     <th scope="col">image1</th>
                                    <th scope="col">Button</th>
                                    <th scope="col">detail</th>
                                    <th scope="col">image2</th>
                                    <th scope="col">name detail</th>
                                    <th scope="col">Action</th>
                                </tr>
                             </thead>
                             <tbody>

<?php
  include 'connect.php';
  $sql="SELECT * FROM `blog`";
  $set = mysqli_query($conn,$sql);
   while($col = mysqli_fetch_array($set)) {
      ?>
  <tr>
      <td><img src="<?php echo "upload/", $col['Image1']; ?>" height="100px"width="100px"></td>
      <td><?php echo $col['button_details']; ?></td>
      <td><?php echo $col['detail']; ?></td>
      <td><img src="<?php echo "upload/", $col['min_image']; ?>" height="100px"width="100px"></td>
      <td><?php echo $col['name_detail']; ?></td>
      <td><a class="btn btn-sm btn-primary" href="blog_edit_page.php?id=<?php echo $col['id'] ?>">edit</a>
      <button class= "btn btn-sm btn-primary" id="delete" data-id="<?php echo $col['id'] ?>">trash</button>
     </td>
   </tr>
  <?php } ?>
</tbody>
         
                               
                            </div>                         
                        </div>                      
    </div>
</form>                   
