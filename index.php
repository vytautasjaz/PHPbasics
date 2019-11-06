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

$pack_count = floor($count_ttl / 20);
$likutis_count = $count_ttl % 20;

$h1 = 'Mano dūmų skaičiuoklė';
$h2 = "Per $days dienas, surūkysiu $count_ttl cigarečių už $price_ttl EUR.";
$h3 = "Viso traukdamas pradstovėsiu $time_total valandų.";
$h3_1 = "Surūkysiu $pack_count pakelius(-ių) ir $likutis_count cigaretes(-čių).";
?>
<html>
    <head>
        <link href="https://fonts.googleapis.com/css?family=Roboto&display=swap" rel="stylesheet">
        <style>
            *{
                font-family: 'Roboto', sans-serif;
            }
            .cigareciu_blokas {
                display: flex;
                flex-wrap: wrap;
            }
            .cigareciu_pakelis {
                margin: 5px;
                background-color: #E9E9E9;
                border: 1px solid black;
            }
            .cigarete {
                margin: 10px; 
                width: 50px;
                height: 50px;
                font-size: 10px;
                color: grey;
                background: url('http://www.clker.com/cliparts/3/3/a/c/1240159978947172189opensourcebear_Lit_Cigarette.svg');
                background-size: cover;
            }
        </style>
    </head>
    <body>
        <h1><?php print $h1; ?></h1>
        <h2><?php print $h2; ?></h2>
        <h3><?php print $h3; ?></h3>
        <h3><?php print $h3_1; ?></h3>
        <div class="cigareciu_blokas">
            <!-- Pilni cigarečių pakeliai -->
            <?php for ($x = 0; $x < $pack_count; $x ++) : ?>
                <div class ="cigareciu_pakelis">
                    <?php for ($i = 1; $i <= 20; $i++) : ?>
                        <div class="cigarete"><?php print $i; ?></div>
                    <?php endfor; ?>	
                </div>
            <?php endfor; ?>
            <!-- Likusios cigaretės-->
            <?php if ($likutis_count > 0) { ?>
                <div class ="cigareciu_pakelis">
                    <?php
                    for ($i = 1; $i <= $likutis_count; $i++) :
                        ?>
                        <div class = "cigarete"><?php print $i; ?></div>
                    <?php endfor; ?>
                </div>
            <?php } ?>	
        </div>   
    </body>
</html> 