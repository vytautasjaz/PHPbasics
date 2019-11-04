<?php
$sekundė = date('s');

if ($sekundė % 2) {
    $klase = 'kvadratas';
} else {
    $klase = 'apskritimas';
}
?>
<html>
    <head>
        <style>
            div {
                display: flex;
                justify-content: center;
                align-items: center;
                height: 300px;
                width: 300px;
                border-collapse: collapse;
                background-color: red;
            }

            .kvadratas {
                border-radius: 0px;
            }
            .apskritimas{
                border-radius: 150px;
            }

        </style>
        <title> Sekundės</title>
    </head>
    <body>
        <div class="<?php print $klase; ?>">
            <?php print $sekundė; ?></div>
    </body>
</html>