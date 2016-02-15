<?php

/**
 * Created by PhpStorm.
 * User: Bonnie Reiff
 * Project 1: Steampunked
 * Class: steampunk.inc.php
 */

require __DIR__ . "/../vendor/autoload.php";

// Start the PHP session system (finds an existing session associated with the client or creates a new one)
session_start();

define("STEAMPUNK_SESSION", 'steampunk');

// If there is an active session, use that. Otherwise, create one.
if(!isset($_SESSION[STEAMPUNK_SESSION])) {
    $_SESSION[STEAMPUNK_SESSION] = new Steampunk\Steampunk();   // Seed: 1422668587
}

$steampunk = $_SESSION[STEAMPUNK_SESSION];