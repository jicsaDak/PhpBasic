<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>5thC_Preactice_PS_2</title>
</head>
<body>
   <?php
   
   function revele($array){
    $n=sizeof($array);
    $rev="";

for($x=$n-1;$x>=0;$x--){
   
$rev.= $array[$x];
 

}
return $rev;
   }
   
   
   $input='"Hello, World!"';
   
echo "The Input string is (". $input.")";
echo "</br>";


$chars = str_split($input);


echo" Output : ". revele($chars); 
   ?> 





</body>
</html>