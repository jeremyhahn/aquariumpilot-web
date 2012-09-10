<?php
class AquariumClient extends ArduinoClient {

    public function getAquariumTemp() {
        return $this->parseTemp($this->getTemp('1'));
    }

    public function getSurfaceTemp() {
        return $this->parseTemp($this->getTemp('2'));
    }

    public function getRoomTemp() {
        return $this->parseTemp($this->getTemp('3'));
    }

    public function getPh() {
        return $this->__arduino_call('ph');
    }
}
?>