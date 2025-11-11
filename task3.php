<?php

session_start(); 


if (isset($_POST['delete'])) {
    session_destroy();
    session_start(); 
    echo "<p style='color:red;'>Session deleted successfully!</p>";
}


if (isset($_POST['submit'])) {
    $_SESSION['name'] = $_POST['name'];
    $_SESSION['budget'] = $_POST['budget'];
}


if (isset($_SESSION['name']) && isset($_SESSION['budget'])) {
    echo "<h3>Welcome, <span style='color:blue;'>" . $_SESSION['name'] . "</span>! Your budget is <b>" . $_SESSION['budget'] . "</b>.</h3><hr>";
}


?>
<form method="POST" style="margin-bottom: 10px;">
    <label><b>Enter Your Name:</b></label><br>
    <input type="text" name="name" required><br><br>

    <label><b>Enter Your Budget:</b></label><br>
    <input type="number" name="budget" required><br><br>

    <button type="submit" name="submit">Save to Session</button>
</form>

<form method="POST">
    <button type="submit" name="delete">Delete Session</button>
</form>

<?php
echo "<hr>";


function recursiveSum($array)
{
    $sum = 0;
    foreach ($array as $value) {
        if (is_array($value)) {
            $sum += recursiveSum($value);
        } else {
            $sum += $value;
        }
    }
    return $sum;
}


$numbers = [10, [20, 30], [5, [10, 15]]];
echo "<b>Recursive Array Sum:</b> " . recursiveSum($numbers) . "<br>";


function applyDiscount($amount, $callback)
{
    return $callback($amount);
}

$discountedPrice = applyDiscount(1000, function ($value) {
    return $value * 0.9;
});

echo "<b>Discounted Price (10% off):</b> " . $discountedPrice . "<br>";

function divideNumbers($a, $b)
{
    try {
        if ($b == 0) {
            throw new Exception("Division by zero is not allowed!");
        }
        return $a / $b;
    } catch (Exception $e) {
        return "Error: " . $e->getMessage();
    } finally {
        echo "<br><b>Division Attempt Completed.</b><br>";
    }
}


echo "<b>Division Result (10 ÷ 2):</b> " . divideNumbers(10, 2) . "<br>";
echo "<b>Division Result (10 ÷ 0):</b> " . divideNumbers(10, 0) . "<br>";
?>