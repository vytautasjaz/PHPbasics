<?php
$distance = rand(1, 500);
$consumption = 7.5;
$price_1 = 1.3;

$fuel_total = round((($distance / 100) * $consumption), 2);
$price_trip = round(($fuel_total * $price_1), 2);

$h_1 = "Kelionės skaičiuoklė";
$li_1 = "Nuvažiuota distancija: $distance";
$li_2 = "Sunaudota $fuel_total l kuro.";
$li_3 = "Kaina: $price_trip pinigų.";
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
        </ul>
    </body>
</html>