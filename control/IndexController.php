<?php
/**
 * Default MVC controller
 * 
 * @author Jeremy Hahn
 * @copyright Make A Byte, inc
 * @package com.makeabyte.aquariumpilot.control
 */
class IndexController extends BaseController {

    private $waterworksClient;
    private $aquariumClient;

    public function __construct() {

        parent::__construct();

        $this->waterworksClient = new WaterworksClient('192.168.11.51', 'ABC123');
        $this->aquariumClient = new AquariumClient('192.168.11.52', 'ABC123');

        $this->set('title', AgilePHP::getAppName());
        $this->set('aquarium_water_temp', $this->aquariumClient->getAquariumTemp());
        $this->set('aquarium_air_temp', $this->aquariumClient->getAirTemp());
        $this->set('waterworks_reservoir_temp', $this->waterworksClient->getReservoirTemp());
    }

	  /**
	   * (non-PHPdoc)
	   * @see src/mvc/BaseController#index()
	   */
	  public function index() {
	      $this->render('index');
	  }
}
?>