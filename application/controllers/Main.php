<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Main extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('main_model');

		if (!empty($_POST)) {
			$this->main_model->orderRepair();
		}
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
		$data['parts'] = $this->main_model->getArrFromXlsx();

		$this->load->view('header');
		$this->load->view('nav_panel_start');
		$this->load->view('menu_panel');
		$this->load->view('remont_view', $data);
		$this->load->view('footer');
	}
	public function about()
	{
		$this->load->view('header');
		$this->load->view('nav_panel_start');
		$this->load->view('menu_panel');
		$this->load->view('about_view');
		$this->load->view('footer');
	}
	public function docs()
	{
		$this->load->view('header');
		$this->load->view('nav_panel_start');
		$this->load->view('menu_panel');
		$this->load->view('docs_view');
		$this->load->view('footer');	
	}
	public function contacts() 
	{
		$this->load->view('header');
		$this->load->view('nav_panel_start');
		$this->load->view('menu_panel');
		$this->load->view('contacts_view');
		$this->load->view('footer');
	}
	public function politika() 
	{
		$this->load->view('header');
		$this->load->view('nav_panel_start');
		$this->load->view('menu_panel');
		$this->load->view('politika');
		$this->load->view('footer');
	}
	public function repair() 
	{
		$this->load->view('header');
		$this->load->view('nav_panel_start');
		$this->load->view('menu_panel');
		$this->load->view('remont_6dct450');
		$this->load->view('footer');
	}

	public function getArticle() 
	{
		$this->load->view('header');
		$this->load->view('nav_panel_start');
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
		$this->load->view('nav_panel_start');
		$this->load->view('menu_panel');
		$this->load->view('blog');
		$this->load->view('footer');
	}
	public function show_article($id) 
	{
		$data['article'] = $this->main_model->getArticleById($id);
		$this->load->view('article_header', $data);
		$this->load->view('nav_panel_start');
		$this->load->view('menu_panel');
		$this->load->view('article', $data);
		$this->load->view('footer');
	}
}
