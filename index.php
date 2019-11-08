<?php
$member_class = rand(1, 4);

if ($member_class == 1) {
    $member = 'Musa Jadesola Oluwakemi';
} elseif ($member_class == 2) {
    $member = 'Kayode Iyalla';
} elseif ($member_class == 3) {
    $member = 'Damilola Nnamdi Olaoluwa';
} elseif ($member_class == 4) {
    $member = 'Emmanuel Wasiu';
}
?>
<html>
    <head>
        <title>Price Of Nigeria</title>
        <link rel = "stylesheet" href = "assets/css/style.css">
    </head>
    <body>
        <header>
            <ul class ="header_menu">
                <li><a href="#">Home</a></li>
                <li><a href="app/view/about.php">About Us</a></li>
                <li><a href="app/view/moneyball.php">Moneyball</a></li>
                <li><a href="app/view/contacts.php">Contacts</a></li>
            </ul>
        </header>
        <main>
            <div class="member member_<?php print $member_class; ?>"></div>
            <h2>Your destiny will be decided by <h1><?php print $member; ?></h1></h2>
        </main>
    </body>
</html>