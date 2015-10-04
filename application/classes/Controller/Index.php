<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Index extends Controller_Template {

	public $template = 'main_template';

/*	public function before()
	{
		parent::before();
		$this->companyName = "Logistic Line LTD";
	}*/

	public function action_index()
	{
		$this->template->form = '';
		$this->template->article = View::factory('article_main');
	}

	public function action_main()
	{
			echo $this->request = json_encode(array('status' => 'OK', 'content' => (string)View::factory('article_main')));
			die;
	}

	public function action_custom()
	{
			echo $this->request = json_encode(array('status' => 'OK', 'content' => (string)View::factory('article_custom')));
			die;
	}

	public function action_services()
	{
			echo $this->request = json_encode(array('status' => 'OK', 'content' => (string)View::factory('article_services')));
			die;
	}

	public function action_information()
	{
			echo $this->request = json_encode(array('status' => 'OK', 'content' => (string)View::factory('article_information')));
			die;
	}

	public function action_contacts()
	{
			echo $this->request = json_encode(array('status' => 'OK', 'content' => (string)View::factory('article_contacts')));
			die;
	}

	public function action_careers()
	{
			echo $this->request = json_encode(array('status' => 'OK', 'content' => (string)View::factory('article_careers')));
			die;
	}
} // End Index
