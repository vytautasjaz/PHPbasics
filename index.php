<?php
$skola = (rand(1, 100));
$graza_su_vienu = (rand(101, 200));
$graza_su_dviem = (rand(201, 300));

$pavadinimas="Skolos skaičiuoklė";
$skola_txt = "Jei paėmei $skola jievrų";
$su_vienu = "Su vienu kabančiu grąžinsi $graza_su_vienu";
$su_dviem = "Su dviem kabančiais grąžinsi $graza_su_dviem";
?>
<!DOCTYPE htm>
<html>
    <head>
        <title>Švarus, bet šūdinas kodas</title>
    </head>
    <body>
        <h1><?php print $pavadinimas; ?></h1>
        <h3><?php print $skola_txt; ?></h3>
        <h3><?php print $su_vienu; ?></h3> 
        <h3><?php print $su_dviem; ?></h3> 
    </body>
</html>