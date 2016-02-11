<?php
require __DIR__ . "/../../vendor/autoload.php";

/** @file
 * @brief Empty unit testing template
 * @cond 
 * @brief Unit tests for the class 
 */
class SteampunkGameTest extends \PHPUnit_Framework_TestCase
{
	const SEED = 1422668587;
	public function test_constuct() {
		$steampunkGame = new SteampunkGame(self::SEED);
		$this->assertInstanceOf('SteampunkGame', $steampunkGame);


	}
}

/// @endcond
?>
