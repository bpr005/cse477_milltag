<?php

/**
 * Created by PhpStorm.
 * User: Bonnie Reiff
 * Project 1: Steampunked
 * Class: SteampunkView
 */

namespace Steampunk;


class SteampunkView
{

    /**
     * SteampunkView constructor.
     * @param Steampunk $steampunk, the Steampunk model object
     */
    public function __construct(Steampunk $steampunk) {
        $this->steampunk = $steampunk;
    }

    /**
     * TODO: Description
     * @return string
     */
    public function gridHtml() {
        // Obtain the width/height of the grid from the Steampunk model object
        $gameSize = $this->steampunk->getGameSize();
        // Generate the HTML for the grid
        $htmlText = $this->formGridHtml($gameSize) . $this->formButtons();

        return $htmlText;
    }

    /**
     * TODO: Description
     * @param $gridSize
     * @return string
     */
    private function formGridHtml($gridSize) {
        $html = "";


        return $html;
    }

    /**
     * TODO: Description
     * @return string
     */
    private function formButtons() {
        $html = "";

        return $html;
    }

    /* Private member data */

    private $steampunk; // The Steampunk object (instance of the model class)

}