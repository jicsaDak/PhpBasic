<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>


<form action="" method="POST">

<input type="number" name="n">
<input type="submit" name="submit" value="Submit">

</form>
<form method="$_POST">
<?php 
$n1=0;
    if (isset($_REQUEST['submit'])) {
        

$n1= $_POST['n'];
    

for($i=0;$i<$n1;$i++){
?>
Enter Number <?=$i;?> :   
<input type="number" name="num<?= $i;?>" ><br>

<?php
    
}
    }
    else {


        
             }
         
       
   
?>
<input type="hidden" name="n" value="<?=$n1?>">

<?php if ($n1>0) { ?>

<input type="submit" name="sub" value="sum">

<?php } ?>

</form>
<?php 
$snum="Number ";
$ki_r_bolbo="  : ";
$sumation=0;
 if (isset($_REQUEST['sub'])) {
     
    
  
    $n1=$_REQUEST['n']; 
    if($n1!=""){
        $sumation=0;
    for ($i=0;$i<$n1;$i++){
    
  echo $snum .$i.$ki_r_bolbo.$_REQUEST['num'.$i]."<br>";
  
  $sumation += $_REQUEST['num'.$i];
    }

echo "the summation of those filds is =".$sumation;
    }
    
}
    

?>
    
</body>
</html>