

<html>
<head>
<head>
  <title>Bootstrap 5 Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
</head></br>
<style>
			body{font-family:<?php echo $fonts;?>}
			.phpcoding{width:900px; margin:0 auto; background:#ddd;  }
			.headeroption, .footeroption { background-color:#333333; color:#fff; text-align:center; padding:10px;}
			.headeroption h2, .footeroption h2 {margin:0;}
            .maincontent1 {min-height:50px; padding:8px;}
			.maincontent  {min-height:40px; padding:8px;}
			.input{border-radius:10px; }
            .output{border-radius:10px; background-color:#333333; color:#fff; text-align:center; padding:10px; width:70%;}
			.output2{border-radius:10px; background-color:red; color:#fff; text-align:center; padding:10px; width:70%;}
		</style>
        


</head>

<body>
<div class="phpcoding">
			<section class="headeroption">
				<h2>PHP BASICS</h2>
			</section>
<?php 
echo "“Recently I heard that you’ve achieved 95% marks in your exam.
This is brilliant!    I wish you’ll shine in your life! Good luck with all the barriers(/\) in your
life.”";?>

			<hr/>
			<section class="maincontent">
<form  action="" method="get"><center>
       
        <input  class="input" type="number" id="num1" name="num1" placeholder="Number 1">
        
        <input  class="input"type="number" id="num2" name="num2" placeholder="Number 2">
    
        <input class="input"type="number" id="num3" name="num3" placeholder="Number 3">

        <input class="input"type="submit" name="submit" value="Submit">
</center>
    </form>
<hr/>
<center>
</section>
         <center>  <section class="output"  >
<?php 

if (isset($_GET['submit'])) {
    $x = $_GET['num1'];
    $y = $_GET['num2'];
    $z = $_GET['num3'];
?>

    
<?php
if($x!=''||$y!=''||$z!=''){

echo "$x+$y=".$x+$y."<br>";
echo "$x-$y=".$x-$y."<br>";
echo "$x*$y=".$x*$y."<br>";


if($x!=0 &&$y!=0 ){
echo "$x/$y=".number_format($x /$y,2)."<br>";}
echo"Number3 =". $z ."<br>";

if ($x>0){
    echo $x." is a Possitive Number";
 if ($x%2==0)
{ echo " amd an even Number "."<br>" ;}
else {echo " amd an odd Number "."<br>"; }
}
else if($x<0) {echo $x." is a Negative Number";

    if ($x%2==0)
    { echo " amd an even Number "."<br>" ;}
    else {echo " amd an odd Number "."<br>"; }

}
else if($x==0) {
    echo $x." Zero";}






if ($y>0){
    echo $y." is a Possitive Number";
 if ($y%2==0){
     echo " amd an even Number "."<br>" ;}
else {echo " amd an odd Number "."<br>"; }
}
else if($y<0) {
    echo $y." is a Negative Number";

    if ($y%2==0)
    { echo " amd an even Number "."<br>" ;}
    else {echo " amd an odd Number "."<br>"; }

}
else if($y==0) {
    echo $y." Zero";}



    if ($x == $y && $x==$z) {
        echo "$x and $y and $z "."they are equal";
    } else if ($x>$y && $x>$z ) {
        echo "$x and $y"." ------Number1 in greater ";
    }
    else if ($y>$x&& $y>$z) {
        echo "$x and $y and $z "." ------Number2 in greater ";
    }
    else {
        echo "$x and $y and $z "." ------Number3 in greater ";}
    } 
    else {echo"Enter the Values Then Submit";}

}

else {echo"Enter the Values Then Submit";}






?>
</center></section><br>
<hr/><br>
<center>  <section class="output">
<form  action="" method="POST"><center>
       
        <input  class="input" type="number" id="num11" name="num11" placeholder="Amount">
        

        <input class="input"type="submit" name="submited" value="Submit">
</center>
    </form>
<?php
if(isset($_POST['submited'])){
 $xx = $_POST['num11'];
if ($xx==20000){echo"Gucci Bag";}
elseif ($xx==6500){echo"Levis Bag";}
elseif ($xx==200){echo"Something";}
elseif ($xx==25400){echo"Gucci Bag"."<br>"."Gucci Belt";}
else {echo"Enter amount = 20000 or 6500 or 200 or 25400 for a output ";}}
else {echo"Enter amount = 20000 or 6500 or 200 or 25400 for a output ";}






?>

</section>

           <section  class="maincontent1"  >




            
            </section>

</body>
<br>
</html>