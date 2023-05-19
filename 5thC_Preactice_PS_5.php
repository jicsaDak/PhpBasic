<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>5thC_Preactice_PS_5.php</title>
</head>

<body>




    <?php

    echo "Input: [1, 2, 3, 4, 5], [4, 5, 6, 7, 8] ";
    echo "<br>";
    echo "Output :[";
    $a = array(1, 2, 3, 4, 5);
    $al = sizeof($a);
    $b = array(4, 5, 6, 7, 8);
    $bl = sizeof($b);

    $str = "";
    for ($i = 0; $i < $al; $i++) {
        for ($j = 0; $j < $al; $j++) {



            if ($a[$i] == $b[$j]) {


                $str .= $a[$i];
            }
        }
    }
    $slan = strlen($str);
    for ($i = 0; $i < $slan; $i++) {
        if ($i < $slan-1) {

            echo $str[$i] . ",";
        }
        else{

            echo $str[$i];
        }
    }
    echo "]";

    ?>

</body>

</html>