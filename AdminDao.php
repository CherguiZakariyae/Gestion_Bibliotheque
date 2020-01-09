<?php
include_once("Admin.php");
class PDOAdminDao
{
	private $database;
	public function __construct($database)
	{
		$this->database=$database;
	}
	public function addAdmin($admin)
	{
		$this->database->execc("insert into personne values(0,'".$admin->getNom()."','".$admin->getPrenom()."',
			'".$admin->getDate_naissance()."','".$admin->getAdresse()."','".$admin->getTelephone()."',
			'".$admin->getEmail()."','".$admin->getCin()."','".$admin->getMatricule()."','".$admin->getImage()."',
			'".$admin->getLogin()."','".$admin->getPassword()."','Admin')");
		
		
	}
	public function editAdmin($admin)
	{
		$this->database->execc("update personne set nom='".$admin->getNom()."',prenom='".$admin->getPrenom()."',
            date_naissance='".$admin->getDate_naissance()."',adresse='".$admin->getAdresse()."',
            telephone='".$admin->getTelephone()."',email='".$admin->getEmail()."',cin='".$admin->getCin()."',
            matricule='".$admin->getMatricule()."',image='".$admin->getImage()."',login='".$admin->getLogin()."',
            password='".$admin->getPassword()."',fonction='".$admin->getFonction()."'. where id_personne='".$admin->getId_personne()."'");
	}
	public function deleteAdmin($id)
	{
		$this->database->execc("delete from personne where id_personne='$id'");
	}
	public function chercherAdmin($id)
	{
		$rs=$this->database->select("select * from personne where id_personne='$id'");
		if($row=$rs->fetch())
		{
			return new Admin($row['id_personne'],$row['nom'],$row['prenom'],$row['date_naissance'],$row['adresse'],$row['telephone'],$row['email'],$row['cin'],$row['login'],$row['password']);
		}
		return null;
	}
	public function listerAdmin()
	{
		$tab=array();
		$rs=$this->database->select("select * from personne where fonction='Admin'");
		while($row=$rs->fetch())
		{
			$tab[]=new Admin($row['id_personne'],$row['nom'],$row['prenom'],$row['date_naissance'],$row['adresse'],$row['telephone'],$row['email'],$row['cin'],$row['login'],$row['password']);
		}
		return $tab;
	}
	public function authentificationAdmin($login,$password)
	{
		$rs=$this->database->select("select * from personne where login='$login' and password='$password'");
		if($row=$rs->fetch())
		{
			return new Admin($row['id_personne'],$row['nom'],$row['prenom'],$row['date_naissance'],$row['adresse'],$row['telephone'],$row['email'],$row['cin'],$row['login'],$row['password']);
		}
		return null;
	}
}
?>