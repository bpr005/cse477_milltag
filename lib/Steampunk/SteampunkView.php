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
     * Creates the HTML for the entire form on the Steampunked gameplay page
     * @return string, the generated HTML code
     */
    public function formHtml() {
        // Obtain the width/height of the grid from the Steampunk model object
        $gameSize = $this->steampunk->getGameSize();
        // Obtain player turn information from the Model
        $turnHtml = "<p></p>";
        // Generate the HTML for the grid
        $htmlText = $this->gridHtml($gameSize) . $turnHtml . $this-> radioHtml() . $this->buttonsHtml();

        return $htmlText;
    }

    /**
     * TODO: Description
     * @param $gridSize, an integer indicating the number of cells in each dimension of rhe grid
     * @return string, the generated HTML code
     */
    private function gridHtml($gridSize) {
        $html = "";


        return $html;
    }

    /**
     * TODO: Description
     * @return string, the generated HTML code
     */
    private function radioHtml() {
        $html = "";

        return $html;
    }

    /**
     * TODO: Description
     * @return string, the generated HTML code
     */
    private function buttonsHtml() {
        $html = "";

        return $html;
    }

    /* Private member data */

    private $steampunk; // The Steampunk object (instance of the model class)

}