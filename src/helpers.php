<?php

/**
 * Helpers functions
 * These are the functions used like a shortcuts
 */

if (!function_exists('replace')) {

    /**
     * @param $target
     * @param array $map
     */
    function replace(&$target, array $map)
    {
        \Replace\Replace::recursive($target, $map);
    }
}