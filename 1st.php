<?php

echo " haw maw khaw!!" . "<br><br>";


?>

<html>
<body>
<form  action="" method="get">
        1st num:
        <input type="number" id="num1" name="num1">
        2nd num:
        <input type="number" id="num2" name="num2">
        3rd num:
        <input type="number" id="num3" name="num3">

        <input type="submit" name="submit" value="submit">

    </form>

<?php 

if (isset($_GET['submit'])) {
    $x = $_GET['num1'];
    $y = $_GET['num2'];
    $z = $_GET['num3'];
?>

    
<?php
echo "$x*$y=".$x*$y."<br>";
echo "$x+$y=".$x+$y."<br>";
echo "$x-$y=".$x-$y."<br>";
echo $z ."<br>";

 if ($x%2==0)
{ echo $x."is a even Number "."<br>" ;}
else {echo $x." is aodd Number "."<br>"; }

    if ($x == $y && $x==$z) {
        echo "$x ans $y and $z "."they are equal";
    } else if ($x>$y && $x>$z ) {
        echo "$x ans $y"." Number1 in greater then Number2";
    }
    else if ($y>$x&& $y>$z) {
        echo "$x ans $y and $z "." Number2 in greater then Number1";
    }
    else {
        echo "$x ans $y and $z "." Number3 in greater then Number1";
    }
}


?>


</body>
</html>