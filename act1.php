<?php 

// create a function that accepts two parameters: length and width of a rectangle. return the area of the rectangle


function getArea ($length, $width) {
	echo "<table border = 1>";

	for ($i = 0; $i < $length; $i++) {
		echo "<tr>";
		for ($j = 0; $j < $width; $j++) {
			echo "<td> content </td>";
		}

		echo "</tr>";
	}
	echo "</table>";
}

getArea(3,5);



?>