<?php
/**
 * Default MVC controller
 * 
 * @author Jeremy Hahn
 * @copyright Make A Byte, inc
 * @package com.makeabyte.aquariumpilot.control
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
}
?>