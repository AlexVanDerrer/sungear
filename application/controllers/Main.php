<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Main extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('main_model');

	}

	public function index()	
	{
		$this->load->view('header');
		$this->load->view('nav_panel_start');
		$this->load->view('home_view');
		$this->load->view('footer');
	}
	public function mainRepair()
	{
		$this->load->helper(array('form', 'url'));
		$this->load->library('form_validation');
		$this->form_validation->set_rules('customName', 'Username', 'trim|required', array('required' => 'Поле Имя должно быть заполнено'), 'callback_customName_check');
		$this->form_validation->set_rules('customPhone', 'Phone', 'trim|required|regex_match[/^(\s*)?(\+)?([- _():=+]?\d[- _():=+]?){10,14}(\s*)?$/]|min_length[5]|max_length[14]',
				array('required' => 'Поле Телефон должно быть заполнено',
					'regex_match' => 'Не валидный номер телефона',
					'min_length' => 'Номер телефона не может быть менее 5 символов',
					'max_length' => 'Номер телефона не может быть более 14 символов'));
		
		if($this->form_validation->run() == TRUE) {			
			if (!empty($_POST)) {
				$this->main_model->orderRepair();
			}
		} 
		$data['parts'] = $this->main_model->getArrFromXlsx();
		$data['another_articles'] = $this->main_model->getAnotherArticles();

		$this->load->view('header_remont');
		$this->load->view('nav_panel');
		$this->load->view('menu_panel');
		$this->load->view('remont_view', $data);
		$this->load->view('footer');

	}
	public function about()
	{
		$this->load->view('header');
		$this->load->view('nav_panel');
		$this->load->view('menu_panel');
		$this->load->view('about_view');
		$this->load->view('footer');
	}
	public function docs()
	{
		$this->load->view('header');
		$this->load->view('nav_panel');
		$this->load->view('menu_panel');
		$this->load->view('docs_view');
		$this->load->view('footer');	
	}
	public function contacts() 
	{
		$this->load->helper(array('form', 'url'));
		$this->load->library('form_validation');
		$this->form_validation->set_rules('customName', 'Username', 'trim|required', array('required' => 'Поле Имя должно быть заполнено'), 'callback_customName_check');
		$this->form_validation->set_rules('customPhone', 'Phone', 'trim|required|regex_match[/^(\s*)?(\+)?([- _():=+]?\d[- _():=+]?){10,14}(\s*)?$/]|min_length[5]|max_length[14]',
				array('required' => 'Поле Телефон должно быть заполнено',
					'regex_match' => 'Не валидный номер телефона',
					'min_length' => 'Номер телефона не может быть менее 5 символов',
					'max_length' => 'Номер телефона не может быть более 14 символов'));
		$this->form_validation->set_rules('customText', 'Text', 'trim|required|max_length[1000]',
				array('required' => 'Поле Текст должно быть заполнено',
					'max_length' => 'Текст не должен превышать 1000 символов'));
		
		if($this->form_validation->run() == TRUE) {			
			if (!empty($_POST)) {
				$this->main_model->orderRepair();
			}
		} 
		$this->load->view('header');
		$this->load->view('nav_panel');
		$this->load->view('menu_panel');
		$this->load->view('contacts_view');
		$this->load->view('footer');
	}
	public function politika() 
	{
		$this->load->view('header');
		$this->load->view('nav_panel');
		$this->load->view('menu_panel');
		$this->load->view('politika');
		$this->load->view('footer');
	}
	public function repair() 
	{
		$this->load->helper(array('form', 'url'));
		$this->load->library('form_validation');
		if (isset($_POST['submitForm'])) {
			$this->form_validation->set_rules('customNameForm', 'Username', 'trim|required', array('required' => 'Поле Имя должно быть заполнено'));
			$this->form_validation->set_rules('customPhoneForm', 'Phone', 'trim|required|regex_match[/^(\s*)?(\+)?([- _():=+]?\d[- _():=+]?){10,14}(\s*)?$/]|min_length[5]|max_length[14]',
				array('required' => 'Поле Телефон должно быть заполнено',
					'regex_match' => 'Не валидный номер телефона',
					'min_length' => 'Номер телефона не может быть менее 5 символов',
					'max_length' => 'Номер телефона не может быть более 14 символов'));
		} else {
			$this->form_validation->set_rules('customName', 'Username', 'trim|required', array('required' => 'Поле Имя должно быть заполнено'), 'callback_customName_check');
			$this->form_validation->set_rules('customPhone', 'Phone', 'trim|required|regex_match[/^(\s*)?(\+)?([- _():=+]?\d[- _():=+]?){10,14}(\s*)?$/]|min_length[5]|max_length[14]',
					array('required' => 'Поле Телефон должно быть заполнено',
						'regex_match' => 'Не валидный номер телефона',
						'min_length' => 'Номер телефона не может быть менее 5 символов',
						'max_length' => 'Номер телефона не может быть более 14 символов'));
			
			$this->form_validation->set_rules('customText', 'Text', 'trim|required|max_length[1000]',
					array('required' => 'Поле Текст должно быть заполнено',
						'max_length' => 'Текст не должен превышать 1000 символов'));
		}
		if($this->form_validation->run() == TRUE) {			
			$this->main_model->orderRepair();
		} 

		$data['another_articles'] = $this->main_model->getAnotherArticles();
		$this->load->view('header_dct');
		$this->load->view('nav_panel');
		$this->load->view('menu_panel');
		$this->load->view('remont_6dct450', $data);
		$this->load->view('footer');
	}

	public function getArticle() 
	{
		$this->load->view('header');
		$this->load->view('nav_panel');
		$this->load->view('menu_panel');
		$this->load->view('remont_article');
		$this->load->view('footer');
	}

	public function notFound() 
	{
		$this->load->view('header');
		$this->load->view('nav_panel_start');
		$this->load->view('menu_panel');
		$this->load->view('404');
		$this->load->view('footer');
	}

	public function blog() 
	{
		$this->load->view('header');
		$this->load->view('nav_panel');
		$this->load->view('menu_panel');
		$this->load->view('blog');
		$this->load->view('footer');
	}
	public function show_article($id) 
	{
		$data['article'] = $this->main_model->getArticleById($id);
		$data['another_articles'] = $this->main_model->getAnotherArticles();
		$this->load->view('article_header', $data);
		$this->load->view('nav_panel_start');
		$this->load->view('menu_panel');
		$this->load->view('article', $data);
		$this->load->view('footer');
	}

	public function showParts() 
	{
		$this->load->helper(array('form', 'url'));
		$this->load->library('form_validation');

		$this->form_validation->set_rules('customNameForm', 'Username', 'trim|required', array('required' => 'Поле Имя должно быть заполнено'));
		$this->form_validation->set_rules('customPhoneForm', 'Phone', 'trim|required|regex_match[/^(\s*)?(\+)?([- _():=+]?\d[- _():=+]?){10,14}(\s*)?$/]|min_length[5]|max_length[14]',
			array('required' => 'Поле Телефон должно быть заполнено',
				'regex_match' => 'Не валидный номер телефона',
				'min_length' => 'Номер телефона не может быть менее 5 символов',
				'max_length' => 'Номер телефона не может быть более 14 символов'));
		
		if($this->form_validation->run() == TRUE) {			
			$this->main_model->orderRepair();
		} 

		$data['another_articles'] = $this->main_model->getAnotherArticles();
		$this->load->view('header_dct');
		$this->load->view('nav_panel');
		$this->load->view('menu_panel');
		$this->load->view('pageParts', $data);
		$this->load->view('footer');
	}

	/**
	 * Проверка поля customName 
	 */
	public function customName_check($str)
	{
		switch ($str) 
		{
			case 'test':
				$this->form_validation->set_message('username_check', 'Ваш {field} не может быть "test"');
				return FALSE;
				break;
			case 'user':
				$this->form_validation->set_message('username_check', 'Ваш {field} не может быть "user"');
				return FALSE;
				break;
			case 'admin':
				$this->form_validation->set_message('username_check', 'Ваш {field} не может быть "admin"');
				return FALSE;
				break;

			default:
				return TRUE;
				break;
		}
		
	}
}
