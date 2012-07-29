<?php
class WaterworksClient extends ArduinoClient {

    public function getOutlet1() {
        return strpos($this->digitalRead('24'), 'HIGH') ? DigitalPinValue::$HIGH : DigitalPinValue::$LOW;
    }

    public function getOutlet2() {
        return strpos($this->digitalRead('25'), 'HIGH') ? DigitalPinValue::$HIGH : DigitalPinValue::$LOW;
    }
    
    public function getOutlet3() {
        return strpos($this->digitalRead('26'), 'HIGH') ? DigitalPinValue::$HIGH : DigitalPinValue::$LOW;
    }
    
    public function getOutlet4() {
        return strpos($this->digitalRead('27'), 'HIGH') ? DigitalPinValue::$HIGH : DigitalPinValue::$LOW;
    }
    
    public function getOutlet5() {
        return strpos($this->digitalRead('28'), 'HIGH') ? DigitalPinValue::$HIGH : DigitalPinValue::$LOW;
    }
    
    public function getOutlet6() {
        return strpos($this->digitalRead('29'), 'HIGH') ? DigitalPinValue::$HIGH : DigitalPinValue::$LOW;
    }
    
    public function getOutlet7() {
        return strpos($this->digitalRead('30'), 'HIGH') ? DigitalPinValue::$HIGH : DigitalPinValue::$LOW;
    }
    
    public function getOutlet8() {
        return strpos($this->digitalRead('31'), 'HIGH') ? DigitalPinValue::$HIGH : DigitalPinValue::$LOW;
    }
    
    public function getRodiAquariumSolenoid() {
        return strpos($this->digitalRead('32'), 'HIGH') ? DigitalPinValue::$HIGH : DigitalPinValue::$LOW;
    }
    
    public function getRodiReservoirSolenoid() {
        return strpos($this->digitalRead('33'), 'HIGH') ? DigitalPinValue::$HIGH : DigitalPinValue::$LOW;
    }

    public function getAquariumDrainSolenoid() {
        return strpos($this->digitalRead('36'), 'HIGH') ? DigitalPinValue::$HIGH : DigitalPinValue::$LOW;
    }

    public function getReservoirTemp() {
        return $this->parseTemp($this->getTemp('1'));
    }

    public function getSystem() {
        return JsonToModel::transform($this->__arduino_call('/system'), 'System');
    }

    public function getStatus() {
        return JsonToModel::transform($this->__arduino_call('/status'), 'Status');
    }

    public function getConfig() {
        return $this->__arduino_call('/config');
    }

    public function setWaterchage($gallons) {
        $this->__arduino_call('/waterchange/' . $gallons);
    }

    public function isPerformingWaterChange() {
        return $this->__arduino_call('/waterchange');
    }

    public function setMaintenance($mode = 0) {
        return $this->__arduino_call('/maintenance/' . $mode);
    }

    public function isInMaintenanceMode() {
        return $this->__arduino_call('/maintenance');
    }
}
?>