<?php

/**
 * Created by PhpStorm.
 * Team Milltag
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
        // TODO: Obtain player turn information from the Model
        $turnHtml = '<p class="pageText">Milltag, it is your turn!</p>';
        // Generate the HTML for the form
        $htmlText = '<form method="post" action="game-post.php">';
        $htmlText .= $this->gridHtml($gameSize) . $turnHtml . $this->radioHtml() . $this->buttonsHtml();
        $htmlText .= '</form>';

        return $htmlText;
    }

    /**
     * Private helper function for the formHTML function.
     * Creates all HTML for the div class "game", including the appropriate size grid,
     *   all pipe and gauge images, and the leak/steam images where the user can place new pipe.
     * TODO: add logic for the creation of the grid and the placement of valves and gauges to be based on gridSize
     * TODO: add logic to base the Tile/cell contents off of the Model
     * @param $gridSize, an integer indicating the number of cells in each dimension of rhe grid
     * @return string, the generated HTML code
     */
    private function gridHtml($gridSize) {
        $html = <<<HTML
<div class="game">
    <div class="row">
        <div class="cell">
            <p><img src="images/valve-closed.png" width="50" height="50" alt="Closed Valve"></p>
        </div><div class="cell">
            <p><img src="images/straight-h.png" width="50" height="50" alt="Pipe"></p>
        </div><div class="cell">
            <p><img src="images/leak-w.png" width="50" height="50" alt="Pipe"></p>
        </div><div class="cell">

        </div><div class="cell">

        </div><div class="cell">
            <p><img src="images/gauge-top-0.png" width="50" height="50" alt="Top Gauge"></p>
        </div>
    </div>
    <div class="row">
        <div class="cell">

        </div><div class="cell">

        </div><div class="cell">

        </div><div class="cell">

        </div><div class="cell">

        </div><div class="cell">
            <p><img src="images/gauge-0.png" width="50" height="50" alt="Base Gauge"></p>
        </div>
    </div>
    <div class="row">
        <div class="cell">

        </div><div class="cell">

        </div><div class="cell">

        </div><div class="cell">

        </div><div class="cell">

        </div><div class="cell">

        </div>
    </div>
    <div class="row">
        <div class="cell">

        </div><div class="cell">

        </div><div class="cell">

        </div><div class="cell">

        </div><div class="cell">

        </div><div class="cell">
            <p><img src="images/gauge-top-0.png" width="50" height="50" alt="Top Gauge"></p>
        </div>
    </div>
    <div class="row">
        <div class="cell">

        </div><div class="cell">
            <img src="images/cap-e.png" width="50" height="50" alt="Pipe Option 3">
        </div><div class="cell">
            <img src="images/tee-esw.png" width="50" height="50" alt="Pipe">
        </div><div class="cell">
            <p><img src="images/straight-h.png" width="50" height="50" alt="Pipe"></p>
        </div><div class="cell">
            <p><img src="images/straight-h.png" width="50" height="50" alt="Pipe"></p>
        </div><div class="cell">
            <p><img src="images/gauge-0.png" width="50" height="50" alt="Base Gauge"></p>
        </div>
    </div>
    <div class="row">
        <div class="cell">
            <p><img src="images/valve-closed.png" width="50" height="50" alt="Closed Valve"></p>
        </div><div class="cell">
            <p><img src="images/straight-h.png" width="50" height="50" alt="Pipe"></p>
        </div><div class="cell">
            <p><img src="images/ninety-wn.png" width="50" height="50" alt="Pipe"></p>
        </div><div class="cell">

        </div><div class="cell">

        </div><div class="cell">

        </div>
    </div>
</div>
HTML;

        return $html;
    }

    /**
     * Private helper function for the formHTML function.
     * Creates all HTML for the div class "radioButtons", including 5 radio buttons with image labels
     *   displaying the pipe options for additions to the grid.
     * TODO: Obtain a list of 5 random pipes to use as options
     * @return string, the generated HTML code
     */
    private function radioHtml() {

        $html = <<<HTML
<div class="radioButtons">
    <label for="1"><img src="images/ninety-es.png" width="50" height="50" alt="Pipe Option 1"></label>
    <input type="radio" name="pipeOption" id="1">
    <label for="2"><img src="images/straight-h.png" width="50" height="50" alt="Pipe Option 2"></label>
    <input type="radio" name="pipeOption" id="2">
    <label for="3"><img src="images/tee-esw.png" width="50" height="50" alt="Pipe Option 3"></label>
    <input type="radio" name="pipeOption" id="3">
    <label for="4"><img src="images/ninety-es.png" width="50" height="50" alt="Pipe Option 4"></label>
    <input type="radio" name="pipeOption" id="4">
    <label for="5"><img src="images/cap-s.png" width="50" height="50" alt="Pipe Option 5"></label>
    <input type="radio" name="pipeOption" id="5">
</div>
HTML;

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