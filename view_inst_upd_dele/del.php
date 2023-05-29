<?php 
 $con = mysqli_connect('localhost','root','','sadak');
$tek=$_REQUEST['id'];

$que ="DELETE FROM user WHERE id=$tek ";
 $del=mysqli_query($con,$que);
 
if($del){

header("location:Data_preview.php?deleted");


}

?>