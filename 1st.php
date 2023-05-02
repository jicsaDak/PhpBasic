<?php

echo " haw maw khaw!!" . "<br><br>";
?>

<html>
<?php
if (isset($_GET['submit'])) {
    $x = $_GET['num1'];
    $y = $_GET['num2'];
?>

    <form method="GET">
        1st num:
        <input type="number" id="num1" name="num1">
        2nd num:
        <input type="number" id="num2" name="num2">

        <input type="submit" name="submit" value="compare">

    </form>
<?php

    if ($x == $y) {
        echo "they are equal";
    } else {
        echo "they are not equal";
    }
}


?>



</html>