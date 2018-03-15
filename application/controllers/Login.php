<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

		public function __construct()
	{
		parent::__construct();
		$this->load->model('user_model','user');

		if (!empty($_SESSION['id'])) {
		 	redirect('User');
		 }
	}

	public function index()
	{
		if($_POST){
			$result = $this->user->Validate_user($_POST);
		if (!empty($result)) {
			 $data = [
                      'id' =>$result->id,
                      'nom' =>$result->nom,
                      'prenom' =>$result->prenom,
                      'tel' =>$result->tel,
                      'email' =>$result->email,
                      'matricule' =>$result->matricule,
                      'role' =>$result->role,
                      'niveau' =>$result->niveau,
                      'modules' =>$result->modules,
                      'photo' =>$result->photo
			         ];
			         $this->session->set_userdata($data);
			         redirect('User');

			}	else{
				$this->session->set_flashdata('name','matricule incorrect');
				redirect('login');
			}
			
		}
		$this->load->view('login');
	}





}

/* End of file Login.php */
/* Location: ./application/controllers/Login.php */