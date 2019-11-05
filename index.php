<?php
$months = 12;
$wallet = 1000;
$month_income = 700;

for ($x = 1; $x <= $months; $x++) {
    $month_expenses = rand(0, 700);
    $wallet += $month_income - $month_expenses;
    if ($wallet < 0) {
        break;
    }
}

$h1 = "Wallet forecast";
if ($wallet > 0) {
    $h2 = "Po $months mėn., prognozuojamas likutis: $wallet";
} {
    $h2 = "Atsargiai, $x mėnesį gali baigtis pinigai!";
}
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