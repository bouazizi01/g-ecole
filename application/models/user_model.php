<?php 
class User_model extends CI_Model
{

  public function __construct()
  {
   parent::__construct();

 }

 public function Validate_user($data)
 {
   $this->db->where('matricule' ,$data['matricule'])->where('active', '1');
   return $this->db->get('users')->row();
 }

 function __destruct()
 {
   $this->db->close();
 }
 public function updateUser($id, $data)
 {
  $this->db->where('id',$id)->update('users', $data);
}



public function getUsers($role)
{
  return $this->db->select('*')
  ->from('users')
  ->where('role',$role)
  ->where('active','1')
  ->order_by('id','desc')
  ->get()
  ->result();
}


public function getUsersEnAttent()
{
  return $this->db->select('*')
  ->from('users')
  ->where('active','0')
  ->order_by('id','desc')
  ->get()
  ->result();
}


public function getEtudiant($id)
{
  return $this->db->select('*')
  ->from('users')
  ->where('id',$id)
  ->get()
  ->result();
}

public function getEtudiantByNiveau($niveau)
{
  return $this->db->select('*')
  ->from('users')
  ->where('niveau',$niveau)
  ->get()
  ->result();
}

public function AddEtudiant($data=array())
{
  $this->db->insert('users',$data);
  return $this->db->insert_id();
}

public function deleteEtudiant($id)
{
  $this->db->where('id',$id)->delete('users');
}
public function updateEtudiant($id,$data)
{
  $this->db->where('id',$id)->update('users',$data);
}



}


?>