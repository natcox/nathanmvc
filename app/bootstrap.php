<?php
// LOAD CONFIG
require_once 'config/config.php';


// AUTOLOAD CORE LIBRARIES
spl_autoload_register(function($className){
require_once 'libraries/' . $className . '.php';

});
