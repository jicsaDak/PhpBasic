<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>

  <title>Php practis</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>

<?php

if (isset($_REQUEST['id'])) {

  $rcvid = $_REQUEST['id'];
  $con = mysqli_connect('localhost', 'root', '', 'sadak');

  $sql = "SELECT * from user where id='$rcvid'";
  $ur = mysqli_query($con, $sql);
  while ($fu = mysqli_fetch_object($ur)) {
    $id = $fu->id;
    $name = $fu->name;
    $locn = $fu->location;
    $pass = $fu->password;
    $email = $fu->email;
    $status = $fu->status;

    
$con = mysqli_connect('localhost', 'root', '', 'sadak');
$rq = "SELECT * FROM `user_dept`";
$dk = mysqli_query($con, $rq);

?>

    <center>
      <form style="width:40%; " action ="upd.php" method="GET">
        <div class="mb-3 mt-3">
          <label for="id" class="form-label"></label>
          <input type="hidden" class="form-control" value="<?= $id ?>" name="id">
        </div>
        <div class="mb-3 mt-3">
          <label for="Name" class="form-label">Name:</label>
          <input type="Name" class="form-control" value="<?= $name ?>" name="name">
        </div>
        <div class="mb-3 mt-3">
          <label for="location" class="form-label">location:</label>
          <input type="location" class="form-control" value="<?= $locn ?>" name="location">
        </div>
        <div class="mb-3">
          <label for="pwd" class="form-label">Password:</label>
          <input type="password" class="form-control" id="pwd" value="<?= $pass ?>" name="pswd">
        </div>
        <div class="mb-3 mt-3">
          <label for="email" class="form-label">Email:</label>
          <input type="email" class="form-control" id="email" value="<?= $email ?>" name="email">
        </div>
        <div class="col-md-3">
          <label for="validationDefault04" class="form-label">Status</label>
          <select class="form-select" id="validationDefault04" name="status" required>
            <option value="<?= $status ?>"><?= $status ?></option>
            <option value="Active">Active</option>
            <option value="Inactive">Inactive</option>
            <option value="Panding">Panding</option>


          </select>
          <select name="department">
        <option value="not selected"> --select Department-- </option>
        <?php while ($data = mysqli_fetch_object($dk)) {

        ?>
          <option value="<?= $data->name; ?>"><?= $data->name; ?>(<?= $data->id; ?>)</option>

        <?php
        }
        ?>
      </select>
        </div>






        <button type="submit" class="btn btn-primary" name="update">Update</button>
      </form>
    </center>

<?php

  }
}

?>

</html>