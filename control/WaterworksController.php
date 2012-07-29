<?php
class WaterworksController extends BaseController {

    private $client;

    public function __construct() {
        parent::__construct();
        $this->client = new WaterworksClient('192.168.11.51', 'ABC123');
    }

    public function index() {

        echo 'Outlet 1: ' . (($this->client->getOutlet1() == DigitalPinValue::$HIGH) ? 'On' : 'Off') . '<br>';
        echo 'Outlet 2: ' . (($this->client->getOutlet2() == DigitalPinValue::$HIGH) ? 'On' : 'Off') . '<br>';
        echo 'Outlet 3: ' . (($this->client->getOutlet3() == DigitalPinValue::$HIGH) ? 'On' : 'Off') . '<br>';
        echo 'Outlet 4: ' . (($this->client->getOutlet4() == DigitalPinValue::$HIGH) ? 'On' : 'Off') . '<br>';
        echo 'Outlet 5: ' . (($this->client->getOutlet5() == DigitalPinValue::$HIGH) ? 'On' : 'Off') . '<br>';
        echo 'Outlet 6: ' . (($this->client->getOutlet6() == DigitalPinValue::$HIGH) ? 'On' : 'Off') . '<br>';
        echo 'Outlet 7: ' . (($this->client->getOutlet7() == DigitalPinValue::$HIGH) ? 'On' : 'Off') . '<br>';
        echo 'Outlet 8: ' . (($this->client->getOutlet8() == DigitalPinValue::$HIGH) ? 'On' : 'Off') . '<br>';
        echo 'RO/DI -> Aquarium: ' . (($this->client->getRodiAquariumSolenoid() == DigitalPinValue::$HIGH) ? 'On' : 'Off') . '<br>';
        echo 'RO/DI -> Saltwater Reservoir: ' . (($this->client->getRodiReservoidSolenoid() == DigitalPinValue::$HIGH) ? 'On' : 'Off') . '<br>';
        echo 'Aquarium -> Drain: ' . (($this->client->getAquariumDrainSolenoid() == DigitalPinValue::$HIGH) ? 'On' : 'Off') . '<br>';
    }

    public function getButtonStates() {

        echo json_encode(
            array(
                $this->client->getOutlet1(),
                $this->client->getOutlet2(),
                $this->client->getOutlet3(),
                $this->client->getOutlet4(),
                $this->client->getOutlet5(),
                $this->client->getOutlet6(),
                $this->client->getOutlet7(),
                $this->client->getOutlet8(),
                $this->client->getRodiAquariumSolenoid(),
                $this->client->getRodiReservoidSolenoid(),
                $this->client->getAquariumDrainSolenoid()                
            ));
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
        $this->client->digitalWrite(28, $value);
    }
    
    public function setSocket8($value = 0) {
        $value = $this->sanitize($value);
        $this->client->digitalWrite(29, $value);
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
        print_r(JsonToModel::transform($this->client->getSystem(), 'System'));
    }
    public function getStatus() {
        echo $this->client->getStatus();
        //print_r(JsonToModel::transform($this->client->getStatus(), 'Status'));
    }
    
    public function waterchange($gallons) {
        if($gallons <= 0) {
            throw new Exception('Gallons must be greater than zero.');
        }
        $this->client->waterchage($gallons);
    }

    private function sanitize($value) {

        if($value != DigitalPinValue::$HIGH && $value != DigitalPinValue::$LOW) {
            throw new Exception('Socket value must be either DigitalPinValue::HIGH or DigitalPinValue::LOW');
        }

        return $value == '1' ? DigitalPinValue::$HIGH : DigitalPinValue::$LOW;
    }
}
?>