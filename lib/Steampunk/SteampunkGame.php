<?php

/**
 * Created by PhpStorm.
 * User: Cam
 * Date: 2/9/16
 * Time: 3:51 PM
 */
class Steampunk
{
    private $gameSize;
    private $currentPlayer;
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
    public function newTurn($s){
        $this->currentPlayer = $s;
    }
}