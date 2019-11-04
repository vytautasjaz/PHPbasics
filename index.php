<?php
$sunny = (bool) rand(0, 1);

if ($sunny) {
    $img = 'https://icons-for-free.com/iconfiles/png/512/sunny+temperature+weather+icon-1320196637430890623.png';
    $p1 = 'Saulėta';
} else {
    $img = 'https://icons-for-free.com/iconfiles/png/512/cloudy+fog+foggy+weather+icon-1320196634478143974.png';
    $p1 = 'Debesuota';
}
?>
<!DOCTYPE htm>
<html>
    <head>
        <style>
            body {
                display: flex;
                justify-content: center;
                align-items: center;
            }
        </style>
        <title>Orų prognozė</title>
    </head>
    <body>
        <img src="<?php print $img; ?>"</img>
        <p><?php print $p1; ?>
    </body>
</html>