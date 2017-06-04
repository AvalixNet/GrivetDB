<?php

    require 'init.php';

    //Check configuration file
    if(\init\gvt::checkConfig()) {
        
    } else {
        header("Location: setup.php");
    }

?>