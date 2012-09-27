<?php

error_reporting(E_ALL);
ini_set('display_errors', 0);
ini_set('display_startup_errors', 0);

require 'AgilePHP/AgilePHP.php';

try {
    AgilePHP::setFrameworkRoot(realpath(dirname(__FILE__) . '/AgilePHP' ));
	AgilePHP::init();
    AgilePHP::setDefaultTimezone('America/New_York');
    AgilePHP::setDebugMode(true);
	AgilePHP::setAppName('AquariumPilot v1.0');

	/**
	 * Configuration
	 * 
	 * $fields = array('autoWaterChangesEnabled', 'autoFillReservoirEnabled', 'autoCirculationEnabled', 'reservoirPowerheadOutlet',
	                'aquariumFillPumpOutlet', 'drainMinutesPerGallon', 'drainSecondsPerGallon', 'fillMinutesPerGallon', 'fillSecondsPerGallon',
	                'autoWaterChangeHour', 'autoWaterChangeMinutes', 'autoWaterChangeGallons', 'autoTopOffEnabled', 'autoTopMinutes',
	                'pinOutlet1', 'pinOutlet2', 'pinOutlet3', 'pinOutlet4', 'pinOutlet5', 'pinOutlet6', 'pinOutlet7', 'pinOutlet8',
	                'pinAquariumRodi', 'pinReservoirRodi', 'pinAquariumDrain', 'pinUpperFloatValve', 'pinLowerFloatValve', 'oneWire');

	   $gen = new ModelGenerator(null, 'Configuration',
			 $fields,
			 true,
			 true);
	 */

	/**
	 * /status
	 * 
	   $fields = array('outlet1', 'outlet2', 'outlet3', 'outlet4', 'outlet5', 'outlet6', 'outlet7',
	                'outlet8', 'aquariumRodi', 'aquariumFill', 'aquariumDrain',
	                'reservoirPowerhead', 'reservoirRodi', 'reservoirTemp', 'upperFloatValve',
	 				'lowerFloatValve', 'roomTemp', 'wcTotalGallons', 'wcCycle', 'wcDrainTimerId',
	                'wcFillTimerId', 'wcLastChangedMonth', 'wcLastChangedDay', 'topOffTimerId',
	                'topOffLastMonth', 'topOffLastDay', 'yesterday', 'waterChangeInProgress',
	                'topOffInProgress', 'maintenanceInProgress');
	
	   $gen = new ModelGenerator(null, 'Status',
			 $fields,
			 true,
			 true);
	*/
	
	/**
	 * /system
	 *
	   $fields = array('ipAddress', 'netmask', 'gateway', 'availableMemory', 'uptime', 'hours', 'minutes',
	                'seconds', 'dayOfWeek', 'day', 'month', 'year', 'tempF', 'yesterday', 'SDA', 'SCL');
	
	   $gen = new ModelGenerator(null, 'System',
			 $fields,
			 true,
			 true);
	*/
	echo $gen->createModel();
	exit;
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