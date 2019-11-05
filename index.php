<?php
$days = 365;
$pack_price = 3.50;
$count_ttl = 0;
$time_per_cig = 5;

for ($d = 0; $d < $days; $d++) {
    $weekday = date('N', strtotime("+$d day"));

    if ($weekday == 6) {
        $cigs_sat = rand(10, 20);
        $count_ttl += $cigs_sat;
    } elseif ($weekday == 7) {
        $cigs_sun = rand(1, 3);
        $count_ttl += $cigs_sun;
    } else {
        $cigs_mon_fri = rand(3, 4);
        $count_ttl += $cigs_mon_fri;
    }
}

$price_ttl = ceil($count_ttl / 20) * $pack_price;
$time_total = round($count_ttl * $time_per_cig / 60, 2);

$h1 = 'Mano dumu skaiciuokle';
$h2 = "Per $days dienas, surukysiu $count_ttl cigareciu uz $price_ttl eur.";
$h3 = "Viso traukdamas pradstovėsiu $time_total valandų";
?>
<html>
    <head>
        <style>
            .cigareciu_blokas {
                display: flex;
                flex-wrap: wrap;
            }
            .cigarete {
                width: 150px;
                height: 150px;
                background: url('https://png.pngtree.com/element_our/png/20181129/cigarette-smoke-png_251566.jpg');
                background-size: cover;
            }
        </style>
    </head>
    <body>
        <h1><?php print $h1; ?></h1>
        <h2><?php print $h2; ?></h2>
        <h3><?php print $h3; ?></h3>
        <div class="cigareciu_blokas">
            <?php
            for ($i = 0; $i < $count_ttl; $i++) {
                print '<div class="cigarete"></div>';
            }
            ?>
        </div>

    </body>


</html>