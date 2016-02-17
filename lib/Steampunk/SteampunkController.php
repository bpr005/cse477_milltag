<?php
/**
 * Created by PhpStorm.
 * User: Max
 * Date: 2/16/2016
 * Time: 9:01 PM
 */

namespace Steampunk;


class SteampunkController
{
    /*** Constants ***/

    /*** Constructor ***/

    /**
     * SteamPunkController constructor.
     * @param Steampunk $steampunk The Steampubk Object
     * @param $post The $_POST array
     */
    public function __construct(Steampunk $steampunk, $post) {
        $this->steampunk = $steampunk;

        var_dump($post);
        if(isset($post['rotate']) && isset($post[''])){
            $tile = strip_tags($post['']);
            $this->rotateTile($tile);
        }
        elseif(isset($post['discard']) && isset($post[''])){
            $tile = strip_tags($post['']);
            $this->discardTile($tile);
        }
        elseif(isset($post['openValve'])){
            $this->openValve();
        }
        elseif(isset($post['giveUp'])){
            $this->giveUp();
        }


    }

    /*** Control Functions ***/

    /** Performs the necessary actions to discard the selected tile
     * @param $tileIdx The index between 1 (left most) and 5 (right most) tile.
     */
    private function discardTile($tileIdx){

    }

    /** Performs the necessary actions to rotate the selected tile
     * @param $tileIdx The index between 1 (left most) and 5 (right most) tile.
     */
    private function rotateTile($tileIdx){

    }

    /**
     * The current player want's to open the valve to signal their victory.
     * Take them to the endGame page.
     */
    private function openValve(){

        $this->page = 'endGame.php';
    }

    /**
     * The current player forfeits the game. The players are then taken to
     * the end game screen.
     */
    private function giveUp(){

        $this->page = 'endGame.php';
    }

    /*** Getters ***/

    /**
     * @return string The URL of the nex page we'll go to
     */
    public function getNextPage(){
        return $this->page;
    }

    /***  Member Variables ***/

    private $steampunk;         // The Steampunk object we're controlling.
    private $page = 'game.php'; // The next page we will go to.

    //private $
}