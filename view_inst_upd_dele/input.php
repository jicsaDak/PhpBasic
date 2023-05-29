<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
  <title>Php practis</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>

<?php

if (isset($_POST['submit'])) {
  $name = $_POST['name'];
  $location = $_POST['location'];
  $password = $_POST['password'];
  $email = $_POST['email'];
  $status = $_POST['status'];
  $department = $_POST['department'];

  $sql = "INSERT INTO user (name,location,password,email,status,department)VALUES ('$name','$location','$password','$email','$status','$department')";
  $rq = 'select name from user_dept';






  $con = mysqli_connect('localhost', 'root', '', 'sadak');



  if (mysqli_query($con, $sql)) {
    echo "New record has been added successfully !";
  } else {
    echo "Error: " . $sql . ":-" . mysqli_error($con);
  }
  if ($sql) {
    header("location:newstart.php?Inserted");
    header("location:Data_preview.php?inserted");
  }
}


$con = mysqli_connect('localhost', 'root', '', 'sadak');
$rq = "SELECT * FROM `user_dept`";
$dk = mysqli_query($con, $rq);




?>



<center>
  <form style="width:40%; " action="input.php" method="post">

    <div class="mb-3 mt-3">

      <input type="Name" class="form-control" placeholder="Enter Name" name="name" required>
    </div>
    <div class="mb-3 mt-3">
      <input type="location" class="form-control" placeholder="Enter location" name="location" required>
    </div>
    <div class="mb-3">

      <input type="password" class="form-control" placeholder="Enter password" name="password" required>
    </div>
    <div class="mb-3 mt-3">

      <input type="email" class="form-control" placeholder="Enter email" name="email" required>
    </div>

    <div class="col-md-3">

      <select class="form-select" id="validationDefault04" name="status" required>
        <option value="Active">Active</option>
        <option value="Inactive">Inactive</option>
        <option value="Panding">Panding</option>

      </select>
      dropdown bar :
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
    <br>
    <div><button type="submit" class="btn btn-primary" name="submit">Submit</button></div>
  </form>
</center>


</html>