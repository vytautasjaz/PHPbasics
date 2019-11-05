<?php
$days = 365;
$pack_price = 3.50;
$count_ttl = 0;

$weeks = round($days / 7, 0, PHP_ROUND_HALF_DOWN);
$like_dienos = $days % 7;

for ($i = 1; $i <= $weeks; $i++) {
    for ($x = 1; $x <= 7; $x++) {
        if ($x <= 5) {
            $count_ttl += rand(3, 4);
        } elseif ($x == 6) {
            $count_ttl += rand(10, 20);
        } elseif ($x == 7) {
            $count_ttl += rand(1, 3);
        }
    }
}

$savaites_diena = date('N');
if ($savaites_diena <= 5) {
    $count_ttl += rand(3, 4);
} elseif ($savaites_diena == 6) {
    $count_ttl += rand(10, 20);
} elseif ($savaites_diena == 7) {
    $count_ttl += rand(1, 3);
}

$pack_count = round($count_ttl / 20, 0, PHP_ROUND_HALF_UP);
$price_ttl = $pack_count * $pack_price;

$h1 = 'Mano dūmų skaičiuoklė';
$h2 = "Per $days dienas, surūkysiu $count_ttl cigarečių už $price_ttl eur.";
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