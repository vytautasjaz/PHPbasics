<?php
$speed_of_sound = 333; // m/s
$max_db = 120; // dB
$db_decr = 6; // dB

$h1 = 'Griaustinio zona';
?>
<html>
    <body>
        <h1><?php print $h1; ?></h1>
        <?php
        for ($dist = 1; $dist < 10000; $dist *= 2):
            $sec = round($dist / $speed_of_sound);
            $db = $max_db - ($sec * $db_decr);
            $atsakymas="Po $sec ($dist) m: $db";
            ?>
            <p><?php print $atsakymas; ?></p>
        <?php endfor; ?>
    </body>
</html> 