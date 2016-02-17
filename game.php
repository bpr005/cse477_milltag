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
                        <p><img src="images/gauge-top-0.png" width="50" height="50" alt="Top Gauge"></p>
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
                        <p><img src="images/gauge-0.png" width="50" height="50" alt="Base Gauge"></p>
                    </div>
                </div>
                <div class="row">
                    <div class="cell">
                        <p><img src="images/valve-closed.png" width="50" height="50" alt="Closed Valve"></p>
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
            <p class="pageText">Milltag, it is your turn!</p>
            <div class="radioButtons">
                <label for="option1">
                    <img src="images/ninety-es.png" width="50" height="50" alt="Pipe Option 1">
                </label>
                <input type="radio" name="pipeOption" id="1">
                <label for="option2">
                    <img src="images/straight-h.png" width="50" height="50" alt="Pipe Option 2">
                </label>
                <input type="radio" name="pipeOption" id="2">
                <label for="option3">
                    <img src="images/tee-esw.png" width="50" height="50" alt="Pipe Option 3">
                </label>
                <input type="radio" name="pipeOption" id="3">
                <label for="option4">
                    <img src="images/ninety-es.png" width="50" height="50" alt="Pipe Option 4">
                </label>
                <input type="radio" name="pipeOption" id="4">
                <label for="option5">
                    <img src="images/cap-s.png" width="50" height="50" alt="Pipe Option 5">
                </label>
                <input type="radio" name="pipeOption" id="5">
            </div>
            <div class="buttons">
                <input type="submit" value="Rotate" name="rotate" id="rotate">
                <input type="submit" value="Discard" name="discard" id="discard">
                <input type="submit" value="Open Valve" name="openValve" id="openValve">
                <input type="submit" value="Give Up" name="giveUp" id="giveUp">
            </div>
        </form>
    </body>
</html>
