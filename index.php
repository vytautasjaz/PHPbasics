<html>
    <head>
        <title>PHP lydės ir <?php print date('Y-m-d', strtotime('+1 day')) . '!'; ?></title>
    </head>
    <body>
        <h1>
            <b>Vytautas</b> - PHP su manim buvo ir <?php print date('H', strtotime('-1 hour')) . ' valandą'; ?>
        </h1> 
        <p> 
            <?php print date('Y', strtotime('+1 year')); ?> ne už kalnų!
        </p>       
    </body>
</html>