<?php
include 'blog.html';
include 'connect.php';

?>


<form action="blog_backend.php" class="bg-secondary"  enctype="multipart/form-data" method="post">
<div class="d-flex align-items-center justify-content-flex-start mb-4">

                         </div>
   <div class="mb-3">
    <label for="name" class="form-label">Image1</label>                         
                                <input type="file" id="uploadfile" name="imag1upload"><br>
   
                                <label for="name" class="form-label">Button detail:</label>
    <input type="text" name="buttondetail"  class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"> 
   
                                <label for="name" class="form-label"> detail:</label>
    <input type="text" name="detail"  class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"> 
   
    <label for="name" class="form-label">Min image</label>                         
                                <input type="file" id="uploadfile" name="minimgupload"><br>

    <label for="name" class="form-label">Name detail:</label>
    <input type="text" name="namedetail"  class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"> 

                            
  </div>
  <input type="submit" name="submit" class="btn btn-primary">

  </form>
 