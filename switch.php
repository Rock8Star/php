

<?php
	
	$num1 = 5;
	$num2 = 10;
	$operator = 4;

	switch($operator) {
		case 1:
			echo "$num1 + $num2 is: " . $num1 + $num2;
			break;
		case 2: 
			echo "$num1 - $num2 is: " . $num1 - $num2;
			break;
		case 3:
			echo "$num1 * $num2 is: " . $num1 * $num2;
			break;
		case 4:
			echo "$num1 / $num2 is: " . $num1 / $num2;
			break;
		default:
			echo "invalid choice";
			break;
	}

?>
