<?php
namespace App\Classes\Helpers;

class StringHelper
{
    public static function capFirst($string)
    {
        return ucwords(strtolower($string));
    }

    public static function conditionBuilder($fields)
    {
        $string = '';
        $x = 1;
        
        foreach ($fields as $key => $value) {
            $string .= $key . '=' . $value;
            if ($x < count($fields)) {
                $string .= ' AND ';
            }
            $x++;
        }

        return $string;
    }
}