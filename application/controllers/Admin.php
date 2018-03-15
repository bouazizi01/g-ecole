<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {
	public function __construct()
	{
		parent::__construct();
		$this->load->model('user_model','admin');
		$this->load->model('file_model','doc');
			if ($this->session->userdata('role')!='ADMIN') {
			$this->session->flashdata('name','Vous avez pas d\'accèes ');
		redirect('login');
		}
	}

	public function index()
	{
		
	}

	public function ValiderDocument()
	{
		$data = $this->input->post();
		$data['validation_admin'] = 1;
		$data['date_ajout'] = date('Y-m-d');
		$et=$this->doc->updateMyFile($data['id'],$data);
		redirect('Admin/DocumentsAdministratif');
	}

		public function getMyFilesById($id)
	{
		$et=$this->doc->getMyFilesById($id);
		if (!empty($et)) {
			echo json_encode($et[0]);
		}
	}

	public function deleteMyFile()
	{
		$id = $this->input->post('id');
		$this->doc->deleteMyFile($id);
        redirect('Admin/DocumentsAdministratif');
	}


	public function Etudiants()
	{

		$data['etudiants'] = $this->admin->getUsers('ETUDIANT');
		$nbDocAdAtt['nbDocAtt'] = sizeof($this->doc->DocAdminEnAttent());
		$nbDocAdAtt['nbUserAttent'] = sizeof($this->admin->getUsersEnAttent());
		 $this->load->view('header',$nbDocAdAtt);
		 $this->load->view('Admin/Etudiants',$data);
		 $this->load->view('footer');
	}

	public function UsersEnAttent()
	{
		$data['etudiants'] = $this->admin->getUsersEnAttent();
		$nbDocAdAtt['nbDocAtt'] = sizeof($this->doc->DocAdminEnAttent());
		$nbDocAdAtt['nbUserAttent'] = sizeof($this->admin->getUsersEnAttent());
		 $this->load->view('header',$nbDocAdAtt);
		 $this->load->view('Admin/UsersEnAttent',$data);
		 $this->load->view('footer');
	}


	public function DocumentsAdministratif()
	{
		$data['docs'] = $this->doc->getMyFilesAdministratif();
				$nbDocAdAtt['nbDocAtt'] = sizeof($this->doc->DocAdminEnAttent());
				$nbDocAdAtt['nbUserAttent'] = sizeof($this->admin->getUsersEnAttent());
		 $this->load->view('header',$nbDocAdAtt);
		$this->load->view('Admin/DocumentsAdministratif',$data);
		$this->load->view('footer');
	}


	public function AddEtudiant()	
	{
        $data = $this->input->post();
        $data['photo']=$this->do_upload($_FILES['img']);
        $data['role']="ETUDIANT";

        if($this->admin->AddEtudiant($data)){
			echo "success";
        }else{
        	echo "eroor";
        }

	}

	public function DeleteEtudiant()
	{
		$id = $this->input->post('id');
		$this->admin->deleteEtudiant($id);
        redirect('Admin/Etudiants');
	}

	public function DeleteUserEnAttent()
	{
		$id = $this->input->post('id');
		$this->admin->deleteEtudiant($id);
        redirect('Admin/UsersEnAttent');
	}

	public function UpdateEtudiant()
	{
		$matricule= $this->input->post('matricule');
        $nom = $this->input->post('nom');
        $prenom = $this->input->post('prenom');
        $tel = $this->input->post('tel');
        $email = $this->input->post('email');
        $niveau = $this->input->post('niveau');

        $id = $this->input->post('id');

        $data = array('nom' => $nom,'prenom' => $prenom, 'tel' => $tel,'email' => $email,'niveau' => $niveau,'matricule' => $matricule);

		$config['upload_path'] = './images/';
		$config['allowed_types'] = 'gif|jpg|png';
		
		$this->load->library('upload',$config);
		$this->upload->do_upload('img');

		if ($this->upload->data('file_name')!='') {
			$data['photo']=$this->upload->data('file_name');
		}

		
		$this->admin->updateEtudiant($id,$data);

         redirect('Admin/Etudiants');

	}

	public function AccepterUser()
	{
		        $id = $this->input->post('id');
		        $data['active']=1;
		        $this->admin->updateEtudiant($id,$data);
		        redirect('Admin/UsersEnAttent');

	}

	public function Professeurs()
	{
		$data['profs'] = $this->admin->getUsers('PROF');
				$nbDocAdAtt['nbDocAtt'] = sizeof($this->doc->DocAdminEnAttent());
				$nbDocAdAtt['nbUserAttent'] = sizeof($this->admin->getUsersEnAttent());
		 $this->load->view('header',$nbDocAdAtt);
		$this->load->view('Admin/Professeurs',$data);
		$this->load->view('footer');
	}

	public function AddProf()
	{
		$data = $this->input->post();
        $data['photo']=$this->do_upload($_FILES['img']);
        $data['role']="PROF";

        if($this->admin->AddEtudiant($data)){
			echo "success";
        }else{
        	echo "eroor";
        }
	}

	public function DeleteProf()
	{
		$id = $this->input->post('id');
		$this->admin->deleteEtudiant($id);
        redirect('Admin/Professeurs');
	}

	public function UpdateProf()
	{
		$matricule= $this->input->post('matricule');
        $nom = $this->input->post('nom');
        $prenom = $this->input->post('prenom');
        $tel = $this->input->post('tel');
        $email = $this->input->post('email');
        $modules = $this->input->post('modules');

        $id = $this->input->post('id');

        $data = array('nom' => $nom,'prenom' => $prenom, 'tel' => $tel,'email' => $email,'modules' => $modules,'matricule' => $matricule);

		$config['upload_path'] = './images/';
		$config['allowed_types'] = 'gif|jpg|png';
		
		$this->load->library('upload',$config);
		

		if ($this->upload->do_upload('img')) {
			$data['photo']=$this->upload->data('file_name');
		}

		
		$this->admin->updateEtudiant($id,$data);

         redirect('Admin/Professeurs');
	}

	public function Cours()
	{
		$data['docs'] = $this->doc->getFiles();
				$nbDocAdAtt['nbDocAtt'] = sizeof($this->doc->DocAdminEnAttent());
				$nbDocAdAtt['nbUserAttent'] = sizeof($this->admin->getUsersEnAttent());
		 $this->load->view('header',$nbDocAdAtt);
		$this->load->view('Admin/Cours',$data);
		$this->load->view('footer');
	}

	public function DeleteFile()
	{
		$id = $this->input->post('id');
		$this->doc->DeleteFile($id);
        redirect('Admin/Cours');
	}

	public function AddFile()
	{
		$data = $this->input->post();
		$data['docs']=$this->do_uploadFile($_FILES['doc']);
		$data['date_ajout'] = date('Y-m-d');
		$data['user_id'] = $this->session->userdata('id');
		$this->doc->AddFile($data);
        redirect('Admin/Cours');

		
	}

	public function MesFichiers()
	{
		$data['docs'] = $this->doc->MesFiles($this->session->userdata('id'));
				$nbDocAdAtt['nbDocAtt'] = sizeof($this->doc->DocAdminEnAttent());
				$nbDocAdAtt['nbUserAttent'] = sizeof($this->admin->getUsersEnAttent());
		 $this->load->view('header',$nbDocAdAtt);
		$this->load->view('Admin/MesFichiers',$data);
		$this->load->view('footer');
	}

	public function EmploiDuTemps()
	{
		$nbDocAdAtt['nbDocAtt'] = sizeof($this->doc->DocAdminEnAttent());
		$nbDocAdAtt['nbUserAttent'] = sizeof($this->admin->getUsersEnAttent());
		 $this->load->view('header',$nbDocAdAtt);
		$this->load->view('Admin/EmploiDuTemps');
		$this->load->view('footer');
	}

	public function Etudiant($id){
		$et=$this->admin->getEtudiant($id);
		if (!empty($et)) {
			echo json_encode($et[0]);
		}
	}


	private function do_upload($file){
		$upload_path = './images/';
		$allowed_types = ['image/jpeg','image/jpg','image/gif','image/png'];
		$tmp_name = $file["tmp_name"];
        $name = $file["name"];
        if(in_array($file["type"], $allowed_types)){
        	if(move_uploaded_file($tmp_name, "$upload_path/$name")) return $name;
        }
	}

		private function do_uploadFile($file){
		$upload_path = './docs/';
		$tmp_name = $file["tmp_name"];
        $name = $file["name"];
        	if(move_uploaded_file($tmp_name, "$upload_path/$name")) return $name;
	}

}