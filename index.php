<?php
$speed_of_sound = 333; // m/s
$max_db = 120; // dB
$db = $max_db;
$db_decr = 6; // dB
$atsakymas = '';
$atsakymas_1 = '';
$my_position = rand(100, 5000);
$riba = 0;

$sekudes_iki_zaibo = $my_position / $speed_of_sound;


for ($dist = 1; $db > 0; $dist *= 2) {
    $sec = round($dist / $speed_of_sound);
    $db -= $db_decr;
    $atsakymas .= "Po $sec sec. ($dist m): $db db <br>";

    if ($db < 90) {
        $riba = $dist;
    }
}

if ($my_position < $riba) {
    $atsakymas_1 = 'keisiu';
} else {
    $atsakymas_1 = 'nekeisiu';
}

$h1 = 'Griaustinio zona';
$h3 = "Stovėdamas $my_position m. nuo griasutinio, $atsakymas_1 klenes(-ių)."
?>
<html>
    <body>
        <h1><?php print $h1; ?></h1>
        <p><?php print $atsakymas; ?></p>
        <p><?php print $h3; ?></p>
    </body>
</html> 