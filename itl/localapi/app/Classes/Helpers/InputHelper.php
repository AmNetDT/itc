<?php
namespace App\Classes\Helpers;

class InputHelper
{
    public static function sanitize($string)
    {
        return htmlentities($string, ENT_QUOTES, 'UTF-8');
    }

    public static function exists($type = null)
    {
        switch ($type) {
            case 'post':
                return (!empty($_POST)) ? true : false;
                break;

            case 'get':
                return (!empty($_GET)) ? true : false;
            
            default:
                return false;
                break;
        }
    }

    public static function get($input)
    {
        if (isset($_POST[$input])) {
            return InputHelper::sanitize(trim($_POST[$input]));
        } elseif (isset($_GET[$input])) {
            return InputHelper::sanitize(trim($_GET[$input]));
        }

        return '';
        
    }
}
