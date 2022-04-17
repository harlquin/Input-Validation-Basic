<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
</head>
<body>
<?php
	$var1 = true; 			// boolean value
	$var2 = 3; 				// integer value
	$var3 = 5.6; 			// double value
	$var4 = "Abc3462"; 		// string value
	$var5 = array(1, 2, 3); // array value
	$var6 = new stdClass; 	// object value
	$var7 = NULL; 			// null value
	$var8 = tmpfile(); 		// resource value

	echo "var1 = true; bertipe : ".gettype($var1)."<br>";
	echo "var2 = 3; bertipe : ".gettype($var2)."<br>";
	echo "var3 = 5.6; bertipe : ".gettype($var3)."<br>";
	echo "var4 = Abc3462; bertipe : ".gettype($var4)."<br>";
	echo "var5 = array(1, 2, 3); bertipe : ".gettype($var5)."<br>";
	echo "var6 = new stdClass; bertipe : ".gettype($var6)."<br>";
	echo "var7 = NULL; bertipe : ".gettype($var7)."<br>";
	echo "var8 = tmpfile(); bertipe : ".gettype($var8)."<br>";
?>
</body>
</html>