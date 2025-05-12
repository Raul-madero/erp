<?php

if (!function_exists('money')) {
    function money($value, $symbol = '$') {
        return $symbol . number_format((float)$value, 2, '.', ',');
    }
}
