<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>5thC_Preactice_PS_1</title>
</head>

<body>

    <?php

    function sumation($array)
    {
        $sum = 0;


        $n = sizeof($array);
        echo "The Array Elements are =(";
        for ($x = 0; $x < $n; $x++) {


            $ele = $array[$x];


            if ($x != $n - 1) {
                echo $ele . ",";
            } else {
                echo $ele;
            }
            $ele;
            $sum += $ele;
        }

        echo ") And sum of them is =";
        return $sum;
    }
    $Input = [1, 2, 3, 4, 5];
    $output = sumation($Input);
    echo $output . ".";



    ?>







</body>

</html>