<?php
$bool = true;
$int = 1;
$str = '1';
$str_1 = "1.23";
$flt = 1.23;


if ($bool === $int) {
    $atsakymas_1 = 'Identiški';
} elseif ($bool == $int) {
    $atsakymas_1 = 'Lygūs';
}

if ($str === $bool) {
    $atsakymas_2 = 'Identiški';
} elseif ($str == $bool) {
    $atsakymas_2 = 'Lygūs';
}

if ($flt === $str_1) {
    $atsakymas_3 = 'Identiški';
} elseif ($flt == $str_1) {
    $atsakymas_3 = 'Lygūs';
}

$li_1 = "Bool (true) ir integer (1): $atsakymas_1";
$li_2 = "String (1) ir Boolean (1): $atsakymas_2";
$li_3 = "Float (1.23) ir String (1.23): $atsakymas_3";
?>
<html>
    <head>
        <title> Lygūs ar Identiški</title>
    </head>
    <body>
        <ul>
            <li><?php print $li_1; ?></li>
            <li><?php print $li_2; ?></li>
            <li><?php print $li_3; ?></li>

        </ul>
    </body>
</html>