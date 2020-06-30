<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Main extends CI_Controller {

	public function index()	
	{
		$this->load->view('header');
		$this->load->view('nav_panel_start');
		$this->load->view('menu_panel');
		$this->load->view('remont_view');
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
}
