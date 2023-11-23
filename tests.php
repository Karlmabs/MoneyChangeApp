<?php

// Inclure la fonction rendre_monnaie
include 'index.php';

// Fonction de test simple
function runTest($input, $expectedOutput) {
    $output = make_change($input);
    if ($output === $expectedOutput) {
        echo "Test Passed: For input $input, expected output is " . json_encode($expectedOutput) . ", got " . json_encode($output) . PHP_EOL;
    } else {
        echo "Test Failed: For input $input, expected output is " . json_encode($expectedOutput) . ", got " . json_encode($output) . PHP_EOL;
    }
}

// Exécuter des tests
runTest(1, "Impossible");
runTest(6, [2, 2, 2]);
runTest(10, [10]);
runTest(11, [2, 2, 2, 5]);
runTest(21, [2, 2, 2, 5, 10]);
runTest(23, [2, 2, 2, 2, 5, 10]);
runTest(31, [2, 2, 2, 5, 10, 10]);


?>
