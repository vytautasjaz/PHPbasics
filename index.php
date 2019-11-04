<?php
$grizai_velai = rand(0, 1);
$grizai_isgeres = rand(0, 1);

if ($grizai_velai && !$grizai_isgeres) {
    $situacija = 'Grįžai vėlai';
    $miegosi = true;
} elseif ($grizai_velai && $grizai_isgeres) {
    $situacija = 'Grįžai vėlai ir išgėręs';
    $miegosi = false;
} elseif (!$grizai_velai && $grizai_isgeres) {
    $situacija = 'Grįžai išgėręs';
    $miegosi = true;
} elseif (!$grizai_velai && !$grizai_isgeres) {
    $situacija = 'Nieko nepadarei';
    $miegosi = true;
}

if ($miegosi) {
    $miegosi = 'Miegosi';
    $pic = 'https://previews.123rf.com/images/bowie15/bowie151312/bowie15131200081/39899614-happy-oldies.jpg';
} else {
    $miegosi = 'Nemiegosi';
    $pic = 'http://farm1.static.flickr.com/139/389088480_51d5854c64.jpg';
}

$h1 = 'Buitinė skaičiuoklė';
$h2 = "Situacija: $situacija";
$h3 = "Išvada: $miegosi ant sofos";
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
        <h3><?php print $h3; ?></h3>
        <img src="<?php print $pic ?>"

    </body>
</html>