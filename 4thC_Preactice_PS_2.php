<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>4thC_Preactice_PS_2</title>
</head>

<body>
    <?php
    $ai = 0;
    $la = 0;
    $array = array(12, 35, 1, 10, 34, 1);
    $l = sizeof($array);
    echo "The array Element Number is= " . $l;
    echo "<br>";
    $ini = $array[0];
    

    for ($i = 0; $i < $l; $i++) {

        echo $ai = $array[$i];

        echo "<br>";
        if ($ai > $ini) {

            $ini = $ai;
        }
    }

    echo " Largest element  Output : " .  $ini;


    ?>








</body>

</html>