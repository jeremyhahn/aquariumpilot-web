
<?php
class System extends DomainModel {

    private $ipAddress;
    private $netmask;
    private $gateway;
    private $availableMemory;
    private $uptime;
    private $hours;
    private $minutes;
    private $seconds;
    private $dayOfWeek;
    private $day;
    private $month;
    private $year;
    private $tempF;
    private $yesterday;
    private $sda;
    private $scl;

    public function __construct($ipAddress = null, $netmask = null, $gateway = null, $availableMemory = null,
         $uptime = null, $hours = null, $minutes = null, $seconds = null, $dayOfWeek = null, $day = null,
         $month = null, $year = null, $tempF = null, $yesterday = null, $sda = null, $scl = null) {

        $this->ipAddress = $ipAddress;
        $this->netmask = $netmask;
        $this->gateway = $gateway;
        $this->availableMemory = $availableMemory;
        $this->uptime = $uptime;
        $this->hours = $hours;
        $this->minutes = $minutes;
        $this->seconds = $seconds;
        $this->dayOfWeek = $dayOfWeek;
        $this->day = $day;
        $this->month = $month;
        $this->year = $year;
        $this->tempF = $tempF;
        $this->yesterday = $yesterday;
        $this->sda = $sda;
        $this->scl = $scl;
    }

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

    public function setAvailableMemory($availableMemory) {
        $this->availableMemory = $availableMemory;
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

    public function setHours($hours) {
        $this->hours = $hours;
    }

    public function getHours() {
        return $this->hours;
    }

    public function setMinutes($minutes) {
        $this->minutes = $minutes;
    }

    public function getMinutes() {
        return $this->minutes;
    }

    public function setSeconds($seconds) {
        $this->seconds = $seconds;
    }

    public function getSeconds() {
        return $this->seconds;
    }

    public function setDayOfWeek($dayOfWeek) {
        $this->dayOfWeek = $dayOfWeek;
    }

    public function getDayOfWeek() {
        return $this->dayOfWeek;
    }

    public function setDay($day) {
        $this->day = $day;
    }

    public function getDay() {
        return $this->day;
    }

    public function setMonth($month) {
        $this->month = $month;
    }

    public function getMonth() {
        return $this->month;
    }

    public function setYear($year) {
        $this->year = $year;
    }

    public function getYear() {
        return $this->year;
    }

    public function setTempF($tempF) {
        $this->tempF = $tempF;
    }

    public function getTempF() {
        return $this->tempF;
    }

    public function setYesterday($yesterday) {
        $this->yesterday = $yesterday;
    }

    public function getYesterday() {
        return $this->yesterday;
    }

    public function setSDA($sda) {
        $this->sda = $sda;
    }

    public function getSDA() {
        return $this->sda;
    }

    public function setSCL($scl) {
        $this->scl = $scl;
    }

    public function getSCL() {
        return $this->scl;
    }
}
?>