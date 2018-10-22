<?php 

// create a function that accepts two parameters: length and width of a rectangle. return the area of the rectangle

function getRectangleArea ($width, $length) {
    $rectangleArea = $width * $length;
    return $rectangleArea;
}

$rArea = getRectangleArea(3,2);
echo $rArea;    // 6




?>