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
     * TODO: Description
     * @return string
     */
    public function presentHeader() {
        $html = '<p><img src="images\title.png" width="600" height="104" alt="Steampunked Title Image"</p>';
        return $html;
    }

}