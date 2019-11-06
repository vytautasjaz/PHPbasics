<?php
$car_price_new = 3000;
$car_price_used = $car_price_new;
$depreciation = 2;
$santaupos = 1500;

for ($i = 1; $i; $i++) {
    $nuvertejimas = $car_price_used * $depreciation / 100;
    $car_price_used -= $nuvertejimas;
    if ($santaupos >= $car_price_used) {
        break;
    }
}
$car_price_used = round($car_price_used, 2);
$depr_perc = round(100 - ($car_price_used / $car_price_new * 100));

$kupiuros = $car_price_used;
$kupiuros_print = '';

for (; $kupiuros > 0.01;) {
    if ($kupiuros >= 500) {
        $kupiuros_print .= '<div class ="eur_500"></div>';
        $kupiuros -= 500;
    } elseif ($kupiuros >= 200) {
        $kupiuros_print .= '<div class ="eur_200"></div>';
        $kupiuros -= 200;
    } elseif ($kupiuros >= 100) {
        $kupiuros_print .= '<div class ="eur_100"></div>';
        $kupiuros -= 100;
    } elseif ($kupiuros >= 50) {
        $kupiuros_print .= '<div class ="eur_50"></div>';
        $kupiuros -= 50;
    } elseif ($kupiuros >= 20) {
        $kupiuros_print .= '<div class ="eur_20"></div>';
        $kupiuros -= 20;
    } elseif ($kupiuros >= 10) {
        $kupiuros_print .= '<div class ="eur_10"></div>';
        $kupiuros -= 10;
    } elseif ($kupiuros >= 5) {
        $kupiuros_print .= '<div class ="eur_5"></div>';
        $kupiuros -= 5;
    } elseif ($kupiuros >= 2) {
        $kupiuros_print .= '<div class ="eur_2"></div>';
        $kupiuros -= 2;
    } elseif ($kupiuros >= 1) {
        $kupiuros_print .= '<div class ="eur_1"></div>';
        $kupiuros -= 1;
    } elseif ($kupiuros >= 0.5) {
        $kupiuros_print .= '<div class ="eur_cnt_50"></div>';
        $kupiuros -= 0.5;
    } elseif ($kupiuros >= 0.2) {
        $kupiuros_print .= '<div class ="eur_cnt_20"></div>';
        $kupiuros -= 0.2;
    } elseif ($kupiuros >= 0.1) {
        $kupiuros_print .= '<div class ="eur_cnt_10"></div>';
        $kupiuros -= 0.1;
    } elseif ($kupiuros >= 0.05) {
        $kupiuros_print .= '<div class ="eur_cnt_5"></div>';
        $kupiuros -= 0.05;
    } elseif ($kupiuros >= 0.02) {
        $kupiuros_print .= '<div class ="eur_cnt_2"></div>';
        $kupiuros -= 0.02;
    } elseif ($kupiuros >= 0.01) {
        $kupiuros_print .= '<div class ="eur_cnt_1"></div>';
        $kupiuros -= 0.01;
    }
}

$h1 = 'Kiek nuvertės mašina?';
$h2 = "Naujos mašinos kaina: $car_price_new";
$h3 = "Mašiną galėsi nusipirkti po $i mėn., kai jos vertė bus: $car_price_used";
$h4 = "Mašina nuvertės $depr_perc proc.";
?>
<html>
    <head>
        <style>
            div {
                height:40px;
                width:78px;
                margin: 2px;
                background-size: contain;
                background-repeat: no-repeat;
                background-position: center;
            }
            .eur_500 {
                background-image: url('https://www.ecb.europa.eu/euro/banknotes/denominations/shared/img/carousel-thumbs/500euro_fr_ES1_thumb.png');
            }
            .eur_200 {
                background-image: url('https://www.ecb.europa.eu/euro/banknotes/denominations/shared/img/carousel-thumbs/200euro_fr_ES1_thumb.png');
            }
            .eur_100 {
                background-image: url('https://www.ecb.europa.eu/euro/banknotes/denominations/shared/img/carousel-thumbs/100euro_fr_ES1_thumb.png');
            }
            .eur_50 {
                background-image: url('https://www.ecb.europa.eu/euro/banknotes/denominations/shared/img/carousel-thumbs/50euro_fr_ES1_thumb.png');
            }
            .eur_20 {
                background-image: url('https://www.ecb.europa.eu/euro/banknotes/denominations/shared/img/carousel-thumbs/20euro_fr_ES1_thumb.png');
            }
            .eur_10 {
                background-image: url('https://www.ecb.europa.eu/euro/banknotes/denominations/shared/img/carousel-thumbs/10euro_fr_ES1_thumb.png');
            }
            .eur_5 {
                background-image: url('https://www.ecb.europa.eu/euro/banknotes/denominations/shared/img/carousel-thumbs/5euro_fr_ES1_thumb.png');
            }
            .eur_2 {
                background-image: url('https://www.ecb.europa.eu/euro/coins/common/shared/img/common_2euro_800.jpg');
            }
            .eur_1 {
                background-image: url('https://www.ecb.europa.eu/euro/coins/common/shared/img/common_1euro_800.jpg');
            }
            .eur_cnt_50 {
                background-image: url('https://www.ecb.europa.eu/euro/coins/common/shared/img/common_50cent_800.jpg');
            }
            .eur_cnt_20 {
                background-image: url('https://www.ecb.europa.eu/euro/coins/common/shared/img/common_20cent_800.jpg');
            }
            .eur_cnt_10 {
                background-image: url('https://www.ecb.europa.eu/euro/coins/common/shared/img/common_10cent.gif');
            }
            .eur_cnt_5 {
                background-image: url('https://www.ecb.europa.eu/euro/coins/common/shared/img/common_5cent_800.jpg');
            }
            .eur_cnt_2 {
                background-image: url('https://www.ecb.europa.eu/euro/coins/common/shared/img/common_2cent_800.jpg');
            }
            .eur_cnt_1 {
                background-image: url('https://www.ecb.europa.eu/euro/coins/common/shared/img/common_1cent_800.jpg');
            }
        </style>
    </head>
    <body>
        <h1><?php print $h1; ?></h1>
        <h2><?php print $h2; ?></h2>
        <h3><?php print $h3; ?></h3>
        <h4><?php print $h4; ?></h4>
        <div><?php print $kupiuros_print; ?></div>

    </body>
</html> 