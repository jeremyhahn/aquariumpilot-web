<?php
class AquariumController extends BaseController {

    private $client;

    public function __construct() {
        parent::__construct();
        $this->client = new AquariumClient('192.168.11.52', 'ABC123');
    }

    public function index() {
    }
    
    public function getAquariumTemp() {
        return $this->client->getAquariumTemp();
    }

    public function getSurfaceTemp() {
        return $this->client->getSurfaceTemp();
    }

    public function getRoomTemp() {
        return $this->client->getRoomTemp();
    }
    
    public function getPh() {
        echo $this->client->getPh();
    }
}
?>