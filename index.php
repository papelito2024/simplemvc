<?php

/**
 * set some global varaibles for the application
 * 
 */


 define("APP_NAME","TEST");
 define("ROOT_PATH",dirname(__dir__));
 define("ENVIROMENT","DEV");  //for produccion change de value to PROD


/**
 * require autoloader
 */

 require("./core/Autoloder.php");

/**
 *  namespaces
 */

 use core\Autoloader;
 use core\Application;
 
/**
 * call the autoloader to register the classes 
 * 
 */

Autoloader::register();

 /**
  * enty poin application 
  *
  */

Application::run();
  


 //echo ROOT_PATH;