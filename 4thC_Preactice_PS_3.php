<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>4thC_Preactice_PS_3.php</title>
</head>

<body>




    <?php

    $stri = "hellow";
    $n = strlen($stri);

    $temp = array_fill(0, $n, 0);

    for ($i = 0; $i < $n; $i++) {

        for ($j = 0; $j < $n; $j++) {
            if ($stri[$i] === $stri[$j]) {

                $temp[$i]++;
            } 
        }
    }

    for ($i = 0; $i < $n; $i++) {
        $stri[$i];
        $Dupli = false;


        for ($j = 0; $j < $i; $j++) {
            if ($stri[$j] === $stri[$i]) {
                $Dupli = true;
                break;
            }
        }


        if (!$Dupli) {
            echo $stri[$i] . ":" . $temp[$i] . "<br>";
        }
    }

    ?>
</body>

</html>