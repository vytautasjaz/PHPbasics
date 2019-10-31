<?php
$sudas_1 = (rand(1, 100));
$sudas_2 = (rand(101, 200));
$sudas_3 = (rand(201, 300));
$sudas_4 = (rand(301, 400));
$sudas_1_txt = "Jei paėmei $sudas_1 jievrų";
$sudas_2_txt = "Su vienu kabančiu grąžinsi $sudas_2";
$sudas_3_txt = "Su dviem kabančiais grąžinsi $sudas_3";
?>
<!DOCTYPE htm>
<html>
    <head>
        <title>Švarus, bet šūdinas kodas</title>
    </head>
    <body>
        <h1>Skolos skaičiuoklė</h1>
        <h3><?php print $sudas_1_txt; ?></h3>
        <h3><?php print $sudas_3_txt; ?></h3> 
        <h3><?php print $sudas_2_txt; ?></h3> 
    </body>
</html>