<?php
class AquariumClient extends ArduinoClient {

    public function getAquariumTemp() {
        return $this->parseTemp($this->getTemp('1'));
    }

    public function getAirTemp() {
        return $this->parseTemp($this->getTemp('2'));
    }
}
?>