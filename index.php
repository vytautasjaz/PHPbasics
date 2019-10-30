<html>
    <head>
        <title>Užduotis 8</title>
        <style>
            body {
                background-color:rgb(<?php print rand(0, 255) . ',' . rand(0, 255) . ',' . rand(0, 255); ?>);
            } 

            h1 {
                font-size:<?php print rand(10, 50); ?>px;
            }

            p {
                color:rgb(<?php print rand(0, 255) . ', ' . rand(0, 255) . ', ' . rand(0, 255); ?>);
            }
        </style>
    </head>
    <body>
        <h1> Aš keičiu savo dydį!</h1>
        <p> Aš keičiu savo spalvą!</p>
    </body>
</html>