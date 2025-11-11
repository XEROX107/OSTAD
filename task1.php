<?php

define("APP_NAME", "Expense Calculator");
define("AUTHOR", "Sir Sakib");

echo "<h3>Using echo:</h3>";
echo "Application: " . APP_NAME . " | Author: " . AUTHOR . "<br><br>";

echo "<h3>Using print:</h3>";
print("Application: " . APP_NAME . " | Author: " . AUTHOR . "<br><br>");

echo "<h3>Using printf:</h3>";
printf("Application: %s | Author: %s<br><br>", APP_NAME, AUTHOR);

$food      = 400;
$transport = 350;
$other     = 180;

$total   = $food + $transport + $other;
$average = $total / 3;

echo "<b>Total Expense:</b> $total<br>";
echo "<b>Average Expense:</b> " . number_format($average, 2) . "<br><br>";

if ($total > 1000) {
    echo "<span style='color:red; font-weight:bold;'>Budget Exceeded!</span><br><br>";
} else {
    echo "<span style='color:green; font-weight:bold;'>Within Budget.</span><br><br>";
}

$message = ($total > 1000) ? "High Expense" : "Normal Expense";
echo "Ternary Message: $message<br>";

switch (true) {
    case ($total < 500):
        echo "Switch Case: Expense Range = Low<br>";
        break;
    case ($total >= 500 && $total <= 1000):
        echo "Switch Case: Expense Range = Moderate<br>";
        break;
    default:
        echo "Switch Case: Expense Range = High<br>";
}

function calculateTotal($food, $transport, $other)
{
    return $food + $transport + $other;
}

function checkBudget($total)
{
    if ($total > 1000) {
        return "Budget Exceeded";
    } else {
        return "Within Budget";
    }
}

echo "<br><hr>";
echo "<b>Function Output:</b><br>";
echo "Calculated Total (Function): " . calculateTotal($food, $transport, $other) . "<br>";
echo "Budget Check (Function): " . checkBudget($total);
