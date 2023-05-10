<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>3ProblemSolving</title>
</head>
<body><tr> <h1> 1.	Print N to 1</h1></tr>

<?php


$n=10;
echo "Where N= $n"."<br>"."<br>";
for($i=$n;$i>0; $i--)
{
echo $i."<br>";
}

?>
  <hr>  

  <tr> <h1> 2.	Print your Name 10 times</h1></tr>

<?php


 $name="SaDak Chowdhury";

 echo "Here my name is ".  "<span>$name</span>"."<br>"."<br>";


for($i=1;$i<11; $i++)
{echo $i." . ".$name."<br>";
}

?>

<br>
<hr>  

  <tr> <h1> 3.	Print summation of Odd number of 10 to 100</h1></tr>

<?php
   $s=0;
for($j=10;$j<=100; $j++)

{
if ($j%2!=0){
    if($j==99){
        echo $j."."."<br>";
    }
    else{
        echo $j."  ,";
    }
 
$s+=$j;
}
}
echo" The sum of all Odd Number 10 to 100 is  =". $s.".";
?>

<br>
<br>
<hr>  

  <tr> <h1> 4.	Print summation of Even number from 0 to 50</h1></tr>

<?php
   $sk=0;
for($k=0;$k<=50; $k++)

{
if ($k%2==0){
    if($k==0){
        
    }
    elseif($k==50){
        echo $k."."."<br>";
    }
    else{
        echo $k."  ,";
    }
 
$sk+=$k;
}
}
echo" The sum of all Evem Number between 0 to 50 is  =". $sk.".";
?>
 <br>
<br>
<hr>  

  <tr> <h1> 5.	Print 2020 to 2050</h1></tr>

<?php
 echo" 2020 to 2050 all Numbers are :"."<br>";
for($l=2020;$l<=2050; $l++){

echo $l."    " ;
}
echo "." ;


?>
  
  
<br>
<br>
<hr>  

  <tr> <h1> 6.	Take two input from user if 1st number is those number is greater
     than 0 and less than 10 print their string value e.g. [input: 8  9 ; Output : eight nine] ,
     if one or both numbers are greater than 10 then print summation of two number. E.g. [input: 8 12 ; output: 20 ]</h1></tr>

<form method="post">
first Number 
<input type="number" name="num1" id="num1">
Second Number 
<input type="number" name="num2" id="num2">
<input type="submit" name="submit" value="submit">

</form>

<?php 
if (isset($_REQUEST['submit'])){
    echo" Fist Number = ". $num1=$_REQUEST['num1']; echo "<br>";
    echo "Second Number = ".$num2=$_REQUEST['num2']; echo "<br>";

if ($num1 > 0 && $num2 > 0){if  ($num1 <= 10 && $num2 <=10){

?>
<h3>

<?php 
switch($num1){
    case 1:
    echo "one";
    break;
    case 2:
        echo "two";
        break;
        case 3:
            echo "three";
            break;
            case 4:
                echo "four";
                break;
                case 5:
                    echo "five";
                    break;
                    case 6:
                        echo "six";
                      break;
                    case 7:
                        echo "seven";
                        break;
                        case 8:
                            echo "eight";
                            break;
                            case 9:
                                echo "nine";
                                break;
                                default:
                                    echo "ten";
                                    break;
                                    
                            }

echo " ";


                            switch($num2){
                                case 1:
                                echo "one";
                                break;
                                case 2:
                                    echo "two";
                                    break;
                                    case 3:
                                        echo "three";
                                        break;
                                        case 4:
                                            echo "four";
                                            break;
                                            case 5:
                                                echo "five";
                                                break;
                                                case 6:
                                                    echo "six";
                                                  break;
                                                case 7:
                                                    echo "seven";
                                                    break;
                                                    case 8:
                                                        echo "eight";
                                                        break;
                                                        case 9:
                                                            echo "nine";
                                                            break;
                                                            default:
                                                                echo "ten";
                                                                break;
                                                                
                                                        }


}
else{

    $sumnum=$num1+$num2;

    echo "Sum of $num1 + $num2=$sumnum ";

}
    
}

?>
</h3>
<?php 

}

else{echo "Plse enter the values";}

?>
<hr>
</body>
</html>