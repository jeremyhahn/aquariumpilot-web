<?php
class Status extends BaseModel {

    private $outlet1;
    private $outlet2;
    private $outlet3;
    private $outlet4;
    private $outlet5;
    private $outlet6;
    private $outlet7;
    private $outlet8;
    private $rodiAquariumSolenoid;
    private $rodiReservoirSolenoid;
    private $aquariumDrainSolenoid;
    private $upperFloatValve;
    private $lowerFloatValve;
    private $reservoirTemp;
    private $waterChangeInProgress;
    private $wcTotalGallons;
    private $wcCycle;
    private $wcDrainTimerId;
    private $wcDrainTimerEnabled;
    private $wcFillTimerId;
    private $wcFillTimerEnabled;
    private $wcDailyTimerId;
    private $wcDailyTimerEnabled;
    private $activeTimers;
    private $maintenanceInProgress;

    public function __construct($outlet1 = 0, $outlet2 = 0, $outlet3 = 0, $outlet4 = 0,
             $outlet5 = 0, $outlet6 = 0, $outlet7 = 0, $outlet8 = 0, $rodiAquariumSolenoid = 0,
             $rodiReservoirSolenoid = 0, $aquariumDrainSolenoid = 0, $upperFloatValve = 0,
             $lowerFloatValve = 0, $reservoirTemp = 0, $waterChangeInProgress = 0, $wcTotalGallons = 0,
             $wcCycle = 0, $wcDrainTimerId = 0, $wcDrainTimerEnabled = 0, $wcFillTimerId = 0,
             $wcFillTimerEnabled = 0, $wcDailyTimerId = 0, $wcDailyTimerEnabled = 0, $activeTimers = 0,
             $maintenanceInProgress = 0) {

        $this->outlet1 = $outlet1;
        $this->outlet2 = $outlet2;
        $this->outlet3 = $outlet3;
        $this->outlet4 = $outlet4;
        $this->outlet5 = $outlet5;
        $this->outlet6 = $outlet6;
        $this->outlet7 = $outlet7;
        $this->outlet8 = $outlet8;
        $this->rodiAquariumSolenoid = $rodiAquariumSolenoid;
        $this->rodiReservoirSolenoid = $rodiReservoirSolenoid;
        $this->aquariumDrainSolenoid = $aquariumDrainSolenoid;
        $this->upperFloatValve = $upperFloatValve;
        $this->lowerFloatValve = $lowerFloatValve;
        $this->reservoirTemp = $reservoirTemp;
        $this->waterChangeInProgress = $waterChangeInProgress;
        $this->wcTotalGallons = $wcTotalGallons;
        $this->wcCycle = $wcCycle;
        $this->wcDrainTimerId = $wcDrainTimerId;
        $this->wcDrainTimerEnabled = $wcDrainTimerEnabled;
        $this->wcFillTimerId = $wcFillTimerId;
        $this->wcFillTimerEnabled = $wcFillTimerEnabled;
        $this->wcDailyTimerId = $wcDailyTimerId;
        $this->wcDailyTimerEnabled = $wcDailyTimerEnabled;
        $this->activeTimers = $activeTimers;
        $this->maintenanceInProgress = $maintenanceInProgress;
    }

    public function setOutlet1($outlet1) {
        $this->outlet1 = $outlet1;
    }

    public function getOutlet1() {
        return (int)$this->outlet1;
    }

    public function setOutlet2($outlet2) {
        $this->outlet2 = $outlet2;
    }

    public function getOutlet2() {
        return (int)$this->outlet2;
    }

    public function setOutlet3($outlet3) {
        $this->outlet3 = $outlet3;
    }

    public function getOutlet3() {
        return (int)$this->outlet3;
    }

    public function setOutlet4($outlet4) {
        $this->outlet4 = $outlet4;
    }

    public function getOutlet4() {
        return (int)$this->outlet4;
    }

    public function setOutlet5($outlet5) {
        $this->outlet5 = $outlet5;
    }

    public function getOutlet5() {
        return (int)$this->outlet5;
    }

    public function setOutlet6($outlet6) {
        $this->outlet6 = $outlet6;
    }

    public function getOutlet6() {
        return (int)$this->outlet6;
    }

    public function setOutlet7($outlet7) {
        $this->outlet7 = $outlet7;
    }

    public function getOutlet7() {
        return (int)$this->outlet7;
    }

    public function setOutlet8($outlet8) {
        $this->outlet8 = $outlet8;
    }

    public function getOutlet8() {
        return (int)$this->outlet8;
    }

    public function setRodiAquariumSolenoid($rodiAquariumSolenoid) {
        $this->rodiAquariumSolenoid = $rodiAquariumSolenoid;
    }

    public function getRodiAquariumSolenoid() {
        return (int)$this->rodiAquariumSolenoid;
    }

    public function setRodiReservoirSolenoid($rodiReservoirSolenoid) {
        $this->rodiReservoirSolenoid = $rodiReservoirSolenoid;
    }

    public function getRodiReservoirSolenoid() {
        return (int)$this->rodiReservoirSolenoid;
    }

    public function setAquariumDrainSolenoid($aquariumDrainSolenoid) {
        $this->aquariumDrainSolenoid = $aquariumDrainSolenoid;
    }

    public function getAquariumDrainSolenoid() {
        return (int)$this->aquariumDrainSolenoid;
    }

    public function setUpperFloatValve($upperFloatValve) {
        $this->upperFloatValve = $upperFloatValve;
    }

    public function getUpperFloatValve() {
        return (int)$this->upperFloatValve;
    }

    public function setLowerFloatValve($lowerFloatValve) {
        $this->lowerFloatValve = $lowerFloatValve;
    }

    public function getLowerFloatValve() {
        return (int)$this->lowerFloatValve;
    }

    public function setReservoirTemp($reservoirTemp) {
        $this->reservoirTemp = $reservoirTemp;
    }

    public function getReservoirTemp() {
        return $this->reservoirTemp;
    }

    public function setWaterChangeInProgress($waterChangeInProgress) {
        $this->waterChangeInProgress = $waterChangeInProgress;
    }

    public function isWaterChangeInProgress() {
        return (int)$this->waterChangeInProgress;
    }

    public function setWcTotalGallons($wcTotalGallons) {
        $this->wcTotalGallons = $wcTotalGallons;
    }

    public function getWcTotalGallons() {
        return (int)$this->wcTotalGallons;
    }

    public function setWcCycle($wcCycle) {
        $this->wcCycle = $wcCycle;
    }

    public function getWcCycle() {
        return (int)$this->wcCycle;
    }

    public function setWcDrainTimerId($wcDrainTimerId) {
        $this->wcDrainTimerId = $wcDrainTimerId;
    }

    public function getWcDrainTimerId() {
        return (int)$this->wcDrainTimerId;
    }

    public function setWcDrainTimerEnabled($wcDrainTimerEnabled) {
        $this->wcDrainTimerEnabled = $wcDrainTimerEnabled;
    }

    public function getWcDrainTimerEnabled() {
        return (int)$this->wcDrainTimerEnabled;
    }

    public function setWcFillTimerId($wcFillTimerId) {
        $this->wcFillTimerId = $wcFillTimerId;
    }

    public function getWcFillTimerId() {
        return (int)$this->wcFillTimerId;
    }

    public function setWcFillTimerEnabled($wcFillTimerEnabled) {
        $this->wcFillTimerEnabled = $wcFillTimerEnabled;
    }

    public function getWcFillTimerEnabled() {
        return (int)$this->wcFillTimerEnabled;
    }

    public function setWcDailyTimerId($wcDailyTimerId) {
        $this->wcDailyTimerId = $wcDailyTimerId;
    }

    public function getWcDailyTimerId() {
        return (int)$this->wcDailyTimerId;
    }

    public function setWcDailyTimerEnabled($wcDailyTimerEnabled) {
        $this->wcDailyTimerEnabled = $wcDailyTimerEnabled;
    }

    public function getWcDailyTimerEnabled() {
        return (int)$this->wcDailyTimerEnabled;
    }

    public function setActiveTimers($activeTimers) {
        $this->activeTimers = $activeTimers;
    }

    public function getActiveTimers() {
        return (int)$this->activeTimers;
    }

    public function setMaintenanceInProgress($maintenanceInProgress) {
        $this->maintenanceInProgress = $maintenanceInProgress;
    }

    public function getMaintenanceInProgress() {
        return (int)$this->maintenanceInProgress;
    }

    public function isInMaintenanceMode() {
        return (int)$this->maintenanceInProgress; 
    }
}
?>