
<?php
	$mark=80;

	if($mark<35)
		echo "fail <br>";
	elseif($mark<=50)
		echo "grade is third class <br>";
	elseif($mark>50 && $mark<75)
		echo "grade is second class <br>";
	elseif($mark>74 && $mark<=90)
		echo "grade is first class <br>";
	else
		echo "distinction <br>";
		echo "the mark is $mark";

?>
