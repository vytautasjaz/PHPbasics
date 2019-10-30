<html>
    <head>
        <title>CSS ir PHP</title>
        <style>
            .dice1 {
                background-image: url("http://dobbelsteen.virtuworld.net/img/1c.gif");
            }
            .dice2 {
                background-image: url("http://dobbelsteen.virtuworld.net/img/2c.gif");
            }
            .dice3 {
                background-image: url("http://dobbelsteen.virtuworld.net/img/3c.gif");
            }
            .dice4 {
                background-image: url("http://dobbelsteen.virtuworld.net/img/4c.gif");
            }
            .dice5 {
                background-image: url("http://dobbelsteen.virtuworld.net/img/5c.gif");
            }
            .dice6 {
                background-image: url("http://dobbelsteen.virtuworld.net/img/6c.gif");
            }
        </style>
    </head>
    <body>
        <div class="dice<?php print rand(1, 6); ?>"  style="width: 250px; height: 250px;">
    </body>
</html>