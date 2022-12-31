<?php
include 'run.html';

$id = $_GET['id'];
// echo $id;
include 'connect.php';
$sql="SELECT * FROM `service` WHERE ID=$id" ;
$set = mysqli_query($conn,$sql);
$col = mysqli_fetch_array($set);


?>

<form action="service_edit.php?id=<?php echo $col['ID'] ?>" class="bg-secondary" method="post">
  <div class="mb-3">
    <label for="name" class="form-label">Name</label>
    <input type="text" name="name" value ="<?php echo $col['Name'] ?>" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">

  </div>
  <div class="form-floating mb-2">
                            <textarea class="form-control" placeholder="Leave a comment here"
                                id="floatingTextarea" name="detail"><?php echo $col['Detail'] ?></textarea>
                            <label for="floatingTextarea">Detail</label>
                        </div>
                        <div class="mb-3">
    <label for="name" class="form-label">Icon</label>
    <input type="icon" name="icon"  value ="<?php echo $col['icon'] ?>"class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">

  </div>

  <input type="submit" name="submit" class="btn btn-primary">
</form>