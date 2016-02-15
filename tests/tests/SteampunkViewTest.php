<?php
require __DIR__ . "/../../vendor/autoload.php";

/** @file
 * @brief Empty unit testing template
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
        $view = new Steampunk\Steampunk($steampunk);

        $this->assertInstanceOf('Steampunk\SteampunkView', $view);
    }

    /**
     * Checks the HTML output of the gridHtml function
     *  (a) Asserts that a game grid of the correct size is created
     *  (b) Asserts that all buttons are created
     */
    public function test_gridHtml() {

    }
}

/// @endcond
?>
