<?php namespace init;

class gvt {

    static function checkConfig() {

        if(file_exists('grivet/doc/config.json')) {
            return true;
        } else {
            return false;
        }

    }

}

?>