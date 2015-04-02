<?php

class IntroductionController extends BaseController {
//	public $restful = TRUE;

	public function get_index() {
		return View::make('introduction.index');
	}

	public function get_website_developing_service() {
		return View::make('hello');
	}

	public function get_developers_for_hire() {
		return View::make('hello');
	}

	public function get_contact() {
		return View::make('hello');
	}
}
