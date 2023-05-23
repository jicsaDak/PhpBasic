<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>5thC_Preactice_PS_5.php</title>
</head>

<body>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">

   
            <div class="container">
                <div class="row">
                    <div class="col-md-6 col-lg-4">
                        <div class="card">
                            <div class="card-body">
                                <h5 class="card-title"> Array Intersection </h5>
                                <p class="card-text">
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
                                        if ($i < $slan - 1) {

                                            echo $str[$i] . ",";
                                        } else {

                                            echo $str[$i];
                                        }
                                    }
                                    echo "]";

                                    ?>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>

                <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
</body>

</html>