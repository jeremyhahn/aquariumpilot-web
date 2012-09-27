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
     * Turns on/off the receptacle #1
	 *
     * @param $value HIGH or LOW
     * @return void
     * @throws Exception if $value is not a DigitalPinValue
     */
    public function setOutlet1($value) {

        if(!$this->isDigital($value)) {
            throw new Exception('Value must be either DigitalPinValue::HIGH or DigitalPinValue::LOW');
        }

        $receptacle = json_decode($this->request('/receptacle/1/' . $value));
        return $receptacle->outlet1;
    }

    /**
     * Get the state (ON/OFF) of receptacle #1
	 *
     * @return DigitalPinValue::HIGH if the receptacle is "on" or DigitalPinValue::LOW if "off".
     */
    public function getOutlet1() {

        $receptacle = json_decode($this->request('/receptacle/1'));
        return $receptacle->outlet1;
    }

    /**
     * Turns on/off the receptacle #2
	 *
     * @param $value HIGH or LOW
     * @return void
     * @throws Exception if $value is not a DigitalPinValue
     */
    public function setOutlet2($value) {
        
        if(!$this->isDigital($value)) {
            throw new Exception('Value must be either DigitalPinValue::HIGH or DigitalPinValue::LOW');
        }

        $receptacle = json_decode($this->request('/receptacle/2/' . $value));
        return $receptacle->outlet2;
    }

    /**
     * Get the state (ON/OFF) of receptacle #2
	 *
     * @return DigitalPinValue::HIGH if the receptacle is "on" or DigitalPinValue::LOW if "off".
     */
    public function getOutlet2() {

        $receptacle = json_decode($this->request('/receptacle/2'));
        return $receptacle->outlet2;
    }

    /**
     * Turns on/off the receptacle #3
	 *
     * @param $value HIGH or LOW
     * @return void
     * @throws Exception if $value is not a DigitalPinValue
     */
    public function setOutlet3($value) {
        
        if(!$this->isDigital($value)) {
            throw new Exception('Value must be either DigitalPinValue::HIGH or DigitalPinValue::LOW');
        }

        $receptacle = json_decode($this->request('/receptacle/3/' . $value));
        return $receptacle->outlet3;
    }

    /**
     * Get the state (ON/OFF) of receptacle #3
	 *
     * @return DigitalPinValue::HIGH if the receptacle is "on" or DigitalPinValue::LOW if "off".
     */
    public function getOutlet3() {

        $receptacle = json_decode($this->request('/receptacle/3'));
        return $receptacle->outlet3;
    }

    /**
     * Turns on/off the receptacle #4
	 *
     * @param $value HIGH or LOW
     * @return void
     * @throws Exception if $value is not a DigitalPinValue
     */
    public function setOutlet4($value) {

        if(!$this->isDigital($value)) {
            throw new Exception('Value must be either DigitalPinValue::HIGH or DigitalPinValue::LOW');
        }
        
        $receptacle = json_decode($this->request('/receptacle/4/' . $value));
        return $receptacle->outlet4;
    }

    /**
     * Get the state (ON/OFF) of receptacle #4
	 *
     * @return DigitalPinValue::HIGH if the receptacle is "on" or DigitalPinValue::LOW if "off".
     */
    public function getOutlet4() {

        $receptacle = json_decode($this->request('/receptacle/4'));
        return $receptacle->outlet4;
    }
    
    /**
     * Turns on/off the receptacle #5
	 *
     * @param $value HIGH or LOW
     * @return void
     * @throws Exception if $value is not a DigitalPinValue
     */
    public function setOutlet5($value) {

        if(!$this->isDigital($value)) {
            throw new Exception('Value must be either DigitalPinValue::HIGH or DigitalPinValue::LOW');
        }

        $receptacle = json_decode($this->request('/receptacle/5/' . $value));
        return $receptacle->outlet5;
    }

    /**
     * Get the state (ON/OFF) of receptacle #5
	 *
     * @return DigitalPinValue::HIGH if the receptacle is "on" or DigitalPinValue::LOW if "off".
     */
    public function getOutlet5() {

        $receptacle = json_decode($this->request('/receptacle/5'));
        return $receptacle->outlet5;
    }

    /**
     * Turns on/off the receptacle #6
	 *
     * @param $value HIGH or LOW
     * @return void
     * @throws Exception if $value is not a DigitalPinValue
     */
    public function setOutlet6($value) {
        
        if(!$this->isDigital($value)) {
            throw new Exception('Value must be either DigitalPinValue::HIGH or DigitalPinValue::LOW');
        }

        $receptacle = json_decode($this->request('/receptacle/6/' . $value));
        return $receptacle->outlet6;
    }

    /**
     * Get the state (ON/OFF) of receptacle #6
	 *
     * @return DigitalPinValue::HIGH if the receptacle is "on" or DigitalPinValue::LOW if "off".
     */
    public function getOutlet6() {
        
        $receptacle = json_decode($this->request('/receptacle/6'));
        return $receptacle->outlet6;
    }

    /**
     * Turns on/off the receptacle #7
	 *
     * @param $value HIGH or LOW
     * @return void
     * @throws Exception if $value is not a DigitalPinValue
     */
    public function setOutlet7($value) {

        if(!$this->isDigital($value)) {
            throw new Exception('Value must be either DigitalPinValue::HIGH or DigitalPinValue::LOW');
        }

        $receptacle = json_decode($this->request('/receptacle/7/' . $value));
        return $receptacle->outlet7;
    }

    /**
     * Get the state (ON/OFF) of receptacle #7
	 *
     * @return DigitalPinValue::HIGH if the receptacle is "on" or DigitalPinValue::LOW if "off".
     */
    public function getOutlet7() {

        $receptacle = json_decode($this->request('/receptacle/7'));
        return $receptacle->outlet7;
    }

    /**
     * Turns on/off the receptacle #8
	 *
     * @param $value HIGH or LOW
     * @return void
     * @throws Exception if $value is not a DigitalPinValue
     */
    public function setOutlet8($value) {

        if(!$this->isDigital($value)) {
            throw new Exception('Value must be either DigitalPinValue::HIGH or DigitalPinValue::LOW');
        }

        $receptacle = json_decode($this->request('/receptacle/8/' . $value));
        return $receptacle->outlet8;
    }

    /**
     * Get the state (ON/OFF) of receptacle #8
	 *
     * @return DigitalPinValue::HIGH if the receptacle is "on" or DigitalPinValue::LOW if "off".
     */
    public function getOutlet8() {

        $receptacle = json_decode($this->request('/receptacle/8'));
        return $receptacle->outlet8;
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