<?php
class AquariumController extends BaseController {

    private $client;

    public function __construct() {
        parent::__construct();
        $this->client = new AquariumClient('192.168.11.52', 'ABC123');
    }

    public function getAquariumTemp() {
        return $this->client->getAquariumTemp();
    }

    public function getAirTemp() {
        return $this->client->getAirTemp();
    }
}
?>