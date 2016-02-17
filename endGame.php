<?php
require 'lib/steampunk.inc.php';
$header = new Steampunk\HeaderView();
$view = new Steampunk\SteampunkView($steampunk);

/**
 * Created by PhpStorm.
 * User: Bonnie Reiff
 * Project 1: Steampunked
 * Class: endGame.php (Win/Lose Page for the Steampunked game)
 */
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <link href="headerStylesheet.css" type="text/css" rel="stylesheet" />
        <link href="gameStylesheet.css" type="text/css" rel="stylesheet" />
        <title>Steampunked</title>
    </head>

    <!-- A page to announce the end of the game and to indicate the winner/loser -->
    <!-- TODO: all inline PHP should be moved to a separate View class -->
    <!-- TODO: tests need to be added to all HTML and checks need to be added to check for valid input -->

    <body>
        <!-- TODO: header tag here with the Steampunked game image -->
        <?php echo $header->presentHeader(); ?>
        <?php echo $view->gridHtml(); ?>
    </body>
</html>
