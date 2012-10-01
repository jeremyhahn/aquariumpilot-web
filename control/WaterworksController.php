<?php
class WaterworksController extends WaterworksClient {

    public function __construct() {
        parent::__construct('192.168.11.51', 'ABC123');
    }

    public function index() {

        /*
        echo 'Outlet 1: ' . (($this->getOutlet1() == DigitalPinValue::$HIGH) ? 'On' : 'Off') . '<br>';
        echo 'Outlet 2: ' . (($this->getOutlet2() == DigitalPinValue::$HIGH) ? 'On' : 'Off') . '<br>';
        echo 'Outlet 3: ' . (($this->getOutlet3() == DigitalPinValue::$HIGH) ? 'On' : 'Off') . '<br>';
        echo 'Outlet 4: ' . (($this->getOutlet4() == DigitalPinValue::$HIGH) ? 'On' : 'Off') . '<br>';
        echo 'Outlet 5: ' . (($this->getOutlet5() == DigitalPinValue::$HIGH) ? 'On' : 'Off') . '<br>';
        echo 'Outlet 6: ' . (($this->getOutlet6() == DigitalPinValue::$HIGH) ? 'On' : 'Off') . '<br>';
        echo 'Outlet 7: ' . (($this->getOutlet7() == DigitalPinValue::$HIGH) ? 'On' : 'Off') . '<br>';
        echo 'Outlet 8: ' . (($this->getOutlet8() == DigitalPinValue::$HIGH) ? 'On' : 'Off') . '<br>';
        echo 'RO/DI -> Aquarium: ' . (($this->getAquariumRodi() == DigitalPinValue::$HIGH) ? 'On' : 'Off') . '<br>';
        echo 'RO/DI -> Saltwater Reservoir: ' . (($this->getReservoirRodi() == DigitalPinValue::$HIGH) ? 'On' : 'Off') . '<br>';
        echo 'Aquarium -> Drain: ' . (($this->getAquariumDrain() == DigitalPinValue::$HIGH) ? 'On' : 'Off') . '<br>';
        */

        print_r(JsonToModel::transform(parent::getStatus(), 'Status'));
    }

    public function setReceptacle0($value = 0) {
        echo parent::setReceptacle0($this->toDigital($value));
    }

    public function setReceptacle1($value = 0) {
        echo parent::setReceptacle1($this->toDigital($value));
    }
    
    public function setReceptacle2($value = 0) {
        echo parent::setReceptacle2($this->toDigital($value));
    }
    
    public function setReceptacle3($value = 0) {
        echo parent::setReceptacle3($this->toDigital($value));
    }
    
    public function setReceptacle4($value = 0) {
        echo parent::setReceptacle4($this->toDigital($value));
    }
    
    public function setReceptacle5($value = 0) {
        echo parent::setReceptacle5($this->toDigital($value));
    }
    
    public function setReceptacle6($value = 0) {
        echo parent::setReceptacle6($this->toDigital($value));
    }
    
    public function setReceptacle7($value = 0) {
        echo parent::setReceptacle7($this->toDigital($value));
    }
    
    public function setAquariumRodi($value = 0) {
        echo parent::setAquariumRodi($this->toDigital($value));
    }

    public function setReservoirRodi($value = 0) {
        echo parent::setReservoirRodi($this->toDigital($value));
    }

    public function setAquariumDrain($value = 0) {
        echo parent::setAquariumDrain($this->toDigital($value));
    }

    public function setMaintenance($value) {
        echo parent::setMaintenance($this->toDigital($value));
    }

    public function getSystem() {
        echo parent::getSystem();
    }

    public function getStatus() {
        echo parent::getStatus();
    }

    private function toDigital($value) {
        return $value <= 0 ? (int)DigitalPinValue::$LOW: (int)DigitalPinValue::$HIGH;
    }
}
?>