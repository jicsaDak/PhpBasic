<?php 
 $con = mysqli_connect('localhost','root','','sadak');
if(isset($_REQUEST['update']));
$id= $_REQUEST['id'];
echo $name = $_REQUEST['name'];
echo $location = $_REQUEST['location'];
echo $password = $_REQUEST['pswd'];
echo $email = $_REQUEST['email'];
echo $status = $_POST['status'];
echo $department = $_POST['department'];

$que ="UPDATE user SET name='$name',location='$location',password='$password',email='$email',status='$status', department='$department' WHERE id=$id ";
 $up=mysqli_query($con,$que);
 
 if($que){
    header("location:Data_preview.php? Updated ");


 }
?>