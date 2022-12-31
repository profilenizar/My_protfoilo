<?php
include 'work.html';

$id = $_GET['id'];
// echo $id;
include 'connect.php';
$sql="SELECT * FROM `work` WHERE id=$id" ;
$set = mysqli_query($conn,$sql);
$col = mysqli_fetch_array($set);
$orgDate = $col['Project date'];  
    $newDate = date("d-m-Y", strtotime($orgDate));  
    // echo "New date format is: ".$newDate. " (MM-DD-YYYY)";
?>
<form action="work_edit.php?id=<?php echo $col['id'] ?>" class="bg-secondary"  enctype="multipart/form-data" method="post">
<div class="d-flex align-items-center justify-content-flex-start mb-4">        
                         <!-- <a class=" btn btn-sm btn-primary"  href="work_add.php" >add</a> -->
                         <!-- <td><a class="btn btn-sm btn-primary" href="work_dashboard.php">edit</a> -->
                         <!-- <button class= "btn btn-sm btn-primary"  id="delete" data-id="">trash</button> -->
                         </div>
   <div class="mb-3">
    <label for="name" class="form-label">Img1</label>                         
                                <input type="file" id="uploadfile" name="imag1upload"><br>
   
    <label for="name" class="form-label">Img2</label>                         
                                <input type="file" id="uploadfile" name="imag2upload"><br>
   
    <label for="name" class="form-label">Img3</label>                         
                                <input type="file" id="uploadfile" name="imag3upload"><br>
   
    <label for="name" class="form-label">Catagray</label>
    <input type="text" name="catagray" value ="<?php echo $col['Category'] ?>"  class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">

    <label for="name" class="form-label">Client</label>
    <input type="text" name="client"   value ="<?php echo $col['Client'] ?>" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">

    <label for="name" class="form-label">Project data</label>
    <input type="date" name="projectdata" value ="<?php echo $newDate ?>"   class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">

    <label for="name" class="form-label">Min detail</label>
    <input type="text" name="mindetail"  value ="<?php echo $col['min_detail'] ?>"  class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"> 

    <label for="floatingTextarea">Max Detail</label>
    <textarea class="form-control" placeholder="Leave a comment here"
                                id="floatingTextarea" name="maxdetail"><?php echo $col['max_detail'] ?> </textarea>
                            
  </div>
  <input type="submit" name="submit" class="btn btn-primary">

  </form>