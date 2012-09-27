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
        
        $aquariumTemp = 0;
        $aquariumSurfaceTemp = 0;
        $aquariumRoomTemp = 0;
        $reservoirTemp = 0;

        try {

            $aquariumTemp = $this->aquariumClient->getAquariumTemp();
            $aquariumSurfaceTemp = $this->aquariumClient->getSurfaceTemp();
            $aquariumRoomTemp = $this->aquariumClient->getRoomTemp();
            $reservoirTemp = $this->waterworksClient->getReservoirTemp();
        }
        catch(Exception $e) {
            $this->set('error', $e->getMessage());
        }

        $this->set('title', AgilePHP::getAppName());
        $this->set('aquarium_water_temp', $aquariumTemp ? $aquariumTemp : 0);
        $this->set('aquarium_surface_temp', $aquariumSurfaceTemp ? $aquariumSurfaceTemp : 0);
        $this->set('aquarium_room_temp', $aquariumRoomTemp ? $aquariumRoomTemp : 0);
        $this->set('waterworks_reservoir_temp', $reservoirTemp ? $reservoirTemp : 0);
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