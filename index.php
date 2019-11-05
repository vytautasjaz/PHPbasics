<?php
$months = 12;
$wallet = 1000;
$month_income = 700;

for ($x = 0; $x < $months; $x++) {
    $month_expenses = rand(0, 1500);
    $wallet += $month_income - $month_expenses;
    if ($wallet < 0) {
        $h2 = "Atsargiai, $x mėnesį gali baigtis pinigai!";
        break;
    } else {
        $h2 = "Po $months mėn., prognozuojamas likutis: $wallet";
    }
}

$h1 = "Wallet forecast";
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