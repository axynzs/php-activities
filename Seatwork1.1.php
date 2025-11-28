<?php
$x = 0; //variables
$y = 0;

echo "Num 1 = " . $x . "<br>";
echo "Num 2 = " . $y . "<br> <br>";

//sum
$sum = $x + $y;
echo "The sum of " . $x . " and " . $y . " is " . $sum . ".<br>";

//diff
$difference = $x - $y;
echo "The difference of " . $x . " and " . $y . " is " . $difference . ".<br>";

//product
$product = $x * $y;
echo "The product of " . $x . " and " . $y . " is " . $product . ".<br>";

//quotient division by zero
if ($y == 0) {
    echo "The quotient of " . $x . " and " . $y . " is <b> undefined (cannot divide by ZERO) </b>. <br>";
} else {
    $quotient = $x / $y;
    echo "The quotient of " . $x . " and " . $y . " is " . $quotient . ".<br>";
}
?>
