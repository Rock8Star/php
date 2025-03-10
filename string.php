

<?php

	$ascii_value=65;
	$character = chr($ascii_value);

	echo "1. the charcter for ascii value $ascii_value is: $character<br><br>";
	
	$char = 'A';
	$ascii = ord($char);

	echo "2. the ascii value of character $char is: $ascii <br><br>";

	$string = "HelloWorld";
	$shuffled = str_shuffle($string);

	echo "3. the shuffled version of $string is: $shuffled <br><br>";
	
	$original = "I love windows";
	$replaced = str_replace("windows", "Arch btw",$original);

	echo "4. After replacement: $replaced <br><br>";

	$string1 = "Hello";
	$string2 = "hello";

	$compansion = strcmp($string1,$string2);

	if($compansion == 0) {
		
		echo "5. the strings $string1 & $string2 are identical <br><br>";
}
	else{
		echo "5. the strings $string1 & $string2 are not identical <br><br>";
	}

	$text = "programming is fun!";
	$substring = substr($text,0,11);

	echo "6. the substring of $text : $substring <br>";

?>
