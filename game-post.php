<?php
/**
 * Created by PhpStorm.
 * User: Max
 * Date: 2/16/2016
 * Time: 9:05 PM
 */

require 'lib/steampunk.inc.php';
$controller = new \Steampunk\SteampunkController($steampunk, $_POST);



header('location: ' . $controller->getNextPage());
?>