<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>task4problem3.php</title>
</head>

<body>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    </br>

    <div class="container">
        <div class="raw">
            <div class="col-md-2-center col-lg-2-center">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">String Compression </h5>
                        <p class="card-text">


                            String Compression:</br>
                            Input: "aabbbcccc"
                       
                            <hr>
                            Output : 
                            <?php

                            function chacount( $stri){

   
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
          echo  $stri[$i]. $temp[$i];
        }
    }
}

$input="aabbbcccc";


 chacount($input);

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