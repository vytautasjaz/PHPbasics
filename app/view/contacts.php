<?php
$h1 = "Contact Us, white trash!";
$member_number = rand(1111111, 9999999);
$number_start = '+3706';
$li_contact_1 = "Musa Jadesola Oluwakemi";
$li_contact_2 = "Kayode Iyalla";
$li_contact_3 = "Damilola Nnamdi Olaoluwa";
$li_contact_4 = "Emmanuel Wasiu";
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
                <li><a href="moneyball.php">Moneyball</a></li>
                <li><a href="#">Contacts</a></li>
            </ul>
        </header>
        <main>
            <h1><?php print $h1; ?></h1>
            <img src="../../assets/images/map.jpg">
            <ul>
                <li><?php print $li_contact_1 . ' ' . $number_start . $member_number; ?></li>
                <li><?php print $li_contact_2 . ' ' . $number_start . $member_number; ?></li>
                <li><?php print $li_contact_3 . ' ' . $number_start . $member_number; ?></li>
                <li><?php print $li_contact_4 . ' ' . $number_start . $member_number; ?></li>
            </ul>
        </main>
    </body>
</html>
