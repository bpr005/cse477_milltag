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

    public function presentHeader() {
        $html = "";

        return $html;
    }

    public function gridHtml() {
        // Obtain the width/height of the grid from the Steampunk model object
        $gameSize = $this->steampunk->getGameSize();
        // Generate the HTML for the grid
        $htmlText = $this->formGridHtml($gameSize) . $this->formButtons();

        return $htmlText;
    }

    private function formGridHtml($gridSize) {
        $html = "";


        return $html;
    }

    private function formButtons() {
        $html = "";

        return $html;
    }

    /* Private member data */

    private $steampunk; // The Steampunk object (instance of the model class)

}