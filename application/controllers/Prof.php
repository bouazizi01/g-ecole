<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Prof extends CI_Controller {

		public function __construct()
	{
		parent::__construct();
		$this->load->model('user_model','admin');
		$this->load->model('file_model','doc');
			if ($this->session->userdata('role')!='PROF') {
			$this->session->flashdata('name','Vous avez pas d\'accèes ');
		redirect('login');
		}
	}

	public function index()
	{
		
	}

		public function Professeurs()
	{
		$data['profs'] = $this->admin->getUsers('PROF');
				$nbDocAdAtt['nbDocAtt'] = sizeof($this->doc->DocAdminEnAttent());
				$nbDocAdAtt['nbUserAttent'] = 0;
		 $this->load->view('header',$nbDocAdAtt);
		$this->load->view('Prof/Professeurs',$data);
		$this->load->view('footer');
	}


		public function Etudiants()
	{

		$data['etudiants'] = $this->admin->getUsers('ETUDIANT');
		$nbDocAdAtt['nbDocAtt'] = sizeof($this->doc->DocAdminEnAttent());
		$nbDocAdAtt['nbUserAttent'] = 0;
		 $this->load->view('header',$nbDocAdAtt);
		 $this->load->view('Prof/Etudiants',$data);
		 $this->load->view('footer');
	}

		public function MesFichiers()
	{
		$data['docs'] = $this->doc->MesFiles($this->session->userdata('id'));
				$nbDocAdAtt['nbDocAtt'] = sizeof($this->doc->DocAdminEnAttent());
				$nbDocAdAtt['nbUserAttent'] = 0;
		 $this->load->view('header',$nbDocAdAtt);
		$this->load->view('Prof/MesFichiers',$data);
		$this->load->view('footer');
	}

		public function AddFile()
	{
		$data = $this->input->post();
		$data['docs']=$this->do_uploadFile($_FILES['doc']);
		$data['date_ajout'] = date('Y-m-d');
		$data['user_id'] = $this->session->userdata('id');
		$this->doc->AddFile($data);
        redirect('Prof/MesFichiers');
	}

		public function DeleteFile()
	{
		$id = $this->input->post('id');
		$this->doc->DeleteFile($id);
        redirect('Prof/MesFichiers');
	}

	public function EmploiDuTemps()
	{
		$nbDocAdAtt['nbDocAtt'] = sizeof($this->doc->DocAdminEnAttent());
		$nbDocAdAtt['nbUserAttent'] = 0;
		 $this->load->view('header',$nbDocAdAtt);
		$this->load->view('Prof/EmploiDuTemps');
		$this->load->view('footer');
	}




	private function do_uploadFile($file){
		$upload_path = './docs/';
		$tmp_name = $file["tmp_name"];
        $name = $file["name"];
        	if(move_uploaded_file($tmp_name, "$upload_path/$name")) return $name;
	}

}

/* End of file Prof.php */
/* Location: ./application/controllers/Prof.php */