<?php

function print2by3Table () {
	echo "<table border = 1>";

	for ($i = 0; $i < 2; $i++) {
		echo "<tr>";
		for ($j = 0; $j < 3; $j++) {
			echo "<td> content </td>";
		}

		echo "</tr>";
	}
	echo "</table>";
}

print2by3Table();		// call function


echo "<hr><br>";

function print2by3Table2 ($row,$col) {
	echo "<table border = 1>";

	for ($i = 0; $i < $row; $i++) {
		echo "<tr>";
		for ($j = 0; $j < $col; $j++) {
			echo "<td> content </td>";
		}

		echo "</tr>";
	}
	echo "</table>";
}

print2by3Table2(1,1);
echo "<br>";
print2by3Table2(2,1);
echo "<br>";
print2by3Table2(2,2);



echo "<hr><br>";
echo "<strong>Return</strong><br><br>";

function add($a,$b) {
	$sum = $a + $b;
	return $sum . "<br>";
}

echo add(1,2);
// $var = add(1,2); 
// echo $var; ----> RECOMMENDED SO YOU CAN HOLD THE DATA AND CALL IT AFTERWARDS

echo "<hr><br>";
echo "<strong>Date</strong><br><br>";

function longdate($timestamp) {
	return date("F j, Y", $timestamp);	// month date, year
}

echo longdate(time());




echo "<hr><br>";
echo "<strong>Capitalization</strong><br><br>";

echo strtolower("STRTOLOWER") . "<br>";	
echo strtoupper("strtoupper") . "<br>";
echo ucfirst("ucfirst") . "<br>";
echo ucwords("i am using ucwords") . "<br>";
$str = "This is a <strong>bold</bold> text.";
echo htmlspecialchars($str);


echo "<hr><br>";
echo "<strong>Cleaning up a full name</strong><br><br>";

function fix_name($n1, $n2, $n3) {
	$n1 = ucfirst(strtolower($n1));
	$n2 = ucfirst(strtolower($n2));
	$n3 = ucfirst(strtolower($n3));
	return $n1 . " " . $n2 . " " . $n3 . "<br>";
}

echo fix_name("JOYCE", "aBeriA", "perez");


echo "<hr><br>";
echo "<strong>Static variable</strong><br><br>";

function myTest() {
	static $x = 0;
	echo $x;
	$x++;
}

myTest();				// 0
echo "<br>";
myTest();				// 1
echo "<br>";

myTest();				// 2
echo "<br>";

myTest();				// 3
echo "<br>";


echo "<hr><br>";
echo "<strong>WITHOUT Static variable</strong><br><br>";

function myTest2() {
	$x = 0;
	echo $x;
	$x++;
}

myTest2();				// 0
echo "<br>";
myTest2();				// 0
echo "<br>";

myTest2();				// 0
echo "<br>";

myTest2();				// 0
echo "<br>";

echo "<hr><br>";
echo "<strong>Use phpinfo() function to determine which version of PHP your code is running on. IT SHOULD NOT BE BELOW 7.
</strong><br><br>";

phpinfo();

?>

