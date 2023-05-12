<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>4thC_Preactice_PS_4</title>
</head>

<body>
    <?php
    $ai = 0;
    $la = 0;
    $array = array(3, 5, 1, 9, 6);
    $l = sizeof($array);
    echo "The array Element Number is= " . $l;
    echo "<br>";
    $ini = $array[0];

    for ($i = 0; $i < $l; $i++) {

        echo $ai = $array[$i];

        echo "<br>";
        if ($ai > $ini) {

            $second_small = $ini;
        }
    }

    echo " Second smallest element  Output : " .  $second_small;


    ?>

</body>

</html>