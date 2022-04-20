<?php

namespace Ortigan\Cashfree;

class Util {
    // convert array to params
    public static function arrayToParams(array $array = null) {
        if(!is_array($array)) {
            return '';
        }
        $params = '?';
        foreach ($array as $key => $value) {
            $params .= $key . '=' . $value . '&';
        }
        return $params;
    }
}