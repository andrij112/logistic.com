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
		if(HTTP_Request::POST == $this->request->method()) {
			echo $this->request = json_encode(array('status' => 'OK', 'content' => (string)View::factory('article_main')));
			die;
		}
	}

	public function action_get_custom()
	{
		if(HTTP_Request::POST == $this->request->method()) {
			echo $this->request = json_encode(array('status' => 'OK', 'content' => (string)View::factory('article_custom')));
			die;
		}
	}

	public function action_get_services()
	{
		if(HTTP_Request::POST == $this->request->method()) {
			echo $this->request = json_encode(array('status' => 'OK', 'content' => (string)View::factory('article_services')));
			die;
		}
	}

	public function action_get_information()
	{
		if(HTTP_Request::POST == $this->request->method()) {
			echo $this->request = json_encode(array('status' => 'OK', 'content' => (string)View::factory
			('article_information')));
			die;
		}
	}

	public function action_get_contacts()
	{
		if(HTTP_Request::POST == $this->request->method()) {
			echo $this->request = json_encode(array('status' => 'OK', 'content' => (string)View::factory('article_contacts')));
			die;
		}
	}

	public function action_get_careers()
	{
		if(HTTP_Request::POST == $this->request->method()) {
			echo $this->request = json_encode(array('status' => 'OK', 'content' => (string)View::factory('article_careers')));
			die;
		}
	}

	public function action_send_custom()
	{

		if (HTTP_Request::POST == $this->request->method()) {
			$recepient = "mur_mail@ukr.net";
			$sitename = "Logistic LineLTD";

			//print_r(Arr::get($_POST, 'address_out'));
//			print_r("Adress out = \n");
//			print_r($this->request->post('address_out'));
//			print_r($this->request->post());
//			print_r($_POST);
//			die;
			$address_out       = $this->request->post('address_out');
			$address_in        = $this->request->post('address_in');
			$cargo_type        = $this->request->post('cargo_type');
			$cargo_weight      = $this->request->post('cargo_weight');
			$cargo_volume      = $this->request->post('cargo_volume');
			$feedback_author   = $this->request->post('feedback_author');
			$feedback_contacts = $this->request->post('feedback_contacts');
			$feedback_text 	   = $this->request->post('feedback_text');
			/*print_r($address_out);
			echo "\n";
			print_r($address_in);
			echo "\n";
			print_r($cargo_type);
			echo "\n";
			print_r($cargo_weight);
			echo "\n";
			print_r($cargo_volume);
			echo "\n";
			print_r($feedback_author);
			echo "\n";
			print_r($feedback_contacts);
			echo "\n";
			print_r($feedback_text);
			echo "\n";
			return false;
			die;*/

			/*$address_out  	   = trim(Arr::get($_POST, 'address_out',       NULL));
			$address_in   	   = trim(Arr::get($_POST, 'address_in',        NULL));
			$cargo_type   	   = trim(Arr::get($_POST, 'cargo_type',        NULL));
			$cargo_weight 	   = trim(Arr::get($_POST, 'cargo_weight',      NULL));
			$cargo_volume      = trim(Arr::get($_POST, 'cargo_volume',      NULL));
			$feedback_author   = trim(Arr::get($_POST, 'feedback_author',   NULL));
			$feedback_contacts = trim(Arr::get($_POST, 'feedback_contacts', NULL));
			$feedback_text     = trim(Arr::get($_POST, 'feedback_text',     NULL));*/

			if(!$address_out || !$address_in || !$cargo_type || !$cargo_weight || !$cargo_volume || !$feedback_author
				|| !$feedback_contacts){
				print_r($address_out);
					echo "\n";
					print_r($address_in);
					echo "\n";
					print_r($cargo_type);
					echo "\n";
					print_r($cargo_weight);
					echo "\n";
					print_r($cargo_volume);
					echo "\n";
					print_r($feedback_author);
					echo "\n";
					print_r($feedback_contacts);
					echo "\n";
					print_r($feedback_text);
					echo "\n";
					return false;
				die;
			}
			$pagetitle = "Новая заявка с сайта \"$sitename\"";
			$message   = "Автор запроса:     $feedback_author   \n " .
						 "Контакты:          $feedback_contacts \n " .
						 "Параметры запроса: 					\n " .
						 "Адрес отправителя: $address_out  		\n " .
						 "Адрес доставки:    $address_in   		\n " .
						 "Вид груза:		 $cargo_type   		\n " .
						 "Вес груза: 		 $cargo_weight 		\n " .
						 "Обьем груза: 		 $cargo_volume 		\n " .
						 "Сопроводительное письмо: 		   		\n " .
											 $feedback_text;

			print_r(mail($recepient, $pagetitle, $message));
			print_r('Its end');
			die;
		}
		die;
	}

} // End Index
