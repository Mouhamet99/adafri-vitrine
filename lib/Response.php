<?php

namespace ism\lib;
class Response {

    public static function redirectUrl(string $uri):void{
        // var_dump("uri", $uri);
        // die();
        // if($uri == "accueil")
        //     header("location:".WEB_ROOT);
        // else
            header("location:".WEB_ROOT.$uri);
        exit();
    }
}
?>