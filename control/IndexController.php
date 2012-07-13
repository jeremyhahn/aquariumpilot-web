<?php
/**
 * Default MVC controller
 * 
 * @author Jeremy Hahn
 * @copyright Make A Byte, inc
 * @package com.makeabyte.jemonweb.control
 * 
 * --------------------------
 * - MySQL Stored Procedure -
 * --------------------------
 * CALL channel_get_range(NULL, NULL);
 * CALL channel_get_range('2012-02-20', NULL);
 * CALL channel_get_range('2012-02-20', '2012-02-21');
 * CALL channel_get_range('2012-02-20', '2012-02-21 12:59:59');
 * CALL channel_get_range('2012-02-20 00:00:00', '2012-02-22 12:59:59');
 */
class IndexController extends BaseController {

    public function __construct() {

        parent::__construct();
        $this->set('title', AgilePHP::getAppName());
    }

	  /**
	   * (non-PHPdoc)
	   * @see src/mvc/BaseController#index()
	   */
	  public function index() {
	      $this->render('index');
	  }

	  /**
	   * Receives HTTP POST from the Arduino device which
	   * contains the following data points.
	   * 
	   * 1) Real Power
	   * 2) Apparent Power
	   * 3) Power Factor
	   * 4) Volts (RMS)
	   * 5) Current/Amperage (RMS)
	   * 6) Watt Hours Inc (... Inc? have no idea right now...)
	   * 7) Watt Hours
	   * 8) 110 Volt Mains AC Phase (1 left leg, 2 right leg)
	   * 
	   * @return void
	   */
	  public function arduino() {

	      $request = Scope::getRequestScope();

	      $channel1 = new Channel();
	      $channel1->setRealPower($request->get('realPower1'));
	      $channel1->setApparentPower($request->get('apparentPower1'));
	      $channel1->setPowerFactor($request->get('powerFactor1'));
	      $channel1->setVrms($request->get('Vrms1'));
	      $channel1->setIrms($request->get('Irms1'));
	      $channel1->setWhInc($request->get('whInc1'));
	      $channel1->setWh($request->get('wh1'));
	      $channel1->setPhase(1);

	      $channel2 = new Channel();
	      $channel2->setRealPower($request->get('realPower2'));
	      $channel2->setApparentPower($request->get('apparentPower2'));
	      $channel2->setPowerFactor($request->get('powerFactor2'));
	      $channel2->setVrms($request->get('Vrms2'));
	      $channel2->setIrms($request->get('Irms2'));
	      $channel2->setWhInc($request->get('whInc2'));
	      $channel2->setWh($request->get('wh2'));
	      $channel2->setPhase(2);

	      $channel1->persist();
	      $channel2->persist();
	  }
}
?>