<?php
require 'lib/steampunk.inc.php';
$header = new Steampunk\HeaderView();
$view = new Steampunk\SteampunkView($steampunk);

/**
 * Created by PhpStorm.
 * Team Milltag
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
    <?php echo $header->presentHeader(); ?>
    <?php /* echo $view->formHtml(); */ ?>
    <!-- Trial HTML: To be moved into the View class after the checkpoint -->
    <form method="post" action="game-post.php">
        <div class="game">
            <div class="row">
                <div class="cell">
                    <p><img src="images/valve-closed.png" width="50" height="50" alt="Closed Valve"></p>
                </div><div class="cell">
                    <p><img src="images/straight-h.png" width="50" height="50" alt="Pipe"></p>
                </div><div class="cell">
                    <p><img src="images/leak-w.png" width="50" height="50" alt="Pipe"></p>
                </div><div class="cell">

                </div><div class="cell">

                </div><div class="cell">
                    <p><img src="images/gauge-top-0.png" width="50" height="50" alt="Top Gauge"></p>
                </div>
            </div>
            <div class="row">
                <div class="cell">

                </div><div class="cell">

                </div><div class="cell">

                </div><div class="cell">

                </div><div class="cell">

                </div><div class="cell">
                    <p><img src="images/gauge-0.png" width="50" height="50" alt="Base Gauge"></p>
                </div>
            </div>
            <div class="row">
                <div class="cell">

                </div><div class="cell">

                </div><div class="cell">

                </div><div class="cell">

                </div><div class="cell">

                </div><div class="cell">

                </div>
            </div>
            <div class="row">
                <div class="cell">

                </div><div class="cell">

                </div><div class="cell">

                </div><div class="cell">

                </div><div class="cell">

                </div><div class="cell">
                    <p><img src="images/gauge-top-190.png" width="50" height="50" alt="Top Gauge"></p>
                </div>
            </div>
            <div class="row">
                <div class="cell">

                </div><div class="cell">
                    <img src="images/cap-e.png" width="50" height="50" alt="Pipe Option 3">
                </div><div class="cell">
                    <img src="images/tee-esw.png" width="50" height="50" alt="Pipe">
                </div><div class="cell">
                    <p><img src="images/straight-h.png" width="50" height="50" alt="Pipe"></p>
                </div><div class="cell">
                    <p><img src="images/straight-h.png" width="50" height="50" alt="Pipe"></p>
                </div><div class="cell">
                    <p><img src="images/gauge-190.png" width="50" height="50" alt="Base Gauge"></p>
                </div>
            </div>
            <div class="row">
                <div class="cell">
                    <p><img src="images/valve-open.png" width="50" height="50" alt="Closed Valve"></p>
                </div><div class="cell">
                    <p><img src="images/straight-h.png" width="50" height="50" alt="Pipe"></p>
                </div><div class="cell">
                    <p><img src="images/ninety-wn.png" width="50" height="50" alt="Pipe"></p>
                </div><div class="cell">

                </div><div class="cell">

                </div><div class="cell">

                </div>
            </div>
        </div>
        <p class="pageText">Milltag, you have won!</p>
        <div class="buttons">
            <input type="submit" value="New Game" name="newGame" id="newGame">
        </div>
    </form>
    </body>
</html>
