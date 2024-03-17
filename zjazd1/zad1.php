<?php
$fruits = array("jablko", "banan", "pomarancza");

for ($i = count($fruits) - 1; $i >= 0; $i--) {
    echo strrev($fruits[$i]) . "\n";

    if (strtolower($fruits[$i][0]) === 'p') {
        echo "Zaczyna się na literę \"p\"\n";
    }
}
?>
