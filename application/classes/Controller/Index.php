<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Index extends Controller_Template {

	public $template = 'main_template';

	public function action_index()
	{
		$this->template->article = View::factory('article_main');
		$this->template->page = 'main';
	}

	public function action_main()
	{
		$this->template->article = View::factory('article_main');
		$this->template->page = 'main';
	}

	public function action_custom()
	{
		$this->template->article = View::factory('article_custom');
		$this->template->page = 'custom';
	}

	public function action_services()
	{
		$this->template->article = View::factory('article_services');
		$this->template->page = 'services';
	}

	public function action_information()
	{
		$this->template->article = View::factory('article_information');
		$this->template->page = 'information';
	}

	public function action_contacts()
	{
		$this->template->article = View::factory('article_contacts');
		$this->template->page = 'contacts';
	}

	public function action_careers()
	{
		$this->template->article = View::factory('article_careers');
		$this->template->page = 'careers';
	}

	/**
	 * Функції для ajax запитів ------------------------------------------------------------
	 */
	public function action_get_main()
	{
		echo $this->request = json_encode(array('status' => 'OK', 'content' => (string)View::factory('article_main')));
		die;
	}

	public function action_get_custom()
	{
		echo $this->request = json_encode(array('status' => 'OK', 'content' => (string)View::factory('article_custom')));
		die;
	}

	public function action_get_services()
	{
		echo $this->request = json_encode(array('status' => 'OK', 'content' => (string)View::factory('article_services')));
		die;
	}

	public function action_get_information()
	{
		echo $this->request = json_encode(array('status' => 'OK', 'content' => (string)View::factory
		('article_information')));
		die;
	}

	public function action_get_contacts()
	{
		echo $this->request = json_encode(array('status' => 'OK', 'content' => (string)View::factory('article_contacts')));
		die;
	}

	public function action_get_careers()
	{
		echo $this->request = json_encode(array('status' => 'OK', 'content' => (string)View::factory('article_careers')));
		die;
	}
} // End Index
