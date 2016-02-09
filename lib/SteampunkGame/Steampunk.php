<?php

/**
 * Created by PhpStorm.
 * User: Cam
 * Date: 2/9/16
 * Time: 3:51 PM
 */
class Steampunk
{
    public function __construct($seed = null) {
        if($seed === null) {
            $seed = time();
        }

        srand($seed);
    }
}