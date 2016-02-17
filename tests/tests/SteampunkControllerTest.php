<?php
require __DIR__ . "/../../vendor/autoload.php";

/** @file
 * @brief Empty unit testing template
 * @cond 
 * @brief Unit tests for the class 
 */
use Steampunk\SteampunkController as Controller;
use Steampunk\Steampunk as Steampunk;

class SteampunkControllerTest extends \PHPUnit_Framework_TestCase
{
	const SEED = 1422668587;

	/**
	 * Tests the Constructor
	 */
	public function test_constructor() {
		$steampunk = new Steampunk(self::SEED);
		$controller = new Controller($steampunk, array());

		$this->assertInstanceOf('Steampunk\SteampunkController', $controller);
		$this->assertEquals('game.php', $controller->getNextPage());
	}

	public function test_rotatePiece(){
		$steampunk = new Steampunk(self::SEED);
		$controller = new Controller($steampunk, array('rotate' => 'Rotate',
													   '' => 'on'));

		$this->assertEquals('game.php', $controller->getNextPage());
	}

	public function test_discardPiece(){
		$steampunk = new Steampunk(self::SEED);
		$controller = new Controller($steampunk, array('discard' => 'Discard',
													   '' => 'on'));

		$this->assertEquals('game.php', $controller->getNextPage());
	}

	public function test_openValve(){
		$steampunk = new Steampunk(self::SEED);
		$controller = new Controller($steampunk, array('openValve' => 'Open Valve'));

		$this->assertEquals('endGame.php', $controller->getNextPage());
	}

	public function test_giveUp(){
		$steampunk = new Steampunk(self::SEED);
		$controller = new Controller($steampunk, array('giveUp' => 'Give Up'));

		$this->assertEquals('endGame.php', $controller->getNextPage());
	}
}

/// @endcond
?>
