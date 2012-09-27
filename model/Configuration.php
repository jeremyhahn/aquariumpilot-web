<?php
class Configuration extends DomainModel {

    private $autoWaterChangesEnabled;
    private $autoFillReservoirEnabled;
    private $autoCirculationEnabled;
    private $reservoirPowerheadOutlet;
    private $aquariumFillPumpOutlet;
    private $drainMinutesPerGallon;
    private $drainSecondsPerGallon;
    private $fillMinutesPerGallon;
    private $fillSecondsPerGallon;
    private $autoWaterChangeHour;
    private $autoWaterChangeMinutes;
    private $autoWaterChangeGallons;
    private $autoTopOffEnabled;
    private $autoTopMinutes;
    private $pinOutlet1;
    private $pinOutlet2;
    private $pinOutlet3;
    private $pinOutlet4;
    private $pinOutlet5;
    private $pinOutlet6;
    private $pinOutlet7;
    private $pinOutlet8;
    private $pinAquariumRodi;
    private $pinReservoirRodi;
    private $pinAquariumDrain;
    private $pinUpperFloatValve;
    private $pinLowerFloatValve;
    private $oneWire;

    public function __construct($autoWaterChangesEnabled = null, $autoFillReservoirEnabled = null,
         $autoCirculationEnabled = null, $reservoirPowerheadOutlet = null, $aquariumFillPumpOutlet = null,
         $drainMinutesPerGallon = null, $drainSecondsPerGallon = null, $fillMinutesPerGallon = null,
         $fillSecondsPerGallon = null, $autoWaterChangeHour = null, $autoWaterChangeMinutes = null,
         $autoWaterChangeGallons = null, $autoTopOffEnabled = null, $autoTopMinutes = null, $pinOutlet1 = null,
         $pinOutlet2 = null, $pinOutlet3 = null, $pinOutlet4 = null, $pinOutlet5 = null, $pinOutlet6 = null,
         $pinOutlet7 = null, $pinOutlet8 = null, $pinAquariumRodi = null, $pinReservoirRodi = null, $pinAquariumDrain = null,
         $pinUpperFloatValve = null, $pinLowerFloatValve = null, $oneWire = null) {

        $this->autoWaterChangesEnabled = $autoWaterChangesEnabled;
        $this->autoFillReservoirEnabled = $autoFillReservoirEnabled;
        $this->autoCirculationEnabled = $autoCirculationEnabled;
        $this->reservoirPowerheadOutlet = $reservoirPowerheadOutlet;
        $this->aquariumFillPumpOutlet = $aquariumFillPumpOutlet;
        $this->drainMinutesPerGallon = $drainMinutesPerGallon;
        $this->drainSecondsPerGallon = $drainSecondsPerGallon;
        $this->fillMinutesPerGallon = $fillMinutesPerGallon;
        $this->fillSecondsPerGallon = $fillSecondsPerGallon;
        $this->autoWaterChangeHour = $autoWaterChangeHour;
        $this->autoWaterChangeMinutes = $autoWaterChangeMinutes;
        $this->autoWaterChangeGallons = $autoWaterChangeGallons;
        $this->autoTopOffEnabled = $autoTopOffEnabled;
        $this->autoTopMinutes = $autoTopMinutes;
        $this->pinOutlet1 = $pinOutlet1;
        $this->pinOutlet2 = $pinOutlet2;
        $this->pinOutlet3 = $pinOutlet3;
        $this->pinOutlet4 = $pinOutlet4;
        $this->pinOutlet5 = $pinOutlet5;
        $this->pinOutlet6 = $pinOutlet6;
        $this->pinOutlet7 = $pinOutlet7;
        $this->pinOutlet8 = $pinOutlet8;
        $this->pinAquariumRodi = $pinAquariumRodi;
        $this->pinReservoirRodi = $pinReservoirRodi;
        $this->pinAquariumDrain = $pinAquariumDrain;
        $this->pinUpperFloatValve = $pinUpperFloatValve;
        $this->pinLowerFloatValve = $pinLowerFloatValve;
        $this->oneWire = $oneWire;
    }

    public function setAutoWaterChangesEnabled($autoWaterChangesEnabled) {
        $this->autoWaterChangesEnabled = $autoWaterChangesEnabled;
    }

    public function getAutoWaterChangesEnabled() {
        return $this->autoWaterChangesEnabled;
    }

    public function setAutoFillReservoirEnabled($autoFillReservoirEnabled) {
        $this->autoFillReservoirEnabled = $autoFillReservoirEnabled;
    }

    public function getAutoFillReservoirEnabled() {
        return $this->autoFillReservoirEnabled;
    }

    public function setAutoCirculationEnabled($autoCirculationEnabled) {
        $this->autoCirculationEnabled = $autoCirculationEnabled;
    }

    public function getAutoCirculationEnabled() {
        return $this->autoCirculationEnabled;
    }

    public function setReservoirPowerheadOutlet($reservoirPowerheadOutlet) {
        $this->reservoirPowerheadOutlet = $reservoirPowerheadOutlet;
    }

    public function getReservoirPowerheadOutlet() {
        return $this->reservoirPowerheadOutlet;
    }

    public function setAquariumFillPumpOutlet($aquariumFillPumpOutlet) {
        $this->aquariumFillPumpOutlet = $aquariumFillPumpOutlet;
    }

    public function getAquariumFillPumpOutlet() {
        return $this->aquariumFillPumpOutlet;
    }

    public function setDrainMinutesPerGallon($drainMinutesPerGallon) {
        $this->drainMinutesPerGallon = $drainMinutesPerGallon;
    }

    public function getDrainMinutesPerGallon() {
        return $this->drainMinutesPerGallon;
    }

    public function setDrainSecondsPerGallon($drainSecondsPerGallon) {
        $this->drainSecondsPerGallon = $drainSecondsPerGallon;
    }

    public function getDrainSecondsPerGallon() {
        return $this->drainSecondsPerGallon;
    }

    public function setFillMinutesPerGallon($fillMinutesPerGallon) {
        $this->fillMinutesPerGallon = $fillMinutesPerGallon;
    }

    public function getFillMinutesPerGallon() {
        return $this->fillMinutesPerGallon;
    }

    public function setFillSecondsPerGallon($fillSecondsPerGallon) {
        $this->fillSecondsPerGallon = $fillSecondsPerGallon;
    }

    public function getFillSecondsPerGallon() {
        return $this->fillSecondsPerGallon;
    }

    public function setAutoWaterChangeHour($autoWaterChangeHour) {
        $this->autoWaterChangeHour = $autoWaterChangeHour;
    }

    public function getAutoWaterChangeHour() {
        return $this->autoWaterChangeHour;
    }

    public function setAutoWaterChangeMinutes($autoWaterChangeMinutes) {
        $this->autoWaterChangeMinutes = $autoWaterChangeMinutes;
    }

    public function getAutoWaterChangeMinutes() {
        return $this->autoWaterChangeMinutes;
    }

    public function setAutoWaterChangeGallons($autoWaterChangeGallons) {
        $this->autoWaterChangeGallons = $autoWaterChangeGallons;
    }

    public function getAutoWaterChangeGallons() {
        return $this->autoWaterChangeGallons;
    }

    public function setAutoTopOffEnabled($autoTopOffEnabled) {
        $this->autoTopOffEnabled = $autoTopOffEnabled;
    }

    public function getAutoTopOffEnabled() {
        return $this->autoTopOffEnabled;
    }

    public function setAutoTopMinutes($autoTopMinutes) {
        $this->autoTopMinutes = $autoTopMinutes;
    }

    public function getAutoTopMinutes() {
        return $this->autoTopMinutes;
    }

    public function setPinOutlet1($pinOutlet1) {
        $this->pinOutlet1 = $pinOutlet1;
    }

    public function getPinOutlet1() {
        return $this->pinOutlet1;
    }

    public function setPinOutlet2($pinOutlet2) {
        $this->pinOutlet2 = $pinOutlet2;
    }

    public function getPinOutlet2() {
        return $this->pinOutlet2;
    }

    public function setPinOutlet3($pinOutlet3) {
        $this->pinOutlet3 = $pinOutlet3;
    }

    public function getPinOutlet3() {
        return $this->pinOutlet3;
    }

    public function setPinOutlet4($pinOutlet4) {
        $this->pinOutlet4 = $pinOutlet4;
    }

    public function getPinOutlet4() {
        return $this->pinOutlet4;
    }

    public function setPinOutlet5($pinOutlet5) {
        $this->pinOutlet5 = $pinOutlet5;
    }

    public function getPinOutlet5() {
        return $this->pinOutlet5;
    }

    public function setPinOutlet6($pinOutlet6) {
        $this->pinOutlet6 = $pinOutlet6;
    }

    public function getPinOutlet6() {
        return $this->pinOutlet6;
    }

    public function setPinOutlet7($pinOutlet7) {
        $this->pinOutlet7 = $pinOutlet7;
    }

    public function getPinOutlet7() {
        return $this->pinOutlet7;
    }

    public function setPinOutlet8($pinOutlet8) {
        $this->pinOutlet8 = $pinOutlet8;
    }

    public function getPinOutlet8() {
        return $this->pinOutlet8;
    }

    public function setPinAquariumRodi($pinAquariumRodi) {
        $this->pinAquariumRodi = $pinAquariumRodi;
    }

    public function getPinAquariumRodi() {
        return $this->pinAquariumRodi;
    }

    public function setPinReservoirRodi($pinReservoirRodi) {
        $this->pinReservoirRodi = $pinReservoirRodi;
    }

    public function getPinReservoirRodi() {
        return $this->pinReservoirRodi;
    }

    public function setPinAquariumDrain($pinAquariumDrain) {
        $this->pinAquariumDrain = $pinAquariumDrain;
    }

    public function getPinAquariumDrain() {
        return $this->pinAquariumDrain;
    }

    public function setPinUpperFloatValve($pinUpperFloatValve) {
        $this->pinUpperFloatValve = $pinUpperFloatValve;
    }

    public function getPinUpperFloatValve() {
        return $this->pinUpperFloatValve;
    }

    public function setPinLowerFloatValve($pinLowerFloatValve) {
        $this->pinLowerFloatValve = $pinLowerFloatValve;
    }

    public function getPinLowerFloatValve() {
        return $this->pinLowerFloatValve;
    }

    public function setOneWire($oneWire) {
        $this->oneWire = $oneWire;
    }

    public function getOneWire() {
        return $this->oneWire;
    }
}
?>