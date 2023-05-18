<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>4thC_Preactice_PS_1</title>
</head>

<body>
    <?php
    $ai = 0;
    $sumofaie = 0;
    $array = array(1, 2, 3, 4, 5, 6, 7, 8, 9, 10);
    $l = sizeof($array);
    echo "The array Element Number is= " . $l;
    echo "<br>";


    for ($i = 0; $i < $l; $i++) {
        echo $ai = $array[$i];
  
        if ($ai % 2 == 0) {
            echo " Even" . "<br>";
            $sumofaie += $ai;
        }
        else {

            echo "<br>";
        }
    }
echo "<br>";
    echo "Output :" . $sumofaie;


    ?>








</body>

</html>