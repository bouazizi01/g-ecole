<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Etudiant extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('user_model','Etudiant');
		$this->load->model('file_model','doc');
		if ($this->session->userdata('role')!='ETUDIANT') {
			$this->session->flashdata('name','Vous avez pas d\'accèes ');
			redirect('login');
		}
	}


	public function Etudiants()
	{
		
		$data['etudiants'] = $this->Etudiant->getEtudiantByNiveau($this->session->userdata('niveau'));
		$nbDocAdAtt['nbDocAtt'] = sizeof($this->doc->DocAdminEnAttent());
		$nbDocAdAtt['nbUserAttent'] = 0;
		$this->load->view('header',$nbDocAdAtt);
		$this->load->view('Etudiant/Etudiants',$data);
		$this->load->view('footer');
	}

	public function Profs()
	{
		$data['profs'] = $this->Etudiant->getUsers('PROF');
		$nbDocAdAtt['nbDocAtt'] = sizeof($this->doc->DocAdminEnAttent());
		$nbDocAdAtt['nbUserAttent'] = 0;
		$this->load->view('header',$nbDocAdAtt);
		$this->load->view('Etudiant/Profs',$data);
		$this->load->view('footer');
	}

	public function CoursAndTPs()
	{
		$data['docs'] = $this->doc->getFilesByNiveau($this->session->userdata('niveau'));
		$nbDocAdAtt['nbDocAtt'] = sizeof($this->doc->DocAdminEnAttent());
$nbDocAdAtt['nbUserAttent'] = 0;
		$this->load->view('header',$nbDocAdAtt);
		$this->load->view('Etudiant/Cours',$data);
		$this->load->view('footer');
	}

	public function MesDocumentAdministratif()
	{
		$data['mesDocs'] = $this->doc->getMesDocAdministratif($this->session->userdata('id'));
		$nbDocAdAtt['nbDocAtt'] = sizeof($this->doc->DocAdminEnAttent());
		$nbDocAdAtt['nbUserAttent'] = 0;
		$this->load->view('header',$nbDocAdAtt);
		$this->load->view('Etudiant/MesDocumentAdministratif',$data);
		$this->load->view('footer');
	}

	public function DemandeDocument()
	{
		$data = $this->input->post();
		$data['date_ajout'] = date('Y-m-d');
		$this->doc->AddFileAdministratif($data);
		redirect('Etudiant/MesDocumentAdministratif');
	}

	public function EmploiDeTemps()
	{
		$nbDocAdAtt['nbDocAtt'] = sizeof($this->doc->DocAdminEnAttent());
		$nbDocAdAtt['nbUserAttent'] = 0;
		$this->load->view('header',$nbDocAdAtt);
		$this->load->view('Etudiant/EmploiDeTemps');
		$this->load->view('footer');
	}


	public function deleteMyFile()
	{
		$id = $this->input->post('id');
		$this->doc->deleteMyFile($id);
		redirect('Etudiant/MesDocumentAdministratif');
	}

	public function UpdateMyFile()
	{
		$data = $this->input->post();
		$data['date_ajout'] = date('Y-m-d');
		$data['validation_admin'] = 0;
		$this->doc->updateMyFile($this->input->post('id'),$data);
		redirect('Etudiant/MesDocumentAdministratif');
	}

	public function getMyFilesById($id)
	{
		$et=$this->doc->getMyFilesById($id);
		if (!empty($et)) {
			echo json_encode($et[0]);
		}
	}

	

}

/* End of file Etudiant.php */
/* Location: ./application/controllers/Etudiant.php */