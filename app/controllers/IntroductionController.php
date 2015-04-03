<?php

class IntroductionController extends BaseController {
//	public $restful = TRUE;

	public function get_index() {
		return View::make('introduction.index');
	}

	public function get_website_developing_service() {
		return View::make('introduction.website_developing_service');
	}

	public function get_developers_for_hire() {
		return View::make('introduction.developers_for_hire');
	}

	public function get_contact() {
		return View::make('introduction.contact');
	}
}
