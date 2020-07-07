<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('admin/admin_model');

	}

	public function index()
	{
		$this->load->view('admin/admin_header.php');
		$this->load->view('admin/admin_view.php');
        $this->load->view('admin/admin_footer.php');
	}

	public function set_article() {
		$postArr = $this->input->post();

		if (!empty($postArr)) {
			$this->admin_model->addNewArticle();
		}

		$this->load->view('admin/admin_header.php');
		$this->load->view('admin/set_article.php');
        $this->load->view('admin/admin_footer.php');
	}

}
