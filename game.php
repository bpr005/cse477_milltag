<?php
require 'lib/steampunk.inc.php';
$view = new Steampunk\SteampunkView($steampunk)

/**
 * Created by PhpStorm.
 * User: Bonnie Reiff
 * Project 1: Steampunked
 * Class: game.php (Main Gameplay Page for the Steampunked game)
 */
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <link href="gameStylesheet.css" type="text/css" rel="stylesheet" />
        <title>Steampunked</title>
    </head>

    <!-- A gameplay page -->
    <!-- TODO: all inline PHP should be moved to a separate View class -->
    <!-- TODO: tests need to be added to all HTML and checks need to be added to check for valid input -->

    <!-- TODO: header tag here with the Steampunked game image -->

    <body>
        <?php echo $view->gridHtml(); ?>
    </body>
</html>
