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
     * TODO: Description
     */
    public function test_presentHeader() {

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
