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
		if (!empty($_POST)) {
			$this->main_model->orderRepair();
		}

		$data['parts'] = $this->main_model->getArrFromXlsx();

		$this->load->view('header');
		$this->load->view('nav_panel_start');
		$this->load->view('menu_panel');
		$this->load->view('remont_view', $data);
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
	public function getArticle() {
		$this->load->view('header');
		$this->load->view('nav_panel_start');
		$this->load->view('menu_panel');
		$this->load->view('remont_article');
		$this->load->view('footer');
	}

	public function notFound() {
		$this->load->view('header');
		$this->load->view('nav_panel_start');
		$this->load->view('menu_panel');
		$this->load->view('404');
		$this->load->view('footer');
	}
}
