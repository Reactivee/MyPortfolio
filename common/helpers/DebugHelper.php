<?php
/**
 * Created by PhpStorm.
 * User: a_obidov
 * Date: 09.01.2021
 * Time: 19:04
 */

namespace common\helpers;


class DebugHelper
{
    public static function printSingleObject($array, $die = true)
    {
        echo "<pre>";
        print_r($array);
        echo "</pre>";
        if ($die) die();
    }

    public static function cutString_($string)
    {
        $strLen = strlen($string);
        $read = '';
        if ($strLen >= 5) {
            $read = substr($string, 0, 5);
        } else {
            return $string;
        }

        return $read;
    }

    public static function cutString($string, $limit = 5)
    {
        if (strlen($string) >= $limit)
            return substr($string, 0, $limit) . ' ...';
        return $string;
    }

}