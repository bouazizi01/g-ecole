<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class File_model extends CI_Model {

	public function __construct()
	{
		parent::__construct();
		
	}

	public function getFiles(){
        return $this->db->select('*')
                         ->from('documents')
                          ->order_by('id','desc')
                         ->get()
                         ->result();
    }

    public function getFilesByNiveau($niveau)
    {
        return $this->db->select('*')
                         ->from('documents')
                         ->where('niveau',$niveau)
                          ->order_by('id','desc')
                         ->get()
                         ->result();
    }

   	public function getFile($id){
        return $this->db->select('*')
                         ->from('documents')
                         ->where('id',$id)
                         ->get()
                         ->result();
    }

    public function MesFiles($idUser)
    {
         return $this->db->select('*')
                         ->from('documents')
                         ->where('user_id',$idUser)
                          ->order_by('id','desc')
                         ->get()
                         ->result();       
    }

    public function deleteFile($id){
        $this->db->where('id',$id)->delete('documents');
    }

    public function AddFile($data=array()){
            $this->db->insert('documents',$data);
            return $this->db->insert_id();
      }

    public function AddFileAdministratif($data=array()){
            $this->db->insert('documents_administratif',$data);
            return $this->db->insert_id();
      }


    public function getMesDocAdministratif($idEtd)
    {
         return $this->db->select('*')
                         ->from('documents_administratif')
                         ->where('id_etudiant',$idEtd)
                          ->order_by('id','desc')
                         ->get()
                         ->result(); 
    }

    public function deleteMyFile($id){
        $this->db->where('id',$id)->delete('documents_administratif');
    }

    public function getMyFilesById($id)
    {
        return $this->db->select('*')
                         ->from('documents_administratif')
                         ->where('id',$id)
                          ->order_by('id','desc')
                         ->get()
                         ->result();
    }

       public function getMyFilesAdministratif()
    {
        return $this->db->select('*')
                         ->from('documents_administratif')
                          ->order_by('id','desc')
                         ->get()
                         ->result();
    }

    public function updateMyFile($id,$data)
    {
        $this->db->where('id',$id)->update('documents_administratif', $data);
    }

    public function DocAdminEnAttent()
    {
         return $this->db->select('*')
                         ->from('documents_administratif')
                         ->where('validation_admin',0)
                          ->order_by('id','desc')
                         ->get()
                         ->result();
    }

}

/* End of file file_model.php */
/* Location: ./application/models/file_model.php */
  ?>