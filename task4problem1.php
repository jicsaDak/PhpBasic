<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>task4problem1</title>
</head>

<body>
    <?php

    function rduple($stri)
    {
        $sinle = "";

        $n = strlen($stri);


        for ($i = 0; $i < $n; $i++) {
            $char = $stri[$i];
            $duple = false;

            for ($j = 0; $j < $i; $j++) {
                $check = $stri[$j];
                if ($char == $check) {
                    $duple = true;
                    break;
                }
            }
            if (!$duple) {

                $sinle .= $char;
            }
        }


        return $sinle;
    }





    $input = "banana";

    echo rduple($input);
    ?>


</body>

</html>