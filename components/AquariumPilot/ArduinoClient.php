<?php
abstract class ArduinoClient {

    protected $address;
    protected $apiKey;

    public function __construct($address, $apiKey) {
        $this->address = $address;
        $this->apiKey = $apiKey;
    }

    public function digitalRead($pin) {
        return $this->__arduino_call('digital/' . $pin);
    }

    public function digitalWrite($pin, $value) {

        if($value !== DigitalPinValue::$LOW && $value !== DigitalPinValue::$HIGH) {
            throw new Exception('Value must be either DigitalPinValue::LOW or DigitalPinValue::HIGH', 100);
        }

        return $value === DigitalPinValue::$HIGH ?
            $this->__arduino_call('digital/' . $pin . '/' . 'HIGH') :
            $this->__arduino_call('digital/' . $pin . '/' . 'LOW');
    }

    public function getTemp($pin) {
        return $this->__arduino_call('temp/' . $pin);
    }

    protected function __arduino_call($params) {

        $request = $this->address . '/' . $this->apiKey . '/' . $params;

        $ch = curl_init($request);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_HEADER, 0);
        $data = curl_exec($ch);
        //$info = curl_getinfo($ch);
        curl_close($ch);

        return $data;
    }

    protected function parseTemp($json) {
        preg_match('/\:\"(.*)\"/', $json, $matches);
        if(!count($matches) == 2) {
            throw new Exception('Invalid temperature format.');
        }
        return $matches[1];
    }
}