<?php

/** @file
 * @brief Empty unit testing template
 * @cond 
 * @brief Unit tests for the class 
 */
class SteampunkTest extends \PHPUnit_Framework_TestCase
{
	const SEED = 1422668587;
	public function test_constructorCheckpoint() {
		$steampunkGame = new Steampunk(self::SEED);
		$this->assertInstanceOf('SteampunkGame\Steampunk', $steampunkGame);


	}
}

/// @endcond
?>
