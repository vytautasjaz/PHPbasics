<?php
$rand = rand(1, 5);

if ($rand == 1) {
    $moneyball = 'Shoot Them';
} elseif ($rand == 2) {
    $moneyball = 'Cut Them';
} elseif ($rand == 3) {
    $moneyball = 'Crush Them';
} elseif ($rand == 4) {
    $moneyball = 'Eat Them';
} elseif ($rand == 5) {
    $moneyball = 'Use As Meat In Kebab';
}
?>
<html>
    <head>
        <title>Price Of Nigeria</title>
        <link rel = "stylesheet" href = "../../assets/css/style.css">
    </head>
    <body>
        <header>
            <ul class ="header_menu">
                <li><a href="../../index.php">Home</a></li>
                <li><a href="about.php">About Us</a></li>
                <li><a href="#">Moneyball</a></li>
                <li><a href="contacts.php">Contacts</a></li>
            </ul>
        </header>
        <main>
            <h1>If Nigerian princes gang stops you on the road what will they do with your testicles?</h1>
            <h2>Prepare yourself!</h2>
            <div class="moneyball">
                <p class="moneyball_text"><?php print $moneyball; ?></p>
            </div>
        </main>
    </body>
</html>