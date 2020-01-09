<?php
include_once("Personne.php");
class PDOPersonneDao
{
	private $database;
	public function __construct($database)
	{
		$this->database=$database;
	}
	/*public function addPersonne($personne)
	{
		$this->database->execc("insert into personne values(0,'".$personne->getNom()."','".$personne->getPrenom()."',
			'".$personne->getDate_naissance()."','".$personne->getAdresse()."','".$personne->getTelephone()."',
			'".$personne->getEmail()."','".$personne->getCin()."','".$personne->getMatricule()."','".$personne->getImage()."',
			'".$personne->getLogin()."','".$personne->getPassword()."','".$personne->getFonction()."')");
		
	}
	public function editPersonne($personne)
	{
		$this->database->execc("update personne set nom='".$personne->getNom()."',prenom='".$personne->getPrenom()."',
            date_naissance='".$personne->getDate_naissance()."',adresse='".$personne->getAdresse()."',
            telephone='".$personne->getTelephone()."',email='".$personne->getEmail()."',cin='".$personne->getCin()."',
            matricule='".$personne->getMatricule()."',image='".$personne->getImage()."',login='".$personne->getLogin()."',
            password='".$personne->getPassword()."',fonction='".$personne->getFonction()."' where id_personne='".$personne->getId_personne()."'");
	}
	public function deletePersonne($id)
	{
		$this->database->execc("delete from personne where id_personne='$id'");
		//$this->database->execc("delete from parametre where id_personne='$id'");
	}
	public function chercherPersonne($id)
	{
		$rs=$this->database->select("select * from personne where id_personne='$id'");
		if($row=$rs->fetch())
		{
			return new Personne($row['id_personne'],$row['nom'],$row['prenom'],$row['date_naissance'],$row['adresse'],$row['telephone'],$row['email'],$row['cin'],$row['matricule'],$row['image'],$row['login'],$row['password'],$row['fonction']);
		}
		return null;
	}
	public function getAllPersonne()
	{
		$tab=array();
		$rs=$this->database->select("select * from personne");
		while($row=$rs->fetch())
		{
			$tab[]=new Personne($row['id_personne'],$row['nom'],$row['prenom'],$row['date_naissance'],$row['adresse'],$row['telephone'],$row['email'],$row['cin'],$row['matricule'],$row['image'],$row['login'],$row['password'],$row['fonction']);
		}
		return $tab;
	}*/
	
}
?>