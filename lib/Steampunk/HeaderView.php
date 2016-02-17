<?php

/**
 * Created by PhpStorm.
 * User: Bonnie Reiff
 * Project 1: Steampunked
 * Class: HeaderView
 */

namespace Steampunk;


class HeaderView
{

    /**
     * HeaderView constructor.
     */
    public function __construct() {
        // No functionality in the constructor
    }

    /**
     * Creates the HTML for the Steampunked game header, which displays the game logo.
     * @return string, the HTML code for the game page header
     */
    public function presentHeader() {
        $html = '<p class="header"><img src="images/title.png" width="600" height="104" alt="Steampunked Title Image"></p>';
        return $html;
    }

}