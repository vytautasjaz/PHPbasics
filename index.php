<?php
$distance = rand(1, 500);
$consumption = 7.5;
$price_1 = 1.3;
$my_money = 100;

$fuel_total = round($distance / 100 * $consumption, 2);
$price_trip = round($fuel_total * $price_1, 2);

if ($my_money >= $price_trip) {
    $kelione = "įperkama";
} else {
    $kelione = "neįperkama";
}

$h_1 = "Kelionės skaičiuoklė";
$li_1 = "Nuvažiuota distancija: $distance";
$li_2 = "Sunaudota $fuel_total l kuro.";
$li_3 = "Kaina: $price_trip pinigų.";
$li_4 = "Turimi pinigai: $my_money";
$p_1 = "Išvada: Kelionė $kelione";
$title = $h_1;
?>
<!DOCTYPE htm>
<html>
    <head>
        <title><?php print $title; ?></title>
    </head>
    <body>
        <h1><?php print $h_1; ?></h1>
        <ul>
            <li><?php print $li_1; ?></li>
            <li><?php print $li_2; ?></li>
            <li><?php print $li_3; ?></li>
            <li><?php print $li_4; ?></li>
            <hr>
            <p><?php print $p_1; ?></p>
        </ul>
    </body>
</html>