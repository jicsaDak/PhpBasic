<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>5thC_Preactice_PS_3.php</title>
</head>
<body>
<?php

echo "Input: [1, 2, 3, 4, 5]";
echo "<br>";
$Input=[1, 2, 3, 4, 5];
$split= array_slice($Input,3);
$secpart="";
echo "Output : [";
foreach($split as $value2){
$secpart .=$value2;

}

$split1= array_slice($Input,0,3);
foreach($split1 as $value){
    $secpart .= $value;
}
$secpart;
$n=strlen($secpart);
for ($x=0;$x<$n;$x++) {

if($x!=$n-1){

    echo $secpart[$x].",";
}
else{

    echo $secpart[$x];
}


}
echo "]";
?>














    
</body>
</html>