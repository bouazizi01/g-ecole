<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class File extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('file_model');
	}

	public function index()
	{
		$this->load->view('upload');
	}

}

/* End of file file.php */
/* Location: ./application/controllers/file.php */