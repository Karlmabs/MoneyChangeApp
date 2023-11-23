<?php

function make_change($amount) {
    // Initialize a list to store the minimum number of bills needed for each amount
    $min_bills = array_fill(0, $amount + 1, PHP_INT_MAX);
    $min_bills[0] = 0;

    // Define the available bill values
    $billets = array(2, 5, 10);

    // Calculate the minimum number of bills needed for each amount from 1 to the given amount
    for ($i = 1; $i <= $amount; $i++) {
        foreach ($billets as $j) {
            if ($j <= $i) {
                // Update the minimum number of bills needed for the current amount
                $min_bills[$i] = min($min_bills[$i], $min_bills[$i - $j] + 1);
            }
        }
    }

    // If it's impossible to make the exact amount with the available bills, return a message
    if ($min_bills[$amount] == PHP_INT_MAX) {
        return "Impossible";
    }

    // Find which bills make up the minimum number of bills for the given amount
    $i = $amount;
    $change = array();
    while ($i > 0) {
        foreach ($billets as $j) {
            if ($j <= $i && $min_bills[$i] == $min_bills[$i - $j] + 1) {
                $change[] = $j;
                $i -= $j;
                break;
            }
        }
    }

    return $change;
    
}

$sampleAmount = 20;
$sampleResult = make_change($sampleAmount);

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Money Change App</title>
</head>

<body>
    <h1>Welcome to the Money Change App</h1>

    <p>This simple PHP application calculates the optimal combination of bills for a given amount using the make_change function.</p>

    <h2>Sample Result:</h2>
    <p>For an amount of <?php echo $sampleAmount; ?>, the optimal combination is: <?php echo json_encode($sampleResult); ?></p>

    <p>Feel free to explore and use the functionality as needed!</p>
</body>

</html>

