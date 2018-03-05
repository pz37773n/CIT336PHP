<?php
echo "Assigment A<br>";

$num1 = 40;
$num2 = 34;

echo "Number 1: " .$num1. "<br> Number 2: " .$num2. "<br> Total: " .($num1 + $num2); 

echo "<br> Assigment B<br>";

$a1 = "ham";
$a2 = "salami";
$a3 = "cheese";

echo "A " .$a1. " and " .$a3. " sandwich is good<br> " . " however a " .$a2. " and " .$a3. " sandwich is also good <br>";

echo  "Assignment C <br>";

$t = date("H");

	if($t % 2 == 0)
		echo "It is even";
	else
		echo "It is odd";
?>