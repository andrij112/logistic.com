<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Index extends Controller_Template {

	public $template = 'v_index';

	public function before()
	{
		parent::before();
		$this->companyName = "Logistic line LTD";
	}

	public function action_index()
	{
		$welcomeText = Model::factory('Index')->getWelcomeText();
		$this->template->title = $welcomeText;
	}

} // End Welcome
