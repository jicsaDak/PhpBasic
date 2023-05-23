<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>task4problem2.php</title>
</head>

<body>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
</br>
   
    <div class="container">
        <div class="raw">
            <div class="col-md-6 col-lg-4">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">First Letter Capitalization </h5>
                        <p class="card-text">



                            <?php
                            function capitize($str)
                            {

                                $senten = "";
                                $n = str_word_count($str);

                                $part = (explode(" ", $str));
                                for ($i = 0; $i < $n; $i++) {

                                    $word = $part[$i];
                                    $m = strlen($word);

                                    $fword = "";
                                    for ($j = 0; $j < $m; $j++) {
                                        $cha = $word[$j];
                                        if ($j == 0) {
                                            $up = strtoupper($cha[$j]);
                                        } else {

                                            $up = $cha;
                                        }
                                        $fword .= $up;
                                    }

                                    $senten .= $fword . " ";
                                }

                                return $senten;
                            }
                            echo "Input : ";
                            echo  $input = "this is a sentence.";
                            echo "</br>" . "Output : ";

                            echo capitize($input);

                            ?>
                        </p>
                    </div>
                </div>
                
            </div>
        </div>

        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
</body>
</body>

</html>