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
    
    public function getRodiReservoidSolenoid() {
        return strpos($this->digitalRead('33'), 'HIGH') ? DigitalPinValue::$HIGH : DigitalPinValue::$LOW;
    }

    public function getAquariumDrainSolenoid() {
        return strpos($this->digitalRead('36'), 'HIGH') ? DigitalPinValue::$HIGH : DigitalPinValue::$LOW;
    }

    public function getReservoirTemp() {
        return $this->parseTemp($this->getTemp('1'));
    }
    
    public function getSystem() {
        return $this->__arduino_call('/system');
    }
    
    public function getStatus() {
        return $this->__arduino_call('/status');
    }
    
    public function getConfig() {
        return $this->__arduino_call('/config');
    }
    
    public function setMaintenanceMode($mode = 0) {
        return $this->__arduino_call('/config/' . $mode);
    }
    
    public function isPerformingWaterChange() {
        return $this->__arduino_call('/status/' . $mode);
    }

    public function waterchage($gallons) {
        return $this->__arduino_call('/waterchange/' . $gallons);
    }
}
?>