<?php
require 'lib/steampunk.inc.php';
$header = new Steampunk\HeaderView();
$view = new Steampunk\SteampunkView($steampunk);

/**
 * Created by PhpStorm.
 * User: Bonnie Reiff
 * Project 1: Steampunked
 * Class: index.php (Welcome Page for the Steampunked game)
 */
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <link href="headerStylesheet.css" type="text/css" rel="stylesheet" />
        <title>Welcome to Steampunked</title>
    </head>

    <!-- A welcome and new game page -->
    <!-- TODO: all inline PHP should be moved to a separate View class -->
    <!-- TODO: tests need to be added to all HTML and checks need to be added to check for valid input -->

    <body>
        <?php echo $header->presentHeader(); ?>

        <form method="post" action="welcome-post.php">
            <p>
                <label for="playerOne">Enter the name for Player 1:</label>
                <input type="text" name="playerOne" id="playerOne">
            </p>
            <p>
                <label for="playerTwo">Enter the name for Player 2:</label>
                <input type="text" name="playerTwo" id="playerTwo">
            </p>
            <p>
                <label for="gridSize">Choose the grid size for the game:</label>
                <select name="gridSize" id="gridSize">
                    <option value="six">6 x 6</option>
                    <option value="ten">10 x 10</option>
                    <option value="twenty">20 x 20</option>
                </select>
            </p>
            <p>
                <input type="submit" value="Start Game" name="newGame">
            </p>
        </form>
    </body>
</html>
