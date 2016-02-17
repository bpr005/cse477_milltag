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
	public function test_creategame() {
		$steampunk = new Steampunk\Steampunk(self::SEED);
		$steampunk->newGame(5);
		$this->assertEquals(5, $steampunk->getGameSize());
		$this->assertEquals(5, $steampunk->getGridSize());

		$steampunk->newGame(6);
		$this->assertEquals(6, $steampunk->getGameSize());
		$this->assertEquals(6, $steampunk->getGridSize());

	}
	public function test_player_functionality() {

		$steampunk = new Steampunk\Steampunk(self::SEED);

		$steampunk->newTurn("Cam");
		$this->assertEquals("Cam", $steampunk->getCurrentPlayer());
		$steampunk->newTurn("Bonnie");
		$this->assertEquals("Bonnie", $steampunk->getCurrentPlayer());

		$steampunk->setPlayer1("Max");
		$steampunk->setPlayer2("Bonnie");
		$this->assertEquals("Max", $steampunk->getPlayer1());
		$this->assertEquals("Bonnie", $steampunk->getPlayer2());
		$steampunk->newTurn("Max");
		$this->assertEquals("Max", $steampunk->getCurrentPlayer());
		$steampunk->alternatePlayer();
		$this->assertEquals("Bonnie", $steampunk->getCurrentPlayer());
		$steampunk->alternatePlayer();
		$this->assertEquals("Max", $steampunk->getCurrentPlayer());
	}
	public function test_grid() {

		$steampunk = new Steampunk\Steampunk(self::SEED);
		$steampunk->newGame(6);

		$this->assertEquals(6, $steampunk->getGameSize());

		//diagonally checking to make sure we have a 6 by 6 grid
		$steampunk->addPipe("tee-esw", 1,1);
		$this->assertEquals("tee-esw", $steampunk->getTileContents(1,1));
		$steampunk->addPipe("cap-e", 2, 2);
		$this->assertEquals("cap-e", $steampunk->getTileContents(2, 2));
		$steampunk->addPipe("cap-n", 3, 3);
		$this->assertEquals("cap-n", $steampunk->getTileContents(3,3));
		$steampunk->addPipe("gauge-0", 4,4);
		$this->assertEquals("gauge-0", $steampunk->getTileContents(4,4));
		$steampunk->addPipe("leak-e", 5,5);
		$this->assertEquals("leak-e", $steampunk->getTileContents(5,5));
		$steampunk->addPipe("ninety-es", 6,6);
		$this->assertEquals("ninety-es", $steampunk->getTileContents(6,6));

	}

}


/// @endcond
?>
