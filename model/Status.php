
<?php
class Status extends DomainModel {

    private $outlet1;
    private $outlet2;
    private $outlet3;
    private $outlet4;
    private $outlet5;
    private $outlet6;
    private $outlet7;
    private $outlet8;
    private $aquariumRodi;
    private $aquariumFill;
    private $aquariumDrain;
    private $reservoirPowerhead;
    private $reservoirRodi;
    private $reservoirTemp;
    private $upperFloatValve;
    private $lowerFloatValve;
    private $roomTemp;
    private $wcTotalGallons;
    private $wcCycle;
    private $wcDrainTimerId;
    private $wcFillTimerId;
    private $wcLastChangedMonth;
    private $wcLastChangedDay;
    private $topOffTimerId;
    private $topOffLastMonth;
    private $topOffLastDay;
    private $yesterday;
    private $waterChangeInProgress;
    private $topOffInProgress;
    private $maintenanceInProgress;

    public function __construct($outlet1 = null, $outlet2 = null, $outlet3 = null, $outlet4 = null,
         $outlet5 = null, $outlet6 = null, $outlet7 = null, $outlet8 = null, $aquariumRodi = null,
         $aquariumFill = null, $aquariumDrain = null, $reservoirPowerhead = null, $reservoirRodi = null,
         $reservoirTemp = null, $upperFloatValve = null, $lowerFloatValve = null, $roomTemp = null,
         $wcTotalGallons = null, $wcCycle = null, $wcDrainTimerId = null, $wcFillTimerId = null,
         $wcLastChangedMonth = null, $wcLastChangedDay = null, $topOffTimerId = null, $topOffLastMonth = null,
         $topOffLastDay = null, $yesterday = null, $waterChangeInProgress = null, $topOffInProgress = null,
         $maintenanceInProgress = null) {

        $this->outlet1 = $outlet1;
        $this->outlet2 = $outlet2;
        $this->outlet3 = $outlet3;
        $this->outlet4 = $outlet4;
        $this->outlet5 = $outlet5;
        $this->outlet6 = $outlet6;
        $this->outlet7 = $outlet7;
        $this->outlet8 = $outlet8;
        $this->aquariumRodi = $aquariumRodi;
        $this->aquariumFill = $aquariumFill;
        $this->aquariumDrain = $aquariumDrain;
        $this->reservoirPowerhead = $reservoirPowerhead;
        $this->reservoirRodi = $reservoirRodi;
        $this->reservoirTemp = $reservoirTemp;
        $this->upperFloatValve = $upperFloatValve;
        $this->lowerFloatValve = $lowerFloatValve;
        $this->roomTemp = $roomTemp;
        $this->wcTotalGallons = $wcTotalGallons;
        $this->wcCycle = $wcCycle;
        $this->wcDrainTimerId = $wcDrainTimerId;
        $this->wcFillTimerId = $wcFillTimerId;
        $this->wcLastChangedMonth = $wcLastChangedMonth;
        $this->wcLastChangedDay = $wcLastChangedDay;
        $this->topOffTimerId = $topOffTimerId;
        $this->topOffLastMonth = $topOffLastMonth;
        $this->topOffLastDay = $topOffLastDay;
        $this->yesterday = $yesterday;
        $this->waterChangeInProgress = $waterChangeInProgress;
        $this->topOffInProgress = $topOffInProgress;
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

    public function setAquariumRodi($aquariumRodi) {
        $this->aquariumRodi = $aquariumRodi;
    }

    public function getAquariumRodi() {
        return $this->aquariumRodi;
    }

    public function setAquariumFill($aquariumFill) {
        $this->aquariumFill = $aquariumFill;
    }

    public function getAquariumFill() {
        return $this->aquariumFill;
    }

    public function setAquariumDrain($aquariumDrain) {
        $this->aquariumDrain = $aquariumDrain;
    }

    public function getAquariumDrain() {
        return $this->aquariumDrain;
    }

    public function setReservoirPowerhead($reservoirPowerhead) {
        $this->reservoirPowerhead = $reservoirPowerhead;
    }

    public function getReservoirPowerhead() {
        return $this->reservoirPowerhead;
    }

    public function setReservoirRodi($reservoirRodi) {
        $this->reservoirRodi = $reservoirRodi;
    }

    public function getReservoirRodi() {
        return $this->reservoirRodi;
    }

    public function setReservoirTemp($reservoirTemp) {
        $this->reservoirTemp = $reservoirTemp;
    }

    public function getReservoirTemp() {
        return $this->reservoirTemp;
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

    public function setRoomTemp($roomTemp) {
        $this->roomTemp = $roomTemp;
    }

    public function getRoomTemp() {
        return $this->roomTemp;
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

    public function setWcFillTimerId($wcFillTimerId) {
        $this->wcFillTimerId = $wcFillTimerId;
    }

    public function getWcFillTimerId() {
        return $this->wcFillTimerId;
    }

    public function setWcLastChangedMonth($wcLastChangedMonth) {
        $this->wcLastChangedMonth = $wcLastChangedMonth;
    }

    public function getWcLastChangedMonth() {
        return $this->wcLastChangedMonth;
    }

    public function setWcLastChangedDay($wcLastChangedDay) {
        $this->wcLastChangedDay = $wcLastChangedDay;
    }

    public function getWcLastChangedDay() {
        return $this->wcLastChangedDay;
    }

    public function setTopOffTimerId($topOffTimerId) {
        $this->topOffTimerId = $topOffTimerId;
    }

    public function getTopOffTimerId() {
        return $this->topOffTimerId;
    }

    public function setTopOffLastMonth($topOffLastMonth) {
        $this->topOffLastMonth = $topOffLastMonth;
    }

    public function getTopOffLastMonth() {
        return $this->topOffLastMonth;
    }

    public function setTopOffLastDay($topOffLastDay) {
        $this->topOffLastDay = $topOffLastDay;
    }

    public function getTopOffLastDay() {
        return $this->topOffLastDay;
    }

    public function setYesterday($yesterday) {
        $this->yesterday = $yesterday;
    }

    public function getYesterday() {
        return $this->yesterday;
    }

    public function setWaterChangeInProgress($waterChangeInProgress) {
        $this->waterChangeInProgress = $waterChangeInProgress;
    }

    public function getWaterChangeInProgress() {
        return $this->waterChangeInProgress;
    }

    public function setTopOffInProgress($topOffInProgress) {
        $this->topOffInProgress = $topOffInProgress;
    }

    public function getTopOffInProgress() {
        return $this->topOffInProgress;
    }

    public function setMaintenanceInProgress($maintenanceInProgress) {
        $this->maintenanceInProgress = $maintenanceInProgress;
    }

    public function getMaintenanceInProgress() {
        return $this->maintenanceInProgress;
    }
}
?>