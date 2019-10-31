<?php
$bin_vol = 40;
$bin_heap_vol = rand(1, 15);
$trash_per_day = 15;
$days = ($bin_vol + $bin_heap_vol) / $trash_per_day;
$days_round = round($days, 0, PHP_ROUND_HALF_DOWN);
?>
<!DOCTYPE htm>
<html>
    <head>
        <title>Šiukšlinė</title>
    </head>
    <body>
        <h1>Šiukšlių prognozė</h1>
        <p>Turima šiukšlinė - <?php print $bin_vol; ?> litrų</p>
        <p>Žmona nieko nesako, kol kaupas neviršija <?php print $bin_heap_vol; ?> litrų</p>
        <h3>Išvada: Nieko nedarysiu <?php print $days_round; ?> dienas</h3>
    </body>
</html>