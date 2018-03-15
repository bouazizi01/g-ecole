<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User extends CI_Controller {


	public function __construct()
	{
		parent::__construct();

		$this->load->model('user_model','user');
		$this->load->model('file_model','doc');

	}

	public function index()
	{

		$nbDocAdAtt['nbDocAtt'] = sizeof($this->doc->DocAdminEnAttent());
		$nbDocAdAtt['nbUserAttent'] = sizeof($this->user->getUsersEnAttent());
		 $this->load->view('header',$nbDocAdAtt);
		if($this->session->userdata('role')=='ADMIN'){
			$this->load->view('Admin');
		}elseif ($this->session->userdata('role')=='PROF') {
			$this->load->view('Professeur');
		}elseif ($this->session->userdata('role')=='ETUDIANT') {
			$this->load->view('Etudiant');
		}
		
        $this->load->view('footer');
	}

		public function logout()
	{
		$data = ['id','matricule'];
		$this->session->unset_userdata($data);
		redirect('login');
	}

	public function MonProfile()
	{
		$nbDocAdAtt['nbDocAtt'] = sizeof($this->doc->DocAdminEnAttent());
		$nbDocAdAtt['nbUserAttent'] = sizeof($this->user->getUsersEnAttent());
		 $this->load->view('header',$nbDocAdAtt);		
		if(($this->session->userdata('role')=='ETUDIANT')){
			$this->load->view('Etudiant/MonProfile');
		}elseif ($this->session->userdata('role')=='ADMIN') {
			$this->load->view('Admin/MonProfile');
		}elseif ($this->session->userdata('role')=='PROF') {
			$this->load->view('Prof/MonProfile');
		}
		$this->load->view('footer');
	}	

public function ModifierMonProfileAdmin()
{
		$data = $this->input->post();

		$config['upload_path'] = './images/';
		$config['allowed_types'] = 'gif|jpg|png';
		
		$this->load->library('upload',$config);

		if ($this->upload->do_upload('photo')) {
			$data['photo']=$this->upload->data('file_name');
		}

		$this->user->updateUser($this->input->post('id'), $data);
		redirect('User/logout');

}


public function addUser()
{
	$data = $this->input->post();
        $data['photo']=$this->do_upload1($_FILES['img']);

        if($this->user->AddEtudiant($data)){
			echo "success";
        }else{
        	echo "eroor";
        }
}



	private function do_upload1($file){
		$upload_path = './images/';
		$allowed_types = ['image/jpeg','image/jpg','image/gif','image/png'];
		$tmp_name = $file["tmp_name"];
        $name = $file["name"];
        if(in_array($file["type"], $allowed_types)){
        	if(move_uploaded_file($tmp_name, "$upload_path/$name")) return $name;
        }
	}



}

/* End of file User.php */
/* Location: ./application/controllers/User.php */