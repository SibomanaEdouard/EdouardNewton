


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CHANGE FROM CELSIUS TO FAHRENHEIT</title>
	<style>
	body{
	background-color:grey;
	color:green;
	}
	
	fieldset{
	color:blue;
background-color:white;
width:400px;
height:30px;
border:1;
border-radius:2px solid green;
	
	}
	</style>
</head>
<body>
<center>
<fieldset>

<?php
$num = $_POST['celsius'];
echo "The conversion from Celsius to Fahrenheit is " .($num *9/5) + 32;
?>
</fieldset> 
</center> 
</body>
</html>


