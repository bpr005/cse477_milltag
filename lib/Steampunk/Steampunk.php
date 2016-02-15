<?php

/**
 * Created by PhpStorm.
 * User: Cam
 * Date: 2/9/16
 * Time: 3:51 PM
 */

namespace Steampunk;

class Steampunk
{

    public function __construct($seed = null) {
        if($seed === null) {
            $seed = time();
        }

        srand($seed);
    }

    public function newGame($size) {
        $this->gameSize = $size;
    }

    public function getCurrentPlayer() {
        return $this->currentPlayer;
    }

    // Added by BR for use in the SteampunkView class. This comment can be deleted.
    public function getGameSize() {
        return $this->gameSize;
    }

    public function newTurn($s){
        $this->currentPlayer = $s;
    }

    private $gameSize; // BR: Cam, what is your plan for this variable? An integer since we only have square grids?
    private $currentPlayer;
}