<?php
require __DIR__ . "/../../vendor/autoload.php";

/** @file
 * @brief Testing class for SteampunkView class
 * @cond 
 * @brief Unit tests for the class 
 */

class SteampunkViewTest extends \PHPUnit_Framework_TestCase
{
	const SEED = 1422668587;

    /**
     * Asserts that the SteampunkView class constructs without error
     */
    public function test_construct() {
        $steampunk = new Steampunk\Steampunk(self::SEED);
        $view = new Steampunk\SteampunkView($steampunk);

        $this->assertInstanceOf('Steampunk\SteampunkView', $view);
    }

    /**
     * Checks the HTML output of the gridHtml function
     *  (a) Asserts that a game grid of the correct size is created
     *  (b) Asserts that all buttons are created
     */
    public function test_formHtml() {

        $steampunk = new Steampunk\Steampunk(self::SEED);
        $view = new Steampunk\SteampunkView($steampunk);

        // Call the formHtml function to obtain the Html for the initial game state (no moves have been made)
        $html = $view->formHtml();

        /* Check that the grid is of the correct size */
        $gridSize = $steampunk->getGameSize();
        // Obtain and check the number of times the "row" class is used in the HTML
        $rows = substr_count('div class="row"', $html);
        $this->assertEquals($gridSize, $rows);
        // Obtain and check the number of times the "cell" class is used in the HTML
        $cells = substr_count('div class="cell"', $html);
        if ($rows != 0) // Avoid a divide by zero error
        {
            $columns = $cells / $rows;
            $this->assertEquals($gridSize, $columns);
        } else { // Print error message to display the issue to the user
            $this->assertNotEquals(0, $rows, "Number of rows is equal to 0!");
        }

        /* Check for the presence of at least one valve and gauge (should positioning be checked as well?) */

        /* Check that the 4 required buttons are created */
        $this->assertContains('div class="buttons"', $html);
        $this->assertContains('input type="submit" value="Rotate" name="rotate" id="rotate"', $html);
        $this->assertContains('input type="submit" value="Discard" name="discard" id="discard"', $html);
        $this->assertContains('input type="submit" value="Open Valve" name="openValve" id="openValve"', $html);
        $this->assertContains('input type="submit" value="Give Up" name="giveUp" id="giveUp"', $html);
        
    }
}

/// @endcond
?>
