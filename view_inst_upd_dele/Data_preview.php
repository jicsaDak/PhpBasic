<!DOCTYPE html>
<html lang="en">
<head><style>
#customers {
  font-family: Arial, Helvetica, sans-serif;
  border-collapse: collapse;
  width: 70%;
  align:center;
}

#customers td, #customers th {
  border: 1px solid #ddd;
  padding: 8px;
}

#customers tr:nth-child(even){background-color: #f2f2f2;}

#customers tr:hover {background-color: #ddd;}

#customers th {
  padding-top: 12px;
  padding-bottom: 12px;
  text-align: left;
  background-color: #04AA6D;
  color: white;
}
</style>

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <title>newstart</title>
   
   
   
   <?php 
$con= mysqli_connect('localhost','root','','sadak');







?>



</head>
<body>
  
<table align="center"  id="customers">
<tr><th>ID</th>
    <th>Name</th>
    <th>Location</th>
    <th>Email</th>
    <th>Password</th>
    <th>Entry At</th>
    <th>Status</th>
    <th>Department</th>
    <th>Action <a class="btn btn-primary" href="input.php">Insert</a></th>
     </tr>
   <?php 
   $sql = "SELECT * from user";
   $ur=mysqli_query($con,$sql);


if(isset($_REQUEST['Inserted']))
{
$info='Successfully inserted';}
elseif(isset($_REQUEST['deleted']))
{
$info='Successfully Deleted';

}elseif(isset($_REQUEST['updated']))
{
$info='Successfully Updated';

}
else{
  $info='';
}




   while($fu= mysqli_fetch_object($ur))
{
    $id=$fu->id;
    $name=$fu->name;
    $locn=$fu->location;
    $pass=$fu->password;
    $email=$fu->email;
    $time=$fu->entry_at;
    $status=$fu->status;
    $t=$fu->department;
    
    
       
       ?> 
    
    <tr>
    <td><?=$id; ?></td>
    <td><?=$name; ?></td>
    <td><?=$locn; ?></td>
    <td><?=$email ;?></td>
    <td><?=$pass;?></td>
    <td><?=$time;?></td>
    <td><?=$status;?></td>
    <td><?=$t;?></td>
<td><a class="btn btn-warning" href="input_update.php?id=<?=$id;?>">Update</a> <a class="btn btn-danger" href="del.php?id=<?=$id;?>">Delete</a>  </td>


</tr>
<?php  }
?>
   
   <strong><div align="center"> <span ></span><?=$info;?></span></div></strong>
</table>

</body>
</html>