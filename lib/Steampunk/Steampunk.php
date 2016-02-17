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
        $this->grid = array();

        for ($x=0; $x < $size; $x++) {
            $this->grid[] = array();

        }
    }

    public function setPlayer1($player1) {
        $this->player1 = $player1;
    }
    public function setPlayer2($player2) {
        $this->player2 = $player2;
    }
    public function getCurrentPlayer() {
        return $this->currentPlayer;
    }

    // Added by BR for use in the SteampunkView class. This comment can be deleted.
    public function getGameSize() {
        return $this->gameSize;
    }

    public function getGridSize() {
        return count($this->grid);
    }

    public function newTurn($s){
        $this->currentPlayer = $s;
    }

    public function addPipe($pipeType, $x, $y) {
        $this->grid[$x][$y] = $pipeType;
    }
    public function getTileContents($x, $y) {
        return $this->grid[$x][$y];

    }

    private $gameSize; // BR: Cam, what is your plan for this variable? An integer since we only have square grids?
    private $currentPlayer;
    private $player1;
    private $player2;

    const GAME_WIN = 1; //might need this for game winning?
    private $grid = array(); //store the grid as an array of arrays


}