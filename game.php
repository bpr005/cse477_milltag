<?php
require 'lib/steampunk.inc.php';
$header = new Steampunk\HeaderView();
$view = new Steampunk\SteampunkView($steampunk);

/**
 * Created by PhpStorm.
 * Team Milltag
 * Project 1: Steampunked
 * Class: game.php (Main Gameplay Page for the Steampunked game)
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

    <!-- A gameplay page -->
    <!-- TODO: all inline PHP should be moved to a separate View class -->
    <!-- TODO: tests need to be added to all HTML and checks need to be added to check for valid input -->

    <body>
        <?php echo $header->presentHeader(); ?>
        <?php echo $view->formHtml(); ?>
    </body>
</html>
