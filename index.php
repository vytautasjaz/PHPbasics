<?php
$months = 12;
$wallet = 1000;
$month_income = 700;
$wallet = 0;

for ($x = 0; $x < $months; $x++) {
    $month_expenses = rand(0, 700);
    $wallet += $month_expenses;
}

$h1 = "Wallet forecast";
$h2 = "Po $months mėn., prognozuojamas likutis: $wallet";
?>
<html>
    <head>
        <title>Ciklai</title>
    </head>
    <body>
        <h1><?php print $h1; ?></h1>
        <h2><?php print $h2; ?></h2>
    </body>
</html>