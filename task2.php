<?php
$expenses = [
    "Food"      => 400,
    "Transport" => 250,
    "Shopping"  => 350,
    "Other"     => 150,
];

echo "<h2>Original Expenses:</h2>";
echo "<pre>";
print_r($expenses);
echo "</pre>";

array_push($expenses, 500);
echo "<b>After array_push:</b><br>";
print_r($expenses);

array_pop($expenses);
echo "<br><b>After array_pop:</b><br>";
print_r($expenses);

$extra = [
    "Health"    => 200,
    "Education" => 300,
];
$merged = array_merge($expenses, $extra);
echo "<br><b>After array_merge:</b><br>";
print_r($merged);

$total = array_sum($merged);
echo "<br><b>Total Expense (array_sum):</b> $total<br><br>";

$expenseString = "100,200,300,400,500";
$expenseArray  = explode(",", $expenseString);

echo "<b>Exploded Array:</b><br>";
print_r($expenseArray);

$newString = implode(" - ", $expenseArray);
echo "<br><b>Imploded String:</b> $newString<br><br>";

$text = "expense report";

echo "<h3>String Function Examples:</h3>";
echo "Uppercase: " . strtoupper($text) . "<br>";
echo "Length: " . strlen($text) . "<br>";
echo "Substring(0,7): " . substr($text, 0, 7) . "<br>";
echo "Replace 'report' with 'summary': " . str_replace("report", "summary", $text) . "<br><br>";

$filename = "expenses.txt";
$data     = "Expense Data:\n";

foreach ($merged as $category => $amount) {
    $data .= "$category: $amount\n";
}

file_put_contents($filename, $data);

echo "<b>Data written to $filename successfully!</b><br><br>";

file_put_contents($filename, "Entertainment: 400\n", FILE_APPEND);

echo "<h3>File Content After Appending:</h3>";
echo nl2br(file_get_contents($filename));
