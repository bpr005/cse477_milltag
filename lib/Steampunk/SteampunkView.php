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
     * Private helper function for the formHTML function.
     * Creates all HTML for the div class "game", including the appropriate size grid,
     *   all pipe and gauge images, and the leak/steam images where the user can place new pipe.
     * @param $gridSize, an integer indicating the number of cells in each dimension of rhe grid
     * @return string, the generated HTML code
     */
    private function gridHtml($gridSize) {
        $html = "";


        return $html;
    }

    /**
     *Private helper function for the formHTML function.
     * Creates all HTML for the div class "radioButtons", including 5 radio buttons with image labels
     *   displaying the pipe options for additions to the grid.
     * @return string, the generated HTML code
     */
    private function radioHtml() {
        // Obtain a list of 5 random pipes to use as options

        $html = "";

        return $html;
    }

    /**
     * Private helper function for the formHTML function.
     * Creates all HTML for the div class "buttons", which includes 4 buttons.
     * @return string, the generated HTML code
     */
    private function buttonsHtml() {
        $html = <<<HTML
<div class="buttons">
    <input type="submit" value="Rotate" name="rotate" id="rotate">
    <input type="submit" value="Discard" name="discard" id="discard">
    <input type="submit" value="Open Valve" name="openValve" id="openValve">
    <input type="submit" value="Give Up" name="giveUp" id="giveUp">
</div>
HTML;

        return $html;
    }

    /* Private member data */

    private $steampunk; // The Steampunk object (instance of the model class)

}