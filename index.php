<html>
    <head>
        <title>PHP lydės ir <?php print date('Y-m-d', strtotime('+' . rand(0, 10) . 'years')); ?></title>
    </head>
    <body>
        <h1><b>Vytautas</b> - Galbūt turėsiu <?php print rand(1, 5) . ' vaikus' ?></h1>
        <p>D. Trump'as nebus prezidentu <?php print date('Y', strtotime('+' . rand(2, 10) . 'years')) . date('m') . ' mėnuo, diena ' . date('d'); ?></h1>
</body>
</html>