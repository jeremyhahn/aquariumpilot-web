<?php
class WaterworksClient extends ArduinoClient {

    public function getOutlet1() {
        return strpos($this->digitalRead('28'), 'HIGH') ? DigitalPinValue::$HIGH : DigitalPinValue::$LOW;
    }

    public function getOutlet2() {
        return strpos($this->digitalRead('29'), 'HIGH') ? DigitalPinValue::$HIGH : DigitalPinValue::$LOW;
    }
    
    public function getOutlet3() {
        return strpos($this->digitalRead('30'), 'HIGH') ? DigitalPinValue::$HIGH : DigitalPinValue::$LOW;
    }
    
    public function getOutlet4() {
        return strpos($this->digitalRead('31'), 'HIGH') ? DigitalPinValue::$HIGH : DigitalPinValue::$LOW;
    }
    
    public function getOutlet5() {
        return strpos($this->digitalRead('32'), 'HIGH') ? DigitalPinValue::$HIGH : DigitalPinValue::$LOW;
    }
    
    public function getOutlet6() {
        return strpos($this->digitalRead('33'), 'HIGH') ? DigitalPinValue::$HIGH : DigitalPinValue::$LOW;
    }
    
    public function getOutlet7() {
        return strpos($this->digitalRead('34'), 'HIGH') ? DigitalPinValue::$HIGH : DigitalPinValue::$LOW;
    }
    
    public function getOutlet8() {
        return strpos($this->digitalRead('35'), 'HIGH') ? DigitalPinValue::$HIGH : DigitalPinValue::$LOW;
    }

    public function setRodiAquariumSolenoid(DigitalPinValue $value) {
        $this->request('/aquarium/rodi/' . $value);
    }

    public function getRodiAquariumSolenoid() {
        $this->request('/aquarium/rodi');
    }
    
    public function getRodiReservoirSolenoid() {
        return strpos($this->digitalRead('37'), 'HIGH') ? DigitalPinValue::$HIGH : DigitalPinValue::$LOW;
    }

    public function getAquariumDrainSolenoid() {
        return strpos($this->digitalRead('38'), 'HIGH') ? DigitalPinValue::$HIGH : DigitalPinValue::$LOW;
    }

    public function getReservoirTemp() {
        return $this->parseTemp($this->getTemp('1'));
    }

    public function getSystem() {
        return JsonToModel::transform($this->request('/system'), 'System');
    }

    public function getStatus() {
        return JsonToModel::transform($this->request('/status'), 'Status');
    }

    public function getConfig() {
        return $this->request('/config');
    }

    public function setWaterchage($gallons) {
        $this->request('/waterchange/' . $gallons);
    }

    public function isPerformingWaterChange() {
        return $this->request('/waterchange');
    }

    public function setMaintenance($mode = 0) {
        return $this->request('/maintenance/' . $mode);
    }

    public function isInMaintenanceMode() {
        return $this->request('/maintenance');
    }
}
?>