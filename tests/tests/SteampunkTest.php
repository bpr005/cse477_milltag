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
		$steampunk = new Steampunk(self::SEED);
		$this->assertInstanceOf('Steampunk', $steampunk);


	}
}

/// @endcond
?>
