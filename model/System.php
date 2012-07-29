<?php
class System extends BaseModel {

    private $ipAddress;
    private $netmask;
    private $gateway;
    private $availableMemory;
    private $uptime;

    public function __construct() { }

    public function setIpAddress($ipAddress) {
        $this->ipAddress = $ipAddress;
    }
    
    public function getIpAddress() {
        return $this->ipAddress;
    }
    
    public function setNetmask($netmask) {
        $this->netmask = $netmask;
    }
    
    public function getNetmask() {
        return $this->netmask;
    }
    
    public function setGateway($gateway) {
        $this->gateway = $gateway;
    }
    
    public function getGateway() {
        return $this->gateway;
    }
    
    public function setAvailableMemory($memory) {
        $this->availableMemory = $memory;
    }
    
    public function getAvailableMemory() {
        return $this->availableMemory;
    }
    
    public function setUptime($uptime) {
        $this->uptime = $uptime;
    }
    
    public function getUptime() {
        return $this->uptime;
    }
}
?>