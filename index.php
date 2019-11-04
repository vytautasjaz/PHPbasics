<?php
$grizai_velai = rand(0, 1);
$grizai_isgeres = rand(0, 1);

if ($grizai_velai && !$grizai_isgeres) {
    $h2 = 'Grįžai vėlai';
} elseif ($grizai_velai && $grizai_isgeres) {
    $h2 = 'Grįžai vėlai ir išgėręs';
} elseif (!$grizai_velai && $grizai_isgeres) {
    $h2 = 'Grįžai išgėręs';
} else {
    $h2 = 'Nieko nepadarei';
}

$h1 = 'Buitinė skaičiuoklė';
$title = $h1;
?>
<!DOCTYPE htm>
<html>
    <head>
        <title><?php print $title; ?></title>
    </head>
    <body>
        <h1><?php print $h1; ?></h1>
        <h2><?php print $h2; ?></h2>
    </body>
</html>