<html>
    <head>
        <title>Bomba</title>
        <style>
            body {
                display:flex;
                flex-direction:column;
                align-items:center;
            }
            .bomba {
                height: <?php print date('s'); ?>px;
                width: <?php print date('s'); ?>px;
                background-image: url("https://mpng.pngfly.com/20180802/esc/kisspng-vector-graphics-explosion-clip-art-bomb-image-5b63381813fbc0.4716718515332290800819.jpg");
                background-size:cover;
            }

            .sekundes {
                text-align: center;
            }   
        </style>
    </head>

    <body>
        <div class="bomba"></div>
        <div class="sekundes"><?php print date('s') ?> </div>
    </body>
</html>