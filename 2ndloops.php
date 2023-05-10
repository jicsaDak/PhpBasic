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
				<h2>PHP BASICS 2</h2>
			</section>


			<hr/>
			<section class="maincontent">
<form  action="" method="get"><center>
       
        <input  class="input" type="number" id="num1" name="num1" placeholder="initial">
        
        <input  class="input"type="number" id="num2" name="num2" placeholder="max value">
    
        <input class="input"type="number" id="num3" name="num3" placeholder="divided by">

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
    
}
else {echo"Enter the Values Then Submit";}


 for($i=$x; $i<$y; $i++)
 { if ($i==0){echo $i."<br>"; break;}
    elseif ($i%$z==0){echo $i."yes <br>";}

    else{echo $i."no <br>";}

 }



?>




</body>
<br>
</html>
