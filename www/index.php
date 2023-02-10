<?php
/**
 * Tiny MVC light Framework
 * PSR ? 
 */

 // Load core file 
require_once('../core/core.php') ;

if(TRUE == file_exists('../vendor/autoload.php')){
    require_once('../vendor/autoload.php') ;
}else{
    die("You should probably run \"composer install\" first ;) !") ;
}

$l_oTinyMvc = tinyMVC::instance() ;
$l_oTinyMvc->run() ;