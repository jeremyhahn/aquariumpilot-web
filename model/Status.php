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
    private $wcCycle;
    private $wcTotalGallons;
    private $wcCycle;
    private $wcDrainTimerId;
    private $wcDailyTimerEnabled;
    private $wcCycle;
    private $activeTimers;
    private $maintenanceInProgress;

    public function __construct($outlet1 = null, $outlet2 = null, $outlet3 = null, $outlet4 = null, $outlet5 = null, $outlet6 = null, $outlet7 = null, $outlet8 = null, $rodiAquariumSolenoid = null, $rodiReservoirSolenoid = null, $aquariumDrainSolenoid = null, $upperFloatValve = null, $lowerFloatValve = null, $reservoirTemp = null, $waterChangeInProgress = null, $wcTotalGallons = null, $wcCycle = null, $wcDrainTimerId = null, $wcDrainTimerEnabled = null, $wcFillTimerId = null, $wcCycle = null, $wcTotalGallons = null, $wcCycle = null, $wcDrainTimerId = null, $wcDailyTimerEnabled = null, $wcCycle = null, $activeTimers = null, $maintenanceInProgress = null) {
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
        $this->wcCycle = $wcCycle;
        $this->wcTotalGallons = $wcTotalGallons;
        $this->wcCycle = $wcCycle;
        $this->wcDrainTimerId = $wcDrainTimerId;
        $this->wcDailyTimerEnabled = $wcDailyTimerEnabled;
        $this->wcCycle = $wcCycle;
        $this->activeTimers = $activeTimers;
        $this->maintenanceInProgress = $maintenanceInProgress;
    }

    public function setOutlet1($outlet1) {
        $this->outlet1 = $outlet1;
    }

    public function getOutlet1() {
        return $this->outlet1;
    }

    public function setOutlet2($outlet2) {
        $this->outlet2 = $outlet2;
    }

    public function getOutlet2() {
        return $this->outlet2;
    }

    public function setOutlet3($outlet3) {
        $this->outlet3 = $outlet3;
    }

    public function getOutlet3() {
        return $this->outlet3;
    }

    public function setOutlet4($outlet4) {
        $this->outlet4 = $outlet4;
    }

    public function getOutlet4() {
        return $this->outlet4;
    }

    public function setOutlet5($outlet5) {
        $this->outlet5 = $outlet5;
    }

    public function getOutlet5() {
        return $this->outlet5;
    }

    public function setOutlet6($outlet6) {
        $this->outlet6 = $outlet6;
    }

    public function getOutlet6() {
        return $this->outlet6;
    }

    public function setOutlet7($outlet7) {
        $this->outlet7 = $outlet7;
    }

    public function getOutlet7() {
        return $this->outlet7;
    }

    public function setOutlet8($outlet8) {
        $this->outlet8 = $outlet8;
    }

    public function getOutlet8() {
        return $this->outlet8;
    }

    public function setRodiAquariumSolenoid($rodiAquariumSolenoid) {
        $this->rodiAquariumSolenoid = $rodiAquariumSolenoid;
    }

    public function getRodiAquariumSolenoid() {
        return $this->rodiAquariumSolenoid;
    }

    public function setRodiReservoirSolenoid($rodiReservoirSolenoid) {
        $this->rodiReservoirSolenoid = $rodiReservoirSolenoid;
    }

    public function getRodiReservoirSolenoid() {
        return $this->rodiReservoirSolenoid;
    }

    public function setAquariumDrainSolenoid($aquariumDrainSolenoid) {
        $this->aquariumDrainSolenoid = $aquariumDrainSolenoid;
    }

    public function getAquariumDrainSolenoid() {
        return $this->aquariumDrainSolenoid;
    }

    public function setUpperFloatValve($upperFloatValve) {
        $this->upperFloatValve = $upperFloatValve;
    }

    public function getUpperFloatValve() {
        return $this->upperFloatValve;
    }

    public function setLowerFloatValve($lowerFloatValve) {
        $this->lowerFloatValve = $lowerFloatValve;
    }

    public function getLowerFloatValve() {
        return $this->lowerFloatValve;
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

    public function getWaterChangeInProgress() {
        return $this->waterChangeInProgress;
    }

    public function setWcTotalGallons($wcTotalGallons) {
        $this->wcTotalGallons = $wcTotalGallons;
    }

    public function getWcTotalGallons() {
        return $this->wcTotalGallons;
    }

    public function setWcCycle($wcCycle) {
        $this->wcCycle = $wcCycle;
    }

    public function getWcCycle() {
        return $this->wcCycle;
    }

    public function setWcDrainTimerId($wcDrainTimerId) {
        $this->wcDrainTimerId = $wcDrainTimerId;
    }

    public function getWcDrainTimerId() {
        return $this->wcDrainTimerId;
    }

    public function setWcDrainTimerEnabled($wcDrainTimerEnabled) {
        $this->wcDrainTimerEnabled = $wcDrainTimerEnabled;
    }

    public function getWcDrainTimerEnabled() {
        return $this->wcDrainTimerEnabled;
    }

    public function setWcFillTimerId($wcFillTimerId) {
        $this->wcFillTimerId = $wcFillTimerId;
    }

    public function getWcFillTimerId() {
        return $this->wcFillTimerId;
    }

    public function setWcCycle($wcCycle) {
        $this->wcCycle = $wcCycle;
    }

    public function getWcCycle() {
        return $this->wcCycle;
    }

    public function setWcTotalGallons($wcTotalGallons) {
        $this->wcTotalGallons = $wcTotalGallons;
    }

    public function getWcTotalGallons() {
        return $this->wcTotalGallons;
    }

    public function setWcCycle($wcCycle) {
        $this->wcCycle = $wcCycle;
    }

    public function getWcCycle() {
        return $this->wcCycle;
    }

    public function setWcDrainTimerId($wcDrainTimerId) {
        $this->wcDrainTimerId = $wcDrainTimerId;
    }

    public function getWcDrainTimerId() {
        return $this->wcDrainTimerId;
    }

    public function setWcDailyTimerEnabled($wcDailyTimerEnabled) {
        $this->wcDailyTimerEnabled = $wcDailyTimerEnabled;
    }

    public function getWcDailyTimerEnabled() {
        return $this->wcDailyTimerEnabled;
    }

    public function setWcCycle($wcCycle) {
        $this->wcCycle = $wcCycle;
    }

    public function getWcCycle() {
        return $this->wcCycle;
    }

    public function setActiveTimers($activeTimers) {
        $this->activeTimers = $activeTimers;
    }

    public function getActiveTimers() {
        return $this->activeTimers;
    }

    public function setMaintenanceInProgress($maintenanceInProgress) {
        $this->maintenanceInProgress = $maintenanceInProgress;
    }

    public function getMaintenanceInProgress() {
        return $this->maintenanceInProgress;
    }
}
?>