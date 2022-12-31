<?php
include 'blog.html';

$id = $_GET['id'];
include 'connect.php';
$sql="SELECT * FROM `blog` WHERE id=$id" ;
$set = mysqli_query($conn,$sql);
$col = mysqli_fetch_array($set);


?>


<form action="blog_edit.php?id=<?php echo $col['id'] ?>" class="bg-secondary"  enctype="multipart/form-data" method="post">
<div class="d-flex align-items-center justify-content-flex-start mb-4">

                         </div>
   <div class="mb-3">
    <label for="name" class="form-label">Image1</label>                         
                                <input type="file" id="uploadfile" name="imag1upload"><br>
   
                                <label for="name" class="form-label">Button detail:</label>
    <input type="text" name="buttondetail"  value ="<?php echo $col['button_details'] ?>" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"> 
   
                                <label for="name" class="form-label"> detail:</label>
    <input type="text" name="detail"  value ="<?php echo $col['detail'] ?>"  class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"> 
   
    <label for="name" class="form-label">Min image</label>                         
                                <input type="file" id="uploadfile" name="minimgupload"><br>

    <label for="name" class="form-label">Name detail:</label>
    <input type="text" name="namedetail" value ="<?php echo $col['name_detail'] ?>" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"> 

                            
  </div>
  <input type="submit" name="submit" class="btn btn-primary">

  </form>
 