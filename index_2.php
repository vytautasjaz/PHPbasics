<?php
$sunny = (bool) rand(0, 1);
$rainy = (bool) rand(0, 1);

if ($sunny) {
    if ($sunny && $rainy) {
        $oras = 'saule_su_lietum';
        $oras_text = 'Saulėta su lietum';
    } elseif ($sunny && !$rainy) {
        $oras = 'saule_be_lietaus';
        $oras_text = 'Saulėta be lietaus';
    }
} elseif (!$sunny) {
    if (!$sunny && $rainy) {
        $oras = 'debesuota_su_lietum';
        $oras_text = 'Debesuota su lietum';
    } elseif (!$sunny && !$rainy) {
        $oras = 'debesuota_be_lietaus';
        $oras_text = 'Debesuota be lietaus';
    }
}
?>
<html>
    <head>
        <style>
            body {
                display:flex;
                align-items:center;
                height: 100px;
            }
            div {                
                height: 75px;
                width: 75px;
                margin: 15px;
                background-size: cover;
            }
            
            .saule_su_lietum {
                background: url('https://image.flaticon.com/icons/svg/365/365225.svg');
            }
            .saule_be_lietaus {
                background: url('https://image.flaticon.com/icons/svg/365/365237.svg');
            }
            .debesuota_su_lietum {
                background: url('https://image.flaticon.com/icons/svg/365/365226.svg');
            }
            .debesuota_be_lietaus {
                background: url('https://image.flaticon.com/icons/svg/382/382564.svg');
            }
        </style>
        <title> Orų prognozė</title>
    </head>
    <body>
        <div class="<?php print $oras; ?>"></div>
        <p><?php print $oras_text; ?></p>
    </body>
</html>