<?php
include 'run.html';




?>

<form action="service_backend.php" class="bg-secondary" method="post">
  <div class="mb-3">
    <label for="name" class="form-label">Name</label>
    <input type="text" name="name" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">

  </div>
  <div class="form-floating mb-2">
                            <textarea class="form-control" placeholder="Leave a comment here"
                                id="floatingTextarea" name="detail"></textarea>
                            <label for="floatingTextarea">Detail</label>
                        </div>
                        <div class="mb-3">
    <label for="name" class="form-label">Icon</label>
    <input type="icon" name="icon" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">

  </div>

  <input type="submit" name="submit" class="btn btn-primary">
</form>