<?php
$h1 = 'We are sons of Prince of Nigeria';
$h2 = 'How it works?';
$background_no = rand(1, 2);
$laikas = date('s');

$story_no = rand(1, 3);

$story_1 = 'We are offering a life changing experience withhelp of our Kiausarukalas!';
$story_2 = 'Give us a small advance payment to help cover the expense of Kiausarukalas spin.';
$story_3 = 'Wait for Kiausrakulas to give you best solution what to do with the testicles.';
if ($background_no == 1) {
    $about_class = 'about_us_1';
} else {
    $about_class = 'about_us_2';
}

if ($laikas <= 10) {
    $story = $story_1;
} elseif ($laikas <= 20) {
    $story = $story_2;
} elseif ($laikas <= 30) {
    $story = $story_3;
} elseif ($laikas <= 40) {
    $story = $story_1;
} elseif ($laikas <= 50) {
    $story = $story_2;
} else {
    $story = $story_3;
}
?>
<html>
    <head>
        <title>Price Of Nigeria</title>
        <link rel = "stylesheet" href = "../../assets/css/style.css">
    </head>
    <body class ="<?php print $about_class; ?>">
        <header>
            <ul class ="header_menu">
                <li><a href="../../index.php">Home</a></li>
                <li><a href="#">About Us</a></li>
                <li><a href="moneyball.php">Moneyball</a></li>
                <li><a href="contacts.php">Contacts</a></li>
            </ul>
        </header>
        <main>
            <h1 class="highlight"><?php echo $h1; ?></h1>
            <h2 class="highlight"><?php echo $h2; ?></h2>
            <p class="highlight"><?php echo $story; ?></p>
        </main>
    </body>
</html>
