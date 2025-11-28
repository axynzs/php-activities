<?php
$displayWhat = 'Add';

$x = 10;
$y = 5;

if ($displayWhat == 'Add') {

    $result = $x + $y;
    echo "You selected: ADD <br>";
    echo "The sum of $x and $y is $result.";

} elseif ($displayWhat == 'Subtract') {

    $result = $x - $y;
    echo "You selected: SUBTRACT <br>";
    echo "The difference between $x and $y is $result.";

} elseif ($displayWhat == 'Multiply') {

    $result = $x * $y;
    echo "You selected: MULTIPLY <br>";
    echo "The product of $x and $y is $result.";

} elseif ($displayWhat == 'Divide') {

    if ($y == 0) {
        echo "You selected: DIVIDE <br>";
        echo "Cannot divide by ZERO.";
    } else {
        $result = $x / $y;
        echo "You selected: DIVIDE <br>";
        echo "The quotient of $x and $y is $result.";
    }

} else {

    echo "Invalid operation selected.";

}
?>
