<?php

namespace Assets;

class PathLoader
{
    CONST PATH = [
        /**
         * Add your folders here
         */
        
    ];

    static function registerPath(){
        foreach(self::PATH as $value) {        
            set_include_path(
                get_include_path().PATH_SEPARATOR.$value
            );
        }
    }    
}