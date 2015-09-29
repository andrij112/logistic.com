<?php defined('SYSPATH') or die('No direct script access.');

/*class Controller_Index extends Controller_Template {

	public $template = 'header';

	public function before()
	{
		parent::before();
		$this->companyName = "Logistic Line LTD";
	}

	public function action_index()
	{
	}*/


class Controller_Index extends Controller{

	public function action_index()
	{
//		echo $this->request->response = View::factory('header');
		echo Request::current()->action(); die;
		echo View::factory('header');

	}

	public function action_custom()
	{
		echo URL::base();
		echo URL::base('https', TRUE);
//		echo View::factory('custom_form');
	}

} // End Welcome
