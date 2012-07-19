<?php

//error_reporting(E_ALL);
ini_set('display_errors', 0);
ini_set('display_startup_errors', 0);


require 'AgilePHP/AgilePHP.php';

try {
    AgilePHP::setFrameworkRoot(realpath(dirname(__FILE__) . '/AgilePHP' ));
	AgilePHP::init();
    AgilePHP::setDefaultTimezone('America/New_York');
    AgilePHP::setDebugMode(true);
	AgilePHP::setAppName('AquariumPilot v1.0');

	MVC::dispatch();
}
catch( FrameworkException $e ) {

     require_once 'AgilePHP/mvc/PHTMLRenderer.php';

     Log::error($e->getMessage());

     $renderer = new PHTMLRenderer();
     $renderer->set('title', AgilePHP::getAppName() . ' :: Error Page');
  	 $renderer->set('error', $e->getCode() . '   ' . $e->getMessage() . (AgilePHP::isInDebugMode() ? '<br><pre>' . $e->getTraceAsString() . '</pre>' : ''));
  	 $renderer->render('error');
}
?>