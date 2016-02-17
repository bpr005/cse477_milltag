<?php
require __DIR__ . "/../../vendor/autoload.php";

/** @file
 * @brief Empty unit testing template
 * @cond 
 * @brief Unit tests for the class 
 */
class SteampunkTest extends \PHPUnit_Framework_TestCase
{
	const SEED = 1422668587;
	public function test_construct() {
		$steampunk = new Steampunk\Steampunk(self::SEED);
		$this->assertInstanceOf("Steampunk\Steampunk", $steampunk);
	}
	public function test_check1() {
		$steampunk = new Steampunk\Steampunk(self::SEED);
		$steampunk->newGame(5);
		$this->assertEquals(5, $steampunk->getGameSize());
		$this->assertEquals(5, $steampunk->getGridSize());

		$steampunk->newGame(6);
		$this->assertEquals(6, $steampunk->getGameSize());
		$this->assertEquals(6, $steampunk->getGridSize());


		$steampunk->newTurn("Cam");
		$this->assertEquals("Cam", $steampunk->getCurrentPlayer());

		$steampunk->newTurn("Bonnie");
		$this->assertEquals("Bonnie", $steampunk->getCurrentPlayer());

		$steampunk->addPipe("tee-esw", 1,2);
		$this->assertEquals("tee-esw", $steampunk->getTileContents(1,2));
	}

}


/// @endcond
?>
