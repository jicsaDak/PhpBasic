<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>4thC_Preactice_PS_5</title>
</head>

<body>
    <?php
    $l = 0;
    $ai = 0;
    $sumofaie = 0;
    $array = array(5, 2, 6, 1, 8);
    $l = sizeof($array);
    echo "The array Element Number is= " . $l;
    echo "<br>";
    echo "the array elements are  : ";
    for ($i = 0; $i < $l; $i++) {
        echo $array[$i];
        echo "  ";
    }


    echo "<br>" . "Even Numbers of the array elements are Output : ";
    for ($i = 0; $i < $l; $i++) {

        if ($array[$i] % 2 == 0 && $array[$i] != $array[$l - 1]) {
            echo "" . $array[$i] . ",";
        }
        if ($array[$i] == $array[$l - 1]) {
            echo "" . $array[$i];
        }
    }




    ?>








</body>

</html>