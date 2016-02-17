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

        /*if(isset($post['clear'])) {
            $this->reset = true;
        }
        elseif(isset($post['value'])) {
            $value = strip_tags($post['value']);
            $this->guessing->guess($value);
        }*/
    }

    /*** Control Functions ***/


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