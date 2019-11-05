<?php
$kates = rand(1, 3);
$sunys = rand(1, 3);
$katasunis = 0;

for ($x = 0; $x < $kates; $x++) {
    for ($y = 0; $y < $sunys; $y++) {
        if ($pavyko = rand(0,1)) {
            $katasunis++;
            break;
        }
    }
}

$h1 = "Katašunių išeiga";
$h2 = "Dalyvavo $kates katės ir $sunys šunys";
$h3 = "Katašunių išeiga: $katasunis";
?>
<html>
    <head>
        <title>Ciklai</title>
    </head>
    <body>
        <h1><?php print $h1 ?></h1>
        <h2><?php print $h2 ?></h2>
        <h3><?php print $h3 ?></h3>
    </body>
</html>