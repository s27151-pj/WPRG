<?php
function isPrime($num) {
    if ($num <= 1) return [false, 0];
    if ($num <= 3) return [true, 0];
    if ($num % 2 == 0 || $num % 3 == 0) return [false, 1];

    $i = 5;
    $iterations = 0;
    while ($i * $i <= $num) {
        if ($num % $i == 0 || $num % ($i + 2) == 0) return [false, $iterations];
        $i += 6;
        $iterations++;
    }
    return [true, $iterations];
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $number = $_POST["number"];
    if (filter_var($number, FILTER_VALIDATE_INT) && $number > 0) {
        list($isPrime, $iterations) = isPrime($number);
        echo $isPrime ? "The number $number is a prime number." : "The number $number is not a prime number.";
        echo "<br>Number of iterations: $iterations";
    } else {
        echo "Please enter a valid positive integer.";
    }
}
?>
