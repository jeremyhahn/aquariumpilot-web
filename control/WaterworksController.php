<?php
class WaterworksController extends BaseController {

    private $client;
    private $config;
    private $status;

    public function __construct() {

        parent::__construct();

        $this->client = new WaterworksClient('192.168.11.51', 'ABC123');
        $this->config = $this->client->getConfig();
        $this->status = $this->client->getStatus();
    }

    public function index() {

        echo 'Outlet 1: ' . (($this->status->getOutlet1() == DigitalPinValue::$HIGH) ? 'On' : 'Off') . '<br>';
        echo 'Outlet 2: ' . (($this->status->getOutlet2() == DigitalPinValue::$HIGH) ? 'On' : 'Off') . '<br>';
        echo 'Outlet 3: ' . (($this->status->getOutlet3() == DigitalPinValue::$HIGH) ? 'On' : 'Off') . '<br>';
        echo 'Outlet 4: ' . (($this->status->getOutlet4() == DigitalPinValue::$HIGH) ? 'On' : 'Off') . '<br>';
        echo 'Outlet 5: ' . (($this->status->getOutlet5() == DigitalPinValue::$HIGH) ? 'On' : 'Off') . '<br>';
        echo 'Outlet 6: ' . (($this->status->getOutlet6() == DigitalPinValue::$HIGH) ? 'On' : 'Off') . '<br>';
        echo 'Outlet 7: ' . (($this->status->getOutlet7() == DigitalPinValue::$HIGH) ? 'On' : 'Off') . '<br>';
        echo 'Outlet 8: ' . (($this->status->getOutlet8() == DigitalPinValue::$HIGH) ? 'On' : 'Off') . '<br>';
        echo 'RO/DI -> Aquarium: ' . (($this->status->getRodiAquariumSolenoid() == DigitalPinValue::$HIGH) ? 'On' : 'Off') . '<br>';
        echo 'RO/DI -> Saltwater Reservoir: ' . (($this->status->getRodiReservoirSolenoid() == DigitalPinValue::$HIGH) ? 'On' : 'Off') . '<br>';
        echo 'Aquarium -> Drain: ' . (($this->status->getAquariumDrainSolenoid() == DigitalPinValue::$HIGH) ? 'On' : 'Off') . '<br>';
    }

    public function setSocket1($value = 0) {
        $value = $this->sanitize($value);
        $this->client->digitalWrite(24, $value);
    }
    
    public function setSocket2($value = 0) {
        $value = $this->sanitize($value);
        $this->client->digitalWrite(25, $value);
    }
    
    public function setSocket3($value = 0) {
        $value = $this->sanitize($value);
        $this->client->digitalWrite(26, $value);
    }
    
    public function setSocket4($value = 0) {
        $value = $this->sanitize($value);
        $this->client->digitalWrite(27, $value);
    }
    
    public function setSocket5($value = 0) {
        $value = $this->sanitize($value);
        $this->client->digitalWrite(28, $value);
    }
    
    public function setSocket6($value = 0) {
        $value = $this->sanitize($value);
        $this->client->digitalWrite(29, $value);
    }
    
    public function setSocket7($value = 0) {
        $value = $this->sanitize($value);
        $this->client->digitalWrite(30, $value);
    }
    
    public function setSocket8($value = 0) {
        $value = $this->sanitize($value);
        $this->client->digitalWrite(31, $value);
    }
    
    public function setRodiAquarium($value = 0) {
        $value = $this->sanitize($value);
        $this->client->digitalWrite(32, $value);
    }
    
    public function setRodiReservoir($value = 0) {
        $value = $this->sanitize($value);
        $this->client->digitalWrite(33, $value);
    }
    
    public function setAquariumDrain($value = 0) {
        $value = $this->sanitize($value);
        $this->client->digitalWrite(36, $value);
    }
    
    public function getSystem() {
        print_r($this->client->getSystem());
    }

    public function getStatus() {
        echo JsonRenderer::render($this->client->getStatus());
    }

    public function setWaterchange($gallons) {
        if($gallons <= 0) {
            throw new Exception('Gallons must be greater than zero.');
        }
        $this->client->setWaterchage($gallons);
    }

    public function setMaintenance($mode) {
        if($mode != 0 && $mode != 1) {
            throw new Exception('Invalid maintenance mode value. Must be either a 1 or 0.');
        }
        $this->client->setMaintenance($mode);
    }

    private function sanitize($value) {

        if($value != DigitalPinValue::$HIGH && $value != DigitalPinValue::$LOW) {
            throw new Exception('Socket value must be either DigitalPinValue::HIGH or DigitalPinValue::LOW');
        }

        return $value == '1' ? DigitalPinValue::$HIGH : DigitalPinValue::$LOW;
    }
}
?>