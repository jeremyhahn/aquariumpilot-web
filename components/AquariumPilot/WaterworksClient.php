<?php
/**
 * AquariumPilot WaterWorks client library.
 * 
 * All Rights Reserved
 * 
 * @author Jeremy Hahn
 * @copyright Make A Byte, inc
 * @package com.aquariumpilot
 */
class WaterworksClient extends ArduinoClient {

    /**
     * Turns on/off the receptacle0
	 *
     * @param $value HIGH or LOW
     * @return void
     * @throws Exception if $value is not a DigitalPinValue
     */
    public function setReceptacle0($value) {

        if(!$this->isDigital($value)) {
            throw new Exception('Value must be either DigitalPinValue::HIGH or DigitalPinValue::LOW');
        }

        $response = json_decode($this->request('/receptacle/0/' . $value));
        return $response->receptacle0;
    }

    /**
     * Get the state (ON/OFF) of receptacle0
	 *
     * @return DigitalPinValue::HIGH if the receptacle is "on" or DigitalPinValue::LOW if "off".
     */
    public function getReceptacle0() {

        $response = json_decode($this->request('/receptacle/0/' . $value));
        return $response->receptacle0;
    }

    /**
     * Turns on/off the receptacle1
	 *
     * @param $value HIGH or LOW
     * @return void
     * @throws Exception if $value is not a DigitalPinValue
     */
    public function setReceptacle1($value) {
        
        if(!$this->isDigital($value)) {
            throw new Exception('Value must be either DigitalPinValue::HIGH or DigitalPinValue::LOW');
        }

        $response = json_decode($this->request('/receptacle/1/' . $value));
        return $response->receptacle1;
    }

    /**
     * Get the state (ON/OFF) of receptacle1
	 *
     * @return DigitalPinValue::HIGH if the receptacle is "on" or DigitalPinValue::LOW if "off".
     */
    public function getReceptacle1() {

        $response = json_decode($this->request('/receptacle/1/' . $value));
        return $response->receptacle1;
    }

    /**
     * Turns on/off the receptacle2
	 *
     * @param $value HIGH or LOW
     * @return void
     * @throws Exception if $value is not a DigitalPinValue
     */
    public function setReceptacle2($value) {
        
        if(!$this->isDigital($value)) {
            throw new Exception('Value must be either DigitalPinValue::HIGH or DigitalPinValue::LOW');
        }

        $response = json_decode($this->request('/receptacle/2/' . $value));
        return $response->receptacle2;
    }

    /**
     * Get the state (ON/OFF) of receptacle2
	 *
     * @return DigitalPinValue::HIGH if the receptacle is "on" or DigitalPinValue::LOW if "off".
     */
    public function getReceptacle2() {

        $response = json_decode($this->request('/receptacle/2'));
        return $response->receptacle2;
    }

    /**
     * Turns on/off the receptacle3
	 *
     * @param $value HIGH or LOW
     * @return void
     * @throws Exception if $value is not a DigitalPinValue
     */
    public function setReceptacle3($value) {

        if(!$this->isDigital($value)) {
            throw new Exception('Value must be either DigitalPinValue::HIGH or DigitalPinValue::LOW');
        }
        
        $response = json_decode($this->request('/receptacle/3/' . $value));
        return $receptacle->receptacle3;
    }

    /**
     * Get the state (ON/OFF) of receptacle3
	 *
     * @return DigitalPinValue::HIGH if the receptacle is "on" or DigitalPinValue::LOW if "off".
     */
    public function getReceptacle3() {

        $response = json_decode($this->request('/receptacle/3'));
        return $response->receptacle3;
    }

    /**
     * Turns on/off the receptacle4
	 *
     * @param $value HIGH or LOW
     * @return void
     * @throws Exception if $value is not a DigitalPinValue
     */
    public function setReceptacle4($value) {

        if(!$this->isDigital($value)) {
            throw new Exception('Value must be either DigitalPinValue::HIGH or DigitalPinValue::LOW');
        }

        $response = json_decode($this->request('/receptacle/4/' . $value));
        return $response->receptacle4;
    }

    /**
     * Get the state (ON/OFF) of receptacle4
	 *
     * @return DigitalPinValue::HIGH if the receptacle is "on" or DigitalPinValue::LOW if "off".
     */
    public function getReceptacle4() {

        $response = json_decode($this->request('/receptacle/4'));
        return $response->receptacle4;
    }

    /**
     * Turns on/off the receptacle5
	 *
     * @param $value HIGH or LOW
     * @return void
     * @throws Exception if $value is not a DigitalPinValue
     */
    public function setReceptacle5($value) {
        
        if(!$this->isDigital($value)) {
            throw new Exception('Value must be either DigitalPinValue::HIGH or DigitalPinValue::LOW');
        }

        $response = json_decode($this->request('/receptacle/5/' . $value));
        return $response->receptacle5;
    }

    /**
     * Get the state (ON/OFF) of receptacle #6
	 *
     * @return DigitalPinValue::HIGH if the receptacle is "on" or DigitalPinValue::LOW if "off".
     */
    public function getReceptacle5() {
        
        $response = json_decode($this->request('/receptacle/5'));
        return $response->receptacle5;
    }

    /**
     * Turns on/off the receptacle6
	 *
     * @param $value HIGH or LOW
     * @return void
     * @throws Exception if $value is not a DigitalPinValue
     */
    public function setReceptacle6($value) {

        if(!$this->isDigital($value)) {
            throw new Exception('Value must be either DigitalPinValue::HIGH or DigitalPinValue::LOW');
        }

        $response = json_decode($this->request('/receptacle/6/' . $value));
        return $response->receptacle6;
    }

    /**
     * Get the state (ON/OFF) of receptacle6
	 *
     * @return DigitalPinValue::HIGH if the receptacle is "on" or DigitalPinValue::LOW if "off".
     */
    public function getReceptacle6() {

        $response = json_decode($this->request('/receptacle/6'));
        return $response->receptacle6;
    }

    /**
     * Turns on/off the receptacle7
	 *
     * @param $value HIGH or LOW
     * @return void
     * @throws Exception if $value is not a DigitalPinValue
     */
    public function setReceptacle7($value) {

        if(!$this->isDigital($value)) {
            throw new Exception('Value must be either DigitalPinValue::HIGH or DigitalPinValue::LOW');
        }

        $response = json_decode($this->request('/receptacle/7/' . $value));
        return $response->receptacle7;
    }

    /**
     * Get the state (ON/OFF) of receptacle8
	 *
     * @return DigitalPinValue::HIGH if the receptacle is "on" or DigitalPinValue::LOW if "off".
     */
    public function getReceptacle7() {

        $response = json_decode($this->request('/receptacle/7'));
        return $response->receptacle7;
    }

    /**
     * Starts an automated water change
	 *
     * @param int $gallons The number of gallons to change
     * @return int The number of gallons set to change
     * @throws Exception if $gallons is not numeric or a negative number
     */
    public function startWaterChange($gallons) {

        if(!is_numeric($gallons)) {
            throw new Exception('Gallons must be numeric');
        }

        if($gallons <= 0) {
            throw new Exception('Gallons must be a positive number');
        }

        $automation = json_decode($this->request('/waterchange/' . $gallons));
        return $automation->waterchange;
    }

    /**
     * Returns a boolean value indicating whether a water change is
     * currently being performed.
     * 
     * @return True if a water change is in progress, false otherwise
     */
    public function isPerformingWaterChange() {

        $automation = json_decode($this->request('/waterchange'));
        return $automation->waterchange;
    }

    /**
     * Turns on/off maintenance mode. Automation is disabled while in maintenance mode.
     * 
     * @param $value HIGH or LOW
     * @throws Exception
     */
    public function setMaintenance($value) {

        if(!$this->isDigital($value)) {
            throw new Exception('Value must be either DigitalPinValue::HIGH or DigitalPinValue::LOW');
        }

        $automation = json_decode($this->request('/maintenance/' . $value));
        return $automation->isInMaintenanceMode;
    }

    /**
     * Returns a boolean value indicating whether maintenance mode is enabled
     * 
     * @return True if a maintenance mode is turned on, false otherwise
     */
    public function isInMaintenanceMode() {

        $automation = json_decode($this->request('/maintenance'));
        return $automation->isInMaintenanceMode;
    }

    /**
     * Turns on/off aquarium RO/DI.
     * 
     * @param $value HIGH or LOW
     * @throws Exception
     */
    public function setAquariumRodi($value) {

        if(!$this->isDigital($value)) {
            throw new Exception('Value must be either DigitalPinValue::HIGH or DigitalPinValue::LOW');
        }
        
        $aquarium = json_decode($this->request('/aquarium/rodi/' . $value));
        return $aquarium->rodi;
    }

    /**
     * Returns a boolean flag indicating whether the aquarium RO/DI is on/off.
     * 
     * @return DigitalPinValue::HIGH if the receptacle is "on" or DigitalPinValue::LOW if "off".
     */
    public function getAquariumRodi() {

        $aquarium = json_decode($this->request('/aquarium/rodi'));
        return $aquarium->rodi;
    }

    /**
     * Turns on/off aquarium saltwater fill. This turns on the pump that fills the aquarium
     * with saltwater from the mixing reservoir.
     * 
     * @param $value HIGH or LOW
     * @throws Exception
     */
    public function setAquariumFill($value) {

        if(!$this->isDigital($value)) {
            throw new Exception('Value must be either DigitalPinValue::HIGH or DigitalPinValue::LOW');
        }
        
        $aquarium = json_decode($this->request('/aquarium/fill/' . $value));
        return $aquarium->fill;
    }

    /**
     * Returns a boolean flag indicating whether the aquarium saltwater fill pump is on/off.
     * 
     * @return DigitalPinValue::HIGH if the receptacle is "on" or DigitalPinValue::LOW if "off".
     */
    public function getAquariumFill() {

        $aquarium = json_decode($this->request('/aquarium/fill'));
        return $aquarium->fill;
    }

    /**
     * Turns on/off aquarium drain.
     * 
     * @param $value HIGH or LOW
     * @throws Exception
     */
    public function setAquariumDrain($value) {

        if(!$this->isDigital($value)) {
            throw new Exception('Value must be either DigitalPinValue::HIGH or DigitalPinValue::LOW');
        }
        
        $aquarium = json_decode($this->request('/aquarium/drain/' . $value));
        return $aquarium->drain;
    }

    /**
     * Returns a boolean flag indicating whether the aquarium drain is on/off.
     * 
     * @return DigitalPinValue::HIGH if the receptacle is "on" or DigitalPinValue::LOW if "off".
     */
    public function getAquariumDrain() {

        $aquarium = json_decode($this->request('/aquarium/drain'));
        return $aquarium->drain;
    }

    /**
     * Turns on/off saltwater reservoir RO/DI.
     * 
     * @param $value HIGH or LOW
     * @throws Exception
     */
    public function setReservoirRodi($value) {

        if(!$this->isDigital($value)) {
            throw new Exception('Value must be either DigitalPinValue::HIGH or DigitalPinValue::LOW');
        }
        
        $reservoir = json_decode($this->request('/reservoir/rodi/' . $value));
        return $reservoir->rodi;
    }

    /**
     * Returns a boolean flag indicating whether the saltwater reservoir is on/off.
     * 
     * @return DigitalPinValue::HIGH if the receptacle is "on" or DigitalPinValue::LOW if "off".
     */
    public function getReservoirRodi() {

        $reservoir = json_decode($this->request('/reservoir/rodi'));
        return $reservoir->rodi;
    }

    /**
     * Turns on/off saltwater reservoir powerhead.
     * 
     * @param $value HIGH or LOW
     * @throws Exception
     */
    public function setReservoirPowerhead($value) {

        if(!$this->isDigital($value)) {
            throw new Exception('Value must be either DigitalPinValue::HIGH or DigitalPinValue::LOW');
        }

        $reservoir = json_decode($this->request('/reservoir/powerhead/' . $value));
        return $reservoir->powerhead;
    }

    /**
     * Returns a boolean flag indicating whether the saltwater powerhead is on/off.
     * 
     * @return DigitalPinValue::HIGH if the receptacle is "on" or DigitalPinValue::LOW if "off".
     */
    public function getReservoirPowerhead() {

        if(!$this->isDigital($value)) {
            throw new Exception('Value must be either DigitalPinValue::HIGH or DigitalPinValue::LOW');
        }

        $reservoir = json_decode($this->request('/reservoir/powerhead'));
        return $reservoir->powerhead;
    }

    /**
     * Returns the saltwater reservoir temperature
     * 
     * @return The temperature in xx.xx format
     */
    public function getReservoirTemp() {

        $reservoir = json_decode($this->request('/reservoir/temp'));
        return $reservoir->temp;
    }

    /**
     * Returns the system variables / values
     */
    public function getSystem() {
        return JsonToModel::transform($this->request('/system'), 'System');
    }

    /**
     * Returns the status of all AquariumPilot component variables / values
     */
    public function getStatus() {
        //return JsonToModel::transform($this->request('/status'), 'Status');
        return $this->request('/status');
    }

    /**
     * Returns the current EEPROM configuration
     */
    public function getConfig() {
        //return JsonToModel::transform($this->request('/config'), 'Configuration');
        return $this->request('/config');
    }

    /**
     * Erases EEPROM configuration and restores the default settings.
     */
    public function reset() {
        return $this->request('/reset');
    }

    /**
     * Reloads the device EEPROM configuration
     * 
     * @return void
     */
    public function reload() {
        return $this->request('/reload');
    }
}
?>