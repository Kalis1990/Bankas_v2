<?php

namespace App\Middlewares;

class Auth{

    static private $protect = ['users'];

    static public function authorize(array $url) : bool
    {
        if(in_array($url[0], self::$protect)){
            return(isset($_SESSION['login']) && $_SESSION['login'] == 1);
        }
        return true;


    }

}