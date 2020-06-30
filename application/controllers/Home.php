<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	public function index()
	{
		$this->load->view('header');
		$this->load->view('nav_panel_start');
		$this->load->view('home_view');
		$this->load->view('footer');
	}
	public function about()
	{
		$this->load->view('header');
		$this->load->view('nav_panel_start');
		$this->load->view('about_view');
		$this->load->view('footer');
	}
	public function docs()
	{
		$this->load->view('header');
		$this->load->view('nav_panel_start');
		$this->load->view('docs_view');
		$this->load->view('footer');	
	}
	public function contacts() 
	{
		$this->load->view('header');
		$this->load->view('nav_panel_start');
		$this->load->view('contacts_view');
		$this->load->view('footer');
	}
}
